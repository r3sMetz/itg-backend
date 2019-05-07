<?php
/** Route Handler for /options  */
function handle_options(WP_REST_Request $request){
  $hwpg_rest_request = new HWP_Grossmann_REST_Request($request,false);

  // If is authorized
  if($hwpg_rest_request->is_authenticated()){
    $logo_id = get_option('options_logo');
    $data = array(
        "logo" => wp_get_attachment_url($logo_id),
        "adress" => get_option('options_adresse'),
    );
    wp_send_json($data,$hwpg_rest_request->get_http_status());
  }

  // Not Authorized
  else {
    $message = "Nope!";
    wp_send_json_error($message,$hwpg_rest_request->get_http_status());
  }
}