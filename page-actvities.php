<?php

/*
Template Name: Activities page
*/

get_header(); ?>

  </head>

  <body>
</div> <!-- close rob from header -->
<div  class="container" role="document">

   <div class="row"> 
    <div class="large-9 columns grid-card-container" id="content" role="main" >
     <section class="" id="Activities-and-Services" >
      <div class="">
        <h2> Activities and Services </h2> 
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Welcome & services Section intro')) : ?>
                      <!-- do defualt stuff if widget empty -->
                      <?php endif; ?>
       </div>
      </section>

      <section class="row" id="outings-section"  >  
         <div class="columns large-12">
         <h3>Forthcoming outings &#38; Special Events</h3>
            <?php   set_query_var( $my_selected_category, 'outing-event,special-event' ); ?>
            <ul class="activities-grid medium-block-grid-3">
              
               <?php get_template_part('outings-grid-part');              ?>
            </ul>

           </div> 
       </section>
      <hr>
      
       <section class="row"  id="services-section" >
          <div class="columns large-12">
            <h3> Services and support activities</h3>
            <?php set_query_var( $my_selected_category, 'services-and-support ,weekly-activity' ) ?>
            <ul class="activities-grid medium-block-grid-3">
                <?php get_template_part('activities-support-grid-part'); ?>
            </ul>
          </div>
       </section>
     

    </div> <!-- main -->
    <?php get_sidebar(); ?>
   </div> <!-- row  -->


    
   </div> <!-- container -->
 


<?php get_footer(); ?>