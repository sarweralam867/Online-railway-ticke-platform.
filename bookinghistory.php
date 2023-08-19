<!DOCTYPE html>
<html>
<head>
	
    <title>Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
    body{
        background: url("Bangladesh-Railway.jpg");
        background-repeat: no-repeat;
        background-size: 1537px 754px;
        background-position: fixed;
    }
	.p1 {
  	font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>
<body> 
	
<h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
    <?php
  
    function connect_to_db() {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="bangladesh_railway";
     
    $conn= new mysqli($servername,$username,$password);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
        }
    else{
        mysqli_select_db($conn,$dbname);
        echo "";
        }
    }
    $conn = connect_to_db();

    $conn = null;
    ?>

    <h1>Booking History</h1>
    <?php if (empty($bookingHistory)) { ?>
        <p>No booking history available.</p>
    <?php } else { ?>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>User Name</th>
                    <th>Booking Date</th>
                    <th>Destination</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookingHistory as $booking) { ?>
                    <tr>
                        <td><?php echo $booking['booking_id']; ?></td>
                        <td><?php echo $booking['user_name']; ?></td>
                        <td><?php echo $booking['booking_date']; ?></td>
                        <td><?php echo $booking['destination']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>
</html>