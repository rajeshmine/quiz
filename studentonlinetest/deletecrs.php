<?php 
	include_once('connection.php');
	session_start();
if(isset($_GET['degname']) && isset($_GET['crsname'])){

	$degname=$_GET['degname'];
	$crsname=$_GET['crsname'];
	
	$delete_qry=mysqli_query($con,"DELETE FROM `coursedetails` WHERE degree='$degname' && course='$crsname'");
	if($delete_qry){
	
			
	}else{
		echo '<script>alert("Failed to delete.Try Again later!!!")</script>';
		
	}
}
if(isset($_GET['updatedegname']) && isset($_GET['updatecrsname']) && isset($_GET['updatestatus'])){
	$udate=$_GET['updatecrsname'];
	$uclgnm=$_GET['updatedegname'];
	$usts=$_GET['updatestatus'];
	$qdegname=$_GET['querydegname'];
	$qcrsname=$_GET['querycrsname'];
	
	$updateqry=mysqli_query($con,"UPDATE `coursedetails` SET `course`='$udate',`degree`='$uclgnm',`coursestatus`='$usts' WHERE degree='$qdegname' && course='$qcrsname'");
	if($updateqry){
		
	}else{
		echo '<script>alert("Failed to update.Try Again later!!!")</script>';
	}
}

?>