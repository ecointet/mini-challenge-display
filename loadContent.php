<?php
$app_url = $_GET["url"];
$url = "http://".$app_url."/noform";
$output = file_get_contents($url);
$output = str_replace("+", " ", $output);
echo $output;
?>