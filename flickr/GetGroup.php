<?php

include 'XmlToJson.php';

#
# Validate input
#
if( ! empty($_GET['group']) ) {		
	
	$group = $_GET['group'];

} else {

	print '{"@attributes":{"stat":"error", "message":"No Group"}}';
	return;
}

#
# URL encode API params
#
$my_api_key = '[YOUR API KEY]';

$params = array(
	'api_key'	=> $my_api_key,
	'method'	=> 'flickr.groups.pools.getPhotos',
	'group_id'	=> $group,
	'per_page'	=> '5',
	'format'	=> 'rest'	// responds with XML
);

$encoded_params = array();

foreach ($params as $name => $value){

	$encoded_params[] = urlencode($name).'='.urlencode($value);
}

#
# Flickr API
#
$url = "http://api.flickr.com/services/rest/?".implode('&', $encoded_params);

#
# This custom PHP Class converts XML to JSON
#
print XmlToJson::Get($url);

?>