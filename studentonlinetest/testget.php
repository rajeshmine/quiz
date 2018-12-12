<?php
	session_start();
	include_once('connection.php');
	$testtype=$_GET['q'];
	$_SESSION['testtype']=$testtype;
	
	$timeget=mysqli_query($con,"SELECT * FROM `testtimingdetails` WHERE TestType='$testtype'");
	$timeprint=mysqli_fetch_array($timeget);
	
	
	$retrivedata=mysqli_query($con,"SELECT DISTINCT REPLACE(SetType,'_',' ') AS 'SetTypes', REPLACE(SetType,'_','') AS 'SetType' FROM questiondetails WHERE QStatus = 'Y' AND TestType ='$testtype'");
	echo ' <div class="table-responsive ">          
		  <table class="table table-striped table-bordered table-hover">
			<thead>
			  <tr>
				<th>Set Type</th>
				<th>Rights</th>
				<th>Default Timings(mins)</th>
			  </tr>
			</thead>
			<tbody>';
	$i=1;
	while($row=mysqli_fetch_array($retrivedata)){
		if($i == 1){
			echo '<tr><td>';
			
			echo $row['SetTypes'].'</td><td>';
			echo '<input type="checkbox" checked required name="'.$row['SetType'].'" value="'.$row['SetType'].'"></td>';
			
			echo '<td>'.$timeprint["MinTime"].'</td>';
			echo '</tr>';
			$i++;
		}else{
			echo '<tr><td>';
			
			echo $row['SetTypes'].'</td><td>';
			echo '<input type="checkbox" checked name="'.$row['SetType'].'" value="'.$row['SetType'].'"></td>';
			echo '<td>'.$timeprint["MinTime"].'</td>';
			echo '</tr>';
		}
		
		
	}
	echo ' </tbody>
  </table>
  </div>
  
	  <div class="form-group">
		<label for="email">Total Time(mins)</label>
		<input type="number" placeholder="Time" value ="'.$timeprint["MinTime"].'" class="form-control" name="timesetinput" id="email" min="30" max="120" required>
	  </div>
	 

  <!-- Accent-colored raised button with ripple -->
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="float:right;" name="setbtn">
		update time
	</button>
  

  
  ';

?>