<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
margin-left: 50px;
color: #588c7e;
font-family: monospace;
font-size:18px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) 
{
background-color: #f2f2f2
}
</style>
</head>
<body>
<table>
<caption>Display Data from Mysql Database</caption>
<tr>
<th>Fullname</th>
<th>Branch</th>
<th>phone</th>
<th>StreetAddress</th>
<th>City</th>
<th>State</th>
<th>ZipCode</th>
<th>Message</th>
</tr>

<?php
// To make a connection with the database
$conn = mysqli_connect("localhost", "root", "", "adda");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//execute the sql query against a database

$sql = "SELECT Fullname, Branch,phone,StreetAddress,City,State,ZipCode,Message FROM tnp";
// execute a query
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["Fullname"]. "</td><td>" . $row["Branch"] . "</td><td>". $row["phone"] . "</td><td>". $row["StreetAddress"] . "</td><td>". $row["City"] . "</td><td>". $row["State"] . "</td><td>". $row["ZipCode"] . "</td><td>". $row["Message"] . "</td><td>";
}
echo "</table>";
} 
else 
{ 
echo "0 results"; 
}

//Closing a connection
$conn->close();
?>
</table>
</body>
</html>