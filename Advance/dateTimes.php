<?php
//date_default_timezone_set("Asia/Yangon");
$today = time();
$todayMO = date("d M, Y h:i:s a",$today)."<br />";
echo $todayMO ."<br />";

$todayDay= date("d",$today);
echo $todayDay ."<br />";

$strYear= date("Y",$today);
echo $strYear ."<br />";

$str1 = strtotime("today");
echo $str1 ."<br />";

$importantDate = mktime(17,20,59,8,28,2020);
echo date("d M, Y h:i:s A", $importantDate )."<br /> <br/>";

$importantDate = strtotime("tomorrow");    #24 hours from now
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("now + 24 hours");
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("last saturday");
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("8pm + 3 days");
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("2 weeks ago");      # at current time
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("next year gmt");    #1 year from now
echo date("d M, Y h:i:s A", $importantDate )."<br />";
$importantDate = strtotime("tomorrow 4am");
echo date("d M, Y h:i:s A", $importantDate )."<br />";

?>