<?php
session_start();
require('../database/client.php');

$teamid = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

date_default_timezone_set("Asia/Bangkok");
$team_name = $_POST['team_name'];
$facebook = $_POST['contt_facebook'];
$tiktok = $_POST['contt_tiktok'];
$date = date("d.m.Y.H.i.s");
$imgfile = basename($_FILES["imglogo_team"]["name"]);
$imgtype = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
$new_imgname = $date . "_"  . $team_name  . "." . $imgtype;
$img_path = "../imglogo_team/";
$buildname = $img_path . $new_imgname;
$imgup = move_uploaded_file($_FILES["imglogo_team"]["tmp_name"], $buildname);


// $select = "SELECT * FROM team WHERE team_id = $teamid";
// $queryselect = $con->query($select);
// $rowselect = mysqli_fetch_assoc($queryselect);

// $path = "../imglogo_team/";
// $img = $rowselect['imglogo_team'] ?? '';

// $deleteimg = $path . $img;
// unlink($deleteimg);

if ($teamid != "") {
    if ($_FILES["imglogo_team"]["error"] == 4) {
        $updateteam = "UPDATE team SET 
        team_name = '$team_name',
        contt_facebook = '$facebook',
        contt_tiktok = '$tiktok'
        WHERE team_id = '$teamid'";
    } else {
        $updateteam = "UPDATE team SET 
        imglogo_team = '$new_imgname',
        team_name = '$team_name',
        contt_facebook = '$facebook',
        contt_tiktok = '$tiktok'
        WHERE team_id = '$teamid'";
    }

    if ($conn->query($updateteam) === TRUE) {
        $_SESSION[' team_id '] = $teamid;
        header("Location: ../?pages=createteam&detail=teamdetail&team_id=" . $teamid);
    } else {
        echo "Error updating record: " . $conn->error;
    }
    exit;
} else if ($teamid == "") {
    if ($_FILES["imglogo_team"]["error"] == 4) {
        $sql = "INSERT INTO team (team_name, contt_facebook, contt_tiktok,  `status`)
    VALUES ('$team_name', '$facebook', '$tiktok', 'รอการอนุมัติ')";
    } else {
        $sql = "INSERT INTO team (team_name, imglogo_team, contt_facebook, contt_tiktok,  `status`)
        VALUES ('$team_name', '$new_imgname', '$facebook', '$tiktok', 'รอการอนุมัติ')";
    }

    if ($conn->query($sql) === TRUE) {

        $sqll  = "SELECT * FROM team ORDER BY team_id DESC LIMIT 1";

        $result = $conn->query($sqll);
        $row = $result->fetch_assoc();

        $team_id = $row['team_id'];

        $member  = "SELECT * FROM member as a
        INNER JOIN acount as b ON a.member_id = b.member_id
        WHERE b.type = 'leader' AND b.acount_id = '" . $_SESSION['acount_id'] . "'";

        $resultmember = $conn->query($member);
        $rowmember = $resultmember->fetch_assoc();

        $member_id = $rowmember['member_id'];
        $name = $rowmember['name'];

        $querys = "UPDATE acount 
            SET  team_id =  '$team_id' 
            WHERE acount_id =  '" . $_SESSION['acount_id'] . "'";

        $leader = "UPDATE member SET team_id = '$team_id' 
            WHERE member_id = '$member_id'";

        $teamleader = "UPDATE team 
            SET leader_team = '$name'
             WHERE team_id = '$team_id'";

        if ($conn->query($querys) === TRUE && $conn->query($leader) === TRUE && $conn->query($teamleader) === TRUE) {

            $url        = 'https://notify-api.line.me/api/notify';
            $token      = 'AdpN4IDuemS1DG2pDI9YTVjgkwyqnLbhHxtskAbeIGK';
            $headers    = [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $token
            ];
              $fields     = "message=การสมัครทีมใหม่ \nชื่อทีม : " . $team_name;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch);
            curl_close($ch);

            // var_dump($result);
            $result = json_decode($result, TRUE);
            
            $_SESSION['team_id'] = $team_id;
            header("Location: ../?pages=createteam&detail=teamdetail&team_id=" . $team_id);
        } else {
            echo '<script>alert("สร้างทีมไม่สำเร็จ")window.location.href="?pages=createteam&detail=editteamdetail";;</script>';
        }
    }
    exit;
}
