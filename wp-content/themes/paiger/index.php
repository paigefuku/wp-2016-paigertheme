<?php get_header(); ?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="lasagna"><!--BEGIN lasagna div-->
    <h2><?php the_title();?></h2>
         <?php the_content('');?>
        
     
<?php endwhile; else : ?>
 	<p><?php _e( 'Sorry human, no such thing exists.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
       
 <?php wp_footer(); ?>
      
