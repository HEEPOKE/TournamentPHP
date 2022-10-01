<?php
require('../../database/client.php');
date_default_timezone_set("Asia/Bangkok");
$team_id = $_POST["hidden-editteam"];
$status = $_POST["status"];
$sql = "UPDATE team
SET status = '$status'
WHERE team_id = '$team_id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=managestatus");
} else {
    echo '<script>alert("แก้ไขสถานะไม่สำเร็จ");window.location.href = "../?adminpages=managestatus";</script>';
}
