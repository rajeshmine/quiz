<?php
include_once('connection.php');
session_start();
$degree=$_GET['degree'];
$cource=mysqli_query($con,"SELECT DISTINCT  `course` FROM `coursedetails` WHERE degree='$degree' && coursestatus = 'Y' ");
	echo '<option disabled selected>Select</option>';
while($row=mysqli_fetch_array($cource)){
	
	if(isset($row['course'])){
		echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
	}
	
}
?>