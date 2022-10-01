<?php
session_start();
require('../database/client.php');

$account_id = $_SESSION['acount_id'];

$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE acount 
SET `password` = '$hash'
WHERE acount_id = '$account_id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['acount_id'] = $account_id;
    echo '<script>alert("แก้ไขรหัสผ่านสำเร็จ");window.location.href = "../pages/profile.php";</script>';
} else if ($password != $confirmpassword) {
    echo '<script>alert("รหัสผ่านที่กรอกไม่ตรงกัน");window.location.href = "../?pages=profile&profile=resetpassword&acount_id=" . $account_id;</script>';
} else {
    echo '<script>alert("ไม่สามารถแก้ไขรหัสผ่านได้");window.location.href = "../?pages=profile&profile=resetpassword&acount_id=" . $account_id;</script>';
}
