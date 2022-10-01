<?php
session_start();
require('../../database/client.php');

$member_id = $_POST["hiddenmember-delete"];

$sql = "DELETE FROM member WHERE member_id = '$member_id'";
$sqll = "DELETE FROM contact WHERE member_id = '$member_id'";

if ($conn->query($sql) == TRUE && $conn->query($sqll) == TRUE) {
    header("location: ../?adminpages=manageteam");
} else {
    echo "Error deleting record: " . $conn->error;
}
