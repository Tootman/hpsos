<?php
      
          

           $events = eo_get_events(array(
                    /* 'event_start_after'=>'today', */
                     'event-category'=>get_query_var( $my_selected_category, '' ),
                     'posts_per_page'   => 12,
                     'event_start_after'=>'today'


              ));
        
         
            if($events):
               foreach ($events as $event):
                    //Check if all day, set format accordingly
                    
                    /*
                    $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
                    printf(
                       '<div class="large-4 columns"><div class="panel" data-equalizer-watch=""><h4><a href="%s"> %s </a></h4>%s<br> %s<br><a href="%s"><div class="button small ">Read more ...</div></a></div></div>',
                       get_permalink($event->ID),
                       get_the_title($event->ID),
                       eo_get_the_start($format, $event->ID,null,$event->occurrence_id),
                       get_the_post_thumbnail($event->ID),
                       get_permalink($event->ID)
                    );

                    */           
                
                     
                    echo '<li><div class="panel">';
                    echo '<a href="' . get_permalink($event->ID) . '"><h4>' . get_the_title($event->ID). '</h4></a>';
            
                    $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
                    $my_date = eo_get_the_start($format, $event->ID,null,$event->occurrence_id);
                    
                      echo '<div class="mycard-occurance">' .  $my_date . '</div>';
                   

                    echo '<div class="mycard-image">' .  get_the_post_thumbnail($event->ID) . '</div>';
                    echo '<div class="mycard-button text-right"><a href="' . get_permalink($event->ID) . '" class="button small">Read more ...</a></div> ';
                    echo '</div></li>';

               endforeach;
            else:
              echo "Coming soon - watch this space!";
            endif;
?>