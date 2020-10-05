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
			<h1 align="center"><b>Out Stoke Blood List</b></h1>
			<center>
				<div id="form">
					<table border="1px">
						<tr>
							<td><center>ID</center></td>
							<td><center><b><font color="blue">Name:</font></b></center></td>
						<td><center><b><font color="blue">Phone number</font></b></center></td>
					<td><center><b><font color="blue">blood group</font></b></center></td>

						</tr>
						<?php
						$q=$db->query("SELECT * FROM  out_stoke_b");
						while($r1=$q->fetch(PDO::FETCH_OBJ)){


					?>
						

						<tr>
			<td><center><?= $r1->id;?></center></td>				
		<td><center><?= $r1->name;?></center></td>
		<td><center><?= $r1->pno;?></center></td>
		<td><center><?=$r1->bname;?></center></td>


						</tr>
						<?php
					}
					?>
					
					</table>
					
				</div>
			</center>
						<p><font><b>
				<a href="admin-home.php">Home page</a>
				<a href="donor-list.php">Donor list</a>

<a href="stoke-blood-list.php">stoke blood list</a>
<a href="donor-reg.php">Donor Registration</a>
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