<?php
session_start();
require('../../database/client.php');
 
$team_id = $_POST["hidden-submitteam"];

$sql = "UPDATE `team` 
SET `status` = 'ทำการอนุมัติสำเร็จเเล้ว' 
WHERE team_id = '$team_id'";

$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=manageteam");
} else {
    echo "Error update record: " . $conn->error;
}
