<?php
session_start();

require '../database/client.php';

$logout = isset($_GET['logout']) ? $_GET['logout'] : '';

if ($logout == '1') {
    session_destroy();
    header("location: ../");
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM acount WHERE username = '" . $username . "' OR `mail` = '" . $username . "' Limit 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION["login"] = true;
            $_SESSION["type"] = $row['type'];
            $_SESSION["acount_id"] = $row['acount_id'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["team_id"] = $row['team_id'];
            $_SESSION["member_id"] = $row['member_id'];

            if ($_SESSION['type'] == 'leader' || $_SESSION['type'] == 'member') {
                header("Location: ../index.php");
            }
            if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'superadmin') {
                header("Location: ../adminpages/");
            }
        } else {
            $_SESSION["error"] = "1";
            header("Location: ../");
        }
    } else {
        $_SESSION["error"] = "1";
        header("Location: ../");
    }
}
