<?php
	session_start();
	include_once('connection.php');
	$fromdate = $_GET['fromdate'];
	$todate = $_GET['todate'];
	echo '<div class="table-responsive">
			<table class="table table-hover table-bordered">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th colspan="3" style="text-align:center;">Aptitude</th>
				<th colspan="3" style="text-align:center;">Technical</th>
				
				
			</tr><tr>
				<th>S.No</th>
				<th>User Name</th>
				<th>Department</th>
				<th>Total Questions</th>
				<th>Total Attend</th>
				<th>Total Result</th>
				<th>Total Questions</th>
				<th>Total Attend</th>
				<th>Total Result</th>
				
			</tr>';
	//$filter_query=mysqli_query($con,"SELECT * FROM `usertestresults` WHERE Date BETWEEN '$fromdate' AND '$todate' ORDER BY Date");
	$filter_query=mysqli_query($con,"SELECT UserId, UserName, DeptName, 
		SUM(App_Question) AS 'App_Question', SUM(App_Attend) AS 'App_Attend', SUM(App_Result) AS 'App_Result',  
		SUM(Tech_Question) AS 'Tech_Question', SUM(Tech_Attend) AS 'Tech_Attend', SUM(Tech_Result) AS 'Tech_Result'
		FROM
		(
			SELECT UserId, UserName, DeptName, 
			SetType AS 'App_SetType', TotalQuestion AS 'App_Question', TotalAttend AS 'App_Attend', TotalResult AS 'App_Result',
			NULL AS 'Tech_SetType', 0 AS 'Tech_Question', 0 AS 'Tech_Attend', 0 AS 'Tech_Result'
			FROM usertestresults WHERE TestType = 'Aptitude' && Date BETWEEN '$fromdate' AND '$todate' 

			UNION ALL

			SELECT UserId, UserName, DeptName, 
			NULL AS 'App_SetType', 0 AS 'App_Question', 0 AS 'App_Attend', 0 AS 'App_Result',
			SetType AS 'Tech_SetType', TotalQuestion AS 'Tech_Question', TotalAttend AS 'Tech_Attend', TotalResult AS 'Tech_Result'
			FROM usertestresults WHERE TestType = 'Technical' &&  Date BETWEEN '$fromdate' AND '$todate' 
		) AS A
		GROUP BY UserId, UserName, DeptName");
	$i=1;
	while($row=mysqli_fetch_array($filter_query)){
		echo"<tr>";
			echo "<td>".$i++."</td>";
			echo "<td>".$row['UserName']."</td>";
			echo "<td>".$row['DeptName']."</td>";
			echo "<td>".$row['App_Question']."</td>";
			echo "<td>".$row['App_Attend']."</td>";
			echo "<td>".$row['App_Result']."</td>";
			echo "<td>".$row['Tech_Question']."</td>";
			echo "<td>".$row['Tech_Attend']."</td>";
			echo "<td>".$row['Tech_Result']."</td>";
			echo "</tr>";
	}
	echo"</table>
	</div>
	";
?>