<?php
	session_start();
	include_once('connection.php');
	
	if(isset($_POST['submit'])){
			
		$degreename = $_POST['degreename'];
		$coursename = $_POST['coursename'];
		$createdby = $_SESSION['UserName'];
		
		$retquery=mysqli_query($con,"SELECT * FROM `coursedetails` WHERE degree='$degreename' && course='$coursename'");
		$coursecheck=mysqli_fetch_array($retquery);
		if(!$coursecheck){
		
			$query=mysqli_query($con,"INSERT INTO `coursedetails`( `degree`, `course`, `Createdby`) VALUES ('$degreename','$coursename','$createdby')");

			if($query){
			//	echo '<script>alert("Success.")</script>';
				echo '<script>window.location="addcourse.php"</script>';
			}
		}
		else{
				echo '<script>alert("Already Added this course!!!.")</script>';
				echo '<script>window.location="addcourse.php"</script>';
			}
		
	}
?>





<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Question Page</title>
		<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<link rel="stylesheet" href="first.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
		<script src="courseedit.js" type="text/javascript"></script>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
		<style>
		.insert_btn{
			background: linear-gradient(-340deg,#F44336,#E91E63)!important;
			float:right;
		}
		
		body{
			background-image: url(bgform.jpg);
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			background-color:#e7e7e7;
		}
		.header_text{
				line-height:80px;
				font-size:20px;
				font-family:Roboto;
				font-weight:500;
				color:#fff;
			}
		a{
			text-decoration:none;
			
		}
		.material-icons{
			vertical-align:middle;
			
		}
		.headerbg{
			background: linear-gradient(-340deg,#F44336,#E91E63)!important;
		}
		</style>
	</head>
	<body style="">
		
		<div class="container-fluid" > 
			<div class="row card headerbg" style="background-color:#13cda3;">
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
			</div><br/>
			<ol class="breadcrumb">
				<li><a href="adminfirst.php">Home</a></li>
				<li class="active">Add Course</li>        
			</ol>
			<div class="row" style="margin-left:120px;margin-right:120px;">
				<h4 style="text-align:center;line-height:35px;font-weight:500;"> Course Details </h4>
				<div class="col-sm-12" style="background-color:#fff;padding:10px;border-radius:4px;">
					<form id="form_login" method="post" action="addcourse.php" autocomplete="off">
					<div class="row addrow">
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-4">
									<p class="text_lineheight35">Degree Name</p>
								</div>
								<div class="col-sm-8">
									<select class="form-control" name="degreename">
										<option value="BE">BE</option>
										<option value="ME">ME</option>
										<option value="BSc">BSc</option>
										<option value="MSc">MSc</option>
										<option value="BTech">BTech</option>
										<option value="MTech">MTech</option>
										<option value="MCA">MCA</option>
									</select>
									
								</div>
							</div>
							
						</div>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-4">
									<p class="text_lineheight35">Course Name</p>
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="coursename" required >
								</div>
							</div>
							
						</div>
						<div class="col-sm-2">
							<button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent insert_btn">
								<i class="material-icons">&#xE147;</i> Add
							</button>
						</div>
					</div>
					</form>
					<div class="row updaterow">
						<div class="col-md-3 pd0">
							<div class="row">
								<div class="col-md-5 pd0">
									<p class="text_lineheight35">Degree Name</p>
								</div>
								<div class="col-sm-7 pd0">
									<select class="form-control updatedegname" name="degreeofname">
										<option value="BTech">BTech</option>
										<option value="BE">BE</option>
										
										<option value="ME">ME</option>
										<option value="BSc">BSc</option>
										<option value="MSc">MSc</option>
										
										<option value="MTech">MTech</option>
										<option value="MCA">MCA</option>
									</select>
									
								</div>
							</div>
						</div>
						<div class="col-md-4 pd0">
							<div class="row">
								<div class="col-md-3  col-sm-offset-2  pd0">
									<p class="text_lineheight35">Course Name</p>
								</div>
								<div class="col-sm-7 pd0">
									<input class="form-control ucrsname" type="text" value="" required name="courseofname" onkeyup="valuechk(this.value);" />
								</div>
							</div>
						</div>
						<div class="col-md-3 pd0">
							<div class="row">
								<div class="col-md-3 col-sm-offset-2 pd0">
									<p class="text_lineheight35">Status</p>
								</div>
								<div class="col-sm-5 pd0">
									<select class="form-control updatestatus" >
										<option value="Y">Y</option>
										<option value="N">N</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-2 pd0">
							<div class="row">
									<!-- Accent-colored raised button with ripple -->
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right headerbg" onclick="cancel();">
									  Cancel
									</button>
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent updatebtn  pull-right headerbg"onclick="updatefn()" style="margin-right:5px;">
									  Update
									</button>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<br>
		<div class='container'>
		<div class='row'>
		<div class='col-sm-10 col-md-10 col-sm-offset-1' >
		<div class="table-responsive" id="responce">
		<?php 
			
				
				
				$currentdate=date("Y-m-d");
				
						echo '
						<table class="table table-hover table-bordered">
						<tr>
							<th>
								S No
							</th>
							
							<th>Degree Name</th>
							<th>Course Name</th>
							<th style="text-align:center;">Status</th>
							<th>Edit</th>
							<th>Delete</th>
							
						</tr>';
				$selectcol_query=mysqli_query($con,"SELECT * FROM `coursedetails` ORDER BY degree ASC");
				$i=1;
				$j=1;
				$k=1;
				while($row=mysqli_fetch_array($selectcol_query)){
					echo"<tr class='tablerow'>";
								
								echo "<td>
									".$i++."
									</td>";
									
								echo "<td class='degname'>".$row['degree']."</td>";
								
								echo "<td  class='crsname' >"
										.$row['course']."
									</td>";
								
								echo "<td align='center' class='crsstatus'>".$row['coursestatus']."</td>";
								echo '<td align="center">
										
											<i class="material-icons editicon">&#xE254;</i>
									</td>';
								
								echo '<td align="center">
										
										<i class="material-icons deleteicon" >&#xE872;</i>
									</td>';
									
							echo "</tr>";
				}
				echo"</table>";
			?>
		</div>
		</div>
		</div>
				
		</div>
				
				
				
		
		
		<script>
		
$(function () {
	$("#datepicker,#datepicker1").datepicker({ 
		autoclose: true, 
		minDate:new Date(),
		todayHighlight: true
	}).datepicker('update', new Date());
});

function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
return false;
}
return true;
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


