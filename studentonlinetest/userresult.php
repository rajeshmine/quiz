<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Result</title>
		<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		
		<link rel="stylesheet" href="first.css">
		<style>
		
		.logout_text{
			line-height:80px;
			text-align:right;
			
		}
		.logout_text a{
			color:#fff;
		}
		
		body{
			background-image: url(bgform.jpg);
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			background-color:#e7e7e7;
		}
		
		a{
			text-decoration:none !important;
		}
		
		table{
			
			background-color:#fff !important;
		}
		
		.btn.peach-gradient {
			background: -webkit-linear-gradient(50deg,#ffd86f,#fc6262)!important;
			background: linear-gradient(40deg,#ffd86f,#fc6262)!important;
			-webkit-transition: .5s ease;
			transition: .5s ease;
			margin-top: 26px;
			color: white;
			width:50%;
		}
		.material-icons{
			vertical-align:middle;
			
		}
		.headerbg{
		    background: linear-gradient(45deg, #ff6f00 0%, #ffca28 100%) !important;
		}

		</style>
	</head>
	<body style="background-color:#e7e7e7;">
		<div class="container"> 
			<div class="row card headerbg" style="background-color:#13cda3;color:#fff;">
				<div class="col-md-6">
					<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 text-right" style="color:#fff;">
					<a href="adminfirst.php" id="home" style="line-height:80px;color:#fff;outline:none;margin-right:20px;"><i class="material-icons">&#xE88A;</i></a>
					<div class="mdl-tooltip" data-mdl-for="home">
						 <strong>Home</strong>
					</div>
					<a href="index.php" id="logout"  style="line-height:80px;color:#fff;outline:none;"><i class="material-icons">&#xE8AC;</i></a>
					
					<div class="mdl-tooltip" data-mdl-for="logout">
						<strong>Logout</strong>
					</div>
				</div>
				
			</div><br>
			<ol class="breadcrumb">
				<li><a href="adminfirst.php">Home</a></li>
				<li class="active">User Result</li>        
			</ol>
			<div class="container">
			
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
						<h4 style="text-align:center;">Result</h4>
					</div>
				</div>
			</div>
			
			<div class="row" style="margin-left:0px;">
			
			<form action="#" autocomplete="off">
				<div class="col-sm-1">
				</div>

				<div class="col-sm-2">
				
					<label>From Date </label>
					<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
						<input class="form-control" readonly type="text" id="fromdate"/>
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					</div>
									
				
				</div>
				
				<div class="col-sm-2">
				
					<label>To Date </label>
					<div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
						<input class="form-control" type="text" id="todate" readonly autocomplete="off"/>
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					</div>
									
				
				</div>
				</form>
				<div class="col-sm-3">
				
					<button class="btn peach-gradient btn-rounded waves-effect waves-light submitbtn" type="submit" name="submit"onclick="fetchdetails()">Submit</a>
				
				
				</div>

			</div><br>
			 
			<?php 
			
				
				include_once("connection.php");	
				$currentdate=date("Y-m-d");
				echo"<div class='container'>";
				echo "<div class='row'>";
				echo"<div class='col-sm-10 col-md-10 col-sm-offset-1' id='txtHint' >";
						echo '<div class="table-responsive"><table class="table table-hover table-bordered">
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
				//$filter_query=mysqli_query($con,"SELECT * FROM `usertestresults` WHERE Date='$currentdate' ORDER BY Date");
				
				
				$filter_query=mysqli_query($con,"SELECT UserId, UserName, DeptName, 
					SUM(App_Question) AS 'App_Question', SUM(App_Attend) AS 'App_Attend', SUM(App_Result) AS 'App_Result',  
					SUM(Tech_Question) AS 'Tech_Question', SUM(Tech_Attend) AS 'Tech_Attend', SUM(Tech_Result) AS 'Tech_Result'
					FROM
					(
						SELECT UserId, UserName, DeptName, 
						SetType AS 'App_SetType', TotalQuestion AS 'App_Question', TotalAttend AS 'App_Attend', TotalResult AS 'App_Result',
						NULL AS 'Tech_SetType', 0 AS 'Tech_Question', 0 AS 'Tech_Attend', 0 AS 'Tech_Result'
						FROM usertestresults WHERE TestType = 'Aptitude' && Date='$currentdate'

						UNION ALL

						SELECT UserId, UserName, DeptName, 
						NULL AS 'App_SetType', 0 AS 'App_Question', 0 AS 'App_Attend', 0 AS 'App_Result',
						SetType AS 'Tech_SetType', TotalQuestion AS 'Tech_Question', TotalAttend AS 'Tech_Attend', TotalResult AS 'Tech_Result'
						FROM usertestresults WHERE TestType = 'Technical' && Date='$currentdate'
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
				echo"</table>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				
				
				
				
			?>
			
		</div>
		
		<script>
			
			$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
			});
			$(function () {
			  $("#datepicker1").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
			});
		
		</script>
		<script>
		function fetchdetails() {
			var str=$('#fromdate').val();
			var str1=$('#todate').val();
			
		  if (str=="" && str1 == "") {
			document.getElementById("txtHint").innerHTML="No data Found";
			return;
		  } 
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			  document.getElementById("txtHint").innerHTML=this.responseText;
			}
		  }
		  xmlhttp.open("GET","fetchresultdetails.php?fromdate="+str+"&todate="+str1,true);
		  xmlhttp.send();
		}
		</script>
		<script>
			
		$(document).ready(function () {
          history.pushState(null, null, location.href);
			window.onpopstate = function () {
				history.go(1);
			};
        });
			
	$(document).ready(function(){
		var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
		setInterval(function(){
			var currentdate = new Date();
			var temp=currentdate.toString();
			var date=days[currentdate.getDay()]+" , "+temp.split(" ")[1]+" "+temp.split(" ")[2]+" "+temp.split(" ")[3]+" "+temp.split(" ")[4];
			
			$('.currenttime').text(date);
		},1000);
	});
	</script>
<div class="container footer">
	<div class="row">
		<div class="col-md-4" style="padding: 0;text-align: left;"><p class="currenttime"></p></div>
		<div class="col-md-4" style="padding: 0;text-align: center;"><p>&copy; All Rights Reserved <a target="_blank" href="http://www.prematix.com">Prematix Software Solution Private Limited</a></p></div>
		<div class="col-md-4" style="padding: 0;text-align: right;"><p></p></div>
	
	</div>
</div>
	</body>
</html>