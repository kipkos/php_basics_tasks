<?php
$s = 250;
$t = 60;
$pr = 100;


$kh = ($t/$s)*100;
$ms = round(($kh*1000)/3600);

echo "$kh км/час <br />";
echo "$ms м/сек";
?>