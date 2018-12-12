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
		.material-icons{
			vertical-align:middle;
			font-size:50px;
		}
		
		.option_text{
			line-height:75px;
			text-align:center;
			font-size:16px;
			font-weight:500;
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
					
					<a href="index.php" id="logout"  style="line-height: 86px;color: #fff;margin-right: 12px;outline: none;"><i class="material-icons" style="font-size:24px;">&#xE8AC;</i></a>
					
					<div class="mdl-tooltip" data-mdl-for="logout">
						Logout
					</div>
				</div>
				
			</div>
			<br/><br/><br/><br/><br/><br/>
			<div class="row" style="margin:0px 130px 0px 130px;">
			
				<div class="col-sm-3">
					<a href="addcollege.php"  style="text-decoration:none;">
					<div class="card option_div first">
						<p class="option_text"><i class="material-icons">&#xE147;</i> Add College</p>
					</div></a>
				</div> 
				
				<div class="col-sm-3">
					<a href="addcourse.php"  style="text-decoration:none;">
					<div class="card option_div second">
						<p class="option_text"><i class="material-icons">&#xE147;</i> Add Course</p>
					</div></a>
				</div> 
				
				<div class="col-sm-3">
					<a href="userlist.php" style="text-decoration:none;">
					<div class="card option_div third ">
						<p class="option_text"><i class="material-icons">&#xE8E8;</i> User Details</p>
					</div></a>
				</div>
				<div class="col-sm-3">
					<a href="questioninsert.html"style="text-decoration:none;">
					<div class="card option_div four">
						<p class="option_text"><i class="material-icons">&#xE147;</i> Add Question </p>
					</div></a>
				</div>
				
				<div class="col-sm-3">
					<a href="questionlist.php"style="text-decoration:none;">
					<div class="card option_div five">
						<p class="option_text"><i class="material-icons">&#xE06F;</i> Question  Details</p>
					</div></a>
				</div>
				
			
				
				<div class="col-sm-3">
					<a href="instruction.php"style="text-decoration:none;">
					<div class="card option_div six">
						<p class="option_text"><i class="material-icons">&#xE192;</i> Test Timings</p>
					</div></a>
				</div>
				<div class="col-sm-3">
					<a href="userresult.php"style="text-decoration:none;">
					<div class="card option_div gradient-45deg-amber-amber">
						<p class="option_text"><i class="material-icons">&#xE877;</i> User Results</p>
					</div></a>
				</div>
				<!-- 
				-->
				
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