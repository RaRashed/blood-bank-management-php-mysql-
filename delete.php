<?php
require ('connection.php');
 
$get_id=$_GET['id'];
 
// sql to delete a record
$sql = "Delete from donor_registration where id = '$get_id'";
 
// use exec() because no results are returned
$p=$db->prepare($sql);
$p->execute();
header('location:donor-list.php');
?>