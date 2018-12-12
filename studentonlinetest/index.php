<?php
session_start();
include_once('connection.php');
$date=date('Y-m-d');
$selectqry=mysqli_query($con,"SELECT * FROM `collegenamedetails` WHERE InterviewDate='$date' && CStatus='Y'");
$row=mysqli_fetch_array($selectqry);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Page</title>
		<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
		<link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="login.css">
		
	</head>
	<body>
		
		    <form id="form_login" method="post" action="login.php" autocomplete="off">
				<div class="form_content">
				<p>
					<img class="logpro_img" src="pro_icon.png">
				</p>
				<p class="welcome_txt">
					Welcome<br/>
					<small class="welcome_small">
						Sign in to Your Account
					</small>
				</p>
				<p>
					<span class="input_label">User Id / Mobile No</span>
					<!-- <span class="input_check">
						<i class="material-icons">&#xE876;</i>
					</span> -->
					<input type="text" id="username" placeholder=""  name="username" required  autocomplete="off" />
					
				</p>
				<p>
					<span class="input_label">Password</span>
					 <span class="pwd_check">
						<i class="material-icons visibilityon" style="opacity:0;">&#xE417;</i>
						<i class="material-icons visibilityoff" style="display:none;">&#xE8F5;</i>
					</span> 
					<input type="password" id="password" placeholder="" name="password"  required  autocomplete="off"/>
				</p>
				
				<p style="">
					
					<button id="submitbutton" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
						LOGIN
					</button>
				
				</p>
				</div>
				<?php if($row){?>
					<div class="form_footer">
						<p ><a href="Register_form.php" style="cursor:pointer;">Register Here</a>
							
						</p>
					</div>
				<?php }?>
			</form>
			<script>
			$(document).ready(function () {
			  history.pushState(null, null, location.href);
				window.onpopstate = function () {
					history.go(1);
				};
			});
			$(document).ready(function () {
				$(".visibilityon").click(function(){
					$(this).hide();
					$(".visibilityoff").show();
					 document.getElementById('password').type = 'text';
				});
				$(".visibilityoff").click(function(){
					$(this).hide();
					$(".visibilityon").show();
					 document.getElementById('password').type = 'password';
				});
				$("#password").keyup(function(){
					if($(this).val().length > 0){
						$(".visibilityon").css("opacity","1");
					}else{
						$(".visibilityon").css("opacity","0");
					}
					
				});
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