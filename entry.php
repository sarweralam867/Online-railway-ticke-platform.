<?php
require_once("Bangladesh_Railway.php");

if(isset($_POST['Full_Name']) && isset($_POST['Mobile_number']) && isset($_POST['password']) && isset($_POST['NID']) && isset($_POST['Email']) && isset($_POST['Address']) && isset($_POST["Post_Code"])){
	//number and pass exists or not
	$a= $_POST['Full_Name'];
	$b= $_POST['Mobile_number'];
	$c= $_POST['password'];
	$d= $_POST['NID'];
	$e= $_POST['Email'];
	$f= $_POST['Address'];
	$g= $_POST['Post_Code'];
	$sql="INSERT INTO passenger VALUES('$d','$a','$e','$c','$b','$f','$g',0,0)";
	$result= mysqli_query($conn,$sql);
	//check if empty
	if (mysqli_affected_rows($conn)){?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
			<link rel="stylesheet" href="style.css">
			<title>Registration</title>
		</head>
		</div>
		<body>
			<div class="finalheader">
				<img src="bangladesh-railway.png" alt="asdas">
				<h1 class="BDRailway">Bangladesh Railway</h1>
			</div>
			<div class="final_page">
				<div class="Text">
					<h1>Your Registration has been successfully completed.</h1>
				</div>          
			</div>
			<form action="login.php" method="post" id="loginForm">;
					<div class="login-form-control-single">
					<div class="login-form-control-single">
					<button class="login-form-submit-btn" type="submit" style = "position:absolute; right:590px; top: 400px">Click here to go back to the LOGIN PAGE</button>
					</div>
			</form>
		</body>
		</html>
	<?php
	}
	else{
		echo "Insertion failed.";
		
	}
}
?>
