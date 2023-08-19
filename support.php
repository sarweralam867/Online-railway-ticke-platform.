<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh Railway - Support Helpline</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
        body {
            background: url("Bangladesh-Railway.jpg");
            background-repeat: no-repeat;
            background-size: 1537px 754px;
            background-attachment: fixed;
        }

        .p1 {
            font-family: "Times New Roman", Times, serif;
        }

        .support-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .support-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .support-form label {
            font-weight: bold;
            color: black;
        }

        .support-form input[type="text"],
        .support-form textarea {
            padding: 5px;
            color: black; /* Set text color to black */
        }

        .support-form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        /* Set color of success message */
        .success-message {
            color: green;
        }

        /* Set color of the support heading and text to black */
        .support-heading,
        .support-text {
            color: black;
        }
    </style>
</head>
<body>
    <div style="position: absolute; right: 180px; top: 5px;">
        <div class="site-logo">
            <div class="header-logo-img">
                <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo">
            </div>
        </div>
        <h1><span style="color: #000000" class="p1">Bangladesh Railway</span></h1>
        <h4><span style="color: #000000" class="p1">নিরাপদ . আরামদায়ক . সাশ্রয়ী</span></h4>
        <div class="support-container">
            <h1 class="support-heading">Support Helpline</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Process the form here and send the email

                // Display success message after submission
                echo '<p class="success-message">Your message has been submitted successfully! Our customer service representatives will get back to you via email.</p>';
            }
            ?>
            <p class="support-text">If you need assistance, please fill out the form below and our customer service representatives will get back to you via email.</p>
            <form class="support-form" action="" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Your Email:</label>
                <input type="text" id="email" name="email" required>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
