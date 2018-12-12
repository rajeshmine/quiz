<?php
	session_start();
	include_once('connection.php');
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="first.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <style type="text/css">
    	
.m-quiz-header{
    background-color: #9E9E9E!important;
    color: #fff!important;
    width: 100%;
    height: 50px;
    position: relative;
    z-index: 10;
}

.m-top-quiz-header{
    background-color: #9E9E9E!important;
    color: #fff!important;
    width: 100%;    
     box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);  
}


		.quiz-head-text{
		text-align: left;
		padding: 20px 15px;
		font-size: 15px;
		font-weight: 500px;
		color: #fff;
		}

		.pad0{
		padding: 0px;
		}


		.quiz-main-box{
			background-color: #fff;
			border-radius: 2px;
			/* border: 1px solid #d3d1d1; */
			/* box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); */
			margin-top: 5%;
			min-height: 440px;
			box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
			margin-bottom: 15px;
		}


      .modal-body {
			max-height: calc(100vh - 300px);
			overflow-y: auto;
		}



        ::-webkit-scrollbar {
    width: 8px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.table_head {
    text-align: center;
    margin: 0;
    line-height: 50px;
    font-size: 19px;
    font-weight: 500;
}
.material-icons{
			vertical-align:middle;
			
		}
		.headerbg{
			background: linear-gradient(-340deg,#9E9E9E,#607D8B)!important;
		}

    </style>


<style>

</style>






</head>
<body>

<div class="container"> 
			<div class="row card headerbg" style="background-color:#13cda3;margin:0;margin-left:-15px;margin-right:-15px;">
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
				<li class="active">Test Timings</li>        
			</ol>
			</div>




<div class="col-xs-12">


<div class="col-sm-4 col-sm-offset-4  quiz-main-box pad0">


<header class="col-md-12 m-quiz-header pad0">
	<p class="table_head">Test Timings</p>

</header>


<div class="col-md-12 col-xs-12"><br>
<form class="form-inline" action="timesetfile.php" method="post">
  <div class="form-group">
		<label for="email">Test Type </label>
		
	  
	  
	  <select class="form-control" onchange="fetchdynamic(this.value);" >
	  	<option disabled selected>Select</option>
		<?php
			$gettesttype=mysqli_query($con,"SELECT DISTINCT TestType FROM questiondetails WHERE QStatus = 'Y'");
			while($row=mysqli_fetch_array($gettesttype)){
				
			
		?>
		
			<option value="<?php  echo $row['TestType'];?>"><?php echo $row['TestType'];?></option>
			<?php }?>
		
	</select>
	</div>
	<br>
	
	<div id="txtHint"></div>
  </form>
</div>



</div>

</div> 


<script>

function fetchdynamic(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = '';
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "testget.php?q="+str, true);
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