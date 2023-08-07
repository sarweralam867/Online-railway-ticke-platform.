<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
	<style>
    body{
        background: url("https://mapio.net/images-p/46902617.jpg");
        background-repeat: no-repeat;
        background-position: fixed;
		background-size: 1540px 945px;
    }
	.p1 {
  	font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>
<body> 
	<img align="left" src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
	<div style = "position:absolute; left:550px">
	
    <div class="site-logo">
        <div class="header-logo-img">
            
        </div>
		<h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
		<h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
		<form action="entry.php" method="post" id="regForm">		
			<div class="reg-From-form">
				<div class="reg-form-control-single">
					<label for="Full_Name"><p style="color:#000000" class="p1">Full Name</p></label>
					<input type="text" name="Full_Name" id="Full_Name" placeholder="Enter your full name" autocomplete="on">
				</div>
				<div class="login-form-control-single">
					<label for="Mobile_number"><p style="color:#000000" class="p1">Mobile Number</p></label>
					<input type="tel" name="Mobile_number" id="Mobile_number" placeholder="Enter your mobile number" autocomplete="on">
				</div>
				<div class="reg-form-control-single">
					<label for="password"><p style="color:#000000" class="p1">Password</p></label>
					<input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
				</div>
				<div class="reg-form-control-single">
					<label for="NID"><p style="color:#000000" class="p1">NID Number</p></label>
					<input type="int" name="NID" id="NID" placeholder="Enter your NID number" autocomplete="off">
				</div>
				<div class="reg-form-control-single">
					<label for="Email"><p style="color:#000000" class="p1">Email</p></label>
					<input type="text" name="Email" id="Email" placeholder="Enter your email" autocomplete="off">
				</div>
				<div class="reg-form-control-single">
					<label for="Address"><p style="color:#000000" class="p1">Address</p></label>
					<input type="text" name="Address" id="Address" placeholder="Enter your address" autocomplete="off">
				</div>				
				<div class="reg-form-control-single">
					<label for="Post_Code"><p style="color:#000000" class="p1">Post Code</p></label>
					<input type="text" name="Post_Code" id="Post_Code" placeholder="Enter your post code" autocomplete="off">
				</div>					
				<div class="reg-form-control-single">
				<button class="reg-form-submit-btn" type="submit">Register</button>
				</div>
			</div>
		</form>

    </div>	
</body>
</html>
