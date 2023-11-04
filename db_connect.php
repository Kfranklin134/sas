<?php

// Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'P@ssword1234';
$dbname = 'salamanders';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$sql = "SELECT * FROM salamander ";
$result = mysqli_query($db, $sql);

// 3. Use returned data (if any)

// 4. Release returned data
mysqli_free_result($result);

mysqli_close($connection);

?>
