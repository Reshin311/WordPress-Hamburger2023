

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
    <div class="p-header-wrapper">
        <button class="p-button-menu">Menu</button><!-- /.p-menu-button -->
        
            <h1 class="p-title-header-main"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1><!-- /.p-main-title -->

            <?php get_search_form() ?>
    </div><!-- /.p-header-wrapper -->
</header><!-- /.l-header -->