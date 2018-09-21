<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Karla|Libre+Barcode+128+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/login3.css">
</head>
<body>
	<div class="col-sm-12">
<div class="top">
	 <img src="logo.png" style="position: absolute; top:10px;width:200px; height:40px;">
	 <a class="log" href="login.php">Login</a>
	 <a class="reg" href="#">Register</a>
	</div>
	<h3 class="login">Register</h3>
	<div class="form">
<form method="post" action="#" style="position: absolute; top:130px; left:150px;"><!-- Registration form -->
	<label for="fname">First Name </label> <br>
	<input type="text" name="fname" class="form-control" style="width: 870px;"> <br>
	<label for="lname">Last Name </label> <br>
	<input type="text" name="lname" class="form-control"> <br>
	<label for="em">Email </label> <br>
	<input type="email" name="em" class="form-control" style="width: 870px;"> <br>
	<label for="phone">Phone </label> <br>
	<input type="text" name="phone" class="form-control" style="width: 870px;"> <br>
	<input type="submit" name="regbtn" class="btn btn-success" value="Register">
</form>
<?php 
if(isset($_POST["regbtn"])){//Checking if register button is pressed
	$name=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["em"];
	$pn=$_POST["phone"];
	$ps=md5($pn);//encrypting and storing password for security
	$conn=new mysqli("localhost","root","","leaderboard");//connecting to mysql database
	$sql="insert into reg(fname,lname,email,phone) values('$name','$lname','$email','$ps');";//inserting values into reg table
	$conn->query($sql);
}
?>
</div>
</div>
</body>
</html>