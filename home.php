<?php

/*
Template Name: News  page
*/

get_header(); ?>

  </head>




  <body>
</div> <!-- close rob from header -->
<div  class="container" role="document">

   <div class="row"> 
    <div class="large-9 columns news-container" id="content" role="main">
     <section class="row activities-grid"  >  
        <h2> News </h2>

 
<!-- Row for main content area -->
  
 
      <?php /* Start loop */ ?>
              
      <?php
        // set the "paged" parameter (use 'page' if the query is on a static front page)
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // the query
        $the_query = new WP_Query(  array(
          'category_name' => 'news',
          'paged'=> $paged,
          'posts_per_page' => 6

          )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>

        
        
        <?php
        // the loop
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
               <div class="panel news-section">  
                 <h3> <a href= "<?php echo get_permalink(); ?>"> <?php echo the_title(); ?> </a></h3>
                 <div class="news-posted-date"> Posted on <?php the_time('l, F jS, Y') ?> </div>
                <div class="row">
                             
                <?php /* If the post has a thumbnail split the row 3/8 for the thumb, and 5/8 for the text, else text takes 8/8 */ ?>
                <?php 
                  if ( has_post_thumbnail() ) {
                    echo "<div class='large-4 columns'>";
                      the_post_thumbnail('medium');
                    echo "</div><div class='large-8 columns'>";
                  }
                  else echo "<div class='large-12 columns'>"; 
                ?>              
                
                  <i>  <?php the_excerpt(); ?> </i>
                </div>
               </div>
               <div class="mycard-button text-right"><a href="  <?php echo get_permalink(); ?>" class="button small">Read more ...</a></div> 
              </div> <!-- panel -->
            <?php endwhile; ?>
        
       


        <?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
          <nav id="post-nav">
          <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
          <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
          </nav>
        <?php } ?>


        <?php 
        // clean up after the query and pagination
        wp_reset_postdata(); 
        ?>

        <?php else:  ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


      </section>

    </div>
  

    <?php get_sidebar(); ?>
  </div> <!-- row -->
    
<?php get_footer(); ?>