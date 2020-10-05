<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2></div>
		<div id="body">
			<br>
			<?php 
			$un=$_SESSION['un'];
			if (!$un) {
		header("Location:index.php");
			}
			 ?>
			<h1 align="center"><b>Stoke Blood List</b></h1>
			<center>
				<div id="form">
					<table border="1px">
						<tr>
							
							<td><center><b><font color="blue">Blood Group</font></b></center></td>
						<td><center><b><font color="blue">QTY</font></b></center></td>


                           </tr>
					

						<tr>
			<td><center>O+</center></td>				
		<td><center><?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>A+</center></td>				
		<td><center>
			<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
		$row=$q->rowcount();
		echo $row;

		?>
			
		</center></td>

						</tr>

						<tr>
			<td><center>B+</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>AB+</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>O-</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>B-</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>AB-</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>

						<tr>
			<td><center>A-</center></td>				
		<td><center>		<?php
		$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
		$row=$q->rowcount();
		echo $row;

		?></center></td>

						</tr>
					
					</table>
					
				</div>
			</center>
						<p><font><b>
				<a href="admin-home.php">Home page</a>
				<a href="donor-list.php">Donor list</a>

<a href="donor-reg.php">Donor Registration</a>
<a href="out-stoke-blood-list.php">out stoke blood list</a>
<a href="exchange-blood-list.php">Exchange blood registration</a>
<a href="exchange-blood-list.php">Exchange Blood List</a>




</b></font>
			</p>

		<div id="footer"><h4 align="center">CopyRight @ Rashed</h4>
		<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>

		</div>

		</div>
		
		
	</div>

</body>
</html>