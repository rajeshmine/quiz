
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<script src="userjsfile.js" type="text/javascript"></script>
		<link rel="stylesheet" href="first.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
		<style>
			body, html {
				font-size:14px;
				font-family:Roboto;
				width: 100%;
				height: 100%;
				margin: 0;
				padding: 0;

			}
			body{
				background-image: url(images/bg.jpg);
				background-position: center center;
				background-attachment: fixed;
				background-size: cover;
				background-color:#e7e7e7;
			}
			.container{
				width:100%;
			}
			.custom_row{
				margin:5px;
			}
			.table-responsive{
				background-color:#fff;
				padding:10px;
			}
			.header_text{
				line-height:80px;
				font-size:20px;
				font-family:Roboto;
				font-weight:500;
			}
			.card{
				box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
			}
			.sub_head{
				font-size:16px;
				font-family:Roboto;
				font-weight:500;
				color:#E91E63;
				margin-top:20px;
			}
			
			
			.m-header{
				background-color: #9E9E9E!important;
				color: #fff!important;
				width: 100%;
				height: 50px;
				position: relative;
				z-index: 10;
			}

			.m-top-header{
				background-color: #13cda3!important;
				color: #fff!important;
				
			}


			.head-text{
				text-align: left;
				line-height:80px;
				font-size: 16px;
				font-weight: 500px;
				color: #fff;
			}

			.pad0{
				padding: 0px;
			}


			.main-box{

			   background-color: #fff;
				
				border-radius: 10px;
				border: 1px solid #d3d1d1;
				box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);         
				
				min-height: 500px;


			}


		  .modal-body {
			max-height: calc(100vh - 300px);
			overflow-y: auto;
			}



					::-webkit-scrollbar {
				width: 8px;
				height:8px;
			}
			 
			::-webkit-scrollbar-track {
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
				border-radius: 10px;
			}
			 
			::-webkit-scrollbar-thumb {
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
			}
			.table_head{
				text-align: center;
				margin: 0;
				line-height: 50px;
				font-size: 20px;
				font-weight: 500;
			}
			.material-icons{
			vertical-align:middle;
			
		}
		.headerbg{
			background: linear-gradient(-340deg,#9C27B0,#673AB7)!important;
		}
			
		</style>
		
	</head>
	<body style="background-color:#fff;">
<div class="container-fluid" >
	<div class="row card m-top-header headerbg">
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
		<li class="active">User List</li>        
	</ol>
	
	<div class="row updaterow">
		<div class="col-md-10 col-md-offset-1 " style="background-color: #fff;padding: 10px;
		border-radius: 4px;border: 1px solid #ddd;">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
					<div class="form-group">
					  <label for="usr">MobileNo:</label>
					  <input type="text" class="form-control updatemobile" readonly>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
					<div class="form-group">
					  <label for="usr">E-Mail ID:</label>
					  <input type="text" class="form-control updatemail" readonly>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
					  <label for="sel1">Status:</label>
					  <select class="form-control updatestatus" >
						<option>Y</option>
						<option>N</option>
						
					  </select>
					</div>
				</div>
				<div class="col-sm-4 ">
					
					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right headerbg" style="margin-top: 22px;" onclick="cancel_update();">
					  Cancel
					</button>
					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right headerbg" style="margin-right:3px;margin-top: 22px;" onclick="update_data();">
					  Update
					</button>
					
				</div>
			</div>
		</div>
	
	</div>
</div><br>
			<div class='container'>			
			<div class="col-md-10 col-md-offset-1 main-box pad0" >
				
				<header class="m-header pad0"><p class="table_head">User Details</p>
					<input type="text" class="form-control searchtxtbx" autocomplete="off" placeholder="Search by userId/name/mobile/email"  onkeyup="tablesearch(this.value)" >
				</header>			
				
				
			<?php
				
				include_once('connection.php');
				$currentdate=date("Y-m-d");
			//	$quslist=mysqli_query($con,"SELECT * FROM `logindetails` WHERE logindate='$currentdate' ");
				$quslist=mysqli_query($con,"SELECT * FROM `logindetails` WHERE Role='user' ORDER BY logindate DESC");
				
				
				echo'<div class="modal-body " id="responce" style="overflow-x:auto; overflow-y:auto;">';
						echo "<table class='table table-hover table-bordered'>
						<tr>
						<th>S.No</th>
						<th>Date of Registration</th>
						<th>User ID</th>
						<th>Name</th>
						<th>Password</th>
						<th>Mobile</th>
						<th>E-Mail ID</th>
						
						<th>Status</th>
						<th>Edit</th>
						</tr>
						
						<tbody id='myTable'>";
					$i=1;
					while($rows=mysqli_fetch_array($quslist)){
					
					echo"<tr class='tablerow'>";
					echo "<td>".$i++."</td>";
					echo "<td>".$rows['logindate']."</td>";
					echo "<td>".$rows['UserId']."</td>";
					echo "<td>".$rows['UserName']."</td>";
					echo "<td>".$rows['Pwd']."</td>";
					echo "<td class='mobileno'>".$rows['MobileNo']."</td>";
					echo "<td class='email'>".$rows['Email']."</td>";
					//echo "<td>".$rows['CollegeName']."</td>";
					echo "<td class='status'>".$rows['user_status']."</td>";
					echo "<td><i class='material-icons editicon'>&#xE254;</i></td>";
					/* echo "<td><input type='text' value=".$rows['user_status']." style='width:50px;border:1px solid #ddd;text-align:center;text-transform:uppercase;' maxlength='1'></td>"; */
					echo "</tr>";
                            
					}
					echo '</tbody>';
					echo"</table>";
					echo "</div>";
					
					
			?>			
			</div>
					</div>
			<script>
			
		$(document).ready(function () {
          history.pushState(null, null, location.href);
			window.onpopstate = function () {
				history.go(1);
			};
        });
			
		</script>
<script>
	$(function () {
	$("#datepicker").datepicker({ 
		autoclose: true, 
		minDate:new Date(),
		todayHighlight: true
	}).datepicker('update', new Date());
});
</script>
<script>
	$(function () {
	$("#datepicker1").datepicker({ 
		autoclose: true, 
		minDate:new Date(),
		todayHighlight: true
	}).datepicker('update', new Date());
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