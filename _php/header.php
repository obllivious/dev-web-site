<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php bloginfo('name'); ?></title>

<link href="<?php bloginfo ('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/themes/default/default.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/themes/pascal/pascal.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/themes/orman/orman.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/nivo-slider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/style.css" type="text/css" media="screen"/>

</head>

<body>
        <div id="logo1"> <a href="http://bomviverrioquente.com.br/wordpress/inicio/"><img src="<?php bloginfo('template_url'); ?>/imagens/logo_bomviveratual.jpg" width="170" height="49" /></a>
        </div>
       
		<div id="container-logo">
        <div id="logo">
        </div>
        </div>
        <div id="container-menu">
  		<div id="menu">
    	<?php wp_nav_menu(); ?>
  		</div>
		</div>
		
        
        <div id="banner">
        <div id="banner-img">
        <img src="<?php bloginfo ('template_url'); ?>/imagens/Banner/Finalizados/banner.gif" width="1349" height="486" />
        </div>
        </div>
        
        <!--
        
        <div id="wrapper">
        <div class="slider-wrapper theme-default">
        <div class="ribbon"></div>
        
<div id="slider" class="nivoSlider"> 

<img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner1.jpg" alt="" />
<img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner3.jpg" alt="" />

<img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner4.jpg" alt="" />
<a href="http://www.hotpark.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner5.jpg" alt="" /></a>

<img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner6.jpg" alt="" />
<img src="<?php bloginfo('template_url'); ?>/nivo-slider/images/banner7.jpg" alt="" /> 
                     
        </div>
    	</div>
        </div> 
        
        -->
        
        <!-- FIM DA DIV #BANNER -->
        
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/nivo-slider/scripts/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/nivo-slider/jquery.nivo.slider.pack.js"></script>
    	<script type="text/javascript">
    	$(window).load(function() {
        $('#slider').nivoSlider();
    	});
    	</script>