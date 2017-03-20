 </div>



 <footer>

<div id="instagram-footer">

		
		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram On Footer') ) ?>
		
	
</div>
   <div class="footer">
   
   


        
         
    </style>
    <?php if(get_theme_mod('author_footer_logo')) : ?>
       <div class="footer-logo">
       <img src="<?php echo esc_url(get_theme_mod('author_footer_logo')); ?>" />" />
       </div>
     <?php endif; ?>
         <div class="truestory-about-author-social">
        <a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('trueroad_facebook'))); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        <a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('trueroad_facebook'))); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
        <a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('trueroad_facebook'))); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        <a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('trueroad_facebook'))); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
        <a class="truestory-about-author-social-icon" href="<?php echo balanceTags(esc_url(get_theme_mod('trueroad_facebook'))); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
        </div>
          
          

            <?php if(get_theme_mod('footer-copyrights')):?>
          <div class="footer-copyrights">
          <span class="footer-copyrights-text"><?php echo esc_attr(get_theme_mod('footer-copyrights'));?></span>
          </div>
        <?php else : ?>
          <div class="footer-copyrights">
          <span class="footer-copyrights-text">Crafted & Developed by ThemeRoyal.com</span>
          </div>
        <?php endif; ?>




</div>
<?php wp_footer(); ?>

 </footer>
  </body>
 </html>