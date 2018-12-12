<?php
	session_start();
	include_once('connection.php');
	
	if(isset($_POST['submit'])){
			
		$dateofinterview = $_POST['dateofinterview'];
		$collegename = $_POST['collegename'];
		$createdby = $_SESSION['UserName'];
		$calidateqry=mysqli_query($con,"SELECT * FROM `collegenamedetails` WHERE CollegeName='$collegename' ");
		$result=mysqli_fetch_array($calidateqry);
		if(!$result){
			$query=mysqli_query($con,"INSERT INTO `collegenamedetails`( `InterviewDate`, `CollegeName`, `CreatedBy`) VALUES ('$dateofinterview','$collegename','$createdby')");
			if($query){
			//	echo '<script>alert("Success.")</script>';
				echo '<script>window.location="addcollege.php"</script>';
			}else{
				echo '<script>alert("Sorry Try Again Later!!!.")</script>';
				echo '<script>window.location="addcollege.php"</script>';
			}
		}else{
			echo '<script>alert("Already Added!!!.")</script>';
			echo '<script>window.location="addcollege.php"</script>';
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
		<script src="jsfile.js" type="text/javascript"></script>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
		<style>
		.insert_btn{
			
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
			background: linear-gradient(45deg, #2196F3, #29B6F6 ) !important;
		}
		</style>
	</head>
	<body style="">
		
		<div class="container-fluid"> 
			<div class="row card headerbg">
				<div class="col-md-6">
					<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 text-right" style="color:#fff;">
					<a href="adminfirst.php" id="home" style="line-height:80px;color:#fff;outline:none;margin-right:20px;"><i class="material-icons">&#xE88A;</i></a>
					<div class="mdl-tooltip" data-mdl-for="home">
						Home
					</div>
					<a href="index.php" id="logout"  style="line-height:80px;color:#fff;outline:none;"><i class="material-icons">&#xE8AC;</i></a>
					
					<div class="mdl-tooltip" data-mdl-for="logout">
						Logout
					</div>
				</div>
			</div><br/>
			<ol class="breadcrumb">
				<li><a href="adminfirst.php">Home</a></li>
				<li class="active">Add College</li>        
			</ol>
			
		</div>
	
		<div class='container'>
		<div class="row">
				<h4 style="text-align:center;line-height:35px;font-weight:500;"> College Details </h4>
				<div class="col-sm-10 col-sm-offset-1" style="background-color:#fff;padding:10px;border-radius:4px;">
					<form id="form_login" method="post" action="addcollege.php" autocomplete="off">
					<div class="row addrow">
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-5">
									<p>Interview Date</p>
								</div>
								<div class="col-sm-7">
									<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
										<input class="form-control" type="text" value="" readonly required name="dateofinterview" style="background-color:#fff;" />
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-4">
									<p>College Name</p>
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="collegename" required>
								</div>
							</div>
							
						</div>
						<div class="col-sm-2">
							<button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent insert_btn headerbg">
								<i class="material-icons">&#xE147;</i> Add
							</button>
						</div>
					</div>
					</form>
					<div class="updaterow">
					
						<div class="col-md-3 pd0">
							<div class="row">
								<div class="col-md-4 pd0">
									<p>Interview Date</p>
								</div>
								<div class="col-sm-8 pd0">
									<div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
										<input class="form-control updatecalender" type="text" readonly required name="dateofinterview" style="background-color:#fff;" />
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 pd0">
							<div class="row">
								<div class="col-md-4 col-md-offset-2  pd0">
									<p>College Name</p>
								</div>
								<div class="col-sm-6 pd0">
									<input class="form-control updateclgname" type="text" value="" required onkeyup="valuechk(this.value);" />
								</div>
							</div>
						</div>
						<div class="col-md-2 pd0">
							<div class="row">
								<div class="col-md-4 col-md-offset-2 pd0">
									<p>Status</p>
								</div>
								<div class="col-sm-5 pd0">
									<select class="form-control updatestatus">
										<option value="Y">Y</option>
										<option value="N">N</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3 pd0">
							<div class="row">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent headerbg pull-right" onclick="cancel();">
									  Cancel
									</button>
									<!-- Accent-colored raised button with ripple -->
									<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent updatebtn headerbg pull-right"onclick="updatefn()" style="margin-right:3px;">
									  Update
									</button>
								
									<!-- Accent-colored raised button with ripple -->
									
								
							</div>
						</div>
						
					</div>
					
				</div>
				
		</div>
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
							
							<th>Interview Date</th>
							<th>College Name</th>
							<th style="text-align:center;">Status</th>
							<th>Edit</th>
							<th>Delete</th>
							
						</tr>';
				$selectcol_query=mysqli_query($con,"SELECT * FROM `collegenamedetails` ORDER BY InterviewDate DESC");
				$i=1;
				$j=1;
				$k=1;
				while($row=mysqli_fetch_array($selectcol_query)){
					echo"<tr class='tablerow'>";
								
								echo "<td>
									".$i++."
									</td>";
									
								echo "<td class='datetr'>".$row['InterviewDate']."</td>";
								
								echo "<td class='colname'>".$row['CollegeName']."</td>";
								
								echo "<td align='center'class='colstatus' >".$row['CStatus']."</td>";
								echo '<td align="center">
										
											<i class="material-icons editicon">&#xE254;</i>
									</td>';
								
								echo '<td align="center">
										
										<i class="material-icons deleteicon" id='.$row['UniqueId'].'>&#xE872;</i>
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
/* 
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#datepicker,#datepicker1').datepicker({

    beforeShowDay: function (date) {
        return date.valueOf() >= now.valueOf();
    },
    autoclose: true

}).on('changeDate', function (ev) {
    if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

        var newDate = new Date(ev.date);
        newDate.setDate(new Date.getDate() + 1);
        checkout.datepicker("update", new Date());

    }
    
});
 */





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


