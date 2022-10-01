<?php
session_start();
require('../../database/client.php');
$tourdate_id = $_POST["tourdate_id"];
$round = $_POST['round'];
$datematch = $_POST['datematch'];
$timematch = $_POST['timematch'];

// $sql = "INSERT INTO `tournament_date`(`round`, `date`, `time`) 
// VALUES ('2','$datematch' ,'$timematch')";


$sql = "DELETE FROM tournament_date WHERE tourdate_id = '$tourdate_id'";



if($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=editdatematch");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=editdatematch";</script>';
}
?>