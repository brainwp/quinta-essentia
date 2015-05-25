<?php
class Brasa_Social_Feed{
	public function __construct($args){
		$this->args = $args;

		//ajax facebook
		add_action( 'wp_ajax_facebook_brasa_social_feed', array($this,'do_ajax_facebook') );
		add_action( 'wp_ajax_nopriv_facebook_brasa_social_feed', array($this,'do_ajax_facebook') );

		//ajax youtube
		add_action( 'wp_ajax_youtube_brasa_social_feed', array($this,'do_ajax_youtube') );
		add_action( 'wp_ajax_nopriv_youtube_brasa_social_feed', array($this,'do_ajax_youtube') );
	}

	public function get_facebook_posts($limit = 2){
		$request_url = add_query_arg( 
			array(
				'access_token' => $this->args['facebook_auth'],
				'posts.limit'  => $limit
			), 
			$this->args['facebook_api_url'] 
		);
		$request_url = esc_url_raw($request_url);
		$request = wp_remote_get( $request_url );
		$response = json_decode( wp_remote_retrieve_body( $request ), true );
		return $response['data'];
	}

	public function do_ajax_facebook(){
		$limit = 2;
		$posts = $this->get_facebook_posts($limit);

		if(!$posts || empty($posts))
			wp_die();
		foreach ($posts as $post) {
			global $fb_post;
			$fb_post = $post;
			get_template_part('content','facebook');
		}
		wp_die();
	}

	public function get_youtube_posts($limit = 4){
		$request_url = add_query_arg( 
			array(
				'channelId'    => $this->args['youtube_user'],
				'part'         => 'snippet,id&order=date',
				'maxResults'   => 4,
				'key'          => $this->args['youtube_auth']
			), 
			'https://www.googleapis.com/youtube/v3/search/' 
		);
		$request_url = esc_url_raw($request_url);
		$request = wp_remote_get( $request_url );
		$response = json_decode( wp_remote_retrieve_body( $request ), true );
		return $response['items'];
	}

	public function do_ajax_youtube(){
		$limit = 2;

		$posts = $this->get_youtube_posts($limit);
		if(!$posts || empty($posts))
			wp_die();
		foreach ($posts as $post) {
			global $yt_post;
			$yt_post = $post;
			get_template_part('content','youtube');
		}
		wp_die();
	}

}