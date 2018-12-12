<?php
	session_start();
	include_once('connection.php');
	$settype = $_POST['settype'];
	
	
	$count=0;
	if(isset($_POST['submit'])){
		
		
		$testtype = $_POST['testtype'];
		$qus=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE SetType='$settype' && TestType='$testtype'");
		while($row=mysqli_fetch_array($qus)){
			$count=$row['QuestionNo'];
		}
		$questionno = $count+1;
		$questiondet = $_POST['questiondet'];
		$optiona = $_POST['optiona'];
		$optionb = $_POST['optionb'];
		
		if($_POST['optionc'] == null ){
			$optionc=null;
		}else{
			$optionc = $_POST['optionc'];
		}
		if($_POST['optiond'] == null ){
			$optiond=null;
		}else{
			$optiond = $_POST['optiond'];
		}
		if($_POST['optione'] == null ){
			$optione=null;
		}else{
			$optione = $_POST['optione'];
		}
		$answer = $_POST['answer'];
		$createdby = $_SESSION['UserName'];
		//$qstatus = $_POST['qstatus'];
		$query=mysqli_query($con,"INSERT INTO `questiondetails`( `SetType`, `TestType`, `QuestionNo`, `QuestionDetails`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `Option_E`, `Answer`, `CreatedBy`) VALUES ('$settype','$testtype','$questionno','$questiondet','$optiona','$optionb','$optionc','$optiond','$optione','$answer','$createdby')");
		
		if($query){
			echo '<script>alert("Success.")</script>';
			echo '<script>window.location="questioninsert.html"</script>';
		}else{
			echo '<script>alert(" Failed.")</script>';
			echo '<script>window.location="questioninsert.html"</script>';
		}
		
		
		
	
	}
?>

