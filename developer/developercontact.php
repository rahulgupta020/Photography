<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if($conn)
// {
// 	echo "Connection Ok";
// }
// else
// {
// 	echo "Connection Failed";
// }

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if($name!="" && $phone!="" && $email!="" && $message!="")
{

	$sql = "INSERT INTO developer_contact (name,phone,email,message) VALUES ('$name','$phone','$email','$message')";
	$data = mysqli_query($conn,$sql);

	if($data)
	{
		echo "<h1>Get a call back</h1>";
	}
}
else
{
	echo "Not Inserted";
}

header("refresh:2; url=contact.html");

?>