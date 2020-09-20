<?php
session_start();
echo "Welcome :- ".$_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color: yellow;
		}

	.button1 {
		background-color: white; 
		color: black; 
		border: 2px solid #f44336;
		padding: 10px 25px;
    	font-size: 19px;
		margin: 4px 2px;
    	transition-duration: 0.4s;
    	cursor: pointer;
	}

	.button1:hover {
  		background-color: #f44336;
  		color: white;
	}
	</style>

</head>
<body>
<h3>Click Down button to know the who people are contact to your websites.</h3>
<a href="display.php"><button class="button1">Red</button></a>



</body>
</html>

 