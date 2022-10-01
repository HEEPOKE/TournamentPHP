<?php
session_start();
require('../database/client.php');

$account_id = $_SESSION['acount_id'];

$username = $_POST['username'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

$sql = "UPDATE acount 
SET username = '$username',
mail = '$mail',
tel = '$tel'
WHERE acount_id = '$account_id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['acount_id'] = $account_id;
    echo '<script>alert("แก้ไขข้อมูลสำเร็จ");window.location.href = "../pages/profile.php";</script>';
} else {
    echo '<script>alert("ไม่สามารถแก้ไขข้อมูลได้");window.location.href = "../?pages=profile&profile=editprofile&acount_id=" . $account_id;</script>';
}
