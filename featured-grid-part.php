<?php
      
          

    $posts = get_posts(array(
              /* 'event_start_after'=>'today', */
              'category_name'  =>'featured',
              'post_type' => 'post',
    ));

    if($posts):
        foreach ($posts as $post):
              //Check if all day, set format accordingly
                    
            printf(
                '<div class="large-4 columns"><div class="panel" data-equalizer-watch=""><a href="%s"><h4> %s </a></h4> %s<a href="%s"><div class="button small ">Read more ...</div></a></div></div>',
                get_permalink($post->ID),
                get_the_title($post->ID),
                get_the_post_thumbnail($post->ID),
                get_permalink($post->ID)
            );           
        endforeach;
      endif;

      $events = eo_get_events(array(
                    /* 'event_start_after'=>'today', */
                     'event-category'=>'featured-event' , 
              ));
        
            if($events):
               foreach ($events as $event):
                    //Check if all day, set format accordingly
                    
                    $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
                    printf(
                       '<div class="large-4 columns"><div class="panel" data-equalizer-watch=""><h4><a href="%s"> %s </a> </h4>%s <br> %s<a href="%s"><div class="button small ">Read more ...</div></a></div></div>',
                       get_permalink($event->ID),
                       get_the_title($event->ID),
                       eo_get_the_start($format, $event->ID,null,$event->occurrence_id),
                       get_the_post_thumbnail($event->ID),
                       get_permalink($event->ID)
                    );           
                
               endforeach;
            endif;



?>