<?php
$servername = "127.0.0.1:3306";
$username = "u575616828_Techlend";
$password = "Skippiespb1205@";
$dbname = "u575616828_Techlend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $overall_experience_rate = $_POST['overall_experience_rate'];
    $laptop_quality_rate = $_POST['laptop_quality_rate'];
    $assist = $_POST['assist'];
    $support_rate = $_POST['support_rate'];
    $security_rate = $_POST['security_rate'];
    $suggestions = $_POST['suggestions'];
    $Recommend = $_POST['Recommend'];
    $future = $_POST['future'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO Feedback (name, overall_experience_rate, laptop_quality_rate, assist, support_rate, security_rate, suggestions, Recommend, future, comments) VALUES ('$name', '$overall_experience_rate', '$laptop_quality_rate', '$assist', '$support_rate', '$security_rate', '$suggestions', '$Recommend', '$future', '$comments')";
    
    $url = "https://lend.deets.technology/";
    $font = "https://use.fontawesome.com/releases/v5.15.4/css/all.css";
    if ($conn->query($sql) === TRUE) {
        echo "
        <html>
        <head>
        <meta charset=\"UTF-8\">
        <title>Tech lend</title>
        <link rel=\"stylesheet\" href=\"style1.css\">
        <link rel=\"stylesheet\" href='$font'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"img/logo_top.png\">
        <script src=\"script.js\"></script>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .center-content {
                text-align: center;
            }
            .logo {
                display: block;
                margin: 0 auto;
            }
        </style>
        </head>
        <body>
            <div class=\"center-content\">
                <a href=\"index.html\"><img src=\"img/logo_lend2.png\" width=\"500px\" height=\"500px\" class=\"logo\" alt=\"\"></a>
                <h1>Thanks for the feedback!!!</h1>
                <p><a href='$url'>HOMEPAGE</a></p>
                <p>We will keep in touch!</p>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
