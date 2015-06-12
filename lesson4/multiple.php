<?php

function stats(array $values){
        $results=["min"=>min($values),"max"=>max($values),"average"=>array_sum($values)/count($values)];
        return $results;

}

$values=[5,7,8];
$results=stats($values);
var_dump($results);
