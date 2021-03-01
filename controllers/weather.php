<?php
$ch = curl_init();
$location = "Ipswich, UK";
$api_key = '1bf295976d4b7f87730a4b0491023865';
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL,'http://api.openweathermap.org/data/2.5/weather?q='.$location.'&appid='.$api_key);
$output = curl_exec($ch);
curl_close($ch);
$output = json_decode($output, true);
$smarty->assign("current_weather", $output);
$smarty->assign("location",$location);