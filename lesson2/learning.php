<?php
$today=date("l");
$topics=array("Monday"=>"php","Tuesday"=>"html","Wednesday"=>"css","Thursday"=>"apache","Friday"=>"markdown");
$topic= $topics[$today];
echo "Today $today we are going to learn all about $topic";

