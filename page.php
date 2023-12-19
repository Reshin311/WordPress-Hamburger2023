

<?php get_header(); ?>

<!-- Main-------------------------------------------------------------------------------- -->

<main class="l-main">
<h1 class="p-title__single-top c-title"><?php echo esc_html( get_the_title() ); ?></h1>



<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
            <div class="wrapper-single-content">
            <?php the_post_thumbnail('full'); ?>


                <?php the_content(); ?>
            </div><!-- /.wrapper-single-content -->    
                
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


</main>


<!-- aside -------------------------------------------->

<?php get_sidebar(); ?>
<!-- footer-------------------------------------------------------------------------------- -->

<?php get_footer(); ?>