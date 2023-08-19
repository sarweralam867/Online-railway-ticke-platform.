<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
        body {
            background: url("Bangladesh-Railway.jpg");
            background-repeat: no-repeat;
            background-size: 1537px 754px;
            background-position: fixed;
        }

        .p1 {
            font-family: "Times New Roman", Times, serif;
        }

        .faq-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .faq-question {
            color: #007bff; /* Blue color for questions */
        }

        .faq-answer {
            color: #000000; /* Black color for answers */
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
        <div class="faq-container">
            <h1>Helpdesk and FAQs</h1>
            <?php
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

            // Fetch FAQs from the database
            $sql = "SELECT id, question, answer FROM faqs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="faq-question">Q: ' . $row['question'] . '</div>';
                    echo '<div class="faq-answer">A: ' . $row['answer'] . '</div>';
                }
            } else {
                echo "No FAQs available.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>






</body>
</html>