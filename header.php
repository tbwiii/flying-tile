<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo( 'name' ) ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Begin wp_head -->
		<?php wp_head(); ?>
		<!-- End wp_head -->
 	</head>
    <body <?php body_class(); ?>>
    	<header>
			<a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

            <button id="toggle-nav" data-toggle-id="master-nav">Toggle Navigation</button>
            <nav id="master-nav" class="master-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </nav>
    	</header>