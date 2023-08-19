<?php
session_start();
require_once("Bangladesh_Railway.php");

//number_of_seat
$sql1=("SELECT * FROM number_of_seats WHERE Train_ID = '$_SESSION[train_id]'");
$res1= mysqli_query($conn,$sql1);
$row1= mysqli_fetch_assoc($res1);
if (($row1['available_seats']-$_SESSION['num_of_ticket'])>=0){
	$sql2= "UPDATE number_of_seats SET available_seats=$row1[available_seats]-$_SESSION[num_of_ticket] WHERE Train_ID = '$_SESSION[train_id]'";
	$res2= mysqli_query($conn,$sql2);

    $_SESSION['available_seats']=$row1['available_seats'];
    //number_of_ticket
    $sql="UPDATE passenger SET number_of_tickets='$_SESSION[num_of_ticket]' WHERE NID='$_SESSION[nid]'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_affected_rows($conn)){
    }
    //cost
    $sql10="UPDATE passenger SET cost='$_SESSION[Total_price]' WHERE NID='$_SESSION[nid]'";
    $result10= mysqli_query($conn,$sql10);
    if (mysqli_affected_rows($conn)){
    }

    //ticket_number_create
    $sql1 = "INSERT INTO ticket VALUES('$_SESSION[train_id]-$_SESSION[journey_date]-$_SESSION[nid]','$_SESSION[journey_date]','$_SESSION[class]',$_SESSION[Price]*$_SESSION[num_of_ticket],$_SESSION[nid],'$_SESSION[train_id]')";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_affected_rows($conn)) {
    }


    //payment
    if (isset($_POST['number'])) {
        $a= $_POST['number'];
        $b= $_SESSION['nid'];
        $sql1 = "INSERT INTO payment VALUES('$a','$b')";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_affected_rows($conn)) {
            header("Location: finalpage.php");
        }
    }
}
else{
	header("Location: noseat.php");
}

?>