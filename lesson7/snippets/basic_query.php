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
// 2. Perform database query
$query  = "SELECT * FROM subjects ";
$result = mysqli_query($connection, $query);
// Test if there was a query error
if (!$result) {
        die("Database query failed.");
}

//var_dump($result);die();
// 3. Use returned data (if any)
while($row = mysqli_fetch_row($result)) {
        // output data from each row
        var_dump($row);
}
// 4. Release returned data
mysqli_free_result($result);
// 5. Close database connection
mysqli_close($connection);
?>
