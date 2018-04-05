<?php
/**** Sample PHP Function ***/
function shorten($url, $custom = "", $format = "json") { 
$api_url = "http://api.yougraph.fr/api/?key=YOURAPIKEY";
$api_url .= "&url=".urlencode(filter_var($url, FILTER_SANITIZE_URL));
if(!empty($custom)){
$api_url .= "&custom=".strip_tags($custom);
}
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => $api_url
));
$Response = curl_exec($curl);
curl_close($curl);
if($format == "text"){
$Ar = json_decode($Response,TRUE);
if($Ar["error"]){
return $Ar["msg"];
}else{
return $Ar["short"];
}
}else{
return $Response;
}
}
?>