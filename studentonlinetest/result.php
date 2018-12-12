<?php
session_start();
?>

<html>
<head>
	<title>Result</title>
	<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	
	 <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="first.css">
	<style>
		.ans ul {
			list-style-type: none;
			padding: 0;
			margin-bottom: 0;
		}
		.ans li {
			display: inline-block;
			position: relative;
			vertical-align: top;
			padding: 0.2em 0.4em;
			float:left;
		}
		.ans a {
			color: #FFF;
			background-color: #ddd !important;
			border-color: #00BCDF;
			font-weight: 700;
			border-radius: 8px;
			padding:16px;
			text-decoration:none !important;
		}
		
		.ans i
			{
			color: #00BCDF;
			position: absolute;
			padding: 17px 6px;
		}
		
	    .correct
			{
			color: #FFF;
			background-color: #15cca3 !important;
			border-color: #00BCDF;
			font-weight: 700;
			border-radius: 8px;
			padding:16px;
		}
		.wrong
			{
			color: #FFF;
			background-color: #fb1414 !important;
			border-color: #00BCDF;
			font-weight: 700;
			border-radius: 8px;
			padding:16px;
		}
		
		
	
	</style>
	
  
</head>

<body style="font-family: 'PT Sans', sans-serif;">

	
	<div class="container">
		<div class="row card" style="background-color:#13cda3;color:#fff;">
				<div class="col-md-6">
					<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					
				</div>
				
			</div>
		<br/><br/>
		<div class="row">
		
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align:center;">
			
				<?php if($_SESSION['testtype'] == 'APTITUDE'){
					$_SESSION['testtype']='TECHNICAL';
					$_SESSION['settype']='SET_A';	
					
				?>
					<script>
					function technicalfn(){
						var i=5;
						setInterval(function(){
							i--;
							if(i==0){
								window.location="onlinetest.php";
								
							}else{
								$('.timedisplay').text(i);
							}
							
						},1000);
					}
					<?php echo 'technicalfn();';?>
					
					</script>
					<h3 style="color: #15cca3 !important;">Wait</h3>
					<h4 style="color: #15cca3 !important;">Your Next Session will start with in <span class="timedisplay"> 5 </span> Sec</h4>
					<!-- Accent-colored raised button with ripple -->
					
				<?php }else{
					
					?>
					<script>
					function finishbfn(){
						var i=5;
						setInterval(function(){
							i--;
							if(i==0){
								
								window.location="index.php";
								
							}else{
								$('.timedisplay').text(i);
							}
							
						},1000);
					}
					<?php echo 'finishbfn();';?>
					</script>
					<h3 style="color: #15cca3 !important;">Thank You!!!</h3>
					<h4 style="color: #15cca3 !important;">Yours Test will be Validating...<span class="timedisplay">5</span></h4>
					
				<?php }?>
				
			</div>
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