<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2></div>
		<div id="body">
			<?php 
			$un=$_SESSION['un'];
			if (!$un) {
		header("Location:index.php");
			}
			 ?>
					<ul>
				<li ><a href="donor-reg.php">Donor Registration</a> </li>

				<li ><a href="donor-list.php">Donor List</a> </li>
				<li ><a href="stoke-blood-list.php">Stoke Blood List</a> </li>
				<br><br><br><br><br>
			</ul>
 
			<ul>
				<li><a href="out-stoke-blood-list.php">Out Stoke Blood list</a> </li>
				<li><a href="exchange-blood-list.php">Exchange Blood Registration</a> </li>
				<li><a href="exchange-blood-list1.php">Exchange blood list</a></li>
				<br><br><br>
			</ul>
		</div>
		<div id="footer"><h4 align="center">CopyRight @ Rashed</h4>
		<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>

		</div>

		</div>
		
		
	</div>

</body>
</html>