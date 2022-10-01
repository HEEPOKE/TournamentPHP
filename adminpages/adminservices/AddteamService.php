<?php
session_start();
require('../../database/client.php');

date_default_timezone_set("Asia/Bangkok");
$team_name = $_POST['team_name'];
$facebook = $_POST['contt_facebook'];
$tiktok = $_POST['contt_tiktok'];
$date = date("d.m.Y.H.i.s");
$imgfile = basename($_FILES["imglogo_team"]["name"]);
$imgtype = strtolower(pathinfo($imgfile,PATHINFO_EXTENSION));
$new_imgname = $date . "_"  . $team_name  . "." . $imgtype;
$img_path = "../../imglogo_team/";
$buildname = $img_path . $new_imgname;
$imgup = move_uploaded_file($_FILES["imglogo_team"]["tmp_name"], $buildname);

$sql = "INSERT INTO team(team_name, imglogo_team, contt_facebook, contt_tiktok, `status`) 
VALUES ('$team_name','$new_imgname','$facebook','$tiktok','รอการอนุมัติ')";
echo $sql;
if($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=manageteam");
} else {
echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=manageteam";</script>';
}



