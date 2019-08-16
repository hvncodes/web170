<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--,chrome=1-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        
        <?php wp_enqueue_script('jquery') ?>
        <!-- start wp_head -->
        <?php wp_head(); ?>
        <!-- end wp_head -->
        <script type="application/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

        <!-- header -->
        <header class="header clear">
        
            <!-- logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat-logo.png" alt="Cat Logo" class="logo-img">
                </a>
            </div>
            <!-- /logo -->

            <!-- nav -->
            <nav class="nav">
                <button class="nav-button">Toggle Navigation</button>
                <?php html5blank_nav(); ?>
            </nav>
            <!-- /nav -->
        
        </header>
        <!-- /header -->
        
        <!-- wrapper -->
        <div class="wrapper">