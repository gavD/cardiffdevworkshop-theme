<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?> | Cardiff Dev Workshop</title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/bones/webfonts/stylesheet.css" />
        <?php wp_head(); ?>
        
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/Icons/apple-touch-icon-iphone.png" /> 
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/Icons/apple-touch-icon-ipad.png" /> 
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/Icons/apple-touch-icon-iphone4.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/Icons/apple-touch-icon-ipad3.png" />
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="container">
			
			<header class="header" role="banner">
                <div id="inner-header" class="wrap clearfix">
                    <img id="logoAboveNav" src="/wp-content/themes/bones/img/Logo/logo.png" alt="Cardiff Dev Workshop" width="145" height="105" />
					<nav role="navigation">
                        
						<?php bones_main_nav(); ?>
                        <img id="logo" src="/wp-content/themes/bones/img/Logo/logo.png" alt="Cardiff Dev Workshop" width="145" height="105" />
                        <?php bones_main_nav_rhs(); ?>
					</nav>
				</div> <!-- end #inner-header -->
			</header> <!-- end header -->
