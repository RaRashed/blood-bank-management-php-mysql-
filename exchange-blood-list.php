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
			<br>
			<?php 
			$un=$_SESSION['un'];
			if (!$un) {
		header("Location:index.php");
			}
			 ?>
			<h1>Exchange Blood Group</h1>
			<center>
				<div id="form">
					<form action="" method="post">
					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name="name" placeholder="enter name"></td>
							<td width="200px" height="50px">Enter Father's Name</td>
							<td width="200px" height="50px"><input type="text" name="fname" placeholder="enter father's name"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address"></textarea></td>
							<td width="200px" height="50px">Enter City</td>
							<td width="200px" height="50px"><input type="text" name="city" placeholder="enter city name"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name="age" placeholder="enter name"></td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bgroup">
									<option>O+</option>
									<option>A+</option>
									<option>B+</option>
									<option>AB+</option>
									<option>O-</option>
									<option>B-</option>
									<option>AB-</option>
									<option>A-</option>




								</select>
							</td>
							<td width="200px" height="50px">Exchange Blood Group</td>
							<td width="200px" height="50px">
								<select name="exbgroup">
									<option>O+</option>
									<option>A+</option>
									<option>B+</option>
									<option>AB+</option>
									<option>O-</option>
									<option>B-</option>
									<option>AB-</option>
									<option>A-</option>




								</select>
							</td>
						</tr>

						<tr>
							<td width="200px" height="50px">Enter email</td>
							<td width="200px" height="50px"><input type="text" name="email" placeholder="enter emai"></td>
							<td width="200px" height="50px">Enter phone Number</td>
							<td width="200px" height="50px"><input type="text" name="pno" placeholder="enter phone number"></td>
						</tr>
						<tr>
							<td><input type="submit" name="sub" value="save"></td>
						</tr>

					</table>
				</form>
			
			<?php

				if(isset($_POST['sub'])){
					$name=$_POST['name'];
					$fname=$_POST['fname'];
					$address=$_POST['address'];
					$city=$_POST['city'];
					$age=$_POST['age'];
					$bgroup=$_POST['bgroup'];
					$pno=$_POST['pno'];
					$email=$_POST['email'];
					$exbgroup=$_POST['exbgroup'];
					$q="SELECT * FROM donor_registration WHERE bgroup='$bgroup'";
					$st=$db->query($q);
					$num_row= $st->fetch();
					$id=$num_row['id'];
					$name=$num_row['name'];
					$b1=$num_row['bgroup'];
					$pno=$num_row['pno'];
					$q1="INSERT INTO out_stoke_b(bname,name,pno) value(?,?,?)";
					$st1=$db->prepare($q1);
					$st1->execute([$b1,$name,$pno]);
					$delete_q="delete from donor_registration where id ='$id'";
					$st1=$db->prepare($delete_q);
					$st1->execute();


					$q=$db->prepare("INSERT INTO exchange_b(name,fname,address,city,age,bgroup,pno,email,exbgroup) VALUES (:name,:fname,:address,:city,:age,:bgroup,:pno,:email,:exbgroup)");
					$q->bindValue('name',$name);
					$q->bindValue('fname',$fname);
					$q->bindValue('address',$address);
					$q->bindValue('city',$city);
					$q->bindValue('age',$age);
					$q->bindValue('bgroup',$bgroup);
					$q->bindValue('pno',$pno);
					$q->bindValue('email',$email);
					$q->bindValue('exbgroup',$exbgroup);


					if($q->execute()){
						echo "<script> alert('exchange blood donor registration successfully done');</script>";
					}
				else{
					echo "<script>alert('you are not able for exchange blood donor registration');</script>";
				}
			}


				?>
					
				</div>
			</center>

			<p><font><b>
				<a href="admin-home.php">Home page</a>
				<a href="donor-list.php">Donor list</a>

<a href="stoke-blood-list.php">stoke blood list</a>
<a href="out-stoke-blood-list.php">out stoke blood list</a>
<a href="donor.reg.php">Donor Registration</a>
<a href="exchange-blood-list1.php">Exchange Blood List</a>


</b></font>
			</p>
		<div id="footer"><h4 align="center">CopyRight @ Rashed</h4>
		<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>

		</div>

		</div>
		
		
	</div>

</body>
</html>