<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="box">
	<h2>Developer Admin Login</h2>
	<form action="" method="post">
		<div class="inputBox">
			<input type="text" name="username" required="">
			<label>Username</label>
		</div>
		<div class="inputBox">
			<input type="password" name="password" required="">
			<label>Password</label>
		</div>
		<input type="submit" name="submit">
	</form>
	
</div>

</body>
</html>
<!-- <form action="" method="post">
Username: <input type="text" name="username" value=""/><br><br>
Password: <input type="password" name="password" value=""/><br><br>
<input type="submit" name="submit" value="Login"/>
</form> -->

<?php
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM developeradmin WHERE username='$user' && password='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	// echo $total;
	if($total == 1)
	{
		$_SESSION['user_name']=$user;
		header('location:home.php');
	}
	else
	{
		header('location:log_fail.html');
	}
}
?>