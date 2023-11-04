<?php

// Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'P@ssword1234';
$dbname = 'salamanders';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection succeeded
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}

// 2. Perform database query
$sql = "SELECT * FROM salamander ";
$result = mysqli_query($db, $sql);

// Test if query succeeded
if (!$result) {
  exit("Database query failed.");
}

// 3. Use returned data (if any)
while($salamander = mysqli_fetch_assoc($result)) {
  echo $salamander["id"] . "<br>";
}

// 4. Release returned data
mysqli_free_result($result);

// 5. Close database connection
mysqli_close($connection);

?>
