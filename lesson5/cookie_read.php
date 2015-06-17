<?php

	$name = "test";
	$value = 45;
	$expire = time() + (60*60); // add seconds
	setcookie($name, $value, $expire);
        echo $_COOKIE[$name]; 

