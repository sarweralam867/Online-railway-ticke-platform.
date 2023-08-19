<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh Railway - Complaint Box</title>
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

        .complaint-container {
            background-color: rgba(255, 255, 255, 0.5); /* Adjusted opacity */
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .complaint-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Set text color to black */
        .complaint-form input[type="text"] {
            color: black;
        }

        /* Set color of success and error messages */
        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }

        /* Set color of specific lines */
        .red-line {
            color: red;
        }

        /* Set background color and text color for the button */
        .submit-button {
            background-color: red;
            color: white;
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
        <div class="complaint-container">
            <h1 class="complaint-heading">Complaint Box</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Database connection details
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'bangladesh_railway';

                // Create a connection
                $conn = new mysqli($server, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $complaint = $_POST['complaint'];

                // Insert the complaint into the database
                $sql = "INSERT INTO complaints (complaint) VALUES ('$complaint')";

                if ($conn->query($sql) === TRUE) {
                    echo '<p class="success-message">Complaint submitted successfully!</p>';
                } else {
                    echo '<p class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</p>';
                }

                // Close the database connection
                $conn->close();
            }
            ?>
            <p class="complaint-message red-line">If you have a complaint, you can submit it anonymously using the form below.</p>
            <form class="complaint-form" action="" method="post">
                <label class="complaint-label red-line" for="complaint">Your Complaint:</label>
                <textarea id="complaint" name="complaint" rows="4" required></textarea>
                <input type="submit" value="Submit" class="red-line submit-button">
            </form>
        </div>
    </div>
</body>
</html>
