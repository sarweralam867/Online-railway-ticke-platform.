<?php
require_once("Bangladesh_Railway.php");
session_start();

if(isset($_POST['Mobile_number']) && isset($_POST["password"])){
	//number and pass exists or not
	$u= $_POST['Mobile_number'];
	$p= $_POST['password'];
	$sql="SELECT * FROM passenger WHERE Mobile_number= '$u' AND Password= '$p'";
	$sql3="SELECT * FROM admin1 WHERE Mobile_number= '$u' AND Password= '$p'";
	$result= mysqli_query($conn,$sql);
	$result2= mysqli_query($conn,$sql3);
	//check if empty
	if (mysqli_num_rows($result)!=0){
		
		header("Location: homepage.php");
	}
	elseif (mysqli_num_rows($result2)!=0){
		header("Location: adminpage.php");
	}
	else{
		echo "Mobile Number or Password is wrong, or you are not registered yet.";
		
	}
	$sql2="SELECT * FROM passenger WHERE Mobile_number= '$u' AND Password= '$p'";
	$res= mysqli_query($conn,$sql2);
	while($row2=mysqli_fetch_row($res)){
		$_SESSION['full_name']=$row2[1];
		$_SESSION['nid']=$row2[0];
	}

	$sql4="SELECT * FROM admin1 WHERE Mobile_number= '$u' AND Password= '$p'";
	$res= mysqli_query($conn,$sql4);
	while($row2=mysqli_fetch_row($res)){
		$_SESSION['full_name']=$row2[1];
		$_SESSION['nid']=$row2[0];
	}
	
	
}

?>