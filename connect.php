<?php
$connection=mysqli_connect("localhost","root","root","repair");

if($connection)
{
echo "connection";
}
else
{
echo "error";
}
$FullName=mysqli_real_escape_string($connection,$_POST['name']);
$email=mysqli_real_escape_String($connection,$_POST['email']);
$phone=mysqli_real_escape_String($connection,$_POST['tele']);
$select=mysqli_real_escape_String($connection,$_POST['select']);
$address=mysqli_real_escape_String($connection,$_POST['address']);
$text=mysqli_real_escape_String($connection,$_POST['text']);
echo "record inserted";

/*$query="CREATE TABLE roadrepair( FULLNAME CHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL,PHONE_NUM VARCHAR(30) NOT NULL,PLACE CHAR(30) NOT NULL,ADRESS VARCHAR(10),PROBLEM VARCHAR(10));";
if(mysqli_query($connection,$query))
{
echo "table created"."<br>";
}
else{
echo "error:".mysqli_error($connection);
}*/
$query1="INSERT INTO roadrepair VALUES('$FullName','$email','$phone','$select','$address','$text');";
if(mysqli_query($connection,$query1))
{
	echo "record inserted";
}
else
{
	echo "error";
}
$query2="select * from roadrepair;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
	{
		echo "";
	}
}
else{
	echo "";
}
echo "<a href=cancel.html>NEXT</a>";
?>

