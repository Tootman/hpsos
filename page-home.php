<?php



get_header(); ?>

<style>



</style>
  </head>

  <body>
    
   </div> <!-- close rob from header -->

<section class= "" id="home-banner-head" style = "100%">
<?php 
    echo do_shortcode("[metaslider id=246 percentwidth=100]"); 
?>
 
  <!--  <img src="<?php bloginfo( 'template_directory'); ?>/img/SOS-banner-draft.jpg" width="100%" alt="SOS home banner"></img> -->
  

</section>

<div  class="container" role="document">
  <div id="content" role="main">
   
       <section class="row" >
       
           
            <div class="large-6 columns panel  welcome-section">
               <!-- welcome message widget -->
               <h2>Welcome</h2>
                  <div class="row">
                    <div class="columns large-8">
                     <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Welcome Section')) : ?>
                      [ do default stuff if no widgets ]
                      <?php endif; ?>
                       <a href="index.php/contact" class="button">Join us</a>
                    </div>
                    <div class="columns large-4">
                      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Organiser Thumbnail')) : ?>
                          (Missing thumbnail of Organiser)
                      <?php endif; ?>
                    </div>
                  </div>
              
            </div>
             <div class="large-6 columns ">
              <div class="flex-video">
               <iframe width="560" height="315" max-width="560" src="https://www.youtube.com/embed/aKHuZiZ87Yo" frameborder="0" allowfullscreen></iframe>
             </div>
             </div>


          
        </section>

        <hr>

        <section class="row" id="announcements-section">  
          <div class="large-9 columns">
            <h2>Announcements</h2>
                
                 <?php set_query_var( $my_selected_category, 'featured' ) ?>

              <div class="activities-grid large-block-grid-3" >
                  <?php get_template_part('activities-support-grid-part'); ?>
              </div>

            </div>
            <div class="large-3 columns" >
             
              <a class="twitter-timeline" height="450" href="https://twitter.com/HamPetershamSOS" data-widget-id="724626189814521857">Tweets by @HamPetershamSOS</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          
        </section>
      
      </div> <!-- content / main -->
    </div> <!-- container -->

<?php get_footer(); ?>