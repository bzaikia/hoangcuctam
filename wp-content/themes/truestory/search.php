<?php get_header(); ?>
<div class="truestory_sub_container_single">

<div class="truestory-posts-search">
<div class="truestory-search_query">
<h2> *&nbsp;<?php the_search_query(); ?>&nbsp;* </h2>
</div><br>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="truestory-full-posts_search">

            <?php get_template_part('content'); ?>

        </section> <?php endwhile; ?> 

         <?php else: ?> <!-- If No Results -->
         
         <p class="search_empty"><?php esc_html_e( 'Sorry, There is no Result Matching Your Search , Try Something Else', 'truestory' ); ?></p>

       <?php  endif; ?> <!-- Endif Have Posts -->

       </div>

       <?php get_sidebar(); ?>


	</div>
<?php get_footer(); ?>