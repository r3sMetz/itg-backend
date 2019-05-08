<?php
/** Email Settings */
add_action( 'phpmailer_init', function ( PHPMailer $phpmailer ) {
	// Mailtrap for development
	if ( HWPG_ENV == 'development' ) {
		$phpmailer->isSMTP();
		$phpmailer->Host     = 'smtp.mailtrap.io';
		$phpmailer->SMTPAuth = true;
		$phpmailer->Port     = 2525;
		$phpmailer->Username = '4e5a7c5254fee4';
		$phpmailer->Password = '56db45d2cf72f0';
	}
} );