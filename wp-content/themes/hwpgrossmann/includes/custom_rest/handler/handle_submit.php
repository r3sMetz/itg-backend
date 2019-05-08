<?php
/** Route Handler for /submit  */
function handle_submit( WP_REST_Request $request ) {
	$hwpg_rest_request = new HWP_Grossmann_REST_Request( $request, true );


	// If is authorized
	if ( $hwpg_rest_request->is_authenticated() ) {
		// Setup Data
		$formData       = $request->get_body_params();
		$sanitized_data = array(
			"name"          => trim( $formData['name'] ),
			"email"         => sanitize_email( $formData['email'] ),
			"message"       => trim( $formData['message'] ),
			"check_privacy" => boolval( $formData['check_privacy'] ),
		);


		// Sending Email
		$to      = 'it-consulting-grossmann@t-online.de';
		$subject = 'Neue Formularanfrage (it-consulting-grossmann.de)';
		$message = "Von: " . $sanitized_data['name'] . "\n";
		$message .= "Email: " . $sanitized_data['email'] . "\n\n";
		$message .= "Nachricht: \n" . $sanitized_data['message'];

		$success = wp_mail( $to, $subject, $message );


		// Respond to Client
		$response = array(
			"success" => $success,
			"message" => $success ? "Email erfolgreich gesendet." : "Leider ist ein Fehler aufgetreten, bitte versuchen Sie es später noch einmal"
		);

		wp_send_json( $response, $hwpg_rest_request->get_http_status() );
	}
	// Not Authorized
	else {
		$message = "Nope!";
		wp_send_json_error( $message, $hwpg_rest_request->get_http_status() );
	}
}
