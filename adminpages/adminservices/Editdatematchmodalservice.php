<?php
session_start();
require('../../database/client.php');
$tourdate_id = $_POST["tourdate_id"];
$round = $_POST['round'];
$datematch = $_POST['datematch'];
$timematch = $_POST['timematch']; 
$tourp = $_POST["tourp"];

// $round_id = $_POST["round_id"];
// echo $round_id;

// $sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`) 
// VALUES ('2','$datematch' ,'$timematch')";


// $sql2 = "SELECT * FROM tournament_date as a INNER JOIN tournament as b ON b.round_id = a.tourdate_id
// WHERE tourdate_id = '$tourdate_id";
// echo $sql2;

$sql = "UPDATE tournament_date 
SET round = '$round',
date = '$datematch',
time = '$timematch'
WHERE tourdate_id = '$tourdate_id'";





if($conn->query($sql) === TRUE) { 
    header("location: ../?adminpages=editdatematch");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=editdatematch";</script>';
}