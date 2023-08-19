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


<body>
<div style = "position:absolute; right:180px; top:5px;">
    <div class="site-logo">
        <div class="header-logo-img">
            <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
        </div>

    </div>
    <h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
    <h4> <span style="color:#000000" class="p1"> Cancel Your Ticket </span></h4>
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

    $message = ""; 

    if (isset($_POST['delete_id'])) {

        $id = $_POST['delete_id'];

        $conn = connect_to_db();

			
        try {
   
            $stmt = $conn->prepare("DELETE FROM your_table_name WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $message = "Row deleted successfully!";
        } catch (PDOException $e) {
            $message = "Error: " . $e->getMessage();
        }
    }

    $conn = null;
    ?>

    <div id="message"><?php echo $message; ?></div>

    <form method="post" onsubmit="return confirm('Are you sure you want to cancel your ticket?');">
        Enter Your Account Number: <input type="text" name="delete_id" required>
        <input type="submit" value="Delete">
    </form>
</body>
</html>