<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color: #ffb3d9;
		margin: 0px;
		padding: 0px;
	}
		table, th, td{
			border: 1px solid #ff3300;
			border-collapse: collapse;
		}

		th, td{
			padding: 5px;
		}
		th{
			text-align: left;
		}

		table{
			width: 40%;
			background-color: black;
			color: white;
		}
		tr:hover
		{
			background-color: #7878a1;
		}

	</style>
</head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Rahul";

$conn = mysqli_connect($servername, $username, $password, $dbname);
error_reporting(0);

$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>

	<table>
		<tr>
			<th>Roll Number</th>
			<th>Name</th>
			<th>Class</th>
		</tr>
	

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['rollno']."</td>
				<td>".$result['name']."</td>
				<td>".$result['class']."</td>
			</tr>";
	}
}
else
{
	echo "No Records Found";
}

?>

	</table>

	</body>
</html>