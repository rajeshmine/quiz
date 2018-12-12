<html>
<style>
	
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

	<div class="container">
	<?php include_once("connection.php");?>
	<?php 
		if(isset($_POST['uploadbtn'])){
			$filename=$_FILES['myfile']['name'];
			$filetmp=$_FILES['myfile']['tmp_name'];
			$fileExtension=pathinfo($filename,PATHINFO_EXTENSION);
			$allowedType=array('csv');
			if(!in_array($fileExtension,$allowedType)){?>
				<div class="alert alert-danger">
					Invalid File Extension
				</div>
			<?php }else{
				$handle=fopen($filetmp,'r');
				//fgetcsv($handle);
				while(($mydata=fgetcsv($handle,10000,','))!==FALSE){
					 $settype=$mydata[0];
					$testtype=$mydata[1];
					$qusno=$mydata[2];
					$qusdetails=$mydata[3];
					$optionA=$mydata[4];
					$optionB=$mydata[5];
					$optionC=$mydata[6];
					$optionD=$mydata[7];
					$optionE=$mydata[8];
					$answer=$mydata[9]; 
					/* $img=$mydata[0];
					$email=$mydata[1];  */
					$upload_query="INSERT INTO `questiondetails`(`SetType`, `TestType`, `QuestionNo`, `QuestionDetails`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `Option_E`, `Answer`,`CreatedBy`,`QStatus`) VALUES ('$settype','$testtype','$qusno','$qusdetails','$optionA','$optionB','$optionC','$optionD','$optionE','$answer','Admin','Y')";
					//$query="INSERT INTO `fileupload`(`name`, `email`) VALUES ('$img','$email')";
					$run=mysqli_query($con,$upload_query);
					
				}
				if(!$run){
					die("Error in uploading File".mysqli_error());
				}else{?>
					<div class="alert alert-success">
						File Upload Successfully
					</div>
				<?php }
			}
		}
	?>
		<form action="" method="post" enctype="multipart/form-data">
			<h3 class="text-center">
				upload your File
			</h3><hr>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<input type="file" name="myfile" class="form-control" >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<input type="submit" name="uploadbtn" class="btn btn-info" >
					</div>
				</div>
			</div>
		</form>
	</div>

</body>

</html>