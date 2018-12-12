<?php 
	session_start();
	include_once('connection.php');
	$gettesttype=mysqli_query($con,"SELECT DISTINCT `TestType` FROM `questiondetails` WHERE QStatus='Y'");
		
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<style>
			body, html {
				font-size:14px;
				font-family:Roboto;
				width: 100%;
				height: 100%;
				margin: 0;
				padding: 0;

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
			.start_btn{
				margin-top:50px;
				width:200px;
				height:60px;
			}
			.question{
				color:#666;
				font-size:15px;
				font-weight:500;
				font-family:Roboto;
				display:inline-block;
				margin-bottom:5px;
			}
			.answer{
				text-align:right;
				color:#009688;
				font-size:16px;
				font-weight:500;
				font-family:Roboto;
				float:right;
			}
			.answer span{
				color:#FF5722;
			}
			.option_text{
				margin-bottom:5px;
				margin-left:40px;
				color:#333;
				font-size:15px;
				font-weight:500;
				font-family:Roboto;
			}
			.qusdisdiv{
				margin: 10px 0px 10px 0px;
				padding: 3px;
				background-color: #ffffff82;
				border: 2px solid #fff;
				border-radius: 4px;
				box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px #fff, 0 1px 5px 0 #fff;
			}
			.scrollqus{
				overflow:scroll;
				max-height:600px;
				height:auto;
				overflow-x:hidden;
			}
			.material-icons{
			vertical-align:middle;
			
		}
		.headerbg{
			    background: linear-gradient(-340deg,#CDDC39,#FFC107)!important;
		}
		</style>
		
	</head>
	<body style="background-color:#fff;">
	<div class="container"> 
			<div class="row card headerbg" style="background-color:#13cda3;margin:0;margin-left:-15px;margin-right:-15px;position:sticky;top:0;">
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
			</div>
			<br/>
			<ol class="breadcrumb">
				<li><a href="adminfirst.php">Home</a></li>
				<li class="active">Question List</li>        
			</ol>
			<h4 style="text-align:center;">Question List</h4>
			<form class="form-inline" action="#" style="margin-left: 90px;">
			  <div class="form-group" style="margin-right:20px;">
				<label for="email"style="margin-right:10px;">Test Type</label>
				<select class="form-control test_type" onchange="setselect(this.value);">
					<option value="" selected disabled>Select</option>
					<?php 	while($row=mysqli_fetch_array($gettesttype)){?>
					<option value="<?php echo $row['TestType'];?>"><?php echo $row['TestType'];?></option>
					<?php } ?>
				</select>
			  </div>
			  <div class="form-group" style="margin-right:20px;">
				<label for="pwd" style="margin-right:10px;">Set Type</label>
				<select class="form-control" onchange="getvalbsdst(this.value)" id="setshowdiv">
				</select>
			  </div>
			</form>
			<br>
		<div class="scrollqus">
			<div style="margin:10px 100px 10px 100px;" id="valuedisplay">
			
			</div>
		</div>
</div>
<script>
//for set select
function setselect(str) {
    if (str == "") {
        document.getElementById("setshowdiv").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("setshowdiv").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","questionlistback.php?testtype="+str,true);
        xmlhttp.send();
    }
}
//for set select
function getvalbsdst(str) {
	//alert(str);
	var str1=$('.test_type').val();
	console.log();
    if (str == "" && srt1== "") {
        document.getElementById("valuedisplay").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("valuedisplay").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","questionlistback.php?settype="+str+'&testpost='+str1,true);
        xmlhttp.send();
    }
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