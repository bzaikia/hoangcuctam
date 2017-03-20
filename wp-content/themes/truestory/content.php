

<article class="truestory-full-posts">
        
    <!-- Post Thumbnail wheter its a video / audio / picutre & Post Title,author,.. -->
    <?php truestory_remove_header_lack_error(); ?>
   
        <div class="truestory-full_posts-thumb">
          <?php truestory_post_thumb(); ?>
        </div>
           



        <div class="truestory-full_posts-info">
          <?php truestory_post_info(); ?>
        </div>

    


   <!-- Post Content , It Displays a number of words based on the post type -->

      <div class="truestory-full_posts-content">
          <?php truestory_post_content(); ?>
      </div>

    


   <!-- Post Footer -->

      <footer  class="truestory-full-posts_footer">
          <?php truestory_post_footer(); ?>
      </footer>

</article>


<?php if(is_single()): ?>
  <?php get_template_part('inc/templates/related' ); ?>
  <?php endif; ?>

  
  <?php comments_template('', true); ?>
