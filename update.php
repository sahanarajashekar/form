<?php

// To make a connection with the database
$conn = mysqli_connect("localhost", "root", "", "adda");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//execute the sql query against a database

$sql = "UPDATE tnp SET Fullname='Mahadev',City='TNP' WHERE Branch='mca'";
// execute a query
$result = $conn->query($sql);

echo "your data updated";
//Closing a connection
$conn->close();
?>