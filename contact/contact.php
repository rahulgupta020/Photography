<?php

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yogesh";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if($conn)
// {
// 	echo "Connection Ok";
// }
// else
// {
// 	echo "Connection Failed";
// }

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['phone'];
$phone = $_POST['email'];
$message = $_POST['message'];

if($firstname!="" && $lastname!="" && $email!="" && $phone!="" && $message!="")
{

	$sql = "INSERT INTO contact (firstname,lastname,email,phone,message) VALUES ('$firstname','$lastname','$phone','$email','$message')";
	$data = mysqli_query($conn,$sql);

	if($data)
	{
		echo "Inserted";
	}
}
else
{
	echo "Not Inserted";
}

header("refresh:2; url=contact.html");

?>