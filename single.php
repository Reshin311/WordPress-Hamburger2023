

<!-- header-------------------------------------------------------------------------------- -->

<?php get_header(); ?>

<!-- Main-------------------------------------------------------------------------------- -->
<main class="l-main">
<!-- <h2 class="p-single-visual__text c-title"><?php echo esc_html( get_the_title() ); ?></h2> -->



<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <?php the_content(); ?>
                <?php $args = array (
                    'before' => '<div class="page-split">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    );
                    wp_link_pages( $args );
                    ?>
                </div>
            <?php endwhile;
        else :
        ?><p>表示する記事がありません</p><?php
        endif; ?>


































<!-- <section class="p-img__single-top">
        <h1 class="c-title p-title__top p-title__single-top">h1 チーズバーガー</h1>
    </section>

    <article class="p-container-single-article">
        <h2 class="p-title__single-article">見出しh2</h2>
        <p class="p-text__single-article">
            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
        </p>
    </article>
    
    <section class="p-heading-list">
        <h3 class="p-title__single-heading-list">見出しh3</h3>
        <h4 class="p-heading__single-heading-list">見出しh4</h4>
        <h5 class="p-heading__single-heading-list">見出しh5</h5>
        <h6 class="p-heading__single-heading-list">見出しh6</h6>
    </section>


    <div class="p-container__block-quote">
        <p class="p-text__single-block-quote">
            Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
        </p>
        <p class="p-block-quote__single">出典元 : <a href="">◯◯◯◯◯◯◯◯◯◯◯◯</a></p>
    </div>



        <div class="p-wrapper__single-img-top">
            <img class="p-img__single-media-top" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        </div>

    <article class="p-wrap__single-media">
        <div class="p-media__single p-media-single-1">
            <img class="p-img__single-media p-img__single-media-1" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
            <p class="p-text__single-media p-text__single-media-1">
                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
            </p>
        </div>

        <div class="p-media__single p-media-single-2 flex-reverse">
            <img class="p-img__single-media p-img__single-media-2" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
            <p class="p-text__single-media p-text__single-media-2">
                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
            </p>
        </div>
    </article>
    <div class="p-wrapper__single-media-under">
        <img class="p-img__single-media-under" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
    </div>
    <section class="p-img-section__single">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-1" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-2" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-3" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-4" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-5" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-6" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-7" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-8" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">
        <img  alt="" class="p-img__single-gallery p-img__single-gallery-9" src="<?php echo esc_url(get_theme_file_uri('img/cooked-foods-750073-2.png')); ?>">

    </section>
    
    <div class="p-list__single">
        <div class="p-wrapper__list-upper">
        <ol class="p-list-ol__single">
            <li>リストリストリスト</li>
            <li>リストリストリスト
                <ol class="p-child-ol-list__single">
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ol>
            </li>
        </ol>
        <ol class="p-list-ol__single">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
        </ol>
        </div>
        
        <ul class="p-list-ul__single">
            <li>リストリストリスト</li>
            <li>リストリストリスト
                <ul class="p-child-ul-list__single">
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ul>
            </li>
        </ul>
        <ul class="p-list-ul__single">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
        </ul>
    </div>

    <div class="p-container__tag-list-single">
        <ul>
            <li>&lt;html&gt;
                <ul class="p-child-list__tag">
                    <li>&lt;head&gt;</li>
                    <li>&lt;/head&gt;</li>
                    <li>&lt;body&gt;</li>
                    <li>&lt;/body&gt;</li>
                </ul>
            </li>
            <li>&lt;/html&gt;</li>
        </ul>
    </div>

    <div class="p-container__single-table">
        <table class="p-table__single">
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td><td>テーブル</td>
            </tr>
        </table>
    </div>

    <button class="c-button p-button__single-under-main">ボタン</button>
    
    <div class="p-wrapper-text__single-under-btn">
        <p class="p-text__single-under-btn">boldboldboldboldboldboldbold</p>
    </div> -->
</main>


<!-- aside-------------------------------------------------------------------------------- -->

<?php get_sidebar(); ?>


<!-- footer-------------------------------------------------------------------------------- -->

<?php get_footer(); ?>