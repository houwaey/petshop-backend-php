<?php
class BaseController {
	
	protected function getQueryStringParams() {
		return parse_str($_SERVER["QUERY_STRING"], $query);
	}
	
	protected function sendOutput($data) {
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
		exit;
	}
}