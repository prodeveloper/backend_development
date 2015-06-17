<?php
$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";

echo "The user with username {$username} and password {$password} has been registered";
