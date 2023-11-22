
<?php get_header(); ?>


<!-- main -->

<main class="l-main">

    <section class="p-img-archive-top">
        <h2 class="p-title__archive-top">Menu:</h2><!-- /.p-title_header-top -->
        <p class="p-title-archive__under-title"><?php single_cat_title(); ?></p><!-- /.p-title-archive_under-title -->
    </section>
    
    <article class="p-inner-article__archive">
        <h2 class="c-title__archive-article">小見出しが入ります</h2><!-- /.c-title__archive-article -->
        <p class="p-text__archive-article">
            
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。
        </p><!-- /.p-text__archive-article -->
    </article><!-- /.p-main-article__archive -->


    <section class="p-inner-media-archive">
<!-- media 1 ------------------------------------------->

    <?php if(have_posts()):while(have_posts()):the_post(); ?>

    <article class="p-media p-media-archive p-media-archive__1">
        
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>
        <?php else: ?>
            <img src="<?php echo esc_url(get_theme_file_uri('img/hamburger-card.jpg')); ?>" alt="" class="wp-post-image">
        <?php endif; ?>
        <!-- <div class="p-img-archive-media p-img-archive-media__1"></div>/.p-img-archive-media -->
        <div class="p-container-media-archive">
            <h3 class="p-title-archive-media p-title-archive-media__1">
                <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
            </h3><!-- /.title-archive-media -->
                
            
            <?php the_excerpt(); ?>

            <a class="p-btn-archive-media-detail" href="<?php echo esc_url(get_permalink()); ?>">詳しく見る</a>
        </div><!-- /.p-container-media-archive -->
    </article><!-- /.p-media-archive -->

    <?php endwhile; else: ?>
        <p>記事はありません。</p>
    <?php endif; ?>

<!-- media 2 ------------------------------------------>
    <!-- <article class="p-media p-media-archive p-media-archive__2">
        <div class="p-img-archive-media p-img-archive-media__2"></div>
        <div class="p-container-media-archive">
            <h3 class="p-title-archive-media p-title-archive-media__2">ダブルチーズバーガー</h3>
            <h4 class="p-subtitle-archive-media p-subtitle-archive-media__1">
                小見出しが入ります
            </h4>
            <p class="p-text-archive-media p-text-archive-media__2">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <button class="p-btn-archive-media-detail">詳しく見る</button>
        </div>
    </article> -->

    <!-- media 3 ----------------------------------------->
    <!-- <article class="p-media p-media-archive p-media-archive__3">
        <div class="p-img-archive-media p-img-archive-media__3"></div>
        <div class="p-container-media-archive">
            <h3 class="p-title-archive-media p-title-archive-media__3">スペシャルチーズバーガー</h3>
            <h4 class="p-subtitle-archive-media p-subtitle-archive-media__3">
                小見出しが入ります
            </h4>
            <p class="p-text-archive-media p-text-archive-media__3">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <button class="p-btn-archive-media-detail">詳しく見る</button>
        </div>
    </article> -->


    <!--next back btn  ---------------------------------->
    <nav class="p-inner-archive-mobile-pagenation">

        <a href="#" class="p-btn-archive__back" >前へ</a><!-- /.p-btn-archive__next -->
        <a href="#" class="p-btn-archive__next">次へ</a><!-- /.p-btn-archive__back -->
    </nav>
<!-- aタグのリンク先を指定する -->

<?php wp_pagenavi(); ?>

</section><!-- /.p-inner-media-archive -->


</main>

<!-- aside-------------------------------------------------------------------------------- -->

<?php get_sidebar(); ?>


<!-- footer-------------------------------------------------------------------------------- -->

<?php get_footer(); ?>