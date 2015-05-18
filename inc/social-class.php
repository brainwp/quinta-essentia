<?php
class Brasa_Social_Feed{
	public function __construct($args){
		$this->args = $args;
		add_action( 'wp_ajax_facebook_brasa_social_feed', array($this,'do_ajax_facebook') );
		add_action( 'wp_ajax_nopriv_facebook_brasa_social_feed', array($this,'do_ajax_facebook') );
	}

	public function get_facebook_posts($limit = 2){
		$request_url = add_query_arg( 
			array(
				'access_token' => $this->args['facebook_auth'],
				'posts.limit'  => $limit
			), 
			$this->args['facebook_api_url'] 
		);
		$request_url = esc_url($request_url);
		$request = wp_remote_get( $request_url );
		$response = json_decode( wp_remote_retrieve_body( $request ), true );
		return $response['data'];
	}

	public function do_ajax_facebook(){
		$limit = 2;
		$posts = $this->get_facebook_posts($limit);

		if(!$posts || empty($posts))
			wp_die();
		$i = 1;
		foreach ($posts as $post) {
			if($i > $limit)
				break;

			global $fb_post;
			$fb_post = $post;
			get_template_part('content','facebook');
			$i++;
		}
		wp_die();
	}

}