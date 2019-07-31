<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



    <header id="header">
        <div id="branding">
            <div id="site-title">

            <?php /* if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } */ ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="http://flickeringflame.org/web170/company/wp-content/uploads/logo.png" alt="logo" /></a>
            <?php /* echo esc_html( get_bloginfo( 'name' ) ); */?><!--removed between above <a> tag with rel home-->
            <?php /* if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } */ ?>


            </div>
            <!--<div id="site-description"><php bloginfo( 'description' ); ?></div>-->
        </div>
        <nav id="menu">
        <!--<div id="search"><php get_search_form(); ?></div>-->
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>
    <div id="wrapper" class="hfeed">
    <div id="container">