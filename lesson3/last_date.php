
<?php

$months= ["January","February","March","April","May","June","July","August","September","October","November","December"];
foreach ($months as $month) {
        $lastDateInMonth= "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($lastDateInMonth);
        $dayOfWeek=date("l",$dayAsTimeStamp);
        echo "{$month} first day was " . $dayOfWeek. "</br>"; 

}




