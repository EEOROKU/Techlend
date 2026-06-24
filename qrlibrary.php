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
    $location = $_POST['location'];
    $count = (int)$_POST['count'];

    $sql = "INSERT INTO `qr location count` (location, count) VALUES ('$location', $count)";
    
    $url = "https://lend.deets.technology/";
    $font = "https://use.fontawesome.com/releases/v5.15.4/css/all.css";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        exit(); // VERY IMPORTANT
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
