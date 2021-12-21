<?php

// To make a connection with the database
$conn = mysqli_connect("localhost", "root", "", "adda");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//execute the sql query against a database

$sql = "DELETE FROM tnp WHERE Fullname='anitha'";
// execute a query
$result = $conn->query($sql);

echo "data deleted successfully";
//Closing a connection
$conn->close();
?>