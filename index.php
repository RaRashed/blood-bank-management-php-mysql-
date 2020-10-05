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
			<div id="header"><h2>Blood Bank Management System</h2></div>
		<div id="body">
			<br><br><br><br>
			<fieldset style="width: 500px;color: #fff;background: #B23535;font-size: 24px;text-align: center;margin-left: 300px;border-radius: 15px;">
			<form action="" method="post">

			<table align="center">
				<tr>
					<td width="200px" height="70px" ><b>Enter User name</b></td>
					<td width="200px" height="70px"><input type="text" name="un" placeholder="enter username" style="width:180px;height: 30px; border-radius: 10px;"></td>
				</tr>
				<tr>
					<td width="200px" height="70px" ><b>Enter Password</b></td>
					<td width="200px" height="70px"><input type="text" name="ps" placeholder="enter Password" style="width:180px;height: 30px; border-radius: 10px;"></td>
				</tr>

				</tr>
				<tr>
				<td><input type="submit" name="sub" value="Login" style="width: 70px; height: 30px; border-radius: 5px; padding: yellow;"></td>
			</tr>

			</table>
		</form>
	</fieldset>
		<?php 
		if(isset($_POST['sub']))
		{
			$un=$_POST['un'];
			$ps=$_POST['ps'];
			//echo $un;
			//echo $ps;
			$q=$db->prepare("SELECT * FROM admin where uname='$un'&& pass='$ps' ");
			$q->execute();
			$res = $q->fetchALL(PDO::FETCH_OBJ);
		if($res)
		{
			$_SESSION['un']=$un;
			header("Location:admin-home.php");
			
		}
		else{
			echo "<script> alert('wrong user');</script>";
		}
		
	}


		?>

		</div>
		<div id="footer"><h4 align="center">CopyRight @ Rashed</h4></div>
		</div>
		
		
	</div>

</body>
</html>