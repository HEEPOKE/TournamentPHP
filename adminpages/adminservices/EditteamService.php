<?php
session_start();
require('../../database/client.php');

date_default_timezone_set("Asia/Bangkok");
$team_id = $_POST["hidden-editteam"];
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

$sql = "UPDATE team 
SET team_name = '$team_name',
imglogo_team = '$new_imgname',
contt_facebook = '$facebook',
contt_tiktok = '$tiktok'
WHERE team_id = '$team_id'";

if ($conn->query($sql) == TRUE) {
    header("location: ../?adminpages=manageteam");
} else {
    echo "Error update record: " . $conn->error;
}
