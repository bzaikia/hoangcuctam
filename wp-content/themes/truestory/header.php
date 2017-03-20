 <!DOCTYPE html> 
 <html <?php language_attributes(); ?> >
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  
</head>

<body <?php body_class(); ?> >
  <div id="fb-root"></div>
  <div class="truestory-wrapper">
<div class="truestory_author">
<?php if(get_theme_mod('author_logo')) : ?>
<br>
<br>
  <div class="truestory-logo-top"><img wdth="300" alt="Blog Picutre" src="<?php echo esc_url(get_theme_mod('author_logo')); ?>" /></div> 
         <br><br>
         <?php endif; ?>
         <?php 
               get_template_part('inc/menu/menu');
            ?>

          <?php if(get_theme_mod('author_name') OR get_theme_mod('author_description') OR get_theme_mod('profile_picture')) :?>
           
           <div class="about-author-top">
           
            <?php if(get_theme_mod('profile_picture')): ?> 
            <div class="about-author-personal-picture">
            <img alt="Blog Picutre" src="<?php echo esc_url(get_theme_mod('profile_picture')); ?>"  />
            </div>
          <?php endif; ?>
            <div class="about-author-personal-data" >
           
            <?php if(get_theme_mod('author_name')): ?> <h3 class="about-author-personal-name"><?php echo esc_html(get_theme_mod('author_name')); ?></h3><?php endif; ?>
            <?php if(get_theme_mod('author_description')):?>
            <p class="about-author-personal-desc">
           <?php echo esc_html(get_theme_mod('author_description')); ?>
          <?php endif; ?>

          <?php if(get_theme_mod('author_name') OR get_theme_mod('author_description')) :?>

              <div class="truestory-about-author-top-social">
 
        <?php if(get_theme_mod('truestory_facebook')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_facebook'))); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>

        
        <?php if(get_theme_mod('truestory_twitter')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_twitter'))); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_instagram')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_instagram'))); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_pinterest')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_pinterest'))); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_bloglovin')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_bloglovin'))); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_google')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_google'))); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_tumblr')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_tumblr'))); ?>" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
        <?php if(get_theme_mod('truestory_youtube')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_youtube'))); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
        
        <?php if(get_theme_mod('truestory_dribbble')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_dribbble'))); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
        
        <?php if(get_theme_mod('truestory_linkedin')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_linkedin'))); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
        
        
        <?php if(get_theme_mod('truestory_vimeo')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_vimeo'))); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
        
        
              
        <?php if(get_theme_mod('truestory_rss')) : ?><a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('truestory_rss'))); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
     
        </div>
      <?php endif; ?>
            </div>
            </div>
          <?php endif; ?>


    </div>
    
<?php 
if(get_theme_mod('featured_template')!="disable"): 
if(is_front_page()):
      
      get_template_part('inc/featured/featured');

    endif;
  endif; ?>
      

    ?>

   
           

