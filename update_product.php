<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facility";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// آپدیت محصولات جدول شیرآلات

$sql = "UPDATE
       `faucet`
       SET
       `model` = 'روکار'
        WHERE
        faucet_id = 3"

$result = $conn->query($sql);


$conn->close();
?>