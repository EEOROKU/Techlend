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
    $email = $_POST['email'];

    $sql = "INSERT INTO Newsletter (email) VALUES ('$email')";
    $url = "https://lend.deets.technology/";
    $font = "https://use.fontawesome.com/releases/v5.15.4/css/all.css";
    $insta = "https://www.instagram.com/deets.tech/";
    if ($conn->query($sql) === TRUE) {
        echo "<html>
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
                <h1>You have been added to our mailing list successfully!!!😁</h1>
                <p><a href='$url'>HOMEPAGE</a></p>
                <p>We will keep giving you updates about our latest devices and special offers!!!</p>
            </div>
            <script>
            setTimeout(function() { window.location.href = '$insta'; }, 2000); // 2000 milliseconds = 2 seconds
            </script>

        </body>
        </html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
