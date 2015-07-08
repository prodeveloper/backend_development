<?php
// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "test_app_user";
$dbpass = "test_app_secret";
$dbname = "test_app";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection succeeded
if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
                        mysqli_connect_error() . 
                        " (" . mysqli_connect_errno() . ")"
           );
}
// Often these are form values in $_POST
$menu_name = "Edit me";
$position = 4;
$visible = 1;

// 2. Perform database query
$query  = "INSERT INTO subjects (";
$query .= "  menu_name, position, visible";
$query .= ") VALUES (";
$query .= "  '{$menu_name}', {$position}, {$visible}";
$query .= ")";

$result = mysqli_query($connection, $query);

if ($result) {
        // Success
        // Do post sucess processing
        echo "Success!";
} else {
        // Failure
        // Do post failure processing, maybe notify the admin?
        die("Database query failed. " . mysqli_error($connection));
}
// 5. Close database connection
mysqli_close($connection);
?>
