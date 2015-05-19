<?php 
/* facebook posts content */
global $fb_post;
?>
<a class="social-feed col-md-12 animated tada" href="<?php echo esc_url($fb_post['link']);?>">
	<div class="col-md-4 pull-left img-container">
		<?php if($fb_post['type'] == 'photo'): ?>
		    <img src="<?php echo esc_url($fb_post['picture']);?>">
	    <?php endif;?>
	</div><!-- .col-md-4 pull-left img-container -->
	<div class="col-md-7 pull-right">
		<?php if($fb_post['message'] && !empty($fb_post['message'])): ?>
		    <?php echo esc_textarea($fb_post['message']);?>
	    <?php endif;?>
	</div><!-- .col-md-7 pull-right -->
</a><!-- .col-md-12 -->
<div class="col-md-12" style="height:20px;clear:both"></div><!-- .col-md-12 -->