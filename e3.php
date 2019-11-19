#!/usr/bin/php
<?
$data = fopen("index.html","r");
if(!$data){echo "No file!!!!!!!\n";}
$word = explode(' ',$data);
echo count($word);
fclose($date);


?>
