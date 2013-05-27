<!DOCTYPE html>
<?php $options = get_option('dbandeja'); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
	<?php mts_meta(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<?php mts_head(); ?>
	<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body id ="blog" <?php body_class('main'); ?>>
	<header class="main-header">
		<div class="container">
			<div id="header">
				<ul class="menu full-menu">
                	<li class="cat-item cat-item-1 menuli1">
                		<a title="" href="">IR PARA A HOME DO SITE</a>
                	</li>
                	<li class="cat-item cat-item-1 menuli1">
                		<a title="" href="">CONTATO</a>
                	</li>
                </ul>
				<h1 id="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				</h1><!-- END #logo -->
	
                <?php dynamic_sidebar('Header Banner'); ?>				              
			</div><!--#header-->
		</div><!--.container-->
        <div class="secondary-navigation">
            <nav id="navigation" >
                    <ul class="menu">
                    	<li class="cat-item cat-item-1 menuli1">
                    		<a title="" href="">CONHEÇA O SITE</a>
                    	</li>
                    </ul>
            </nav>
        </div>
	</header>
	<!-- full banner -->
	<div id="full-banner">
		<div id="banner-content">
			<p class="banner-type">BLOG</p>
			<br>
			<br>
			<p class="banner-title">SOLUÇÕES EM BUFFET</p>
			<p class="banner-description">Os melhores lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
		</div>
		<div id="banner-overlay"></div>
		<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="" class="banner-image">
	</div>
	<div class="main-container">