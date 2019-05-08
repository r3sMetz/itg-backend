<?php
// Load Constants
require('constants.php');

// CORS
require('cors.php');

// Load Classes
require('classes/HWP_Grossmann_REST_Request.php');

// Load Handlers
require('handler/handle_options.php');
require('handler/handle_submit.php');

// Add Routes
require('routes.php');