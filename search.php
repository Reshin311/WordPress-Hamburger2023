
<?php get_header(); ?>


<!-- main -->

<main class="l-main">
    <section class="p-img-archive-top p-img-archive-search-top">
        <h2 class="p-title__archive-top p-title_arachive-search-top">Search:</h2><!-- /.p-title_header-top -->
        <small class="p-title-archive__under-title p-title-archive-search__under-title"><?php the_search_query(); ?></small><!-- /.p-title-archive_under-title -->
    </section>
    
    <article class="p-inner-article__archive p-inner-article__archive-search">
        <h2 class="c-title__archive-article c-title__archive-search__article">小見出しが入ります</h2><!-- /.c-title__archive-article -->
        <p class="p-text__archive-article p-text__archive-search-article">
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

<section class="p-inner-media-archive p-inner-media-archive-search">


<!-- media 1 ------------------------------------------->
<?php if(have_posts()):while(have_posts()):the_post(); ?>

    <article class="p-media p-media-archive p-media-archive__1">
        
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
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


<!-- media 3 ----------------------------------------->

<!-- media 4------------------------------------------ -->

<!-- media 5-------------------------------------------- -->


</section><!-- /.p-inner-media-archive -->

<!--next back btn  ---------------------------------->
<nav class="p-inner-archive-mobile-pagenation">

    <a href="#" class="p-btn-archive__back" >前へ</a><!-- /.p-btn-archive__next -->
    <a href="#" class="p-btn-archive__next">次へ</a><!-- /.p-btn-archive__back -->
</nav>


<?php wp_pagenavi(); ?>
<!-- 
<nav class="p-pager p-inner-archive-pagenation">
    <ul class="p-pager__inner">
        <li class="p-page p-pager__item">page 2/10</li>
        <li class="p-pager__item">
            <a href="" class="p-pager__double-left"><<
            </a>
        </li>
        <li class="p-pager__item"><span class="p-pager__link">1</span></li> 
        <li class="p-pager__item"><a class="p-pager__link p-pager__link-active">2</a></li>
        <li class="p-pager__item"><a class="p-pager__link">3</a></li>
        <li class="p-pager__item"><a class="p-pager__link">4</a></li>
        <li class="p-pager__item"><a class="p-pager__link">5</a></li>
        <li class="p-pager__item"><a class="p-pager__link">6</a></li>
        <li class="p-pager__item"><a class="p-pager__link">7</a></li>
        <li class="p-pager__item"><a class="p-pager__link">8</a></li>
        <li class="p-pager__item"><a class="p-pager__link">9</a></li>
        <li class="p-pager__item">
            <a href="" class="p-pager__double-right">>>
            </a>
        </li>
</nav> -->


</main>

<!-- aside-------------------------------------------------------------------------------- -->

<?php get_sidebar(); ?>


<!-- footer-------------------------------------------------------------------------------- -->

<?php get_footer(); ?>