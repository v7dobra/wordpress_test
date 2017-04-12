<?php
// Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'SimpleKey'); ?></p> 
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
       <div class="comments">
             <h2 class="c-title"><?php comments_number(__('NO COMMENTS ON THIS POST', 'SimpleKey'), __('ONE COMMENT ON THIS POST', 'SimpleKey'), __('% COMMENTS ON THIS POST', 'SimpleKey'));?> <?php printf(__('To &#8220;%s&#8221;', 'SimpleKey'), the_title('', '', false)); ?></h2>
            <ol class="commentlist">
                   <?php wp_list_comments(array( 'type' => 'comment','callback' => 'sk_custom_comments' ));?> 
            </ol>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <div class="c-navi">
               <div class="alignleft"><?php previous_comments_link() ?></div>
               <div class="alignright"><?php next_comments_link() ?></div>
               <div class="clearfix"></div>
            </div>
            <?php endif;?>
    </div>
<?php endif; ?>

<?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'SimpleKey' ); ?></p>
  <?php endif; ?>

  <?php
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
  $req_label='';
  if($req)$req_label=' *';
  $title_reply='<h2 class="c-title">'.__( 'Leave a Reply', 'SimpleKey' ).'</h2>';
  $title_reply_to='<h2 class="c-title">'.__( 'Leave a Reply to %s', 'SimpleKey').'</h2>';
  $login_as='<dl style="margin-bottom:0;height:30px;">
      <dt>&nbsp;</dt>
      <dd>' .sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( )))). '</dd>
  </dl>
  ';
  $name='<dl>
      <dt>'.__('Your Name', 'SimpleKey').$req_label.'</dt>
      <dd><input type="text" name="author" id="author" value="'.esc_attr($comment_author).'" size="22" tabindex="1" '.$aria_req.' /> </dd>
  </dl>';
  $email='<dl>
      <dt>'.__('Your Email', 'SimpleKey').$req_label.'</dt>
      <dd><input type="text" name="email" id="email" value="'.esc_attr($comment_author_email).'" size="22" tabindex="2" '.$aria_req.' /></dd>
  </dl>';
  $website='<dl>
      <dt>'.__('Website', 'SimpleKey').'</dt>
      <dd><input type="text" name="url" id="url" value="'.esc_attr($comment_author_url).'" size="22" tabindex="3" /></dd>
      </dl>';
  $content='<dl> 
      <dt>'.__('Message', 'SimpleKey').'</dt>
      <dd><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></dd>
      </dl>';
  $fields =  array(
    'author' => $name,
    'email'  => $email,
    'url'    => $website,
  ); 
  
  comment_form( array(
   'fields' => $fields, 
   'comment_field' => $content, 
   'label_submit' => esc_html__('Post Comment','SimpleKey'), 
   'title_reply' => $title_reply, 
   'title_reply_to' => $title_reply_to,
   'class_submit' => 'built-in-btn sk-submit-comment'
  ) );
?>