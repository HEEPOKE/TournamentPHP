<?php
require ('../../database/client.php');

$teamidA1_8 = $_POST["teamidA1_8"];
$teamidA21_8 = $_POST["teamidA21_8"];
$teamidA2_8 = $_POST["teamidA2_8"];
$teamidA22_8 = $_POST["teamidA22_8"];
$teamidA3_8 = $_POST["teamidA3_8"];
$teamidA23_8 = $_POST["teamidA23_8"];
$teamidA4_8 = $_POST["teamidA4_8"];
$teamidA24_8 = $_POST["teamidA24_8"];
$teamidA5_8 = $_POST["teamidA5_8"];
$teamidA25_8 = $_POST["teamidA25_8"];
$teamidA6_8 = $_POST["teamidA6_8"];
$teamidA26_8 = $_POST["teamidA26_8"];
$teamidA7_8 = $_POST["teamidA7_8"];
$teamidA27_8 = $_POST["teamidA27_8"];
$teamidA8_8 = $_POST["teamidA8_8"];
$teamidA28_8 = $_POST["teamidA28_8"];

$tour = "SELECT * FROM tournament WHERE round_position = 'A'";
$result = $conn->query($tour);
$row = $result->fetch_assoc() ?? '';

$position = $row["round_position"] ?? '';

if (
    $teamidA1_8 == $teamidA21_8
    || $teamidA2_8 == $teamidA22_8
    || $teamidA3_8 == $teamidA23_8
    || $teamidA4_8 == $teamidA24_8
    || $teamidA5_8 == $teamidA25_8
    || $teamidA6_8 == $teamidA26_8
    || $teamidA7_8 == $teamidA27_8
    || $teamidA8_8 == $teamidA28_8
) {
    echo '<script>alert("มีทีมที่เลือกจับคู่เป็นทีมเดียวกันทั้งสองทีม กรุณาจับคู่ทีมใหม่");window.location.href = "../?adminpages=tournamentA";</script>';
} else {
    if (!empty($position)) {
        $sql1 = "UPDATE tournament 
        SET teamA_id = '$teamidA1_8', teamB_id = '$teamidA21_8' 
        WHERE tour_position = 'A1'";

        $sql2 = "UPDATE tournament 
        SET teamA_id = '$teamidA2_8', teamB_id = '$teamidA22_8' 
        WHERE tour_position = 'A2'";

        $sql3 = "UPDATE tournament 
        SET teamA_id = '$teamidA3_8', teamB_id = '$teamidA23_8' 
        WHERE tour_position = 'A3'";

        $sql4 = "UPDATE tournament 
        SET teamA_id = '$teamidA4_8', teamB_id = '$teamidA24_8' 
        WHERE tour_position = 'A4'";

        $sql5 = "UPDATE tournament 
        SET teamA_id = '$teamidA5_8', teamB_id = '$teamidA25_8' 
        WHERE tour_position = 'A5'";

        $sql6 = "UPDATE tournament 
        SET teamA_id = '$teamidA6_8', teamB_id = '$teamidA26_8' 
        WHERE tour_position = 'A6'";

        $sql7 = "UPDATE tournament 
        SET teamA_id = '$teamidA7_8', teamB_id = '$teamidA27_8' 
        WHERE tour_position = 'A7'";

        $sql8 = "UPDATE tournament 
        SET teamA_id = '$teamidA8_8', teamB_id = '$teamidA28_8' 
        WHERE tour_position = 'A8'";


        if (
            $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE
            && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE
            && $conn->query($sql7) === TRUE && $conn->query($sql8) === TRUE
        ) {
            echo '<script>alert("เเก้ไขข้อมูลทัวนาเมนต์สำเร็จ");</script>';
        } else {
            echo '<script>alert("เเก้ไขข้อมูลทัวนาเมนต์ไม่สำเร็จ");</script>';
        } exit;
    } else {
        $sql1_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
         VALUES ('$teamidA1_8','$teamidA21_8', 'A', '16','A1')";

        $sql2_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA2_8','$teamidA22_8', 'A', '16','A2')";

        $sql3_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA3_8','$teamidA23_8', 'A', '16','A3')";

        $sql4_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA4_8','$teamidA24_8', 'A', '16','A4')";

        $sql5_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA5_8','$teamidA25_8', 'A', '16', 'A5')";

        $sql6_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA6_8','$teamidA26_8', 'A', '16','A6')";

        $sql7_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA7_8','$teamidA27_8', 'A', '16' ,'A7')";

        $sql8_8 = "INSERT INTO tournament(teamA_id, teamB_id, round_position, round_number, tour_position) 
        VALUES ('$teamidA8_8','$teamidA28_8', 'A', '16','A8')";

        if (
            $conn->query($sql1_8) === TRUE && $conn->query($sql2_8) === TRUE && $conn->query($sql3_8) === TRUE
            && $conn->query($sql4_8) === TRUE && $conn->query($sql5_8) === TRUE && $conn->query($sql6_8) === TRUE
            && $conn->query($sql7_8) === TRUE && $conn->query($sql8_8) === TRUE
        ) {
            $touridA1 = "SELECT * FROM tournament WHERE tour_position = 'A1'";
            $resultidA1 = $conn->query($touridA1);
            $rowidA1 = $resultidA1->fetch_assoc();

            $touridA2 = "SELECT * FROM tournament WHERE tour_position = 'A2'";
            $resultidA2 = $conn->query($touridA2);
            $rowidA2 = $resultidA2->fetch_assoc();

            $touridA3 = "SELECT * FROM tournament WHERE tour_position = 'A3'";
            $resultidA3 = $conn->query($touridA3);
            $rowidA3 = $resultidA3->fetch_assoc();

            $touridA4 = "SELECT * FROM tournament WHERE tour_position = 'A4'";
            $resultidA4 = $conn->query($touridA4);
            $rowidA4 = $resultidA4->fetch_assoc();

            $touridA5 = "SELECT * FROM tournament WHERE tour_position = 'A5'";
            $resultidA5 = $conn->query($touridA5);
            $rowidA5 = $resultidA5->fetch_assoc();

            $touridA6 = "SELECT * FROM tournament WHERE tour_position = 'A6'";
            $resultidA6 = $conn->query($touridA6);
            $rowidA6 = $resultidA6->fetch_assoc();

            $touridA7 = "SELECT * FROM tournament WHERE tour_position = 'A7'";
            $resultidA7 = $conn->query($touridA7);
            $rowidA7 = $resultidA7->fetch_assoc();

            $touridA8 = "SELECT * FROM tournament WHERE tour_position = 'A8'";
            $resultidA8 = $conn->query($touridA8);
            $rowidA8 = $resultidA8->fetch_assoc();

            $idA1 = $rowidA1["tour_id"] ?? '';
            $idA2 = $rowidA2["tour_id"] ?? '';
            $idA3 = $rowidA3["tour_id"] ?? '';
            $idA4 = $rowidA4["tour_id"] ?? '';
            $idA5 = $rowidA5["tour_id"] ?? '';
            $idA6 = $rowidA6["tour_id"] ?? '';
            $idA7 = $rowidA7["tour_id"] ?? '';
            $idA8 = $rowidA8["tour_id"] ?? '';

            $uptouridA1 = "UPDATE tournament SET round_id = '$idA1' 
            WHERE tour_position = 'A1'";

            $uptouridA2 = "UPDATE tournament SET round_id = '$idA2' 
            WHERE tour_position = 'A2'";

            $uptouridA3 = "UPDATE tournament SET round_id = '$idA3' 
            WHERE tour_position = 'A3'";

            $uptouridA4 = "UPDATE tournament SET round_id = '$idA4' 
            WHERE tour_position = 'A4'";

            $uptouridA5 = "UPDATE tournament SET round_id = '$idA5' 
            WHERE tour_position = 'A5'";

            $uptouridA6 = "UPDATE tournament SET round_id = '$idA6' 
            WHERE tour_position = 'A6'";

            $uptouridA7 = "UPDATE tournament SET round_id = '$idA7' 
            WHERE tour_position = 'A7'";

            $uptouridA8 = "UPDATE tournament SET round_id = '$idA8' 
            WHERE tour_position = 'A8'";

            if (
                $conn->query($uptouridA1) === TRUE && $conn->query($uptouridA2) === TRUE && $conn->query($uptouridA3) === TRUE
                && $conn->query($uptouridA4) === TRUE && $conn->query($uptouridA5) === TRUE && $conn->query($uptouridA6) === TRUE
                && $conn->query($uptouridA7) === TRUE && $conn->query($uptouridA8) === TRUE
            ) {
                echo '<script>alert("บันทึกข้อมูลทัวนาเมนต์สำเร็จ");window.location.href = "../?adminpages=tournamentA";</script>';
            } else {
                echo '<script>alert("บันทึกข้อมูลทัวนาเมนต์ไม่สำเร็จ");window.location.href = "../?adminpages=tournamentA";</script>';
            }
        }
    }
}
