<?php
	session_start();
	include_once('connection.php');
	
	$testtypeget=$_SESSION['testtype'];	
	$settypeget=$_SESSION['settype'];	
	
	$query=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='$testtypeget' && SetType='$settypeget'");
	
	$icount=mysqli_num_rows($query);

	$attendqus=0;	
	$notattedqus=0;	
	$resultcount=0;
	$date=date('Y-m-d');
	if(isset($_POST['finishtest'])){
			
		for($h=1;$h<=$icount;$h++){
			if(isset($_POST[$h])){
				
				$attendqus++;
				$tempvar=$_POST[$h];
				
				$anstest=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE QuestionNo='$h' && SetType='$settypeget' && Answer = '$tempvar' && TestType='$testtypeget'");
				$resultcount += mysqli_num_rows($anstest);
					 
			}else{
				$notattedqus++;
				$_POST[$h] = null;
			}
			
		}
	
		$getuserdetail=mysqli_query($con,"SELECT * FROM `userregistrationdetails` WHERE UserId='".$_SESSION['UserId']."'");
		$rowresule=mysqli_fetch_array($getuserdetail);
		$insquery=mysqli_query($con,"INSERT INTO `usertestresults`(`UserId`, `UserName`, `DeptName`, `SetType`, `TestType`, `TotalQuestion`, `TotalAttend`, `TotalResult`, `Date`) VALUES ('".$_SESSION['UserId']."','".$_SESSION['UserName']."','".$rowresule['DeptName']."','$settypeget','$testtypeget','$icount','$attendqus','$resultcount','$date')");

		if($insquery){
			$updateqry=mysqli_query($con,"UPDATE `logindetails` SET `user_status`='N' WHERE UserId='".$_SESSION['UserId']."'");
			mysqli_error($con);
		}else{
			echo mysqli_error($con);
		}
		 echo '<script>';
			echo '
				window.location="result.php";
			';
			echo '</script>';
			
			
	}
	
	
	
?>




<!DOCTYPE html>
<html>
<head>
	<title>OnlineTest</title>
	<meta charset="utf-8"><link  rel="icon" type="image/x-icon"  href="http://www.prematix.com/images/logo.png">    
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	
  	<!-- Compiled and minified JavaScript -->
	<script src="onlinetest.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="first.css">
  	<style>
  		.ans{

  			padding-left: 30px;
  			line-height: 2;
  		}
  		li{
  			    border: 1px solid #ddd;
			    border-radius: 10px;

			}

			.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
			    color: #fff;
			    background-color: #15cca3;
			    border-radius: 10px;
			}
			
	.timedisplay{
		
		background-color:#15cca3;
		color:white;
		font-size:30px;
		text-align:right;
		padding-right:40px;
		
	
	}
	
	
	body{
		
	}
	.logout_text{
		line-height:80px;
		text-align:right;
		
	}
	.logout_text a{
		color:#fff;
	}
	p{
		margin-bottom:10px;
	}
	.qusdivstle{
		margin-bottom: 20px;
		background: #ffffff9e;
		border: 2px solid #fff;
		border-radius: 4px;	
	}
	.qusstyle{
		font-size: 15px;
		font-weight: 500;
		color: #555;
	}
	.ans p{
		margin-bottom:3px;
	}
	.ans p label {
		font-size: 15px;
		font-weight: 400;
		text-transform: capitalize;
	}
  	</style>
	<script>

		function setCountDown(timeget){
			var interval=setInterval(function(){
				timmerfn();
			},1000);
			var min= (+timeget);
			var sec=00;
			function timmerfn(){
				if(sec == 00){
					sec=59;
					min--;
				}else{
					sec--;
				}
				if(min == 00 && sec == 00){
					clearTimeout(interval);
					alert('Your Session time out is Expired!!!.');
					$('.confirmbtn').click();
				}
				$('.timedisplay').text((min < 10 ? "0" + min : min) + ":" + (sec < 10 ? "0" + sec : sec) +"sec" );
			}
		}
		<?php
		 // $timget=mysqli_query($con,"SELECT * FROM `testtimingdetails` WHERE TestType='$testtypeget' && AssignDate='$date'");
		  $timget=mysqli_query($con,"SELECT * FROM `testtimingdetails`WHERE TestType='$testtypeget'");
		  $timepost=mysqli_fetch_array($timget);
			
		  if($timepost){
			  echo 'setCountDown('.$timepost["MinTime"].');';
			  
		  }
		
		?>
		</script>
		
</head>
<body>

	<div class="container">
		
		<div class="row card" style="background-color:#13cda3;color:#fff;">
			<div class="col-md-8">
				<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
			</div>
			<div class="col-sm-2 col-md-2">
			
				
			
			</div>
		
			<div class="col-md-2">
				<p>TIME REMAINING</p>
				<div class="timedisplay">	
				</div>
			</div>
			
		</div>
		


	</div>


	<div class="container" style="width: 100% !important;">

		<div class="row">

			<div class="col-sm-1 col-md-1 col-lg-1 col-xs-12">

			</div>
			<div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
				<h5 style="color: #292e2c;font-weight: 500;text-align: center;text-transform: uppercase;text-decoration: underline;"><?php echo $_SESSION['testtype'];?> Test</h5>
				<form action="#" method="post">
				<h5 style="text-align:right;">Questions <span class="crt_queno">1</span>  Of <span class="tot_que"><?php echo $icount;?></span></h5>
				  <ul class="nav nav-pills">
					<?php 
					$i=0;
					
					
						while($row1=mysqli_fetch_array($query)){
						if($i==0){	
					?>
				    <li class="active">
						<a data-toggle="pill" href=<?php echo '#'.$row1['QuestionNo'];?> class="<?php echo $row1['QuestionNo'];?>"><?php echo $row1['QuestionNo'];?></a>
					</li>
						<?php $i++;}else{ ?>
					<li>
						<a data-toggle="pill" class="<?php echo $row1['QuestionNo'];?>" href=<?php echo '#'.$row1['QuestionNo'];?> ><?php echo $row1['QuestionNo'];?></a>
					</li>
						<?php }}?>
					</ul>
			  <hr/>
				  
			<div class="tab-content">
					<?php 
						$query1=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE  TestType='$testtypeget' && SetType='$settypeget'");						
						$j=0;
																							
						while($row1=mysqli_fetch_array($query1)){
										
						$qusno=$row1['QuestionNo'];
						$query2=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='$testtypeget' && SetType='$settypeget' && QuestionNo='".$row1['QuestionNo']."'");
						while($row=mysqli_fetch_array($query2)){					
								
					?>	
					<?php if($j==0){
						$j++; ?>
				    <div id=<?php echo $row['QuestionNo'];?> class="tab-pane fade in active">
					<?php }else{ ?>
					<div id=<?php echo $row['QuestionNo'];?> class="tab-pane fade">
					<?php }?>
						<br/>
						<div class="row qusdivstle">
							<div class="col-sm-12">
								<p class="qusstyle"><?php echo $row['QuestionNo'].". ".htmlentities($row['QuestionDetails']); ?></p>
								<div class="ans">
									<p>
									  <input class="with-gap" type="radio" id=<?php echo "A".$row['QuestionNo'];?> value="A" name=<?php echo $row['QuestionNo'];?> />
									  
									  <label for=<?php echo "A".$row['QuestionNo'];?> > <?php echo "A) &nbsp; ".htmlentities($row['Option_A']);?></label>
									</p>
									
									<p>
									  <input class="with-gap"type="radio" id=<?php echo "B".$row['QuestionNo'];?> value="B" name=<?php echo $row['QuestionNo'];?>  />
									  <label for=<?php echo "B".$row['QuestionNo'];?>  > <?php echo "B) &nbsp; ".htmlentities($row['Option_B']);?></label>
									</p>
									
									<?php if($row['Option_C']!=null){?>
										<p>
										  <input class="with-gap" type="radio"  id=<?php echo "C".$row['QuestionNo'];?> value="C" name=<?php echo $row['QuestionNo'];?>  />
										  <label for=<?php echo "C".$row['QuestionNo'];?>>  <?php echo "C) &nbsp; ".htmlentities($row['Option_C']);?></label>
										</p>
									<?php }?>
									
									<?php if($row['Option_D']!=null){?>
										<p>
										  <input class="with-gap" type="radio"  id=<?php echo "D".$row['QuestionNo'];?> value="D" name=<?php echo $row['QuestionNo'];?>  />
										  <label for=<?php echo "D".$row['QuestionNo'];?>>  <?php echo "D) &nbsp; ".htmlentities($row['Option_D']);?></label>
										</p>
									<?php }?>
									<?php if($row['Option_E']!=null){?>
										<p>
										  <input class="with-gap" type="radio"  id=<?php echo "E".$row['QuestionNo'];?> value="E" name=<?php echo $row['QuestionNo'];?>  />
										  <label for=<?php echo "D".$row['QuestionNo'];?>>  <?php echo "E) &nbsp; ".htmlentities($row['Option_E']);?></label>
										</p>
									<?php }?>
									
									
								</div>
							</div>
						</div>
						<?php
						$qestion_count = $row['QuestionNo'];
						}	
						
						
						if($qestion_count == $icount){?>
							
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right" name="finishtest" onclick="finishedbtn();">
								Finish Test
							</button>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent prev" type="button" id=<?php echo "prev_".$qestion_count;?>>
								Previous <i class="material-icons">&#xE315;</i>
							</button>
						<?php }else{
							if($qestion_count != 1){
								echo '<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent prev" type="button" id="prev_'.$qestion_count.'">
								  <i class="material-icons">&#xE314;</i> Previous 
								</button>';
							}
							echo '<!-- Accent-colored raised button with ripple -->
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right next" type="button" id="next_'.$qestion_count.'">
								  Next <i class="material-icons">&#xE315;</i>
								</button>';
							}
							$query3=mysqli_query($con,"SELECT * FROM `questiondetails` WHERE TestType='$testtypeget' && SetType='$settypeget' && QuestionNo='".$row1['QuestionNo']."'");
							while($row=mysqli_fetch_array($query3)){
						
						?>
						
						<div class="clearfix"></div>
					</div>
						<?php 
						
						}
						}
						?>
					
				</div>

			</div>
			</form>
			
			<div class="col-sm-1 col-md-1 col-lg-1 col-xs-12">

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
			
		</script>
		<script>
		$(document).ready(function(){
			 
			$(".nav-pills li").each(function(){
				
				$(this).click(function(){
					var qno=$(this).text();
					$(".crt_queno").text(qno);
					
				});
			});
		 });
		</script>
		
		<script>
		$(document).ready(function(){
			var n=0;
			var tot_que=$(".tot_que").text();
			
			$(".tab-pane .ans input").each(function(){
				$(this).click(function(){
					
					console.log($(this).parent().parent().parent().parent().parent().parent().parent().parent().find('.nav-pills li:active'));
					
					$(this).parent().parent().parent().parent().parent().parent().parent().parent().find('.nav-pills li.active').css({'background':'#ddd'});
					
				});
			});
			$(".tab-pane button.next").each(function(){
				$(this).click(function(){
					console.log($(this).attr('id'));
					var getid=$(this).attr('id');
					var tempid=getid.split('_')[1];
					var finalid=(+tempid) + 1;
					console.log(finalid);
					$('.'+finalid).click();
					
				});
			});
			$(".tab-pane button.prev").each(function(){
				$(this).click(function(){
					console.log($(this).attr('id'));
					var getid=$(this).attr('id');
					var tempid=getid.split('_')[1];
					var finalid=(+tempid) - 1;
					console.log(finalid);
					$('.'+finalid).click();
					
				});
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