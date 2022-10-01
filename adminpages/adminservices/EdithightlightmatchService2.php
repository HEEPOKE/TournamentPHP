<?php
session_start();
require('../../database/client.php');
$tour_id = $_POST['tour_id'];
$url = $_POST['url'];
// $sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`) 
// VALUES ('2','$datematch' ,'$url')";
$sql2 = "SELECT * FROM `url_hightlight`";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);
$url_id = $row2["url_id"];
echo $url_id;
$sql = "UPDATE `url_hightlight` 
SET `tour_id`='$tour_id',
`url`='$url',
`status`='1'
WHERE url_id = '$url_id'";


if($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=edithightlightmatch");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=edithightlightmatch";</script>';
}