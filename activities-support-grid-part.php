<?php
      
          

    $posts = get_posts(array(
              /* 'event_start_after'=>'today', */
              'category_name'  =>get_query_var( $my_selected_category, '' ),
              'post_type' => 'post',
              'posts_per_page'   => 12
    ));

  
/*
if($posts):
        foreach ($posts as $post):
              //Check if all day, set format accordingly
                    
          echo '<div class="large-4 columns"><div class="panel" data-equalizer-watch="">';
            echo '<a href="' . get_permalink($post->ID) . '"><h4>' . get_the_title($post->ID). '</h4></a>';
            
            $item_occurance =  get_post_meta($post->ID,'Occurance',true);
            if ($item_occurance!==""):
              echo '<div class="mycard-occurance">' .  get_post_meta($post->ID,'Occurance',true) . '</div>';
            endif;
            echo '<div class="mycard-image">' .  get_the_post_thumbnail($post->ID) . '</div>';
            echo '<div class="mycard-button"><a href="' . get_permalink($post->ID) . '" class="button small">Read more ...</a></div> ';
          echo '</div></div>';        
        endforeach;
      endif;
*/

      if($posts):
        foreach ($posts as $post):
              //Check if all day, set format accordingly
                    
          echo '<li> <div class="panel">';
            echo '<a href="' . get_permalink($post->ID) . '"><h4>' . get_the_title($post->ID). '</h4></a>';
            
            $item_occurance =  get_post_meta($post->ID,'Occurance',true);
            if ($item_occurance!==""):
              echo '<div class="mycard-occurance">' .  get_post_meta($post->ID,'Occurance',true) . '</div>';
            endif;
            echo '<div class="mycard-image">' .  get_the_post_thumbnail($post->ID) . '</div>';
            echo '<div class="mycard-button text-right"><a href="' . get_permalink($post->ID) . '" class="button small">Read more ...</a></div> ';
          echo '</div></li>';        
        endforeach;
      endif;


?>