<?php
/**<!--html template for Wordpress Main Page | WEB 170 | SPRING 2016-->**/
?>
<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle WA Photographer, Illustrator, Visual Strategist</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.js"></script>  
<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>           
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<header><a href="http://paigefukuhara.com" alt="Paige Fukuhara | Home">   
<div id="header"><!--BEGIN header div, WP core-->
<div id="logoHeader"><!--BEGIN logoHeaderdiv-->
       <img src="<?php bloginfo('template_directory'); ?>/images/papers.png" id="flyingpapers" alt="banner-top"> 
        <div id="wordsHeader"><!--BEGIN wordsHeader div-->
       <h1>Paige Fukuhara</h1>
        <h2>Creative Services</h2>
        </div>   <!--END wordsHeader div-->
    </div><!--End logoHeaderdiv-->
    </div><!--END header div, WP core-->

        </a>

<div id="navigation"><!--BEGIN navigation div, WP core-->
    <div id="navmenu"><!--BEGIN menu div-->
        <ul>
        <li class="nav-menu">About
            <ul class="primary-navigation, nav-menu">
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Bio</a></li>
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Process &amp; Methods</a></li>
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Friends &amp; Colleages</a></li>
             <li class="nav-menu"><a href="main.html" class="primary-navigation">CV // RESUME</a></li>
            </ul>
      </li>
     
        <li class="nav-menu">Services   
         <ul class="nav-menu">
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Web Services</a></li>
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Illustration</a></li>
            <li class="nav-menu"><a href="main.html" class="primary-navigation">Photography</a></li>
             <li class="nav-menu"><a href="main.html" class="primary-navigation">Paper Crafts</a></li>
            </ul>
         </li> 
        <li class="nav-menu"><a href="#">Portfolio</a></li>
        <li class="nav-menu"><a href="#">Contact</a></li>
        <li class="nav-menu"><a href="#">Blog</a></li>
        </ul>    
    </div><!--END navigation div, WP core-->
   </div> <!--END navmenu, WP corediv-->
    </header>
 