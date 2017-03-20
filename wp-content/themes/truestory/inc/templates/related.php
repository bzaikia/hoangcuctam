   <?php 

$orig_post = $post;
global $post;

$categories = get_the_category($post->ID);

if ($categories) {

	$category_ids = array();

	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args = array(
		'category__in'     => $category_ids,
		'post__not_in'     => array($post->ID),
		'posts_per_page'   => 3, // Number of related posts that will be shown.
		'ignore_sticky_posts' => 1,
		'orderby' => 'rand',
		'meta_query' => array( 
        array(
            'key' => '_thumbnail_id'
        ) 
    )

	);

	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) { 
	if(has_post_thumbnail()) : ?>

		


   <section class="truestory-related">
   	<h4 class="truestory-related_word"><?php if(get_theme_mod('related-posts_title')) : ?><?php echo esc_attr(get_theme_mod('related-posts_title'));?><?php else: ?><?php esc_html_e('You Might Also Like','truestory');?><?php endif;?></h4>
        <ul>
        	<?php while( $my_query->have_posts() ) {
			$my_query->the_post();?>
          <li>
            
            <div class="truestory-related_img"><?php the_post_thumbnail('truestory_onsingle_related'); ?></div>
            <div class="truestory-related_info">
              <a class="truestory-related-info_title" href="<?php the_permalink();?>"><?php the_title(); ?></a><br>
              <span>By <?php the_author(); ?></span><br>
             
            </div>
          
          <?php
		}
		?></li><?php
		endif;
	}
}
$post = $orig_post;
wp_reset_postdata();

?>
        </ul>
      </section><br><br>