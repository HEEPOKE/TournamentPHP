<?php
require('../../database/client.php');

$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";

date_default_timezone_set("Asia/Bangkok");
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$name_game = $_POST['name_game'];
$role = $_POST['role'];
$open_id = $_POST['Open_id'];
$line = $_POST['cont_line'];
$facebook = $_POST['cont_facebook'];
$tiktok = $_POST['cont_tiktok'];
$youtube = $_POST['cont_youtube'];
$ig = $_POST['cont_ig'];
$date = date("d.m.Y.H.i.s");
$imgfile = basename($_FILES["img_profile"]["name"]);
$imgtype = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
$new_imgname = $date . "_"  . $name  . "." . $imgtype;
$img_path = "../../img_profile/";
$buildname = $img_path . $new_imgname;
$imgup = move_uploaded_file($_FILES["img_profile"]["tmp_name"], $buildname);

$sql = "UPDATE member
SET img_profile = '$new_imgname',
`name` = '$name',
gender = '$gender',
age = '$age',
`address`= '$address',
name_game = '$name_game',
`role` = '$role',
Open_id = '$open_id'
WHERE member_id = '$member_id'";

$sqll = "UPDATE contact
SET cont_line = '$line',
cont_facebook = '$facebook',
cont_tiktok = '$tiktok',
cont_youtube = '$youtube',
cont_ig = '$ig' 
WHERE member_id = '$member_id'";

if ($conn->query($sql) === TRUE && $conn->query($sqll) === TRUE) {
    header("Location: ../?adminpages=showmemberdetail&memberid=" . $member_id);
} else {
    echo "Error updating record: " . $conn->error;
}
