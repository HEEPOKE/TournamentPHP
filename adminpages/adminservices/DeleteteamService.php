<?php
session_start();
require('../../database/client.php');

$id = $_POST["hidden-team"];

$sql = "DELETE FROM team WHERE team_id = '$id'"; 
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) == TRUE) {
    header("location: ../?adminpages=manageteam");
} else {
    echo "Error deleting record: " . $conn->error;
}