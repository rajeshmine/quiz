<?php 
	include_once('connection.php');
	session_start();
if(isset($_GET['collegename']) && isset($_GET['interviewdate'])){

	$collegeName=$_GET['collegename'];
	$interviewdate=$_GET['interviewdate'];
	
	$delete_qry=mysqli_query($con,"DELETE FROM `collegenamedetails` WHERE CollegeName='$collegeName' && InterviewDate='$interviewdate'");
	if($delete_qry){
	
			
	}else{
		echo '<script>alert("Failed to delete.Try Again later!!!")</script>';
		
	}
}
if(isset($_GET['updateclgname']) && isset($_GET['updateintdate']) && isset($_GET['updateclgsts']) && isset($_GET['querydate']) && isset($_GET['queryclgnam'])){
	$udate=$_GET['updateintdate'];
	$uclgnm=$_GET['updateclgname'];
	$usts=$_GET['updateclgsts'];
	$qclgnm=$_GET['queryclgnam'];
	$qdate=$_GET['querydate'];
	
	$updateqry=mysqli_query($con,"UPDATE `collegenamedetails` SET `InterviewDate`='$udate',`CollegeName`='$uclgnm',`CStatus`='$usts' WHERE InterviewDate='$qdate' && CollegeName='$qclgnm'");
	if($updateqry){
		
	}else{
		echo '<script>alert("Failed to update.Try Again later!!!")</script>';
	}
}

?>