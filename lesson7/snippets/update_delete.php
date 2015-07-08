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
$id = 5;
$menu_name = "Delete me";
$position = 4;
$visible = 1;

// 2. Perform database query
$query  = "UPDATE subjects SET ";
$query .= "menu_name = '{$menu_name}', ";
$query .= "position = {$position}, ";
$query .= "visible = {$visible} ";
$query .= "WHERE id = {$id}";

$result = mysqli_query($connection, $query);

if ($result) {
        assert(mysqli_affected_rows($connection) == 1);
        // Success
        // redirect_to("somepage.php");
        echo "Success!";
} else {
        // Failure
        // $message = "Subject update failed";
        die("Database query failed. " . mysqli_error($connection));
}
?>
