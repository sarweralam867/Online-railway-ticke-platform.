<!DOCTYPE html>
<html>
<head>
    <title>Reset Password - Bangladesh Railway</title>
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
	<script>
		function showPopup(result) {
			if (result === 'success') {
				alert('Password reset successful!');
			} else if (result === 'error') {
				alert('Password reset unsuccessful. Please check your information.');
			}
		}
	</script>
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
    
	<form action="" method="post" id="resetPasswordForm" onsubmit="return validateForm()">
		<div class="reset-password-page-form">
			<div class="reset-password-form-control-single">
				<label for="nid"><span style="color:#000000" class="p1"><h3>National ID (NID)</h3></span></label>
				<input type="text" name="nid" id="nid" placeholder="Enter your NID number" autocomplete="on" required>
			</div>
			<div class="reset-password-form-control-single">
				<label for="new_password"><span style="color:#000000" class="p1"><h3>New Password</h3></span></label>
				<input type="password" name="new_password" id="new_password" placeholder="Enter your new password" autocomplete="off" required>
			</div>
			<div class="reset-password-form-control-single">
				<label for="confirm_password"><span style="color:#000000" class="p1"><h3>Confirm Password</h3></span></label>
				<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your new password" autocomplete="off" required>
			</div>
			<div class="reset-password-form-control-single">
				<button class="reset-password-form-submit-btn" type="submit">RESET PASSWORD</button>
			</div>
		</div>
	</form>

	<script>
		function validateForm() {
			// Simulate successful or unsuccessful reset
			var isSuccess = Math.random() < 0.5; // Simulating success and failure randomly
			showPopup(isSuccess ? 'success' : 'error');
			return false; // Prevent form submission for demonstration
		}
	</script>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bangladesh_railway";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nid = $_POST["nid"];
        $new_password = $_POST["new_password"];
    
        // Hash the new password for security
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
        // Update query
        $sql = "UPDATE `passenger` SET `Password` = '$hashed_password' WHERE `NID` = '$nid'";
    
        if (mysqli_query($conn, $sql)) {
            echo "<script>showPopup('success');</script>"; // Display success popup
        } else {
            echo "<script>showPopup('error');</script>"; // Display error popup
            echo "Error updating password: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
	?>
</body>
</html>
