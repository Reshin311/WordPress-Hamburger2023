

<!DOCTYPE html>
<!-- <html lang="ja"> -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>RaiseTech-hamburger</title> -->
    
<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<!-- header-------------------------------------------------------------------------------- -->

<header class="l-header"> 
    <article class="p-header-wrapper">
        <button class="p-button-menu">Menu</button><!-- /.p-menu-button -->
        
            <h1 class="p-title-header-main"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1><!-- /.p-main-title -->
            <!-- <h1 class="p-title-header-main">Hamburger</h1>/.p-main-title -->
            
            <!-- <div class="p-header-search">
                <input class="c-input p-input__header-search" type="text" name="search" placeholder="">
                <input class="c-button p-btn__header-search" type="submit" name="submit" value="検索">
                <input type="hidden" name="sitesearch" value="">
            </div> -->

            <?php get_search_form() ?>

        
    </article><!-- /.p-header-wrapper -->
</header><!-- /.l-header -->