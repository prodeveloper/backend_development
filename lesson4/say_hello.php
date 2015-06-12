<?php

function say_hello_to($name){
    echo "Hey {$name}! <br/>";
}

$name="class";
say_hello_to($name);

function say_hello_with_title($name,$title){
       echo "Hey {$title} {$name} ";
}

$name="Anna";
$title="Ms";

say_hello_with_title($name,$title);
