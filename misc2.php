<?php error_reporting (E_ALL ^ E_NOTICE); /* 1st line (recommended) */ ?>


<?php
global $total, $json;
$total = 0;
$json = file_get_contents("http://search.twitter.com/search.json?q=%23misc12", true); //getting the
$json_decode = json_decode($json);        
$total += count($json_decode->results);   

 echo $total;
?>
 #misc12

