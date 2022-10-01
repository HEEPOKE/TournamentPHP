<?php
session_start();
require('../../database/client.php');

$round = $_POST['round'];
$datematch = $_POST['datematch'];
$timematch = $_POST['timematch'];

// $sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`) 
// VALUES ('2','$datematch' ,'$timematch')";


$sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`)  
VALUES ('$round','$datematch','$timematch')";



if($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=editdatematch");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=editdatematch";</script>';
}