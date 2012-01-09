<?php

$username = $_GET['username'];

$twitterHost = "http://twitter.com/statuses/user_timeline/".$username.".xml?count=10";

$curl = curl_init();

curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_URL, $twitterHost);

$result = curl_exec($curl);
curl_close($curl);

header('Content-Type: application/xml; charset=ISO-8859-1');

print $result;

?>
