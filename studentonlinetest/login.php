<?php
	session_start();
	include_once('connection.php');
	 $username=$_POST['username'];
	$pwd=$_POST['password'];
	$finalpsw=$pwd;
	$query=mysqli_query($con,"SELECT * FROM `logindetails` WHERE (UserId='$username' || MobileNo= '$username') && Pwd='$finalpsw'");
	$logincheck=mysqli_fetch_array($query);
		if($logincheck){
			if($logincheck['user_status'] == 'Y'){
				$_SESSION['UserName']=$logincheck['UserName'];	
				$_SESSION['UserId']=$logincheck['UserId'];	
				$_SESSION['Role']=$logincheck['Role'];	
				
				$_SESSION['testtype']='APTITUDE';	
				$_SESSION['settype']='SET_A';	
				
				
				
				if(strtolower($logincheck['Role']) == 'user'){
					echo '<script>window.location="first.php"</script>';
				}else if(strtolower($logincheck['Role']) == 'admin'){
					echo '<script>window.location="adminfirst.php"</script>';
				}
				
			}else{
				echo '<script>alert("You are already attended the Test.")</script>';
				echo '<script>window.location="index.php"</script>';
			}
			
			
		}else{
			echo '<script>alert("Username or Password does not match.")</script>';
			echo '<script>window.location="index.php"</script>';
		}

	
	
	
?>