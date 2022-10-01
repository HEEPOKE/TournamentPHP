<?php
session_start();
require('../../database/client.php');
$tour_id = $_POST['tour_id'];
$url = $_POST['url'];

// $sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`) 
// VALUES ('2','$datematch' ,'$url')";

$sql = "INSERT INTO `url_hightlight`(`tour_id`, `url`, `status`) 
VALUES ('$tour_id','$url','1')";


if($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=edithightlightmatch");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=edithightlightmatch";</script>';
}