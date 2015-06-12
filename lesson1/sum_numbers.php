<?php
$number=$_REQUEST['number'];
$total=0;

for ($i = 0; $i < $number; $i++) {
        $total+=$i;
}
echo $total;

//Alternative solution
echo "<hr>";
$total=$number * ($number-1) * 0.5;

echo $total;
