<?php
require ('../../database/client.php');

$teamidB1_8 = $_POST["teamidB1_8"];
$teamidB21_8 = $_POST["teamidB21_8"];
$teamidB2_8 = $_POST["teamidB2_8"];
$teamidB22_8 = $_POST["teamidB22_8"];
$teamidB3_8 = $_POST["teamidB3_8"];
$teamidB23_8 = $_POST["teamidB23_8"];
$teamidB4_8 = $_POST["teamidB4_8"];
$teamidB24_8 = $_POST["teamidB24_8"];
$teamidB5_8 = $_POST["teamidB5_8"];
$teamidB25_8 = $_POST["teamidB25_8"];
$teamidB6_8 = $_POST["teamidB6_8"];
$teamidB26_8 = $_POST["teamidB26_8"];
$teamidB7_8 = $_POST["teamidB7_8"];
$teamidB27_8 = $_POST["teamidB27_8"];
$teamidB8_8 = $_POST["teamidB8_8"];
$teamidB28_8 = $_POST["teamidB28_8"];

$tour = "SELECT * FROM tournament WHERE round_position = 'B'";
$result = $conn->query($tour);
$row = $result->fetch_assoc() ?? '';

$position = $row["round_position"] ?? '';

if (
    $teamidB1_8 == $teamidB21_8
    || $teamidB2_8 == $teamidB22_8
    || $teamidB3_8 == $teamidB23_8
    || $teamidB4_8 == $teamidB24_8
    || $teamidB5_8 == $teamidB25_8
    || $teamidB6_8 == $teamidB26_8
    || $teamidB7_8 == $teamidB27_8
    || $teamidB8_8 == $teamidB28_8
) {
    echo '<script>alert("มีทีมที่เลือกจับคู่เป็นทีมเดียวกันทั้งสองทีม กรุณาจับคู่ทีมใหม่");window.location.href = "../?adminpages=tournamentB";</script>';
} else {
    if (!empty($position)) {
        $sql1 = "UPDATE tournament 
        SET teamA_id = '$teamidB1_8', teamB_id = '$teamidB21_8' 
        WHERE tour_position = 'B1'";

        $sql2 = "UPDATE tournament 
        SET teamA_id = '$teamidB2_8', teamB_id = '$teamidB22_8' 
        WHERE tour_position = 'B2'";

        $sql3 = "UPDATE tournament 
        SET teamA_id = '$teamidB3_8', teamB_id = '$teamidB23_8' 
        WHERE tour_position = 'B3'";

        $sql4 = "UPDATE tournament 
        SET teamA_id = '$teamidB4_8', teamB_id = '$teamidB24_8' 
        WHERE tour_position = 'B4'";

        $sql5 = "UPDATE tournament 
        SET teamA_id = '$teamidB5_8', teamB_id = '$teamidB25_8' 
        WHERE tour_position = 'B5'";

        $sql6 = "UPDATE tournament 
        SET teamA_id = '$teamidB6_8', teamB_id = '$teamidB26_8' 
        WHERE tour_position = 'B6'";

        $sql7 = "UPDATE tournament 
        SET teamA_id = '$teamidB7_8', teamB_id = '$teamidB27_8' 
        WHERE tour_position = 'B7'";

        $sql8 = "UPDATE tournament 
        SET teamA_id = '$teamidB8_8', teamB_id = '$teamidB28_8' 
        WHERE tour_position = 'B8'";

        if (
            $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE
            && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE
            && $conn->query($sql7) === TRUE && $conn->query($sql8) === TRUE
        ) {
            echo '<script>alert("เเก้ไขข้อมูลทัวนาเมนต์สำเร็จ");window.location.href = "../?adminpages=tournamentB";</script>';
        } else {
            echo '<script>alert("เเก้ไขข้อมูลทัวนาเมนต์ไม่สำเร็จ");window.location.href = "../?adminpages=tournamentB";</script>';
        }
    } else {
        $sql1_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
         VALUES ('$teamidB1_8','$teamidB21_8', 'B', '16','B1')";

        $sql2_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB2_8','$teamidB22_8', 'B', '16','B2')";

        $sql3_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB3_8','$teamidB23_8', 'B', '16','B3')";

        $sql4_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB4_8','$teamidB24_8', 'B', '16','B4')";

        $sql5_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB5_8','$teamidB25_8', 'B', '16', 'B5')";

        $sql6_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB6_8','$teamidB26_8', 'B', '16','B6')";

        $sql7_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB7_8','$teamidB27_8', 'B', '16' ,'B7')";

        $sql8_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidB8_8','$teamidB28_8', 'B', '16','B8')";

        if (
            $conn->query($sql1_8) === TRUE && $conn->query($sql2_8) === TRUE && $conn->query($sql3_8) === TRUE
            && $conn->query($sql4_8) === TRUE && $conn->query($sql5_8) === TRUE && $conn->query($sql6_8) === TRUE
            && $conn->query($sql7_8) === TRUE && $conn->query($sql8_8) === TRUE
        ) {
            $touridB1 = "SELECT * FROM tournament WHERE tour_position = 'B1'";
            $resultidB1 = $conn->query($touridB1);
            $rowidB1 = $resultidB1->fetch_assoc();

            $touridB2 = "SELECT * FROM tournament WHERE tour_position = 'B2'";
            $resultidB2 = $conn->query($touridB2);
            $rowidB2 = $resultidB2->fetch_assoc();

            $touridB3 = "SELECT * FROM tournament WHERE tour_position = 'B3'";
            $resultidB3 = $conn->query($touridB3);
            $rowidB3 = $resultidB3->fetch_assoc();

            $touridB4 = "SELECT * FROM tournament WHERE tour_position = 'B4'";
            $resultidB4 = $conn->query($touridB4);
            $rowidB4 = $resultidB4->fetch_assoc();

            $touridB5 = "SELECT * FROM tournament WHERE tour_position = 'B5'";
            $resultidB5 = $conn->query($touridB5);
            $rowidB5 = $resultidB5->fetch_assoc();

            $touridB6 = "SELECT * FROM tournament WHERE tour_position = 'B6'";
            $resultidB6 = $conn->query($touridB6);
            $rowidB6 = $resultidB6->fetch_assoc();

            $touridB7 = "SELECT * FROM tournament WHERE tour_position = 'B7'";
            $resultidB7 = $conn->query($touridB7);
            $rowidB7 = $resultidB7->fetch_assoc();

            $touridB8 = "SELECT * FROM tournament WHERE tour_position = 'B8'";
            $resultidB8 = $conn->query($touridB8);
            $rowidB8 = $resultidB8->fetch_assoc();

            $idB1 = $rowidB1["tour_id"] ?? '';
            $idB2 = $rowidB2["tour_id"] ?? '';
            $idB3 = $rowidB3["tour_id"] ?? '';
            $idB4 = $rowidB4["tour_id"] ?? '';
            $idB5 = $rowidB5["tour_id"] ?? '';
            $idB6 = $rowidB6["tour_id"] ?? '';
            $idB7 = $rowidB7["tour_id"] ?? '';
            $idB8 = $rowidB8["tour_id"] ?? '';

            $uptouridB1 = "UPDATE tournament SET round_id = '$idB1' 
            WHERE tour_position = 'B1'";

            $uptouridB2 = "UPDATE tournament SET round_id = '$idB2' 
            WHERE tour_position = 'B2'";

            $uptouridB3 = "UPDATE tournament SET round_id = '$idB3' 
            WHERE tour_position = 'B3'";

            $uptouridB4 = "UPDATE tournament SET round_id = '$idB4' 
            WHERE tour_position = 'B4'";

            $uptouridB5 = "UPDATE tournament SET round_id = '$idB5' 
            WHERE tour_position = 'B5'";

            $uptouridB6 = "UPDATE tournament SET round_id = '$idB6' 
            WHERE tour_position = 'B6'";

            $uptouridB7 = "UPDATE tournament SET round_id = '$idB7' 
            WHERE tour_position = 'B7'";

            $uptouridB8 = "UPDATE tournament SET round_id = '$idB8' 
            WHERE tour_position = 'B8'";

            if (
                $conn->query($uptouridB1) === TRUE && $conn->query($uptouridB2) === TRUE && $conn->query($uptouridB3) === TRUE
                && $conn->query($uptouridB4) === TRUE && $conn->query($uptouridB5) === TRUE && $conn->query($uptouridB6) === TRUE
                && $conn->query($uptouridB7) === TRUE && $conn->query($uptouridB8) === TRUE
            ) {
                echo '<script>alert("บันทึกข้อมูลทัวนาเมนต์สำเร็จ");window.location.href = "../?adminpages=tournamentB";</script>';
            } else {
                echo '<script>alert("บันทึกข้อมูลทัวนาเมนต์ไม่สำเร็จ");window.location.href = "../?adminpages=tournamentB";</script>';
            }
        }
    }
}
