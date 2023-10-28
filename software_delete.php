<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facility";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// حذف نرم محصولات جدول شیرآلات

$sql = "UPDATE `faucet`
        SET is_deleted = 1
        WHERE faucet_id = 2;"

$result = $conn->query($sql);


$conn->close();
?>