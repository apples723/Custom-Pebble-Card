<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 
$url = "http://api.openweathermap.org/data/2.5/weather?id=4879890&units=imperial"; <!-- Change ID to your location -->
$str = file_get_contents($url);
$json = json_decode($str, true);
$tempmin =  $json['main']['temp_min'];
$tempmax =  $json['main']['temp_max'];
$currenttemp = $json['main']['temp'];
$minandmax = "The current tempeture is $currenttemp. \n \n \nThe weather for today is a high of $tempmax and a low of $tempmin.";
$content = $minandmax;


$array = array(
	"content" => $content,
     "refresh_requency" => 30
);


echo json_encode($array);
?>
