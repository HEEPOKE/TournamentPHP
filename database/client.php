<?php
// $servername = "localhost";
// $username = "admin_esport";
// $password = "R1xXgNMdFX";
// $dbname = "admin_esport";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// mysqli_set_charset($conn, "utf8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sortgaming";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $conn->set_charset("utf8");
mysqli_set_charset($conn, "utf8");
