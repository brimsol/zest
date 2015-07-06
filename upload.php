<?php

require_once("PluploadHandler.php");

PluploadHandler::no_cache_headers();
PluploadHandler::cors_headers();

if (!$file = PluploadHandler::handle(array(
	'target_dir' => './uploads/',
	'allow_extensions' => 'csv,xls,xlsx'
))) {
	die(json_encode(array(
		'OK' => 0, 
		'error' => array(
			'code' => PluploadHandler::get_error_code(),
			'message' => PluploadHandler::get_error_message()
		)
	)));
} else {
	die(json_encode(array('OK' => 1,'file_details'=>$file)));
}