<?php 
error_reporting(0);
include 'dbconnect.php';
if(isset($_POST['btnsubmit']))
{


$sql="insert into a_registration(fname,Gender,phone_no,email,password)values('".$_POST['fname']."','".$_POST['Gender']."','".$_POST['phone_no']."','".$_POST['email']."','".$_POST['password']."')";
	if(mysqli_query($conn,$sql))
	{
       echo "<script>alert('Registration successful')</script>";
	}
	else
	{
		echo "Registration not successful";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>info</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.container
		{
			
			padding: 30px;

		}
		
		.register
		{
            background-color: lightgray;
            border-top-right-radius:5px;	
			border-bottom-right-radius:5px; 
			padding: 20px;


		}
		body
		{
			background-color: whitesmoke;
	
		}
		button
		{
			border-top-left-radius:5px;
			border-bottom-right-radius:5px; 
		}
		label
		{
			color: black;
		}
		h1,h2
		{
           color:teal;			
		}
	</style>
</head>
<body>

	<br><br>
	<form action="registration.php" method="POST">
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 register">
					<h2 align="center"><b>REGISTERATION</b></h2>
					<div class="row" >
						<div class="col-sm-12">
							<label>Full Name<span style="color: red">*</span></label>
							<input type="text" name="fname" class="form-control" onkeypress="javascript:return isString(event)" required="">
					    </div>
					<br>
					<div class="col-sm-12">
							<label>Gender<span style="color: red">*</span></label><br>
							<input type="radio" name="Gender" required="">Male &nbsp;&nbsp; &nbsp;&nbsp;
		            <input type="radio" name="Gender" required="">Female &nbsp;&nbsp; &nbsp;&nbsp;
		            <input type="radio" name="Gender" required="">Other &nbsp;&nbsp; &nbsp;&nbsp;
						</div>
					<br>
					<div class="col-sm-12">
							<label>Phone Number<span style="color: red">*</span></label><br>
							<input type="number" name="phone_no" class="form-control" onkeypress="javascript:return isNumber(event)" required="">
		            
						</div>
						<br>
						<div class="col-sm-12">
							<label> Email<span style="color: red">*</span></label><br>
							<input type="email" name="email" class="form-control" required="">
						</div>
					
					<br>
					
                        <div class="col-sm-12">
							<label>Password<span style="color: red">*</span></label><br>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<br>
					
					<div class="col-sm-12">
							<label>Department:</label>
		<select class="form-control">
			<option>Computer Science & Engineering</option>
			<option>Electronic & Telecommunication</option>
			<option>Electrical</option>
			<option>Mechanical</option>
			<option>Civil</option>
		</select><br><br>
						</div>
					
					<div class="row">
						<div class="col-sm-6">
							<input type="submit" name="btnsubmit" class="btn btn-light" value="Register"class="form-control"style="background-color:#4d79ff" align="center">
						</div>

						<div class="col-sm-6">
							<input type="submit" name="" class="btn btn-light" value="Cancel"class="form-control"style="background-color:#f44336" >
						</div>
					</div>
				</div>
				</div>

			</div>
		</div>
</div>
</div>

	</div>
	<div class="col-sm-1"></div>
</div>
</div>
</form>
</body>


</html>
<?php include 'footer.php'; ?>