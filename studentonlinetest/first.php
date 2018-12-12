<?php
session_start();
include_once('connection.php');
$quscount=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='APTITUDE' && SetType='".$_SESSION['settype']."'");
$appcount=mysqli_num_rows($quscount);
$quscount1=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='TECHNICAL' && SetType='".$_SESSION['settype']."'");
$techcount=mysqli_num_rows($quscount1);
$quscount2=mysqli_query($con,"SELECT * FROM `testtimingdetails` WHERE TestType='APTITUDE'");
$apptime=mysqli_fetch_array($quscount2);
$quscount3=mysqli_query($con,"SELECT * FROM `testtimingdetails` WHERE TestType='TECHNICAL'");
$techtime=mysqli_fetch_array($quscount3);


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Page</title>
		<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="first.css">
		<style>
		
		
		</style>
	</head>
	<body style="background-color:#e7e7e7;">
		<div class="container"> 
			<div class="row card" style="background-color:#13cda3;color:#fff;">
				<div class="col-md-6">
					<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					
				</div>
				
			</div>
			<div class="row custom_row">
				
				<div class="col-sm-1">
				</div>
				<div class="col-sm-10">
				<p class="sub_head">Please read the following instruction carefully</p>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead style="background:#eee;">
								<tr>
									<th>#</th>
									<th>Content</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Number Of Sections</td>
									<td>
										Aptitude - <?php echo $appcount;?> Questions<br/> 
										Technical - <?php echo $techcount;?> Questions
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Durations</td>
									<td>
										Aptitude - <?php echo $apptime['MinTime'];?> Minutes<br/> 
										Technical -  <?php echo $techtime['MinTime'];?> Minutes
									</td>
								</tr>
								<!-- <tr>
									<td>3</td>
									<td>General Instructions</td>
									<td>
										<p>1. All the questions are multiple type questions.</p>

										<p>2. The question palette at the right side of screen shows one of the following statuses of each of the questions numbered:</p>

										<p>a. Red Palette: You have not answered the question.</p>

										<p>b. Green Palette: You have answered the question</p>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Answering questions</td>
									<td>
										<p>1. You see four options for every question.</p>

										<p>2. To select your answer, click on one of the following option buttons.</p>

										<p>3. To change your answer, click another desired option button.</p>

										<p>4. To deselect a chosen answer, click on the chosen option again on the question palette.</p>
										<p>5. After end to test, click on finish test button.</p>
									</td>
								</tr>-->
								<tr>
									<td>3</td>
									<td>Note</td>
									<td>
										<p style="font-size: 15px;font-weight: 500;color: #F44336;">Don't Refresh the page.</p>
										<p style="font-size: 15px;font-weight: 500;color: #F44336;">Don't click Finish test button before you finish the test.</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
			<div class="row custom_row" align="center">
			<!-- Accent-colored raised button with ripple -->
				<!-- <a href="onlinetest.php"  onclick="window.open('onlinetest.php','newwindow','width=1200px,height=900px,minimize=no');"> -->
				
				<a href="onlinetest.php">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent start_btn">
				  Start test
				</button>
				</a>
			</div>
		</div>
		
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