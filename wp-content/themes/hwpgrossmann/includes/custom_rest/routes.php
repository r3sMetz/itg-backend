<?php
/** Custom Rest Routes for hwpgrossmann */
add_action( 'rest_api_init', function () {
	// Get Options
  register_rest_route( HWPGROSSMANN_REST_NAMESPACE, 'options', array(
    'methods' => WP_REST_Server::READABLE,
    'callback' => 'handle_options',
  ) );

  // Submit Form
  register_rest_route( HWPGROSSMANN_REST_NAMESPACE, 'submit', array(
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => 'handle_submit',
  ) );
} );