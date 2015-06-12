<?php
$months= ["January","February","March","April","May","June","July","August","September","October","November","December"];
foreach ($months as $month) {
        $dayInMonth=daysOfMonth($month);
        if($dayInMonth > 30){

                echo "{$month} - Broke </br>";
        }
        else {

                echo "{$month} - Good </br>";
        }

}


function daysOfMonth($month){
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        return $dayInMonth;
}


