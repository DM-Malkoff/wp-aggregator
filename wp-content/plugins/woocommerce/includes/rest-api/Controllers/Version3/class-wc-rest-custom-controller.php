<?php 

class WC_REST_Custom_Controller extends WC_REST_Products_V2_Controller{
	/**
	 * You can extend this class with
	 * WP_REST_Controller / WC_REST_Controller / WC_REST_Products_V2_Controller / WC_REST_CRUD_Controller etc.
	 * Found in packages/woocommerce-rest-api/src/Controllers/
	 */
	protected $namespace = 'wc/v3';

	protected $rest_base = 'custom';

	public function get_custom( $data ) {
		return array( 'custom' => 'Data111' );
	}

	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				'methods' => 'GET',
				'callback' => array( $this, 'get_custom' ),
			)
		);
	}
}
