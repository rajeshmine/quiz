<?php
session_start();
include_once('connection.php');
$adminname=$_SESSION['UserName'];
$testtype=$_SESSION['testtype'];
	if(isset($_POST['setbtn']) && isset($_POST['timesetinput'])){
		$time=$_POST['timesetinput'];
		for($i="A";$i<"F";$i++){
			if(isset($_POST['SET'.$i])){
				$temp="SET".$i;
				$$temp='Y';
			}else{
				$temp="SET".$i;
				$$temp='N';
			}
		}
		
		$date=date('Y-m-d');
		
		//$insquery=mysqli_query($con, "INSERT INTO `testtimingdetails`(`BatchNo`,`AssignDate`, `TestType`, `MinTime`, `SET_A`, `SET_B`, `SET_C`, `SET_D`, `SET_E`, `CreatedBy`	) VALUES ('1','$date','$testtype','$time','$SETA','$SETB','$SETC','$SETD','$SETE','$adminname')");
		$insquery=mysqli_query($con, "UPDATE `testtimingdetails` SET `AssignDate`='$date',`BatchNo`='1',`MinTime`='$time',`SET_A`='$SETA',`SET_B`='$SETB',`SET_C`='$SETC',`SET_D`='$SETD',`SET_E`='$SETE',`CreatedBy`='$adminname' WHERE TestType = '$testtype'");
		if($insquery){
			echo '<script>alert("Successfully Set Timing for today.")</script>';
			echo '<script>window.location="instruction.php"</script>';
		}else{
			echo '<script>alert("Sorry Try Again Later!!!")</script>';
			echo mysqli_error($con);
			echo '<script>window.location="instruction.php"</script>';
		}
		
	}
?>