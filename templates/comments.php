<?php
if( !function_exists('revo_comment') ){
	function revo_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<div id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
			<div class="author pull-left">
				<?php echo get_avatar($comment, $size = '70'); ?>
			</div>
			<div class="media-body">
				<div class="media">
					<div class="media-heading clearfix">
						<div class="author-name custom-font pull-left">
							<span><?php echo comment_author_link(get_comment_ID())?></span>
						</div>
						<div class="time pull-left">
							<?php edit_comment_link(__('(Edit)', 'revo'), '', ''); ?>
							<time datetime="<?php echo comment_date('c'); ?>"><?php printf(__('%1$s', 'revo'), get_comment_date(),  get_comment_time()); ?></time>
						</div>
						<div class="reply pull-right"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
					</div>
					<?php if ($comment->comment_approved == '0') : ?>
						<div class="awaiting row-fluid">
						  <i><?php esc_html_e('Your comment is awaiting moderation.', 'revo'); ?></i>
						</div>
					<?php endif; ?>
					<div class="media-content row-fluid">
						<?php comment_text(); ?>						
					</div> 
				</div>
		 	 </div>
		</div>
<?php } } ?>

<?php if (have_comments()) : ?>
	<div id="comments">
		<h3><?php esc_html_e( 'Comments', 'revo' ) ?> <small>(<?php echo get_post()->comment_count;?>)</small></h3>
		<?php if (post_password_required()) : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">
				<a class="close" data-dismiss="alert">&times;</a>
				<p><?php esc_html_e('This post is password protected. Enter the password to view comments.', 'revo'); ?></p>
			</div>
		<?php else:  ?>
		
		<div class="commentlist">
			<div class="entry-summary">
				<?php wp_list_comments(array('callback' => 'revo_comment')); ?>
			</div>
		</div>

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
			<nav id="comments-nav" class="pager">
				<ul class="pager">
					<?php if (get_previous_comments_link()) : ?>
						<li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'revo')); ?></li>
					<?php else: ?>
						<li class="previous disabled"><a><?php esc_html_e('&larr; Older comments', 'revo'); ?></a></li>
					<?php endif; ?>
					<?php if (get_next_comments_link()) : ?>
						<li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'revo')); ?></li>
					<?php else: ?>
						<li class="next disabled"><a><?php esc_html_e('Newer comments &rarr;', 'revo'); ?></a></li>
					<?php endif; ?>
				</ul>
			</nav>
		<?php endif; // check for comment navigation ?>
	<?php endif; ?>
	</div><!-- /#comments -->
<?php endif; ?>

<?php 
if (comments_open()) : 
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$title_reply = '<div class="title">' . esc_html__( 'LEAVE A COMMENT', 'revo' ) . '</div>';
		$comment_notes_before = '<p>' . esc_html__( 'Make sure you enter the(*) required information where indicated. HTML code is not allowed', 'revo' ) .'</p>';
		$author = '<div class="cmm-box-top clearfix">
				<div class="control-group your-name pull-left">
					<div class="controls">
						<input type="text" class="input-block-level" placeholder="'. esc_attr__( 'Name*', 'revo' ) .'" name="author" id="author" value="'. esc_attr( $comment_author ) .'" size="22" tabindex="1" '. $aria_req . '>	
					</div>
				</div>';
		$email = '<div class="control-group your-email pull-left">
					<div class="controls">
						<input placeholder="'. esc_attr__( 'Email*', 'revo' ) .'" type="email" class="input-block-level" name="email" id="email" value="' . esc_attr( $comment_author_email ) .'" size="22" tabindex="2" '. $aria_req . '>
					</div>
				</div>';
		$url = '<div class="control-group website pull-left">		
					<input placeholder="'. esc_attr__( 'Your Website', 'revo' ) .'" type="url" class="input-block-level" name="url" id="url" value="'. esc_attr( $comment_author_url ) .'" size="22" tabindex="3">
				</div>
			</div>';
		$comment_field = '<div class="cmm-box-bottom clearfix">
				<div class="control-group your-comment">			
					<div class="controls">
						<textarea name="comment" placeholder="'. esc_attr__( 'Your Comment *', 'revo' ) .'" id="comment" class="input-block-level" rows="7" tabindex="4" '. $aria_req . '></textarea>
					</div>
				</div>
			</div>';
		$fields = array( 'author' => $author, 'email' => $email, 'url' => $url );
		$args = array( 'fields' => $fields, 'comment_field' => $comment_field, 'comment_notes_before' => $comment_notes_before, 'comment_notes_after' => '', 'title_reply' => $title_reply, 'label_submit' => esc_html__( 'Submit', 'revo' ) );
		comment_form( $args );
	endif;