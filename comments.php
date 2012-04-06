<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<?php
			return;
		}
	}
?>
<!-- You can start editing here. -->
<div id="commenting" class="clear"></div>
<?php if ($comments) : ?>
<h1><?php comments_number('Sin comentarios', '1 Comentario', '% Comentarios' );?></h1>
<div class="hr_top"></div>
		<?php foreach ($comments as $comment) : ?>
			<p id="comment-<?php comment_ID() ?>" class="comment_author"><?php comment_author_link() ?> <em class="time"><?php comment_date('j/n/Y - G:i') ?></em>
			</p>
			<div class="comments">
				<?php comment_text() ?>
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="meta">This comment is awaiting moderation. Thanks for your patience!</p>
				<?php endif; ?>
				<p><?php edit_comment_link('edit','',''); ?></p>
			</div>
		<div class="hr"></div>
	<?php endforeach; /* end for each comment */ ?>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?><!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?><!-- If comments are closed. -->
		<span class="meta"><b>Comments</b> are closed.</span>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div class="leave_comment">
	<h1 id="respond">Dejá tu comentario</h1>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
	<p>Registrado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> - <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout</a>.</p>
	<?php else : ?>
	<p><label for="author">Nombre<span class="meta"><?php if ($req) echo " - Requerido"; ?></span></label></p>
	<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="input" tabindex="1" />
	<p><label for="email">Email<span class="meta"><?php if ($req) echo " - Requerido"; ?> (no se publica)</span></label></p>
	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="input" tabindex="2" />
	<p><label for="url">Sitio web</label></p>
	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="input" tabindex="3" />
	<?php endif; ?>
	<p>Comentario</p>
	<p><textarea name="comment" id="comment" cols="20" rows="10" class="textarea" tabindex="4"></textarea></p>
	<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
	<p><input name="submit" type="submit" id="submit" class="button" value="Publicar" tabindex="5" /></p>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>