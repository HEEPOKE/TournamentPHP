<?php
require('../../database/client.php');

$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";

$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE acount 
SET `password` = '$hash'
WHERE member_id = '$member_id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION["Reset"] = "1";
    header("Location: ../?adminpages=showmemberdetail&memberid=" . $member_id);
} else if ($password != $confirmpassword) {
    $_SESSION["Reset"] = "2";
    header("Location: ../?adminpages=showmemberdetail&memberid=" . $member_id);
} else {
    $_SESSION["Reset"] = "3";
    header("Location: ../?adminpages=showmemberdetail&memberid=" . $member_id);
}
