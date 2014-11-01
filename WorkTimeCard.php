<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 
$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=lat,long&destinations=lat,long&mode=driving&language=fr-FR&key=key";  <!--replace lat & long with your starting place and destination and provide your own key -->
$str = file_get_contents($url);
$json = json_decode($str, true);
$time =  $json['rows'][0]['elements'][0]['duration']['text'];
$final = "Time to work is $time";
$content = "$final";

$array = array(
	"content" => $content,
     "refresh_requency" => 30
);

echo json_encode($array);
?>
