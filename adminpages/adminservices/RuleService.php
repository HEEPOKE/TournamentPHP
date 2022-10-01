<?php
session_start();
require('../../database/client.php');
$rule = $_POST["rule"];

$sql = "UPDATE rule 
SET `rule_detail` = '$rule'
WHERE rule_id = '1'";


if ($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=editrule");
} else {
    echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=editrule";</script>';
}
