<?php

function custom_theme_support(){
    //吐き出されるコードをデフォルトのXHTMLからHTML5に
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    //アイキャッチ有効化
    add_theme_support('post-thumbnails');
    //管理画面からタイトルタグ登録可能に
    add_theme_support('title-tag');
    //カスタムメニューの有効化
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav'=>esc_html__('footer navigation', 'reshinhumburger'),
        'category_nav'=>esc_html__('category navigation', 'reshinhumburger'),
    ));
    //エディタスタイルの有効化
    add_theme_support('editor-styles');
    add_editor_style();


}
//必要な機能を設定しafter_setup_themeのアクションフックにて実行
add_action('after_setup_theme','custom_theme_support');

//WPのギャラリーCSSを無効化
add_filter(
    "use_default_gallery_style",
    "disable_default_gallery_style"
);

function disable_default_gallery_style() {
    return false;
}



function add_files() {
    //リセットCSS
    wp_enqueue_style('reset-style','https://unpkg.com/ress/dist/ress.min.css');

    //google fonts
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Philosopher');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@500;600;700&display=swap');
    //font-awesome
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.15.3/css/all.css');
    //
    wp_enqueue_style('preconnect','https://fonts.gstatic.com');
    wp_enqueue_style('preconnect','https://fonts.googleapis.com');

    //メインのcssファイル
    wp_enqueue_style('main-style', get_stylesheet_uri());
    //JavaScriptファイル
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.5.0.min.js',",",true);
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/script.js', array(),'',true);

}
//add_files()を呼び出す
add_action('wp_enqueue_scripts','add_files');



function theme_setup() {
    //ここに必要な機能を追加する

    // titleタグ
    add_theme_support('title-tag');

    // アイキャッチ画像
    add_theme_support('post-thumbnails');
    
    //メニュー
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー'
        )
    );
    //全幅・幅広を有効化
    add_theme_support('align-wide');
    
    
    
}





add_action('after_setup_theme', 'theme_setup');

//ウィジェットの有効化
function wpbeg_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'カテゴリーウィジェット',
            'id'            => 'category_widget',
            'description'   => 'カテゴリー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'wpbeg_widgets_init' );


//本体ギャラリーCSS停止
add_filter( 'use_default_gallery_style', '__return_false' );

function SearchFilter($query) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', 'post' );
    }
    }
    add_action( 'pre_get_posts','SearchFilter' );


// 検索対象にカテゴリを含める
//-----------------------------------------------------
function custom_search($search, $wp_query) {
    global $wpdb;
 
    //検索ページ以外
    if (!$wp_query->is_search)
    return $search;
 
    if (!isset($wp_query->query_vars))
    return $search;
 
    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    if ( count($search_words) > 0 ) {
        $search = '';
        foreach ( $search_words as $word ) {
            if ( !empty($word) ) {
                $search_word = $wpdb-> _escape("%{$word}%");
                $search .= " AND (
                        {$wpdb->posts}.post_title LIKE '{$search_word}'
                        OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            /*タグ名・カテゴリ名を検索対象に含める記述 start*/
                        OR {$wpdb->posts}.ID IN (
                            SELECT distinct r.object_id
                            FROM {$wpdb->term_relationships} AS r
                            INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                            INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                            WHERE t.name LIKE '{$search_word}'
                        OR t.slug LIKE '{$search_word}'
                        OR tt.description LIKE '{$search_word}'
                        )
          /*タグ名・カテゴリ名を検索対象に含める記述 end*/
                ) ";
            }
        }
    }
 
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);