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
	<div style = "position:absolute; right:180px; top:5px;">
    <div class="site-logo">
        <div class="header-logo-img">
            <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
        </div>

    </div>
    <h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
    <h1> <span style="color:#1e0f3b" class="p1"> Passenger List </span></h1>
    <ul>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="bangladesh_railway";
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM passenger";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['NID'] .  $row['Full_Name']  .  $row['Email'] .  $row['Mobile_Number'] .  $row['Address'] .  $row['number_of_tickets'] .  $row['Cost']  . "</li>";
                // Replace "column1" and "column2" with the column names from your table
                // Add more columns if you have additional data you want to display
            }
        } else {
            echo "No data found in the table.";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>