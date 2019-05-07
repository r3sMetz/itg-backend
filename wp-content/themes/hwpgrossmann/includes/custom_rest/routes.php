<?php
/** Custom Rest Routes for hwpgrossmann */
add_action( 'rest_api_init', function () {
  // Get Options
  register_rest_route( HWPGROSSMANN_REST_NAMESPACE, 'options', array(
    'methods' => 'GET',
    'callback' => 'handle_options',
  ) );
} );