<?php get_header(); ?>

<div id="content"><!--BEGIN content div, WP core-->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="lasagna"><!--BEGIN lasagna div-->
<?php the_content('');?>
 <h2><?php the_title();?></h2>
         <article>
        <div id="caesarSalad"><!--BEGIN caesarSalad div-->
        <p>Proinde vos postulo; endive gumbo gourd. Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale. Greens corn soko, and Parsley shallot.</p>
        <h3>Endive Cauliflower Sea Lettuce Kohlrabi Amaranth </h3>
       <blockquote>  
         <p> Kohlrabi amaranth. Pumpkin onion chickpea a Corn amaranth salsify the gram corn! Swiss chard.</p>
            </blockquote>
        <p>Fennel kombu maize bamboo shoot <a href="#">green beans</a> swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander Water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean <a href="#">chickweed potato</a> bell pepper artichoke. </p> 
        <p>Soko radicchio bunya nuts gram dulse silver beet parsnip napa cabbage lotus root sea lettuce brussels sprout cabbage. Catsear cauliflower garbanzo yarrow <a href="#">salsify chicory</a> garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut. Sea lettuce gumbo grape <a href="#">kale kombu cauliflower</a>.
    </p>
       
     <p>Pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Nuts nori azuki bean chickweed potato bell pepper artichoke. </p> 
            
     <h3>Nuts nori azuki bean chickweed </h3>       
        <p>Endive cauliflower sea lettuce kohlrabi amaranth water. Spinach avocado daikon napa cabbage asparagus winter. Purslane kale. Celery potato scallion desert raisin horseradish</p>
        <ol>
            <li>Collard greens</li>
            <li>Radicchio</li>
            <li>Kale </li>
            <li>Grape kombu </li>
            <li>Garlic gram </li>
            <li>Potato bell pepper</li>
        </ol>
        <p>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.</p>
<figure><img src="<?php bloginfo('template_directory'); ?>images/plants_48.jpg" alt="flowers"><figcaption><p>Carrot watercress. 1998 maize bamboo shoot, lettuce tomato.</p></figcaption></figure>
<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts. Fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
        </div><!--END caesarSalad div-->
        
   </article>
     
   </div><!--END lasagna div-->
  
  
    
    <div id="broccoli"><!--BEGIN broccoli div-->
        <section>
        <h4>Corn amaranth salsify bunya nuts nori </h4>
        
            <p>Lotus root water spinach. Carrot watercress. Azuki bean chickweed potato bell pepper artichoke. </p>   
        <ul>
            <li>Bamboo shoot green bean </li>
            <li>Spinach carrot</li>
            <li>Beetroot</li>
            <li>Coriander</li>

        </ul>
        
                <h4>Melon Radish Asparagus </h4>
        <p>Pumpkin onion chickpea gram corn pea. Brussels sprout coriander</p>
            <p>Lotus root water spinach. Carrot watercress. Azuki bean chickweed potato bell pepper artichoke. </p>   
        <ul>
            <li>Water chestnut </li>
            <li><a href="#">Azuki</a></li>
            <li>Chickpea</li>
            <li><a href="#">Nuts nori</a></li>

        </ul>
    </section>
    </div><!--END broccoli div-->
    
  
<?php endwhile; else : ?>
 	<p><?php _e( 'Sorry human, no such thing exists.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
 </div><!--END content div, WP core-->     
 <?php wp_footer(); ?>
      
