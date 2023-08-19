<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bangladesh_railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["name"]) && isset($_POST["nid"]) && isset($_POST["ticket_number"]) &&
       isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["refund_method"]) &&
       isset($_POST["account_number"])) {
       
        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $ticketNumber = $_POST["ticket_number"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $refundMethod = $_POST["refund_method"];
        $accountNumber = $_POST["account_number"];

        // Insert data into database
        $sql = "INSERT INTO cancellations (Name, NID, TicketNumber, Phone, Email, RefundMethod, AccountNumber) 
                VALUES ('$name', '$nid', '$ticketNumber', '$phone', '$email', '$refundMethod', '$accountNumber')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Your request will be processed within 24 hours. You will receive a confirmation email/message.');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ticket Cancellation - Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
        body {
            background: url("Bangladesh-Railway.jpg");
            background-repeat: no-repeat;
            background-size: 1537px 754px;
            background-attachment: fixed; /* Keep the background still */
        }

        .p1 {
            font-family: "Times New Roman", Times, serif;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            margin: 0 auto;
            width: 400px;
            max-width: 90%;
            margin-top: 50px;
        }
    </style>
    <script>
        function showPopup() {
            alert("Your request will be processed within 24 hours. You will receive a confirmation email/message.");
        }
    </script>
</head>
<body>
<div style="position:absolute; right:180px; top:5px;">
    <div class="site-logo">
        <div class="header-logo-img">
            <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150"
                 alt="Bangladesh Railway Logo">
        </div>
    </div>
    <h1> <span style="color:#000000" class="p1"> Bangladesh Railway </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>

    <div class="form-container">
        <form action="" method="post" id="ticketCancellationForm" onsubmit="showPopup();">
            <div class="ticket-cancellation-form-control-single">
                <label for="name"><span style="color:#000000" class="p1">Name</span></label>
                <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="nid"><span style="color:#000000" class="p1">NID</span></label>
                <input type="text" name="nid" id="nid" placeholder="Enter your NID number" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="ticket_number"><span style="color:#000000" class="p1">Ticket Number</span></label>
                <input type="text" name="ticket_number" id="ticket_number" placeholder="Enter your ticket number" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="phone"><span style="color:#000000" class="p1">Phone Number</span></label>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="email"><span style="color:#000000" class="p1">Email</span></label>
                <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="refund_method"><span style="color:#000000" class="p1">Refund Method</span></label>
                <select name="refund_method" id="refund_method" class="form-control" required>
                    <option value="Rocket">Rocket</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Bank">Bank</option>
                </select>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <label for="account_number"><span style="color:#000000" class="p1">Account Number</span></label>
                <input type="text" name="account_number" id="account_number" placeholder="Enter your account number" autocomplete="on" required>
            </div>
            <div class="ticket-cancellation-form-control-single">
                <button class="ticket-cancellation-form-submit-btn" type="submit">Request Ticket Cancellation</button>
           
