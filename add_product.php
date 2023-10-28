<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facility";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// اضافه کردن محصول به جدول شیرآلات

$sql = "INSERT INTO `faucet`(
    `faucet_id`,
    `model`,
    `brand`,
    `price`,
    `warrantyenddate`,
    `rating`,
    `manufacturer`,
    `is_delete`
)
VALUES(
    1,
    "توکار",
    'شودر',
    120000,
    1405,
    5,
    "شرکت شودر",
    0
);"

$result = $conn->query($sql);


$conn->close();
?>