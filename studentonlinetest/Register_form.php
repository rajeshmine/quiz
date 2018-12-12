<?php
	session_start();
	include_once('connection.php');
	$date=date('Y-m-d');
	$clgquery=mysqli_query($con,"SELECT * FROM `collegenamedetails` WHERE InterviewDate='$date' && CStatus='Y'");
	$deptquery=mysqli_query($con,"SELECT DISTINCT `degree` FROM `coursedetails` WHERE coursestatus='Y' ");
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">    </script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="first.css">





<style type="text/css">



body{

background-image: url(images/bg.jpg);
background-repeat: no-repeat;
background-size:cover;
background-attachment:fixed;

}




	

.m-stu-regbox{
	max-width: 100%;
	min-height: 680px;
	background-color: #fff;
	border-radius: 10px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);

}


h1.head{
	text-align: center;
    padding: 15px 0px;
    border-bottom: 1px solid #e4e1e1;
    background-color: #15cca3;
    font-size: 30px;
    color: #fff;
}


.pad0{
	padding: 0px;



}



.m-type-button {
            font-size: 1.4rem;
            padding: .85rem 2.13rem;
            margin: 6px;
            border-radius: 2px;
            border: 0;
            -webkit-transition: .2s ease-out;
            transition: .2s ease-out;
            text-transform: uppercase;
            white-space: normal !important;
            word-wrap: break-word;
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            background-color: #13cda3 !important;
            color: #fff !important;
        }

            .m-type-button:hover {
                box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
                background-color: #ea7100 !important;
            }




.fa-2x {
    font-size: 1.5em;
}


.form-group {
    margin-bottom:5px;
}


.wc-date-container {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 86%;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    text-align: left;
    border-radius:none!important;
    cursor: pointer;
     -webkit-box-shadow: none!important;
     box-shadow:  none!important;
     -webkit-transition: none!important; 
    -o-transition:  none!important;
     transition: none!important; 
}

.wc-date-container > span {
    color: #ada8a8;
    font-weight: 500;
}

            label.btn span {
  font-size: 1.1em ;
}










</style>










</head>
<body>


<div class="container">
<div class="row card" style="background-color:#13cda3;color:#fff;">
		<div class="col-md-6">
			<p class="header_text">ONLINE TEST FOR APTITUDE AND TECHNICAL </p>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<p class="logout_text"><a href="index.php">LOGIN</a></p>
		</div>
		
	</div>
</div>
<div class="container">




<div class="col-sm-6 col-sm-offset-3" style="">


<br><br>
<div class="m-stu-regbox">


<h1 class="head">Registration </h1>



<div class="col-md-12" style="margin-top:5%;">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
	<div class="col-md-12">

<div class="form-group">
    <label for="email">Name</label>
	<input class="form-control" type="text" required value="" name="name" placeholder="Name" autocomplete="off" />
  </div>
</div>


<div class="col-md-12" style="margin-bottom:15px;">
<div class="form-group">
	<label>DOB</label>
	<div id="datepicker" class="input-group date" required  data-date-format="yyyy-mm-dd">
		<input class="form-control" type="text" readonly required name="dob" style="background:#fff;"/>
		<span class="input-group-addon"style="background:#fff;"><i class="glyphicon glyphicon-calendar"></i></span>
	</div>
  
</div>	
	
</div>



<div class="col-md-12">
<div class="form-group">
<label>Mobile No</label>
  <input class="form-control"  type="text" onkeypress="return isNumber(event)"  name="mobile" placeholder="Mobile No" maxlength="10" autocomplete="off" class="mobileno" required />
  
</div>

</div>
<div class="col-md-12">

<div class="form-group">
	<label>Email Id</label>
  <input class="form-control" type="email" value="" name="email" placeholder="Email Id" autocomplete="off" class="email" required />
  
</div>
</div>

<div class="col-md-12">
	<label>Gender</label><br>
    <label><input type="radio" name='gender1' checked value="male" required> Male</label>
    <label><input type="radio" name='gender1' value="female" required>Female</label>
</div>



<div class="col-md-12">

<div class="form-group">
  <label>College Name</label>
  <select class="form-control" name="collegename"  required  >.
	<option value="" selected disabled>Select</option>
	<?php while($row=mysqli_fetch_array($clgquery)){?>
	<option value="<?php echo $row['CollegeName']?>"><?php echo $row['CollegeName']?></option>
	<?php }?>
  </select>

</div>

</div>

<div class="col-md-12">

<div class="form-group">
	<label>Degree</label>
	<select class="form-control" name="degree"  required onchange="courcechnge(this.value);" >.
		<option value="" selected disabled>Select</option>
		<?php while($row=mysqli_fetch_array($deptquery)){?>
		<option value="<?php echo $row['degree']?>"><?php echo $row['degree']?></option>
		<?php }?>
	</select>
  
  
</div>

</div>

<div class="col-md-12">

<div class="form-group">

  <label>Department</label>
  
	<select class="form-control" name="department"  id="courcelist" required  >.
	
	</select>
  
 
</div>

</div>

<div class="text-center">


<button class="m-type-button" type="submit" name="submit" style="font-size: 13px;">  Submit     </button>


</div>


</form>


</div>

 </div>

 </div>

</div>

<style>
	.success{
		color: #13cda3;
    text-align: center;
    margin-top: -10px;
    font-size: 14px;
    font-weight: bold;
	}
	.user{
		text-align: left;
		color: #795548;
		font-size: 12px;
		font-weight: bold;
	}
	
	.table {
    width: 109%;
     max-width: 109%; 
    margin-bottom: 20px;
}
</style>





<?php
	include_once("connection.php");
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$collegename=$_POST['collegename'];
		$degree=$_POST['degree'];
		$department=$_POST['department'];
		$gender=$_POST['gender1'];
		if(function_exists('date_default_timezone_set')) {
		date_default_timezone_set("Asia/Kolkata");
		}
$numlength = strlen((string)$mobile);
if($numlength==10){

// then use the date functions, not the other way around
$data = date('md',strtotime($dob));
$date = date("dm");
$only_year=date('y');
$year = substr($only_year,-2);
$date1 =  date("His ");
$dynamic_id=$date.''.$year.''.$date1;
$password=$name.''.$data;
$encryt=md5($password);
$success="Register Successfully!!";
$userdetail="User Dteails";
$clickhere="";
$regdate=date('Y-m-d');
$retrive=mysqli_query($con,"SELECT * FROM `userregistrationdetails`") or die(mysqli_error());
$result_query=mysqli_query($con,"SELECT * FROM `userregistrationdetails` WHERE MobileNo='".$mobile."'") or die(mysqli_error());
$result_query1=mysqli_query($con,"SELECT * FROM `userregistrationdetails` WHERE EmailId='".$email."'") or die(mysqli_error());
	$mobile_count=mysqli_num_rows($result_query);
	$mail_count=mysqli_num_rows($result_query1);
	if($mobile_count == 0 && $mail_count==0){
		$insertquery=mysqli_query($con,"INSERT INTO `userregistrationdetails`(`UserId`, `Name`, `DOB`, `MobileNo`, `EmailId`, `CollegeName`, `Degree`, `DeptName`, `Gender`,`RegisterDate`) VALUES ('$dynamic_id','$name','$dob','$mobile','$email','$collegename','$degree','$department','$gender','$regdate')")or
       die(mysqli_error());
		
		
			echo'<script>alert("Register Successfully!!!")</script>';
			
			$gotologin=mysqli_query($con,"INSERT INTO `logindetails`(`UserId`, `Pwd`,`MobileNo`, `UserName`,`logindate`,`Email`) VALUES ('$dynamic_id','$password','$mobile','$name','$regdate','$email')");
			echo '<script>$(".m-stu-regbox").hide()</script>';
			//echo '<script>$(".mobileno").val("");</script>';
			//echo '<script>$(".email").val("");</script>';
			
			echo"<div class='container'>";
			echo'<br>';echo'<br>';echo'<br>';echo'<br>';
			echo "<div class='row'>";
				echo"<div class='col-sm-4 col-md-4'>";echo'</div>';
				echo"<div class='col-sm-4 col-md-4 w3-card-4' style='background-color:#fff;height:400px;'>";
					echo'<div class="row">';
						echo'<div class="col-sm-12 col-md-12" style="background-color:#00bcd4;height:45px;">';
							echo'<br>';
							echo '<p style="color:#fff;font-size:14px;text-align:center;margin-top:-10px;font-weight:bold;">'.$success.'</p>';
						
						echo'</div>';
					echo'</div>';
					echo'<br>';
					echo "<table class='table table-hover table-bordered' style='margin-left: -15px;'>";
						
						echo"<tr>";
						echo "<td> <p class='user'>User ID " .$clickhere."</p> </td>";
						echo "<td> <p class='user'> <span style='color:#E91E63;'>" .$dynamic_id."</span></p> </td>";
						
						
						echo "</tr>";
						echo"<tr>";
							echo "<td> <p class='user'>Password " .$clickhere."</p> </td>";
							echo "<td> <p class='user'> <span style='color:#E91E63;'>" .$password."</span></p> </td>";
						echo "</tr>";
						echo"<tr>";
							echo "<td> <p class='user'>User Name " .$clickhere."</p> </td>";
							echo "<td> <p class='user'><span style='color:#E91E63;'>" .$name."</span></p> </td>";
						echo "</tr>";
						echo"<tr>";
							echo "<td> <p class='user'>Mobile No " .$clickhere."</p> </td>";
							echo "<td> <p class='user'><span style='color:#E91E63;'>" .$mobile."</span></p> </td>";
						echo "</tr>";
						echo"<tr>";
							echo "<td> <p class='user'>Email-ID " .$clickhere."</p> </td>";
							echo "<td> <p class='user'><span style='color:#E91E63;'>" .$email."</span></p> </td>";
						echo "</tr>";
						
					echo"</table>";
					echo '<hr>';
					echo '<a class="user" href="index.php" style="margin: 25%;color: #E91E63;"><i class="material-icons" style="vertical-align: middle;">&#xE5C8;</i>  Click Here To Login'.$clickhere.'</a>';
				echo "</div>";
				echo"<div class='col-sm-4 col-md-4'>";echo'</div>';
			echo "</div>";
		echo "</div>";
			
			
		
		
	}
	else{
			echo'<script>alert("Mobile Number Or EmailId Alreay exits")</script>';
			echo'<script>window.location="Register_form.php"</script>';
		}
	}else{
		echo'<script>alert("Mobile Number incorrect")</script>';
		echo'<script>window.location="Register_form.php"</script>'; 
		
		}
	}
	
	
	

?>


<script>
		
$(function () {
	$("#datepicker").datepicker({ 
		autoclose: true, 
		todayHighlight: true
	});
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
function courcechnge(str) {
    if (str == "") {
        document.getElementById("courcelist").innerHTML = "";
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
                document.getElementById("courcelist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","courceget.php?degree="+str,true);
        xmlhttp.send();
    }
}
</script>
</body>
</html>
