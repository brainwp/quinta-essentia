<?php 
/* youtube posts content */
global $yt_post;
$url = 'https://youtu.be/'.$yt_post['id']['videoId'];
?>
<a class="youtube social-feed col-md-12" href="<?php echo esc_url($url);?>">
	<img src="<?php echo esc_url($yt_post['snippet']['thumbnails']['medium']['url']);?>">
</a><!-- .col-md-12 -->
<div class="col-md-12" style="height:20px;clear:both"></div><!-- .col-md-12 -->