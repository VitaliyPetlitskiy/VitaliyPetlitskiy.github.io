<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Bolgarapart</title>

	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightbox.css">
	<link href="<?php bloginfo('template_directory') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="<?php bloginfo('template_directory') ?>/image/png" href="icon.png" />
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="<?php bloginfo('template_directory') ?>/http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="zerogrid">
		<div class="wrap-header">
			<img src="<?php bloginfo('template_directory') ?>/images/sea1.jpg"/></a></div>	
			<div id='cssmenu' class="align-center">
				
				<?php 
				wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '', 
							'container'       => 'div', 
							'container_class' => 'align-center', 
							'container_id'    => 'cssmenu',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) );
				?>

				<!-- <ul>
				   <li class="active"><a href='index.html'><span>Главная</span></a></li>
				   <li class="last"><a href='archive.html'><span>Про нас</span></a></li>
				   <li class="last"><a href='transfer.html'><span>Трансфер</span></a></li>
				   <li class="last"><a href='contact.html'><span>Контакт</span></a></li>
				</ul> -->
			</div>
		</div>
		<div style="margin-bottom: 30px;" >
			<img src="<?php bloginfo('template_directory') ?>/images/" alt="">
		</div>
	</div>
</header>
