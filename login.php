<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
	<style>
	body{
		background:url("Bangladesh-Railway.jpg");
		background-repeat: no-repeat;
		background-size: 1537px 754px;
		background-position: fixed;
		font-family: "Times New Roman", Times, serif;
	}
	.p1 {
  	font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>
<body> 
	<div style = "position:absolute; right:180px;">
	<div class="site-logo">
		<div class="header-logo-img">
			<img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
		</div>

	</div>
    <h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
    

	<form action="signin.php" method="post" id="loginForm">
		<div class="login-page-form">
			<div class="login-form-control-single">
				<label for="Mobile_number"><span style="color:#000000" class="p1"><h3>Mobile Number</h3></span></label>
				<input type="tel" name="Mobile_number" id="Mobile_number" placeholder="Enter your mobile number" autocomplete="on">
			</div>
			<div class="login-form-control-single">
				<label for="password"><span style="color:#000000" class="p1"><h3>Password</h3></span></label>
				<input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
			</div>
			<div class="login-form-control-single">
				<button class="login-form-submit-btn" type="submit">LOGIN</button>
			</div>
			<div class="login-page-register-link">
				<button class="login-form-submit-btn" type="submit"><a href="register.php">REGISTER</button></a></span><br>		
			</div>
		</div>
	</form>

</body>
</html>