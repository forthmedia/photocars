<?php

class XmlToJson {
	
	public static function Get($url) {

		$response = file_get_contents($url);
		$response = simplexml_load_string($response);
		$response = json_encode($response);
		return $response;

	}
}

?>