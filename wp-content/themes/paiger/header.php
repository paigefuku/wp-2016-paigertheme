<?php
/**<!--html template for Wordpress Main Page | WEB 170 | SPRING 2016-->**/
?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
	
        <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle WA Photographer, Illustrator, Visual Strategist</title>
     
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.js"></script>  
<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>      
<style>
    

        </style>      
    <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        
  <header><a href="home.html">   
<div id="logoHeader"><!--BEGIN logoHeaderdiv-->
       <img src="<?php bloginfo('template_directory'); ?>/images/papers.png" id="flyingpapers" alt="banner-top"> 
        <div id="wordsHeader"><!--BEGIN wordsHeader div-->
       <h1>Paige Fukuhara</h1>
        <h2>Creative Services</h2>
        </div>   <!--END wordsHeader div-->
    </div><!--End logoHeaderdiv-->
        </a>
    <div id="menu"><!--BEGIN menu div-->
        <ul id="navmenu">
        <li>About
            <ul class="subnavmenu">
            <li class="subnavmenuLI"><a href="main.html">Bio</a></li>
            <li class="subnavmenuLI"><a href="main.html">Process &amp; Methods</a></li>
            <li class="subnavmenuLI"><a href="main.html">Friends &amp; Colleages</a></li>
             <li class="subnavmenuLI"><a href="main.html">CV // RESUME</a></li>
            </ul>
            
            </li>
        <li>Services   
         <ul class="subnavmenu">
            <li class="subnavmenuLI"><a href="main.html">Web Services</a></li>
            <li class="subnavmenuLI"><a href="#main.html">Illustration</a></li>
            <li class="subnavmenuLI"><a href="main.html">Photography</a></li>
             <li class="subnavmenuLI"><a href="main.html">Paper Crafts</a></li>
            </ul>
            </li> 
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
        </ul>    
    </div><!--END menu div-->
    </header>
 