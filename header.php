<!DOCTYPE html>
<!-- sets the language: -->
<html <?php language_attributes(); ?>>
    <head>
    	<!-- sets the character set: -->
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico?" type="image/x-icon">
        <!-- sets pingbacks address for blogging: -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">

		<!-- sets full url to the theme folder: -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css"> 
        <!-- sets url to the main Wordpress style.css file: -->
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

            <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
            <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fontawesome-all.min.css">
            <link href="<?php bloginfo( 'template_url' ); ?>/css/styles.css" rel="stylesheet">

		<!-- sets site title and page title: -->
        <title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>

        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- leaves a placeholder for Wordpress and plugins: -->
        <?php wp_head(); ?>
        
    </head>


    <body <?php body_class(); ?>>
    <header>
        <!--     CONTACT/LANGUAGE OPTION  -->
        <div class="contact-info dark-grey-theme white-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <p class="info">
                            <i class="fas fa-check-circle"></i>
                            <!--f058 -->
                            <a href="https://app.oncallhealth.ca/booking/css/" class="nav-link-sub" class="light-blue-text">Cyber Services Avaible Now!</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p class="">
                            <i class="fas fa-phone"></i>
                            <a href="tel:613-932-4610" class="nav-link-sub"> (613) 932-4610</a> / <a href="tel:+1-855-647-8483" class="nav-link-sub">1-855-647-8483</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <p class="">EN / FR AA</p>
                    </div>
                </div>
            </div>
        </div>
<!-- FIXED ESCAPE BUTTON -->
        <button class="btn light-blue-theme escape">
                <a href="https://www.google.com">Escape</a>
        </button>






    <!-- leaves a placeholder for Wordpress body classes: -->