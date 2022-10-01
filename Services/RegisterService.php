<?php
session_start();
require('../database/client.php');

$username = $_POST['username'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$confirmpassword = $_POST['confirmpassword'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$key = isset($_GET["key"]) ? $_GET["key"] : "";

if ($key != "") {
    $sql = "SELECT team_id FROM team";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $team_id = md5($row['team_id']);
        $teamid = $row['team_id'];
        if ($team_id == $key) {
            $sqla = "SELECT * FROM acount
                WHERE username = '$_POST[username]' OR mail = '$_POST[mail]' OR tel = '$_POST[tel]'";
            $resulta = mysqli_query($conn, $sqla);
            if ($resultt->num_rows > 0) {
                echo '<scirpt>alert("ชื่อผู้ใช้ อีเมล์ หรือเบอร์โทรนี้มีผู้ใช้งานเเล้ว");window.location.href = "../pages/register.php&key=" . $team_id ;</script>';
            } else {
                $sql = "INSERT INTO acount(team_id, username, `password`, mail, tel, `type`) 
                    VALUES ('" . $row['team_id'] . "','" . $username . "','" . $hash . "','" . $mail . "','" . $tel . "','member')";

                if ($conn->query($sql) === TRUE) {

                    $queryAccount = "SELECT * FROM acount WHERE username = '" . $username . "'";
                    $resultAccount = $conn->query($queryAccount);
                    $rowAccount = $resultAccount->fetch_assoc();
                    $_SESSION['login'] = true;
                    $_SESSION['type'] = $rowAccount['type'];
                    $_SESSION['acount_id'] = $rowAccount['acount_id'];
                    $_SESSION["username"] = $rowAccount['username'];
                    $_SESSION["team_id"] = $rowAccount['team_id'];

                    header('location: ../?pages=createteam&detail=editmemberdetail&team_id=' . $teamid);
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    echo "Error: " . $upacount . "<br>" . $conn->error;
                }
                break;
            }
        }
    }

    exit;
}

$sqls = "SELECT * FROM acount
WHERE username = '$username' OR mail = '$mail' OR tel = '$tel'";
$resultt = mysqli_query($conn, $sqls);

if ($resultt->num_rows > 0) {
?>
    <script>
        alert("ชื่อผู้ใช้ อีเมล์ หรือเบอร์โทรนี้มีผู้ใช้งานเเล้ว");
        window.location.href = "../pages/register.php";
    </script>
<?php
} else {
    if ($password == $confirmpassword) {
        $sqlInsert = "INSERT INTO acount (username, `password`, mail, tel, `type`)
        VALUES ('$username', '$hash', '$mail', '$tel', 'leader')";
        if ($conn->query($sqlInsert) === TRUE) {
            $sqlv = "SELECT * FROM acount 
                    WHERE username = '" . $username . "' OR `mail` = '" . $username . "' AND `password` = '" . $hash . "'";
            $result = $conn->query($sqlv);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['login'] = true;
                $_SESSION['type'] = $row['type'];
                $_SESSION['acount_id'] = $row['acount_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['team_id'] = $row['team_id'];
            }
            if ($password == $confirmpassword) {
                header("Location: ../?pages=createteam&detail=addleader");
            } else {
                echo '<script>alert("รหัสผ่านไม่ตรงกัน");window.location.href = "../pages/register.php";</script>';
            }
        }
    }
}
