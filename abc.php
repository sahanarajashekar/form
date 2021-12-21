<?php

$Fullname=filter_input(INPUT_POST,'Fullname');
$Branch=filter_input(INPUT_POST,'Branch');
$phone=filter_input(INPUT_POST,'phone');
$StreetAddress=filter_input(INPUT_POST,'StreetAddress');
$City=filter_input(INPUT_POST,'City');
$state=filter_input(INPUT_POST,'state');
$zc=filter_input(INPUT_POST,'ZipCode');
$Message=filter_input(INPUT_POST,'Message');


$conn= mysqli_connect('localhost', 'root', '', 'adda');

if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno() .')'
	.mysqli_connect_error());
}
$sql = "INSERT INTO tnp (Fullname,Branch,phone,StreetAddress,City,state,ZipCode,Message) VALUES ('$Fullname','$Branch','$phone','$StreetAddress','$City','$state','$zc','$Message')";
if($conn->query($sql))
{
	echo "record Inserted";
}
else
	echo "error:".$sql." ".$conn->error;
$conn->close();
?>
<html>
<body>
<a href="display.php">show data</a>
</body>
</html>