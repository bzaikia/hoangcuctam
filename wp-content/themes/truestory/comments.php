







<?php if(have_comments()) : ?>
	
    <h4 id="comments">
    <?php if (post_password_required() == true) {
	return;
} ?>
    <?php comments_number(esc_html__('No Comments','truestory'), esc_html__('One Comment','truestory'), '<span class="com-num" >% </span>' . esc_html__('Comments','truestory') );  ?>
    	
    </h4><br>
    	<ul class="thetr-comments">

    	<?php wp_list_comments(array(
				'avatar_size'	=> 50,
				'callback'		=> 'truestory_comments',
				
			)); ?>
    </ul>
<?php endif; ?>

		<div id='comments_pagination'>
			<?php paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;')); ?>
		</div>
<br>
<?php 
$custom_comment_field = '
<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>

 '; 

comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> esc_html__('Leave a Reply', 'truestory'),
			'cancel_reply_link'		=> esc_html__('Cancel Reply', 'truestory'),
			'label_submit'			=> esc_html__('Post Comment', 'truestory')
		));
	 ?>

