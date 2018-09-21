<!DOCTYPE html>
<html>
<head>
	<?php session_start() ?>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Karla|Libre+Barcode+128+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/login3.css">
</head>
<body>
<div class="col-sm-12">
	<div class="top">
	 <img src="logo.png" style="position: absolute; top:10px;width:200px; height:40px;">
	 <a class="log" href="#">Login</a>
	 <a class="reg" href="reg.php">Register</a>
	</div>
	<h3 class="login">Login</h3>
<div class="form">
<form method="post" action="" style="position: absolute; top:130px; left:150px;"><!--Login form -->
	<label for="em">Enter your email address </label><br>
	<input type="email" name="em" class="form-control" style="width: 870px;"> <br>
	<label for="ps">Enter your password </label><br>
	<input type="password" name="ps" class="form-control" > <br>
	<input type="submit" name="login" class="btn btn-success" value="Login">
</form>
</div>
<?php
if(isset($_POST["login"])){ //Checking if login button is pressed
	if(isset($_SESSION["en"])){//Checking if session is set 
	echo "<script> alert('Please Login to Continue');</script>";
}
else{
	$em=$_POST["em"];
	$pass=$_POST["ps"];
	$ps=md5($pass);
	$conn=new mysqli("localhost","root","","leaderboard");
	$sql="select * from reg where email='$em' and phone='$ps'";//checking if user is registered
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
	echo $res->num_rows;
	if($res->num_rows>0){
		$_SESSION["em"]=$em;
		header("Location:leader1.php");
	}
	else{
		echo"<script> alert('Unauthorised User'); </script>";//if not registered unauthorised user
	}
}
}
?>
</div>
</body>
</html>