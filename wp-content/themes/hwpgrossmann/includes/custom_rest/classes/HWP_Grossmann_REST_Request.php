<?php

class HWP_Grossmann_REST_Request{
  private $hasAccess = false;
  private $httpStatus = HWPGROSSMANN_STATUS_NOT_FOUND;

  public function __construct(WP_REST_Request $request, $authRequired){
	// If Auth is Required -> Authenticate
	if($authRequired){
		$api_key = get_option('options_hwpgrossmann_api_key');
		$requestData = json_decode($request->get_body(),true);
		$key_from_request = $requestData['api_key'];
		$status_code_in_case_of_failure = $key_from_request ? HWPGROSSMANN_STATUS_NOT_AUTHORIZED : HWPGROSSMANN_STATUS_BAD_REQUEST;

		$this->hasAccess = $api_key === $key_from_request;
		$this->httpStatus = $this->hasAccess ? HWPGROSSMANN_STATUS_OKAY : $status_code_in_case_of_failure;
	}

	// Else Authorize by default
	else {
		$this->httpStatus = HWPGROSSMANN_STATUS_OKAY;
		$this->hasAccess = true;
	}
  }

  public function is_authenticated(){
    return $this->hasAccess;
  }

  public function get_http_status(){
    return $this->httpStatus;
  }
}