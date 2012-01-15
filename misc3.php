<?php error_reporting (E_ALL ^ E_NOTICE); /* 1st line (recommended) */ ?>

<?php
global $totaal, $json;
$totaal = 0;
$json = file_get_contents("http://search.twitter.com/search.json?q=%23misc11", true); //getting the
$json_decode = json_decode($json);        
$totaal += count($json_decode->results);   

 echo $totaal;
?> #misc11

