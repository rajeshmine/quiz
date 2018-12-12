<?php
session_start();
include_once('connection.php');
if(isset($_GET['testtype'])){
$testtype=$_GET['testtype'];
$setselect=mysqli_query($con,"SELECT DISTINCT SetType FROM questiondetails WHERE TestType='$testtype'&& QStatus = 'Y'");
	echo '<option value="" selected disabled>Select</option>';
while($row=mysqli_fetch_array($setselect)){
	if($row){
		echo "<option value=".$row['SetType'].">".$row['SetType']."</option>";	
	}
}
echo '</select>';
}
if(isset($_GET['settype']) && isset($_GET['testpost'])){
	$settype=$_GET['settype'];
	$test_type=$_GET['testpost'];
	$selectqus=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='$test_type' && SetType='$settype'");
	
	while($rows=mysqli_fetch_array($selectqus)){
		echo'<div class="qusdisdiv">';
		echo "<p class='question'><span style='margin-right:5px;'>".$rows['QuestionNo'].".</span>".htmlentities($rows['QuestionDetails'])."</p><span class='answer'> Answer : <span>".$rows['Answer']."</span></span>";
		echo "<p class='option_text'>A. ".htmlentities($rows['Option_A'])."</p>";
		echo "<p class='option_text'>B. ".htmlentities($rows['Option_B'])."</p>";
		if($rows['Option_C'] !=''){
			echo "<p class='option_text'>C. ".htmlentities($rows['Option_C'])."</p>";
		}
		if($rows['Option_D'] !=''){
			echo "<p class='option_text'>D. ".htmlentities($rows['Option_D'])."</p>";
		}
		if($rows['Option_E'] !=''){
			echo "<p class='option_text'>E. ".htmlentities($rows['Option_E'])."</p>";
		}
		
		
		echo"</div>";
	}
}

?>