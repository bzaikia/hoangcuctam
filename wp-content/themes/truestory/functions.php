<?php 

/* 
--------------------------------------------------------------------
*             Registering & enqueuing styles & scripts             *
--------------------------------------------------------------------

*/ 
/* Fire Reply Comments */ 

    if(get_option('thread-comments')){
      wp_enqueue_script('comment_reply');

    }
/* Setting The Width For the content */


    if ( ! isset( $content_width ) ) {
  $content_width = 1200;
}


add_action( 'wp_enqueue_scripts','truestory_fire_sns' );
  
  /* Fire Scrips N Styles */ 



  function truestory_fire_sns(){



    wp_register_style( 'truestory_style',get_stylesheet_directory_uri().'/style.css');
    wp_register_style( 'truestory_about_author',get_stylesheet_directory_uri().'/style/about_author.css');
    wp_register_style( 'truestory_menu',get_stylesheet_directory_uri().'/style/menu.css');
    wp_register_style( 'truestory_reset',get_stylesheet_directory_uri().'/style/reset.css');
    wp_register_style( 'truestory_fotorama_css',get_stylesheet_directory_uri().'/style/fotorama.css');
    wp_register_style( 'truestory_featured_light',get_stylesheet_directory_uri().'/style/featured-light.css');
    wp_register_style( 'truestory_featured_dark',get_stylesheet_directory_uri().'/style/featured-dark.css');
    wp_register_style( 'truestory_special_ann',get_stylesheet_directory_uri().'/style/special_ann.css');
    wp_register_style( 'truestory_page',get_stylesheet_directory_uri().'/style/page.css');
    wp_register_style( 'truestory_category',get_stylesheet_directory_uri().'/style/category.css');
    wp_register_style( 'truestory_tag',get_stylesheet_directory_uri().'/style/tag.css');
    wp_register_style( 'truestory_full-posts',get_stylesheet_directory_uri().'/style/full-posts.css');
    wp_register_style( 'truestory_list-posts',get_stylesheet_directory_uri().'/style/list-posts.css');
    wp_register_style( 'truestory_long-posts',get_stylesheet_directory_uri().'/style/long-posts.css');
    wp_register_style( 'truestory_single',get_stylesheet_directory_uri().'/style/single.css');
    wp_register_style( 'truestory_related',get_stylesheet_directory_uri().'/style/related.css');
    wp_register_style( 'truestory_comments',get_stylesheet_directory_uri().'/style/comments.css');
    wp_register_style( 'truestory_aside',get_stylesheet_directory_uri().'/style/aside.css');
    wp_register_style( 'truestory_search',get_stylesheet_directory_uri().'/style/search.css');
    wp_register_style( 'truestory_404',get_stylesheet_directory_uri().'/style/404.css');
    wp_register_style( 'truestory_about-author_widget',get_stylesheet_directory_uri().'/style/about-author_widget.css');
    wp_register_style( 'truestory_special_ann-widget',get_stylesheet_directory_uri().'/style/special_ann_widget.css');
    wp_register_style( 'truestory_footer',get_stylesheet_directory_uri().'/style/footer.css');
    wp_register_style( 'truestory_font_awesome',get_stylesheet_directory_uri().'/style/font-awesome.min.css');



    /* Registering Responsive Style */

    
    wp_register_style( 'truestory_responsive',get_stylesheet_directory_uri().'/style/responsive/truestory_responsive.css');
   
    
    
    /* Enqueue Styles */ 


    wp_enqueue_style('truestory_style');
    wp_enqueue_style('truestory_reset');
    wp_enqueue_style('truestory_about_author');
    wp_enqueue_style('truestory_menu');
    wp_enqueue_style('truestory_sticknav');
    wp_enqueue_style('truestory_fotorama_css');
    wp_enqueue_style('truestory_featured_dark');
    wp_enqueue_style('truestory_featured_light');
    wp_enqueue_style('truestory_special_ann');
    wp_enqueue_style('truestory_page');
    wp_enqueue_style('truestory_category');
    wp_enqueue_style('truestory_tag');
    wp_enqueue_style('truestory_full-posts');
    wp_enqueue_style('truestory_list-posts');
    wp_enqueue_style('truestory_long-posts');
    wp_enqueue_style('truestory_single');
    wp_enqueue_style('truestory_related');
    wp_enqueue_style('truestory_comments');
    wp_enqueue_style('truestory_aside');
    wp_enqueue_style('truestory_search');
    wp_enqueue_style('truestory_404');
    wp_enqueue_style('truestory_about-author_widget');
    wp_enqueue_style('truestory_special_ann-widget');
    wp_enqueue_style('truestory_footer');
    wp_enqueue_style('truestory_font_awesome');

    /* Enqueue Responsive Styles */

    wp_enqueue_style('truestory_responsive');


    



    /* Registering Scripts */ 
    wp_register_script('fotorama_js',get_template_directory_uri().'/js/fotorama.js',array('jquery'),'1',true);
    wp_register_script('truestory_JS', get_template_directory_uri().'/js/truestory.js',array('jquery'),'1', true);
    wp_register_script('truestory_retina',get_template_directory_uri().'/js/retina.js',array('jquery'),'',true);
    wp_register_script('truestory_retina_min',get_template_directory_uri().'/js/retina.min.js',array('jquery'),'',true);
  
    /* Enqueue Scripts */
   

   
   wp_enqueue_script('fotorama_js');
   wp_enqueue_script('truestory_JS' );
   wp_enqueue_script('truestory_retina');
   wp_enqueue_script('truestory_retina_min');

    
    
   

 

  

    
    /* Fire Fonts */

    wp_enqueue_style('Oswald', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Josefin', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Raleway', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Roboto', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Lora', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Tangerine', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Lato', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Josefin', truestory_fonts_url(), array(), null );
    wp_enqueue_style('Tangerine', truestory_fonts_url(), array(), null );
    
    if (is_single() && get_option('thread_comments'))  wp_enqueue_script('comment-reply');


  }

  function truestory_fonts_url() {
$fonts_url = '';
 
/* Translators: If there are characters in your language that are not
* supported by any of the fonts , translate this to 'off'. Do not translate
* into your own language.
*/
$oswald = _x( 'on', 'Oswald font: on or off', 'truestory' );
$raleway = _x( 'on', 'Raleway font: on or off', 'truestory' );
$lora = _x( 'on', 'Lora font: on or off', 'truestory' );
$lato = _x( 'on', 'Lato font: on or off', 'truestory' );


 
if ( 'off' !== $oswald || 'off' !== $raleway ||  'off' !== $lora || 'off' !== $lato  ) {
$font_families = array();
 
if ( 'off' !== $oswald ) {
$font_families[] = 'Oswald:400,300';
}


 
if ( 'off' !== $raleway ) {
$font_families[] = 'Raleway:400,200,300,500,600,700,800';
}

if ( 'off' !== $lora ) {
$font_families[] = 'Lora:400,700,400italic,700italic';
}
if ( 'off' !== $lato ) {
$font_families[] = 'Lato:400,300italic,300,100italic,100,400italic,700,700italic,900,900italic';
}



$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext' ),
);
 
$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
 
return esc_url_raw( $fonts_url );
}
  



/* Include files
------------------------------------------*/

// Theme Options

require_once(get_template_directory().'/functions/customizer/T-Royal_customizer_control.php');
require_once(get_template_directory().'/functions/customizer/T-Royal_customizer_settings.php');
require_once(get_template_directory().'/functions/customizer/T-Royal_customizer_style.php');


/* Widgets */ 
require_once(get_template_directory().'/inc/widgets/latest_post.php');
require_once(get_template_directory().'/inc/widgets/about_author.php');
require_once(get_template_directory().'/inc/widgets/special_ann.php');
require_once(get_template_directory().'/inc/widgets/follow_widget.php');
require_once(get_template_directory().'/inc/widgets/fb_widget.php');


      
if ( function_exists('register_sidebar') ) {
 
  
    register_sidebar( array(
        'id'=>'sidebar-1',
        'name'=>'truestory-sidebar-widget',
        'description' => 'The sidebar widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
       register_sidebar(array(
        'name' => 'Instagram On Footer',
        'id' => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="widget-instagram %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="instagram-title">',
        'after_title' => '</h4>',
        'description' => 'Use the "Instagram" widget here. IMPORTANT: For best result select "Photo size" > "Large" and set number of images to 8.',
    ));
   
   
      
      
 
}



/* Adding Theme Setup */ 
  
   add_action('after_setup_theme','truestory_theme_setup' );

  function truestory_theme_setup(){


    load_theme_textdomain('truestory', get_template_directory() . '/languages');

    register_nav_menus(array( 
        
        'main-menu' => 'ThemeRoyal Primary Menu',
      ) );
    if ( ! isset( $content_width ) ) $content_width = 900;

    add_theme_support( 'post-thumbnails' );
    add_image_size('truestory_onhome_thumbnail','800','',true);
    add_image_size('truestory_onhome_nosb_thumbnail','','',true);
    add_image_size('truestory_grid_thumbnail','250','0',true);
    add_image_size('truestory_onsingle_related', 360, 360, true );
    add_image_size('truestory_onlong_thumbnail',400, 500,true);
    add_image_size('truestory_onquote_thumbnail',850, 500,true);


    /* Post formats  */ 
    add_theme_support( 'post-formats', array( 'gallery','video', 'audio','quote','link','aside', ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    
    
  }
   add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );
   function custom_image_sizes_choose( $sizes ) {
    $custom_sizes = array(
        'truestory_onlong_thumbnail' => 'truestory_onlong_thumbnail'
    );
    return array_merge( $sizes, $custom_sizes );
}

function truestory_get_embedded_media( $type = array() ){
  $content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
  $embed = get_media_embedded_in_content( $content, $type );
  
  if( in_array( 'audio' , $type) ):
    $output = str_replace( '?visual=true', '?visual=false', $embed[0] );
  else:
    $output = $embed[0];
  endif;
  
  return $output;


}


/* Excluding The Featured Category */

function truestory_category($separator) {
  
  if(balanceTags(get_theme_mod( 'truestory_hide_fcat' )) == true) {
    
    $excluded_cat = "News";
    
    $first_time = 1;
    foreach((get_the_category()) as $category) {
      if ($category->cat_ID != $excluded_cat) {
        if ($first_time == 1) {
          echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf(esc_html__( "View all posts in %s", "truestory" ), $category->name ) . '" ' . '><span>'  . $category->name.'</span></a>';
          $first_time = 0;
        } else {
          echo balanceTags($separator) . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "truestory" ), $category->name ) . '" ' . '><span>' . $category->name.'</span></a>';
        }
      }
    }
  
  } else {
    
    $first_time = 1;
    foreach((get_the_category()) as $category) {
      if ($first_time == 1) {
        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "truestory" ), $category->name ) . '" ' . '><span>'  . $category->name.'</span></a>';
        $first_time = 0;
      } else {
          echo balanceTags($separator) . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "truestory" ), $category->name ) . '" ' . '><span>' . $category->name.'</span></a>';
      }
    }
  
  }
}


/* truestory the excerpt */
function truestory_excerpt_length( $length ) {
  return 200;
}
add_filter( 'excerpt_length', 'truestory_excerpt_length', 999 );

function truestory_string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  
  if(count($words) > $word_limit) {
    array_pop($words);
  }
  
  return implode(' ', $words);
}

function truestory_words_limit(){
  return str_word_count(the_excerpt());
}

function truestory_post_content(){
  if(!is_single()):
  if(!has_post_format('quote')):
  if(!has_post_format('link')) :
  if(!has_post_format('aside')):
  if(has_post_format('video') OR has_post_format('audio')):
  the_content();
  wp_link_pages();
  else:
  
  the_content();
  wp_link_pages();
  endif; // end if post formats
  endif; // endif quote
  endif; 
  endif;
  elseif(is_single()):
  if(!has_post_format('quote')):  
  the_content(); 
?>
<?php if(is_single()) : ?>
      <div class="inpost-tags">
        <?php the_tags("",""); ?>
      </div>
    <?php endif; ?>

    <?php
  
  elseif(has_post_format('quote')):?>
  <div class="truestory-full-posts_late_info">
   <span class="truestory-full-posts_date-author">
       <?php the_time( get_option('date_format') ); ?>
       <?php if(get_the_tags()==true): ?>&nbsp;|&nbsp;<?php the_author(); ?><?php endif; ?>
   </span> 
 </div>
  <div class="truestory-full-posts_title">
 <h4 ><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
</div>
<?php
  endif;
  endif; 

 

}
/* Full Posts Thumbnail */ 
  function truestory_post_thumb(){ ?>
   <?php if(!has_post_format('quote') AND !has_post_format('video') AND !has_post_format('aside') AND !has_post_format('link')): ?><?php if(has_post_thumbnail()): ?><div class="truestory-full-posts_thumb-img"><?php if(get_theme_mod('truestory_disable_sidebar')==false): ?><?php the_post_thumbnail('truestory_onhome_thumbnail'); ?> <?php else: ?><?php the_post_thumbnail(); ?><?php endif; ?></div><?php endif;?><?php endif; ?>
           <?php if(has_post_format('video')): ?><div class='truestory-full-posts_video'><?php the_post_thumbnail('truestory_onhome_thumbnail'); ?></div><?php endif; ?>
           <?php if(has_post_format('audio')): ?><div class='truestory-full-posts_audio'><?php echo truestory_get_embedded_media( array('audio','iframe') ); ?></div><?php endif; ?>
           <?php if(has_post_format('quote')): ?>
     
     <div class="truestory-full-posts_quote" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'truestory_onquote_thumbnail', true); echo esc_url($thumb_url[0]); ?>);" <?php endif; ?>>

        <div class="truestory-full-posts-quote_soft-bg">
        <a href="<?php the_permalink();?>"> <?php the_content(); ?></a>
      </div>
      </div><br>
  <?php endif; ?>
  <?php if(has_post_format('link')): ?>
  <div class="post-link"><a target="_blank" href="<?php echo get_the_content(); ?>"><?php the_title(); ?></a></div>
    <?php endif; ?>

    <?php if(has_post_format('aside')):
  ?><div class="post-aside"><?php echo truestory_string_limit_words(get_the_excerpt(),100); printf("..");?></div><?php 
endif; }

function truestory_post_info(){
if(!has_post_format('quote') AND !has_post_format('aside') AND !has_post_format('link')): ?>

<div class="truestory-full-posts_title">
 <?php if(!has_post_format('quote')): ?>
  <h4>
  <a style="<?php if(is_sticky()):?>background:black; color:white; display:inline; line-height:50px; padding-left:10px; padding-right:10px;<?php endif; ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
  </h4><?php endif; ?>
</div>

<div class="truestory-full-posts_late_info">
   <span class="truestory-full-posts_date-author">
       <?php the_time( get_option('date_format') ); ?>
       <?php if(get_the_tags()==true): ?>&nbsp;|&nbsp;<?php the_author(); ?><?php endif; ?>
   </span> 
 </div>
<?php endif;

}

function truestory_post_footer(){
   if(!has_post_format('quote') AND !has_post_format('aside') AND !has_post_format('link')):
    ?><table class="post-footer"><tr><td>
      <?php if(is_single()==false): ?>
      <a href="<?php the_permalink(); ?>" class="truestory-full-posts_readmoree"><?php esc_html_e('Continue Reading','truestory') ?></a> 
      <?php elseif(is_single()): ?>
     <span class="truestory-full_posts_s_share">
      <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;
      <a   target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
     
      <a  target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
      </span>
     <?php endif; ?>
       <div class="truestory-full_posts-comnum-sm">
              <div class="truestory-full_posts-socialmedia"><?php truestory_category('  &nbsp;,&nbsp; '); ?></div>
              <div class="truestory-full_posts-comment-number">
              
              <?php comments_number(esc_html__('No Comments','truestory'), __('One Comment','truestory'), '% ' . esc_html__('Comments','truestory') ); ?></div>
              
            </div>
            
        </td></tr></table><br><?php endif;

}
 function truestory_remove_header_lack_error(){
        
        ?>
       
        <h5 class="h5_lack">&nbsp;</h5>
        
        <?php
}

        
/* Getting the Videos */ 
function show_thumb() {

  global $post, $posts;

  $thumb = '';

    ob_start();
    ob_end_clean();

  $output = preg_match_all('/(\<object.*\<\/object\>)/is', $post->post_content, $matches);
  $thumb = $matches [1] [0];

  if(empty($thumb)) {

    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $thumb = $matches [1] [0];  

    if(empty($thumb)) {

      $thumb = "/images/default.jpg";

    } else {
      

      return 'src="'.$thumb.'" alt="thumb-'.$post->ID.'" />';

    }

  } else {

    return $thumb;

    }

}

/* Theme Royal Pagination */ 
function truestory_pagination() {
  
  ?>
  
  <section class="pagination">
  <h5>&nbsp;</h5>
    <div class="older"><?php next_posts_link(__( 'Older Posts <i class="fa fa-angle-double-right"></i>', 'truestory')); ?></div>
    <div class="newer"><?php previous_posts_link(__( '<i class="fa fa-angle-double-left"></i> Newer Posts', 'truestory')); ?></div>
    
  </section>

          
  <?php
  
}


/* Theme Royal Comments */

function truestory_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
      <div id="comment-<?php comment_ID(); ?>">
        <header class="comment-header">
          <div class="comment_avatar"><?php echo get_avatar($comment,$args['avatar_size']); ?></div>

          <div class="comment-basic_info">
         <span class="author-commenter"><?php echo get_comment_author_link(); ?></span>
         <div class="comment-meta commentmetadata">
         
          <a class="comment_timing" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(esc_html__('%1$s at %2$s','truestory'),get_comment_date(), get_comment_time()) ?></a>
          <div class="edit_reply">
          <?php edit_comment_link(esc_html__('Edit','truestory'),'','') ?>
           <?php comment_reply_link(array_merge($args,array('depth'=>$depth,'max_depth'=>$args['max_depth']))) ?>
         </div>
       
         <?php comment_text() ?>
         </div>

        </header>
        <?php if($comment->comment_approved =='0') : ?>
        <em><?php esc_html_e('Your Comment is Awaiting Aproval.','truestory') ?></em>
      <br><br>

      <?php endif; ?>
        
        
        <div class="reply">
          <?php comment_reply_link(array_merge($args,array('depth'=>$depth,'max_depth'=>$args['max_depth']))) ?>
        </div>
      </div>
      
    </li>


    <?php 
  }
 
    function truestory_sanitize( $input ) {
    return strip_tags( stripslashes( $input ) );
}

 

?>
<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2 for parent theme True Story for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'truestory_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function truestory_register_required_plugins() {
  /*
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    // Video Thumbnails 
    array(
      'name'               => 'Video Thumbnails', // The plugin name.
      'slug'               => 'video-thumbnails', // The plugin slug (typically the folder name).
      'source'             => 'http://www.themeroyal.com/truestory/plugs/video-thumbnails.2.12.3.zip', // The plugin source.
      'required'           => true, // If false, the plugin is only 'recommended' instead of required.
      'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
      'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
      'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
      'external_url'       => '', // If set, overrides default API URL and points to an external URL.
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
    ),

    // Instagram ON Footer 
    array(
      'name'               => 'WP Instagram Widget', // The plugin name.
      'slug'               => 'wp-instagram-widget', // The plugin slug (typically the folder name).
      'required'           => true, // If false, the plugin is only 'recommended' instead of required.
      'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
      'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
      'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
      'external_url'       => '', // If set, overrides default API URL and points to an external URL.
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
    ),
);


  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(
    'id'           => 'themeroyal',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.

    /*
    'strings'      => array(
      'page_title'                      => __( 'Install Required Plugins', 'themeroyal' ),
      'menu_title'                      => __( 'Install Plugins', 'themeroyal' ),
      'installing'                      => __( 'Installing Plugin: %s', 'themeroyal' ), // %s = plugin name.
      'oops'                            => __( 'Something went wrong with the plugin API.', 'themeroyal' ),
      'notice_can_install_required'     => _n_noop(
        'This theme requires the following plugin: %1$s.',
        'This theme requires the following plugins: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_can_install_recommended'  => _n_noop(
        'This theme recommends the following plugin: %1$s.',
        'This theme recommends the following plugins: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_cannot_install'           => _n_noop(
        'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_ask_to_update'            => _n_noop(
        'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
        'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_ask_to_update_maybe'      => _n_noop(
        'There is an update available for: %1$s.',
        'There are updates available for the following plugins: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_cannot_update'            => _n_noop(
        'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_can_activate_required'    => _n_noop(
        'The following required plugin is currently inactive: %1$s.',
        'The following required plugins are currently inactive: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_can_activate_recommended' => _n_noop(
        'The following recommended plugin is currently inactive: %1$s.',
        'The following recommended plugins are currently inactive: %1$s.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'notice_cannot_activate'          => _n_noop(
        'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
        'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
        'themeroyal'
      ), // %1$s = plugin name(s).
      'install_link'                    => _n_noop(
        'Begin installing plugin',
        'Begin installing plugins',
        'themeroyal'
      ),
      'update_link'             => _n_noop(
        'Begin updating plugin',
        'Begin updating plugins',
        'themeroyal'
      ),
      'activate_link'                   => _n_noop(
        'Begin activating plugin',
        'Begin activating plugins',
        'themeroyal'
      ),
      'return'                          => __( 'Return to Required Plugins Installer', 'themeroyal' ),
      'plugin_activated'                => __( 'Plugin activated successfully.', 'themeroyal' ),
      'activated_successfully'          => __( 'The following plugin was activated successfully:', 'themeroyal' ),
      'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'themeroyal' ),  // %1$s = plugin name(s).
      'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'themeroyal' ),  // %1$s = plugin name(s).
      'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'themeroyal' ), // %s = dashboard link.
      'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'themeroyal' ),

      'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    ),
    */
  );

  tgmpa( $plugins, $config );
}
?>