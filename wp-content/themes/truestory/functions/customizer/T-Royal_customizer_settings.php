<?php

function truestory_fire_customize_register($wp_customize){


     // Adding The Sections 

     

     /* Author Section */ 
    $wp_customize->add_section('about_author',array(
        
         'title'=>esc_html__('About Author','truestory'),
         'description'=>esc_html__('Modify Author Informations','truestory'),

      ));
    $wp_customize->add_section('nav-styling',array(
        
         'title'=>esc_html__('Navigation Styling','truestory'),
         'description'=>esc_html__('Style Your Navigation Menu','truestory'),


      ));
    $wp_customize->add_section('truestory-featured-area',array(
        
         'title'=>esc_html__('Featured Slider : General Settings','truestory'),
         'description'=>esc_html__('Choose Your Featured Slider Template','truestory'),


      ));
 
     $wp_customize->add_section('truestory-featured-area-light',array(
        
         'title'=>esc_html__('Featured Slider : Light Content','truestory'),
         'description'=>esc_html__('Manage Light Slider Colors & Settings','truestory'),


      ));
      
 
  $wp_customize->add_section('truestory-special-ann',array(
        
         'title'=>esc_html__('Special Announcement Area','truestory'),
         'description'=>esc_html__('Announce Something New to your Readers.','truestory'),

      ));
 
   $wp_customize->add_section('truestory-posts',array(
        
         'title'=>esc_html__('Posts Settings & Templates','truestory'),
         'description'=>esc_html__('Manage Posts Templates & Settings','truestory'),


      ));

      $wp_customize->add_section('truestory-posts-aside',array(
        
         'title'=>esc_html__('Aside Posts Settings','truestory'),
         'description'=>esc_html__('Manage Aside Posts','truestory'),


      ));
       $wp_customize->add_section('truestory-posts-link',array(
        
         'title'=>esc_html__('Link Posts Settings','truestory'),
         'description'=>esc_html__('Manage Link Posts','truestory'),


      ));

    $wp_customize->add_section('truestory-pages',array(
        
         'title'=>esc_html__('Pages Settings & Templates','truestory'),
         'description'=>esc_html__('Manage Page Templates & Settings','truestory'),


      ));

    $wp_customize->add_section('truestory-related',array(
        
         'title'=>esc_html__('Related Posts','truestory'),
         'description'=>esc_html__('Manage Related Posts under each Article ','truestory'),


      ));

   $wp_customize->add_section('truestory-sidebar',array(
        
         'title'=>esc_html__('Sidebar Colors & Settings','truestory'),
         'description'=>esc_html__('Manage The Sidebar General Colors & More','truestory'),


      ));
   $wp_customize->add_section('truestory-sidebar-about-author',array(
        
         'title'=>esc_html__('Sidebar : About Author Widget','truestory'),
         'description'=>esc_html__('Manage Its Colors & More','truestory'),


      ));

    $wp_customize->add_section('truestory-sidebar-special-ann',array(
        
         'title'=>esc_html__('Sidebar : Special Announcement  Widget','truestory'),
         'description'=>esc_html__('Manage Its Colors & More','truestory'),


      ));

    $wp_customize->add_section('truestory-sidebar-latest-posts',array(
        
         'title'=>esc_html__('Sidebar : Custom Latest Posts Widget','truestory'),
         'description'=>esc_html__('Manage Its Colors & More','truestory'),


      ));
     $wp_customize->add_section('truestory-sidebar-follow',array(
        
         'title'=>esc_html__('Sidebar : Follow Me Widget','truestory'),
         'description'=>esc_html__('Manage Its Settings & More','truestory'),


      ));
 

   $wp_customize->add_section('truestory-footer',array(
       
         'title'=>esc_html__('Footer Colors & Settings','truestory'),
        


      ));

  
 

    // Adding The Settings

    /* Author Settings */
    $wp_customize->add_setting('author_logo',array(
        
         'default'=>'',
         'sanitize_callback'=> 'truestory_sanitize'
      ));
      $wp_customize->add_setting('author_footer_logo',array(
        
         'default'=>'',
         'sanitize_callback'=> 'truestory_sanitize'
      ));
    
    $wp_customize->add_setting('disable_about_author',array(
        
         'default'=>true,
         'sanitize_callback'=> 'truestory_sanitize'

      ));
    $wp_customize->add_setting('author_name',array(
        
         'default'=>'',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
     $wp_customize->add_setting('profile_picture',array(
        
         'default'=>'',
         'sanitize_callback'=> 'truestory_sanitize'
      ));
      

       $wp_customize->add_setting('author_picture_border_color',array(
        
         'default'=>'#F5F5F5',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

      

     $wp_customize->add_setting('author_description',array(
        
         'default'=>'..',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
      $wp_customize->add_setting('author_about_link',array(
        
         'default'=>'',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

    $wp_customize->add_setting('author_name_size',array(
        
         'default'=>'30',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
    $wp_customize->add_setting('author_name_color',array(
        
         'default'=>'#85B69B',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
     $wp_customize->add_setting('author_description_size',array(
        
         'default'=>'16',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
     $wp_customize->add_setting('author_description_line_height',array(
        
         'default'=>'34',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

       
     

    $wp_customize->add_setting('description_color',array(
        
         'default'=>'#dbdbdb',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

  
 
    
   
     
      

      /* Menu Settings */ 

      
       
        $wp_customize->add_setting('truestory-menu-font-size',array(
        
         'default'=>'12',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

        $wp_customize->add_setting('menu_over_top_bg',array(
        
         'default'=>'0.7',
         'sanitize_callback'=> 'truestory_sanitize'

      ));


        $wp_customize->add_setting('truestory-menu-font-color',array(
        
         'default'=>'#fff',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

        $wp_customize->add_setting('truestory-menu-nav-bg',array(
        
         'default'=>'transparent',
         'sanitize_callback'=> 'truestory_sanitize'

      ));

        $wp_customize->add_setting('truestory-menu-seperation-borders',array(
        
         'default'=>false,
         'sanitize_callback'=> 'truestory_sanitize'

      ));

         $wp_customize->add_setting('truestory-menu-seperation-border',array(
        
         'default'=>'#fff',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
       

       /* Featured Slider Settings */ 

       $wp_customize->add_setting('featured_template',array(

               
          'default'=>'light',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         

        $wp_customize->add_setting(
          'truestory_featured_number',
          
          array(
              'default'     => '3',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )

         
          
        
            );

         $wp_customize->add_setting('fslider-autoslide',array(
        
         'default'=>'true',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
          $wp_customize->add_setting('fslider-shuffle',array(
        
         'default'=>'false',
         'sanitize_callback'=> 'truestory_sanitize'

      ));
        

        $wp_customize->add_setting(
         
          'truestory_hide_fcat',
          array(
              'default'     => false,
              'sanitize_callback'=> 'truestory_sanitize'
        
          )
          
      );
        $wp_customize->add_setting('fcat_color',array(

               
          'default'=>'#ffffff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

        $wp_customize->add_setting('fcat_bg_color',array(

               
          'default'=>'#C69F73',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         $wp_customize->add_setting('f_date_color',array(

               
          'default'=>'#000000',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
         $wp_customize->add_setting(
         
          'truestory_hide_fdate',
          array(
              'default'     => false,
              'sanitize_callback'=> 'truestory_sanitize'
        
          )
          
      );

        $wp_customize->add_setting('f_title_size',array(

               
          'default'=>'20',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         $wp_customize->add_setting('f_title_color',array(

               
          'default'=>'#000000',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           $wp_customize->add_setting('f_title_size_dark',array(

               
          'default'=>'40',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         $wp_customize->add_setting('f_title_color_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           $wp_customize->add_setting('f_desc_size_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
         $wp_customize->add_setting('f_desc_color_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           $wp_customize->add_setting('f_desc_bg_dark',array(

               
          'default'=>'#000',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           
           $wp_customize->add_setting('f_rm_size_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           
           $wp_customize->add_setting('f_rm_color_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));
           $wp_customize->add_setting('f_rm_border_color_dark',array(

               
          'default'=>'#fff',
          'sanitize_callback'=> 'truestory_sanitize'


        ));


         

         $wp_customize->add_setting('read_more_alternative',array(

               
          'default'=>'Read More',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         $wp_customize->add_setting('read_more_size',array(

               
          'default'=>'14',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

          $wp_customize->add_setting('read_more_border_bottom_color',array(

               
          'default'=>'#C69F73',
          'sanitize_callback'=> 'truestory_sanitize'


        ));

         $wp_customize->add_setting(
          'truestory_featured_category',
          
          array(
              'default'     => false,
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );

         /* Special Annoucement Area Settings */
        

         $wp_customize->add_setting(
          'truestory-special-ann-disable',
          
          array(
              'default'     => true,
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );

         

      


         $wp_customize->add_setting(
          'truestory-special-ann-title',
          
          array(
              'default'     => false,
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
          $wp_customize->add_setting(
          'truestory-special-ann-title-size',
          
          array(
              'default'     => '20',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
           $wp_customize->add_setting(
          'truestory-special-ann-title-color',
          
          array(
              'default'     => '#fff',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
            $wp_customize->add_setting(
          'truestory-special-ann-title-bg-color',
          
          array(
              'default'     => '#000',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );

            $wp_customize->add_setting(
          'truestory-special-ann-desc',
          
          array(
              'default'     => '',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );

            $wp_customize->add_setting(
          'truestory-special-ann-desc-size',
          
          array(
              'default'     => '17',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
           $wp_customize->add_setting(
          'truestory-special-ann-desc-color',
          
          array(
              'default'     => '#fff',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
            $wp_customize->add_setting(
          'truestory-special-ann-desc-bg-color',
          
          array(
              'default'     => '#000',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );

            $wp_customize->add_setting(
          'truestory-special-ann-bg-image',
          
          array(
              'default'     => '',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
            $wp_customize->add_setting(
          'truestory-special-ann-bg-image-rgba',
          
          array(
              'default'     => '0.5',
              'sanitize_callback'=> 'truestory_sanitize'

        
          )
          );
 
        

          
        /* Posts Templates Settings */ 
        
         $wp_customize->add_setting(
          'truestory_choose_post_template',
          array(
             'default'=>'full-posts',
             'sanitize_callback'=> 'truestory_sanitize'
            )
         
      );
        
       
         $wp_customize->add_setting('full_post_thumbnail_border-size', array(
             'default'=>'4',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

          $wp_customize->add_setting('full_post_thumbnail_border-color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );
          $wp_customize->add_setting('full_post_thumbnail_border-style', array(
             'default'=>'solid',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

           $wp_customize->add_setting('full_post_thumbnail_border-type', array(
             'default'=>true,
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

        $wp_customize->add_setting('full_post_title_size', array(
             'default'=>'35',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

         $wp_customize->add_setting('full_post_title_color', array(
             'default'=>'#000000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );


          $wp_customize->add_setting('full_post_date_size', array(
             'default'=>'12',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

          $wp_customize->add_setting('full_post_date_color', array(
             'default'=>'#ffffff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

          $wp_customize->add_setting('full_post_date_bg', array(
             'default'=>'#cea525',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

           $wp_customize->add_setting('full_post_content_size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
      );

            $wp_customize->add_setting('full_post_content_color', array(
             'default'=>'#666',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

               $wp_customize->add_setting('full_post_footer_size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         
          );

            $wp_customize->add_setting('full_post_footer_color', array(
             'default'=>'#888',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('full_post_footer_border_color', array(
             'default'=>'#e5e5e5',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

               $wp_customize->add_setting('full_post_aside_font_size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                $wp_customize->add_setting('full_post_aside_font_color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                 $wp_customize->add_setting('full_post_aside_bg_color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                     $wp_customize->add_setting('full_post_aside_border_color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
               

        // Link Posts 
                $wp_customize->add_setting('link_font_size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                $wp_customize->add_setting('link_font_color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                   $wp_customize->add_setting('link_font_bg_color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                     $wp_customize->add_setting('link_font_color_hover', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                       $wp_customize->add_setting('link_font_bg_color_hover', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                 $wp_customize->add_setting('link_bg_color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
            
                $wp_customize->add_setting('link_border_color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );




           

          // Pages Settings 
              $wp_customize->add_setting('page_title_font-size', array(
             'default'=>'50',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('page_title_font-color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
               $wp_customize->add_setting('page_title-bg-color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('page_font-size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('page_font-color', array(
             'default'=>'#666',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('page_show_share', array(
             'default'=>false,
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );


              /* Related Posts Settings */

                 $wp_customize->add_setting('related-posts_title', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                      $wp_customize->add_setting('truestory-related-title_size', array(
             'default'=>'25',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                               $wp_customize->add_setting('truestory-related-post-title_size', array(
             'default'=>'25',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                      

                   $wp_customize->add_setting('truestory-related-title_color', array(
             'default'=>'#2e2e2e',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                           $wp_customize->add_setting('truestory-related-title_size', array(
             'default'=>'25',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                                   $wp_customize->add_setting('truestory-related-thetitle_color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                   $wp_customize->add_setting('truestory-related-author-size', array(
             'default'=>'14',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         ); 
                      $wp_customize->add_setting('truestory-related-author-color', array(
             'default'=>'#545454',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                
          
           
           // Sidebar Settings . 


             

              $wp_customize->add_setting('truestory_disable_sidebar', array(
             'default'=>false,
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('truestory_switch_sidebar', array(
             'default'=>false,
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

             $wp_customize->add_setting('sidebar-widget-title-size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );


              $wp_customize->add_setting('sidebar-widget-title-color', array(
             'default'=>'#727272',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('sidebar-widget-title-bg', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

               $wp_customize->add_setting('sidebar-about-us_font-size', array(
             'default'=>'14',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

               $wp_customize->add_setting('sidebar-about-us_font-color', array(
             'default'=>'#444',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

         $wp_customize->add_setting('sidebar-special-ann_font-size', array(
             'default'=>'14',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
               $wp_customize->add_setting('sidebar-special-ann_font-color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

         $wp_customize->add_setting('sidebar-special-ann_bg-color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
          $wp_customize->add_setting('sidebar-special-latest-posts_info-size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
           $wp_customize->add_setting('sidebar-special-latest-posts_info-color', array(
             'default'=>'#fff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
            $wp_customize->add_setting('sidebar-special-latest-posts_info-bg-color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

          $wp_customize->add_setting('sidebar-special-latest-posts_title-color', array(
             'default'=>'#000',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
           $wp_customize->add_setting('sidebar-special-latest-posts_title-size', array(
             'default'=>'30',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
            $wp_customize->add_setting('sidebar-special-latest-posts_date-size', array(
             'default'=>'13',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
             $wp_customize->add_setting('sidebar-special-latest-posts_date-color', array(
             'default'=>'#2e2e2e',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

              $wp_customize->add_setting('truestory_facebook', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_twitter', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_instagram', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_pinterest', array(
             'default'=>'http://wwww.pinterest.com/',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_bloglovin', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_google', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_tumblr', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
              $wp_customize->add_setting('truestory_youtube', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
               $wp_customize->add_setting('truestory_flickr', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                $wp_customize->add_setting('truestory_dribbble', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                 $wp_customize->add_setting('truestory_vkontakte', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                  $wp_customize->add_setting('truestory_linkedin', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                   $wp_customize->add_setting('truestory_digg', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                    $wp_customize->add_setting('truestory_skype', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
                    $wp_customize->add_setting('truestory_vimeo', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                    $wp_customize->add_setting('truestory_stumbleupon', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                    $wp_customize->add_setting('truestory_yahoo', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                    $wp_customize->add_setting('truestory_foursquare', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

                    $wp_customize->add_setting('truestory_rss', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );


           
        




         



          /* Footer Settings */


           $wp_customize->add_setting('footer-copyrights', array(
             'default'=>'ALL RIGHTS RESERVED ThemeRoyal.com',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );
             $wp_customize->add_setting('footer-cr-size', array(
             'default'=>'',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

             $wp_customize->add_setting('footer-cr-color', array(
             'default'=>'#ffffff',
             'sanitize_callback'=> 'truestory_sanitize'

            )
         );

      

       

      

         

      
        

      

     // Adding Controls 
     
     
     /* Author Controls */
   
     

 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'author_logo',array(
          
          'label' => esc_html__('Add Logo','truestory'),
          'section'=>'about_author',
          'setting'=>'author_logo'


      
      )));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'author_footer_logo',array(
          
          'label' => esc_html__('Add Logo','truestory'),
          'section'=>'truestory-footer',
          'setting'=>'author_footer_logo'


      
      )));
       $wp_customize->add_control('author_name',array(
          
          'label' => esc_html__('Edit Author Name','truestory'),
          'section'=>'about_author',
          'setting'=>'author_name'


      ));


       $wp_customize->add_control( 'author_name_size', array(
            'type' => 'range',
            'section' => 'about_author',
            'label' => esc_html__( 'Author Name Font Size','truestory'),
            'input_attrs' => array(
            'min' => 25,
            'max' => 40,
            'step' => 2,
            'setting'=>'author_name_size'
           ),
            ) );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'author_name_color',array(
          
          'label' => esc_html__('Author Name Color','truestory'),
          'section'=>'about_author',
          'setting'=>'author_name_color'


      )));

       
       $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'profile_picture',array(
          
          'label' => esc_html__('Edit Author Picture','truestory'),
          'section'=>'about_author',
          'setting'=>'profile_picture'


      
      )));
     

          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'author_picture_border_color',array(
          
          'label' => esc_html__('Edit Auhtor Picture Border Color','truestory'),
          'section'=>'about_author',
          'setting'=>'author_picture_border_color'


      )));


       
    
         

       $wp_customize->add_control( new Customize_Textarea_Control($wp_customize , 'author_description', array(


         'label'=>esc_html__('Author Description','truestory'),
         'section'=>'about_author',
         'setting'=>'author_description'


        )));

       $wp_customize->add_control('author_about_link',array(
          
          'label' => esc_html__('About Auhtor Page Link','truestory'),
          'section'=>'about_author',
          'setting'=>'author_about_link'


      ));
       
    

         $wp_customize->add_control( 'author_description_size', array(
            'type' => 'range',
            'section' => 'about_author',
            'label' => esc_html__( 'Description Font Size','truestory'),
            'input_attrs' => array(
            'min' => 13,
            'max' => 24,
            'step' => 2,
            'setting'=>'author_description_size'
           ),
            ) );


           $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'description_color',array(
          
          'label' => esc_html__('Edit Description Color','truestory'),
          'section'=>'about_author',
          'setting'=>'description_color'


      )));
           

   

           $wp_customize->add_control( 'author_description_line_height', array(
            'type' => 'range',
            'section' => 'about_author',
            'label' => esc_html__( 'Space Between Description Lines','truestory'),
            'input_attrs' => array(
            'min' =>25,
            'max' =>40,
            'step' =>1,
            'setting'=>'author_description_line_height'
           ),
            ) );

   
 
   
     
    
   
   
    
      

   

     /* Navigation Menu Controls */
      
            $wp_customize->add_control( 'truestory-menu-font-size', array(
            'type' => 'range',
            'section' => 'nav-styling',
            'label' => esc_html__( 'Navigation Font Size','truestory'),
            'input_attrs' => array(
            'min' => 11,
            'max' => 18,
            'step' => 1,
            'setting'=>'truestory-menu-font-size'
           ),
            ) );

          $wp_customize->add_control( 'menu_over_top_bg', array(
            'type' => 'range',
            'section' => 'nav-styling',
            'label' => esc_html__( 'Choose Background Over Top','truestory'),
            'input_attrs' => array(
            'min' => 0,
            'max' => 0.9,
            'step' => 0.1,
            'setting'=>'menu_over_top_bg'
           ),
            ) );

         
          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-menu-font-color',array(
          
          'label' => esc_html__('Navigation Font Color','truestory'),
          'section'=>'nav-styling',
          'setting'=>'truestory-menu-font-color'


      )));

           $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-menu-nav-bg',array(
          
          'label' => esc_html__('Navigation Background Color','truestory'),
          'section'=>'nav-styling',
          'setting'=>'truestory-menu-nav-bg'


      )));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-menu-seperation-borders',array(
          
          'label' => esc_html__('Menu Items Separation Line Color','truestory'),
          'section'=>'nav-styling',
          'setting'=>'truestory-menu-seperation-borders'


      )));


            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-menu-seperation-border',array(
          
          'label' => esc_html__('Separation Line Color ( the top border of the menu ) ','truestory'),
          'section'=>'nav-styling',
          'setting'=>'truestory-menu-seperation-border'


      )));

      

      


     

     /* Featured Area Controls */ 

      $wp_customize->add_control('featured_template',array(
          
          'label' => esc_html__('Feautured Area Layouts','truestory'),
          'section'=>'truestory-featured-area',
          'setting'=>'featured_template',
          'type'=>'radio',
          'choices'=>array(
             
             'boxed'=>'Boxed Slider',
             'full'=>'Full Width Slider',
             'disable'=>'Disable Slider'
            )


      ));

       $wp_customize->add_control('fslider-autoslide',array(
          
          'label' => esc_html__('Aumatically Slide Posts','truestory'),
          'section'=>'truestory-featured-area',
          'setting'=>'fslider-autoslide',
          'type'=>'radio',
          'choices'=>array(
             
             'true'=>'ON',
             'false'=>'OFF'
            )


      ));

       $wp_customize->add_control('fslider-shuffle',array(
          
          'label' => esc_html__('Slide Posts Randomly ( Shuffle )','truestory'),
          'section'=>'truestory-featured-area',
          'setting'=>'fslider-shuffle',
          'type'=>'radio',
          'choices'=>array(
             
             'true'=>'ON',
             'false'=>'OFF'
            )


      ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'truestory_hide_fcat',
        array(
          'label'      => esc_html__('Hide Category','truestory'),
          'section'    => 'truestory-featured-area-light',
          'settings'   => 'truestory_hide_fcat',
          'type'       => 'checkbox',
          
        )
      )
    );

          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'fcat_color',array(
          
          'label' => esc_html__('Category Color','truestory'),
          'section'=>'truestory-featured-area-light',
          'setting'=>'fcat_color'



      )));

          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'fcat_bg_color',array(
          
          'label' => esc_html__('Category Background Color','truestory'),
          'section'=>'truestory-featured-area-light',
          'setting'=>'fcat_bg_color'



      )));

          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'f_date_color',array(
          
          'label' => esc_html__('Feautured Date Color','truestory'),
          'section'=>'truestory-featured-area-light',
          'setting'=>'f_date_color'



      )));

          $wp_customize->add_control(new WP_Customize_Control($wp_customize,'truestory_hide_date',
        array(
          'label'      => esc_html__('Hide Date','truestory'),
          'section'    => 'truestory-featured-area-light',
          'settings'   => 'truestory_hide_fdate',
          'type'       => 'checkbox',
          
        )
      )
    );
      
        $wp_customize->add_control( 'f_title_size', array(
            'type' => 'range',
            'section' => 'truestory-featured-area-light',
            'label' => esc_html__( 'Title Size','truestory'),
            'input_attrs' => array(
            'min' => 17,
            'max' => 26,
            'step' => 1,
            'setting'=>'f_title_size'
           ),
            ) );

         $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'f_title_color',array(
          
          'label' => esc_html__('Feautured Title Color','truestory'),
          'section'=>'truestory-featured-area-light',
          'setting'=>'f_title_color'



      )));

        
      $wp_customize->add_control( 'read_more_size', array(
            'type' => 'range',
            'section' => 'truestory-featured-area-light',
            'label' => esc_html__( 'Read More Size','truestory'),
            'input_attrs' => array(
            'min' => 12,
            'max' => 18,
            'step' => 1,
            'setting'=>'read_more_size'
           ),
            ) );
         $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'read_more_border_bottom_color',array(
          
          'label' => esc_html__('Edit "Read More" Alternatives Border Bottom Color','truestory'),
          'section'=>'truestory-featured-area-light',
          'setting'=>'read_more_border_bottom_color'



      )));

         $wp_customize->add_control('read_more_alternative',array(

         'label' => esc_html__('Read More Alternatives','truestory'),
         'section'=>'truestory-featured-area',
         'setting'=>'read_more_alternative'


        ));

           
            
              



         

         $wp_customize->add_control( new Customize_Number_Control($wp_customize , 'truestory_featured_number', array(


         'label'=>esc_html__('Number of Posts to Show In Slider','truestory'),
         'section'=>'truestory-featured-area',
         'setting'=>'truestory_featured_number',


        )));

        $wp_customize->add_control(
      new WP_Customize_Category_Control(
        $wp_customize,
        'featured_cat',
        array(
          'label'    => esc_html__('Select Featured Category','truestory'),
          'settings' => 'truestory_featured_category',
          'section'  => 'truestory-featured-area',
          'priority'   => 3
        )
      )
    ); 

        /* Special Announcement Controls */ 
         
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'truestory-special-ann-disable',
        array(
          'label'      => esc_html__('Disable Special Annoucement','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-disable',
          'type'       => 'checkbox',
          
        )
      )
    );
      

           $wp_customize->add_control('truestory-special-ann-title',array(
          
          'label' => esc_html__('Specian Announcement Title','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-title'


      ));

        $wp_customize->add_control( 'truestory-special-ann-title-size', array(
            'type' => 'range',
            'section' => 'truestory-special-ann',
            'label' => esc_html__( 'Title Font Size','truestory'),
            'input_attrs' => array(
            'min' => 15,
            'max' => 25,
            'step' => 2,
            'setting'=>'truestory-special-ann-title-size'
           ),
            ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-special-ann-title-color',array(
          
          'label' => esc_html__('Title Color','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-title-color'



      )));
          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-special-ann-title-bg-color',array(
          
          'label' => esc_html__('Title Background Color','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-title-bg-color'



      )));
           $wp_customize->add_control( new Customize_Textarea_Control($wp_customize , 'truestory-special-ann-desc', array(


         'label'=>esc_html__('Special Announcement Content','truestory'),
         'section'=>'truestory-special-ann',
         'setting'=>'truestory-special-ann-desc'


        )));

           $wp_customize->add_control( 'truestory-special-ann-desc-size', array(
            'type' => 'range',
            'section' => 'truestory-special-ann',
            'label' => esc_html__( 'Description Font Size','truestory'),
            'input_attrs' => array(
            'min' => 15,
            'max' => 24,
            'step' => 2,
            'setting'=>'truestory-special-ann-desc-size'
           ),
            ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-special-ann-desc-color',array(
          
          'label' => esc_html__('Description Color','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-desc-color'



      )));
          $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-special-ann-desc-bg-color',array(
          
          'label' => esc_html__('Description Background Color','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-desc-bg-color'



      )));
           $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'truestory-special-ann-bg-image',array(
          
          'label' => esc_html__('Background Image','truestory'),
          'section'=>'truestory-special-ann',
          'setting'=>'truestory-special-ann-bg-image'


      
      )));
        $wp_customize->add_control( 'truestory-special-ann-bg-image-rgba', array(
            'type' => 'range',
            'section' => 'truestory-special-ann',
            'label' => esc_html__( 'Background Over Top','truestory'),
            'input_attrs' => array(
            'min' => 0.1,
            'max' => 0.9,
            'step' => 0.1,
            'setting'=>'truestory-special-ann-bg-image-rgba'
           ),
            ) );

        
        

        /* Adding Posts Controls */ 

          $wp_customize->add_control('truestory_choose_post_template',array(
          
          'label' => esc_html__('Choose Post Template','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'truestory_choose_post_template',
          'type'=>'radio',
          'choices'=>array(
             
             'full-posts'=>'Full Posts',
             'long'=>'Long Posts',
             'list'=>'List Posts',
            
          
            )


      ));
         
          
            $wp_customize->add_control( 'full_post_thumbnail_border-size', array(
            'type' => 'range',
            'section' => 'truestory-posts',
            'label' => esc_html__( 'Thumbnail Frame Size','truestory'),
            'input_attrs' => array(
            'min' => 0,
            'max' => 10,
            'step' => 1,
            'setting'=>'full_post_thumbnail_border-size'
           ),
            ) );

             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_thumbnail_border-color',array(
          
          'label' => esc_html__('Thumbnail Frame Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_thumbnail_border-color'



      )));

             $wp_customize->add_control('full_post_thumbnail_border-style',array(
          
          'label' => esc_html__('Thumbnail Frame Style','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_thumbnail_border-style',
          'type'=>'radio',
          'choices'=>array(
             'solid'=>'Simple Frame',
             'dashed'=>'Frame Thumbnail With Dashes',
             'dotted'=>'Frame Thumbnail With Dots',
            )


      ));

        

        $wp_customize->add_control( 'full_post_title_size', array(
            'type' => 'range',
            'section' => 'truestory-posts',
            'label' => esc_html__( 'Title Font Size','truestory' ),
            'input_attrs' => array(
            'min' => 15,
            'max' => 58,
            'step' => 2,
           ),
            ) );


           $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_title_color',array(
          
          'label' => esc_html__('Title Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_title_color'



         )));

            $wp_customize->add_control( 'full_post_date_size', array(
            'type' => 'range',
            'section' => 'truestory-posts',
            'label' => esc_html__( 'Date Font Size','truestory'),
            'input_attrs' => array(
            'min' => 4,
            'max' => 16,
            'step' => 1,
           ),
            ) );

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_date_color',array(
          
          'label' => esc_html__('Date Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_date_color'



         )));

             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_date_bg',array(
          
          'label' => esc_html__('Date Background Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_date_bg'



         )));


            $wp_customize->add_control( 'full_post_content_size', array(
            'type' => 'range',
            'section' => 'truestory-posts',
            'label' => esc_html__( 'Article Content Font Size','truestory'),
            'input_attrs' => array(
            'min' => 10,
            'max' => 20,
            'step' => 1,
           ),
            ) );

             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_content_color',array(
          
          'label' => esc_html__('Article Content Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_content_color'



         )));

               $wp_customize->add_control( 'full_post_footer_size', array(
            'type' => 'range',
            'section' => 'truestory-posts',
            'label' => esc_html__( 'Article Footer Font Size','truestory'),
            'input_attrs' => array(
            'min' => 6,
            'max' => 15,
            'step' => 1,
           ),
            ) );


             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_footer_color',array(
          
          'label' => esc_html__('Article Footer Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_footer_color'



         )));

             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_footer_border_color',array(
          
          'label' => esc_html__('Article Footer Border Color','truestory'),
          'section'=>'truestory-posts',
          'setting'=>'full_post_footer_border_color'



         )));

               $wp_customize->add_control( 'full_post_aside_font_size', array(
            'type' => 'range',
            'section' => 'truestory-posts-aside',
            'label' => esc_html__( 'Aside Posts : Font Size','truestory'),
            'input_attrs' => array(
            'min' => 12,
            'max' => 16,
            'step' => 1,
           ),
            ) );
             
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_aside_font_color',array(
          
          'label' => esc_html__('Aside Posts : Font Color','truestory'),
          'section'=>'truestory-posts-aside',
          'setting'=>'full_post_aside_font_color'



         )));
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_aside_bg_color',array(
          
          'label' => esc_html__('Aside Posts : Background Color','truestory'),
          'section'=>'truestory-posts-aside',
          'setting'=>'full_post_aside_bg_color'



         )));
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'full_post_aside_border_color',array(
          
          'label' => esc_html__('Aside Posts : Border Color','truestory'),
          'section'=>'truestory-posts-aside',
          'setting'=>'full_post_aside_border_size'



         )));
             
             $wp_customize->add_control('link_font_size', array(
            'type' => 'range',
            'section' => 'truestory-posts-link',
            'label' => esc_html__( 'Link Posts : Font Size','truestory'),
            'input_attrs' => array(
            'min' => 12,
            'max' => 16,
            'step' => 1,
           ),
            ) );
               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_font_color',array(
          
          'label' => esc_html__('Link Posts : Color','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_font_color'



         )));
              
               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_font_bg_color',array(
          
          'label' => esc_html__('Link Posts : Font Background Color ','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_font_bg_color'



         )));
                  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_font_color_hover',array(
          
          'label' => esc_html__('Link Posts : Color On mouse Touch','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_font_color_hover'



         )));
              
                 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_font_bg_color_hover',array(
          
          'label' => esc_html__('Link Posts : Font Background Color ON Mouse Touch ','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_font_bg_color_hover'



         )));
               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_bg_color',array(
          
          'label' => esc_html__('Link Posts : Background Color ','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_bg_color'

         )));

                $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_border_color',array(
          
          'label' => esc_html__('Link Posts : Border Color ','truestory'),
          'section'=>'truestory-posts-link',
          'setting'=>'link_border_color'

         )));
             
            

            // Related Posts Controls */

             $wp_customize->add_control('related-posts_title',array(
          
          'label' => esc_html__('Related Posts Title','truestory'),
          'section'=>'truestory-related',
          'setting'=>'related-posts_title'


      ));

               $wp_customize->add_control( 'truestory-related-title_size', array(
            'type' => 'range',
            'section' => 'truestory-related',
            'label' => esc_html__( 'Related Articles Header Font Size','truestory'),
            'input_attrs' => array(
            'min' => 20,
            'max' => 30,
            'step' => 1,
           ),
            ) );


               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-related-title_color',array(
          
          'label' => esc_html__('Related Articles Header Font','truestory'),
          'section'=>'truestory-related',
          'setting'=>'truestory-related-title_color'



         )));


                $wp_customize->add_control( 'truestory-related-post-title_size', array(
            'type' => 'range',
            'section' => 'truestory-related',
            'label' => esc_html__( 'Related Article Title Font Size','truestory'),
            'setting'=>'truestory-related-post-title_size',
            'input_attrs' => array(
            'min' => 17,
            'max' => 30,
            'step' => 1,
           ),
            ) );

                  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-related-thetitle_color',array(
          
          'label' => esc_html__('Related Article Title Color','truestory'),
          'section'=>'truestory-related',
          'setting'=>'truestory-related-thetitle_color'



         )));

                    $wp_customize->add_control( 'truestory-related-author-size', array(
            'type' => 'range',
            'section' => 'truestory-related',
            'label' => esc_html__( 'Related Article Author Size','truestory'),
            'setting'=>'truestory-related-author-size',
            'input_attrs' => array(
            'min' => 10,
            'max' => 20,
            'step' => 1,
           ),
            ) );


                    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'truestory-related-author-color',array(
          
          'label' => esc_html__('Related Article Author Color','truestory'),
          'section'=>'truestory-related',
          'setting'=>'truestory-related-author-color'



         )));


            // Page Controls 
            $wp_customize->add_control('page_title_font-size', array(
            'type' => 'range',
            'section' => 'truestory-pages',
            'label' => esc_html__( 'Page Title Font Size','truestory'),
            'setting'=>'page_title_font-size',
            'input_attrs' => array(
            'min' => 18,
            'max' => 60,
            'step' => 2,
           ),
            ) );

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_title_font-color',array(
          
            'section' => 'truestory-pages',
            'label' => esc_html__( 'Page Title Font Color','truestory'),
            'setting'=>'page_title_font-color',



         )));
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_title-bg-color',array(
          
            'section' => 'truestory-pages',
            'label' => esc_html__( 'Page Title Background Color','truestory'),
            'setting'=>'page_title-bg-color',



         )));

            $wp_customize->add_control('page_font-size', array(
            'type' => 'range',
            'section' => 'truestory-pages',
            'label' => esc_html__( 'Page Content Font Size','truestory'),
            'setting'=>'page_font-size',
            'input_attrs' => array(
            'min' => 10,
            'max' => 20,
            'step' => 1,
           ),
            ) );

              $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_font-color',array(
          
            'section' => 'truestory-pages',
            'label' => esc_html__( 'Page Content Font Color','truestory'),
            'setting'=>'page_font-color',



         )));


                     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'page_show_share',
        array(
          'label'      => esc_html__('Show Share Buttons','truestory'),
          'section'    => 'truestory-pages',
          'settings'   => 'page_show_share',
          'type'       => 'checkbox',
          
        )
      )
    );



               // Sidebar Controls 
               


 
               $wp_customize->add_control(new WP_Customize_Control($wp_customize,'truestory_disable_sidebar',
        array(
          'label'      => 'Disable Sidebar',
          'section'    => 'truestory-sidebar',
          'settings'   => 'truestory_disable_sidebar',
          'type'       => 'checkbox',
          
           )
           )
          );
                $wp_customize->add_control(new WP_Customize_Control($wp_customize,'truestory_switch_sidebar',
        array(
          'label'      => 'Switch Sidebar To Left',
          'section'    => 'truestory-sidebar',
          'settings'   => 'truestory_switch_sidebar',
          'type'       => 'checkbox',
          
           )
           )
          );

              $wp_customize->add_control( 'sidebar-widget-title-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar',
            'label' => esc_html__( 'Widget Title Font Size','truestory'),
            'input_attrs' => array(
            'min' => 10,
            'max' => 18,
            'step' => 1,
           ),
            ) );



              $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-widget-title-color',array(
          
          'label' => esc_html__('Title Color','truestory'),
          'section'=>'truestory-sidebar',
          'setting'=>'sidebar-widget-title-color'



         )));

               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-widget-title-bg',array(
          
          'label' => esc_html__('Title Background','truestory'),
          'section'=>'truestory-sidebar',
          'setting'=>'sidebar-widget-title-bg'



         )));
            
           

            $wp_customize->add_control( 'sidebar-about-us_font-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar-about-author',
            'label' => esc_html__( 'About Author Widget Description Font Size','truestory'),
            'input_attrs' => array(
            'min' => 12,
            'max' => 16,
            'step' => 1,
            'setting'=>'sidebar-about-us_font-size'
           ),
            ) );


               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-about-us_font-color',array(
          
          'label' => esc_html__('About Author Widget Description Font Color','truestory'),
          'section'=>'truestory-sidebar-about-author',
          'setting'=>'sidebar-about-us_font-color'



         )));
                 $wp_customize->add_control( 'sidebar-special-ann_font-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar-special-ann',
            'label' => esc_html__( 'Sepecial Announcement Widget Description Font Size','truestory'),
            'input_attrs' => array(
            'min' => 12,
            'max' => 24,
            'step' => 1,
            'setting'=>'sidebar-special-ann_font-size'
           ),
            ) );
               $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-ann_font-color',array(
          
          'label' => esc_html__('Sepecial Announcement Widget Description Font Color','truestory'),
          'section'=>'truestory-sidebar-special-ann',
          'setting'=>'sidebar-special-ann_font-color'



         )));
                 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-ann_bg-color',array(
          
          'label' => esc_html__('Sepecial Announcement Widget Background Color','truestory'),
          'section'=>'truestory-sidebar-special-ann',
          'setting'=>'sidebar-special-ann_bg-color'



         )));
                   $wp_customize->add_control( 'sidebar-special-latest-posts_info-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar-latest-posts',
            'label' => esc_html__( 'Over Title Infos Size','truestory'),
            'input_attrs' => array(
            'min' => 11,
            'max' => 18,
            'step' => 2,
            'setting'=>'sidebar-special-latest-posts_info-size'
           ),
            ) );

                     $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-latest-posts_info-color',array(
          
          'label' => esc_html__('Over Title Infos Color','truestory'),
          'section'=>'truestory-sidebar-latest-posts',
          'setting'=>'sidebar-special-latest-posts_info-color'



         )));
                      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-latest-posts_info-bg-color',array(
          
          'label' => esc_html__('Over Title Infos Background Color','truestory'),
          'section'=>'truestory-sidebar-latest-posts',
          'setting'=>'sidebar-special-latest-posts_info-bg-color'



         )));

                  $wp_customize->add_control( 'sidebar-special-latest-posts_title-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar-latest-posts',
            'label' => esc_html__( 'Special Latest Posts Widget Title Size','truestory'),
            'input_attrs' => array(
            'min' => 20,
            'max' => 50,
            'step' => 2,
            'setting'=>'sidebar-special-latest-posts_title-size'
           ),
            ) );

                 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-latest-posts_title-color',array(
          
          'label' => esc_html__('Special Latest Posts Widget Title Color','truestory'),
          'section'=>'truestory-sidebar-latest-posts',
          'setting'=>'sidebar-special-latest-posts_title-color'



         )));

                     $wp_customize->add_control( 'sidebar-special-latest-posts_date-size', array(
            'type' => 'range',
            'section' => 'truestory-sidebar-latest-posts',
            'label' => esc_html__( 'Date Size','truestory'),
            'input_attrs' => array(
            'min' => 11,
            'max' => 15,
            'step' => 1,
            'setting'=>'sidebar-special-latest-posts_date-size'
           ),
            ) );

                 $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'sidebar-special-latest-posts_date-color',array(
          
          'label' => esc_html__('Date Color','truestory'),
          'section'=>'truestory-sidebar-latest-posts',
          'setting'=>'sidebar-special-latest-posts_date-color'



         )));
              

            
            $wp_customize->add_control('truestory_facebook',array(
          
          'label' => esc_html__('Facebook : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_facebook'


      ));
            $wp_customize->add_control('truestory_twitter',array(
          
          'label' => esc_html__('Twitter : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_twitter'


      ));
            $wp_customize->add_control('truestory_instagram',array(
          
          'label' => esc_html__('Instagram : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_instagram'


      ));
            $wp_customize->add_control('truestory_pinterest',array(
          
          'label' => esc_html__('Pinterest : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_pinterest'


      ));
            $wp_customize->add_control('truestory_bloglovin',array(
          
          'label' => esc_html__('Bloglovin : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_bloglovin'


      ));
             $wp_customize->add_control('truestory_google',array(
          
          'label' => esc_html__('Google : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_google'


      ));
              $wp_customize->add_control('truestory_tumblr',array(
          
          'label' => esc_html__('Tumblr : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_tumblr'


      ));
               $wp_customize->add_control('truestory_youtube',array(
          
          'label' => esc_html__('Youtube : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_youtube'


      ));
                $wp_customize->add_control('truestory_flickr',array(
          
          'label' => esc_html__('Flickr : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_flickr'


      )); $wp_customize->add_control('truestory_dribbble',array(
          
          'label' => esc_html__('Dribble : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_dribbble'


      ));
       $wp_customize->add_control('truestory_vkontakte',array(
          
          'label' => esc_html__('VK : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_vkontakte'


      ));

 $wp_customize->add_control('truestory_linkedin',array(
          
          'label' => esc_html__('Linkedin : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_linkedin'


      ));

 $wp_customize->add_control('truestory_digg',array(
          
          'label' => esc_html__('Digg : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_digg'


      ));

 $wp_customize->add_control('truestory_skype',array(
          
          'label' => esc_html__('Skype : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_skype'


      ));

 $wp_customize->add_control('truestory_vimeo',array(
          
          'label' => esc_html__('Vimeo : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_vimeo'


      ));

 $wp_customize->add_control('truestory_stumbleupon',array(
          
          'label' => esc_html__('Stumbleupon : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_stumbleupon'


      ));
 $wp_customize->add_control('truestory_yahoo',array(
          
          'label' => esc_html__('Yahoo : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_yahoo'


      ));

 $wp_customize->add_control('truestory_foursquare',array(
          
          'label' => esc_html__('foursquare : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_foursquare'


      ));

 $wp_customize->add_control('truestory_rss',array(
          
          'label' => esc_html__('Rss : ','truestory'),
          'section'=>'truestory-sidebar-follow',
          'setting'=>'truestory_rss'


      ));




               /* Footer Controls */

               
          
            $wp_customize->add_control('footer-copyrights',array(
          
          'label' => esc_html__('Edit Footer Copyrights','truestory'),
          'section'=>'truestory-footer',
          'setting'=>'footer-copyrights'


      ));

            $wp_customize->add_control( 'footer-cr-size', array(
            'type' => 'range',
            'section' => 'truestory-footer',
            'label' => esc_html__( 'Copyrights Font Size','truestory'),
            'input_attrs' => array(
            'min' => 10,
            'max' => 24,
            'step' => 1,
            'setting'=>'footer-cr-size'
           ),
            ) );

              $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer-cr-color',array(
          
          'label' => esc_html__('Copyrights Color','truestory'),
          'section'=>'truestory-footer',
          'setting'=>'footer-cr-color'



         )));

          

       
             


           
          


         


          



          

        
         

       


  }
  add_action('customize_register','truestory_fire_customize_register');

?>