<?php
	include_once('connection.php');
	if(isset($_GET['mobile']) && isset($_GET['status'])){
		$upmobile=$_GET['mobile'];
		//$upmail=$_GET['email'];
		$upstatus=$_GET['status'];
		$updatequery=mysqli_query($con,"UPDATE `logindetails` SET `user_status`='$upstatus' WHERE MobileNo='$upmobile'");
		
	}
?>