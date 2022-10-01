<?php
session_start();
require('../../database/client.php');

$tour_id = $_POST["tour_id"];
$team_winnerA = isset($_POST["team_winnerA"]) ? $_POST["team_winnerA"] : 99;
$team_winnerB = isset($_POST["team_winnerB"]) ? $_POST["team_winnerB"] : 99;
$round_position = $_POST["round_position"];
$a = 1;
// $round_idt = $round_id + $a;
// echo $round_position;

$tourposition = "SELECT * FROM `tournament` WHERE tour_id = '$tour_id'";
$tourquery = mysqli_query($conn, $tourposition);
$tourrow = mysqli_fetch_assoc($tourquery);

$position = $tourrow['tour_position'] ?? '';

if ($position == 'A1_2' || $position == 'A2_2') {
    $Positiontour = 'AFinal';
} else if ($position == 'B1_2' || $position == 'B2_2') {
    $Positiontour = 'BFinal';
}

$sql9 = "SELECT * FROM `tournament` WHERE tour_id = '$tour_id'";
$query9 = mysqli_query($conn, $sql9);
$row9 = mysqli_fetch_assoc($query9);

$sql10 = "SELECT * FROM `tournament` ORDER BY tour_id DESC";
$query10 = mysqli_query($conn, $sql10);
$row10 = mysqli_fetch_assoc($query10);
// echo $row10["round_id"];
// $round_id = $row["round_id"];
$g = 1;
$r = $row10["round_id"];
$z = $g+$r;

// echo $row10["teamB_id"];
// echo $row10["round_id"];
/////////////// ทีม A //////////////////
$teamA_id = $_POST["teamA_id"];
$winning_amountA = $_POST["winning_amountA"];

/////////////// A1 //////////////////
$member_idA1 = $_POST["member_idA1"] ?? '';
$score_killA1 = $_POST["score_killA1"] ?? '';
$score_deathA1 = $_POST["score_deathA1"] ?? '';
$score_assistA1 = $_POST["score_assistA1"] ?? '';
$is_mvpA1 = isset($_POST["is_mvpA1"]) ? $_POST["is_mvpA1"] : 0;
$main_playerA1 = isset($_POST["main_playerA1"]) ? $_POST["main_playerA1"] : 0;

/////////////// A2 //////////////////
$member_idA2 = $_POST["member_idA2"] ?? '';
$score_killA2 = $_POST["score_killA2"] ?? '';
$score_deathA2 = $_POST["score_deathA2"] ?? '';
$score_assistA2 = $_POST["score_assistA2"] ?? '';
$is_mvpA2 = isset($_POST["is_mvpA2"]) ? $_POST["is_mvpA2"] : 0;
$main_playerA2 = isset($_POST["main_playerA2"]) ? $_POST["main_playerA2"] : 0;

/////////////// A3 //////////////////
$member_idA3 = $_POST["member_idA3"] ?? '';
$score_killA3 = $_POST["score_killA3"] ?? '';
$score_deathA3 = $_POST["score_deathA3"] ?? '';
$score_assistA3 = $_POST["score_assistA3"] ?? '';
$is_mvpA3 = isset($_POST["is_mvpA3"]) ? $_POST["is_mvpA3"] : 0;
$main_playerA3 = isset($_POST["main_playerA3"]) ? $_POST["main_playerA3"] : 0;

/////////////// A4 //////////////////
$member_idA4 = $_POST["member_idA4"] ?? '';
$score_killA4 = $_POST["score_killA4"] ?? '';
$score_deathA4 = $_POST["score_deathA4"] ?? '';
$score_assistA4 = $_POST["score_assistA4"] ?? '';
$is_mvpA4 = isset($_POST["is_mvpA4"]) ? $_POST["is_mvpA4"] : 0;
$main_playerA4 = isset($_POST["main_playerA4"]) ? $_POST["main_playerA4"] : 0;

/////////////// A5 //////////////////
$member_idA5 = $_POST["member_idA5"] ?? '';
$score_killA5 = $_POST["score_killA5"] ?? '';
$score_deathA5 = $_POST["score_deathA5"] ?? '';
$score_assistA5 = $_POST["score_assistA5"] ?? '';
$is_mvpA5 = isset($_POST["is_mvpA5"]) ? $_POST["is_mvpA5"] : 0;
$main_playerA5 = isset($_POST["main_playerA5"]) ? $_POST["main_playerA5"] : 0;

/////////////// A6 //////////////////
$member_idA6 = $_POST["member_idA6"] ?? '';
$score_killA6 = $_POST["score_killA6"] ?? '';
$score_deathA6 = $_POST["score_deathA6"] ?? '';
$score_assistA6 = $_POST["score_assistA6"] ?? '';
$is_mvpA6 = isset($_POST["is_mvpA6"]) ? $_POST["is_mvpA6"] : 0;
$main_playerA6 = isset($_POST["main_playerA6"]) ? $_POST["main_playerA6"] : 0;


/////////////// ทีม B //////////////////
$teamB_id = $_POST["teamB_id"];
$winning_amountB = $_POST["winning_amountB"];

/////////////// B1 //////////////////
$member_idB1 = $_POST["member_idB1"] ?? '';
$score_killB1 = $_POST["score_killB1"] ?? '';
$score_deathB1 = $_POST["score_deathB1"] ?? '';
$score_assistB1 = $_POST["score_assistB1"] ?? '';
$is_mvpB1 = isset($_POST["is_mvpB1"]) ? $_POST["is_mvpB1"] : 0;
$main_playerB1 = isset($_POST["main_playerB1"]) ? $_POST["main_playerB1"] : 0;

/////////////// B2 //////////////////
$member_idB2 = $_POST["member_idB2"] ?? '';
$score_killB2 = $_POST["score_killB2"] ?? '';
$score_deathB2 = $_POST["score_deathB2"] ?? '';
$score_assistB2 = $_POST["score_assistB2"] ?? '';
$is_mvpB2 = isset($_POST["is_mvpB2"]) ? $_POST["is_mvpB2"] : 0;
$main_playerB2 = isset($_POST["main_playerB2"]) ? $_POST["main_playerB2"] : 0;

/////////////// B3 //////////////////
$member_idB3 = $_POST["member_idB3"] ?? '';
$score_killB3 = $_POST["score_killB3"] ?? '';
$score_deathB3 = $_POST["score_deathB3"] ?? '';
$score_assistB3 = $_POST["score_assistB3"] ?? '';
$is_mvpB3 = isset($_POST["is_mvpB3"]) ? $_POST["is_mvpB3"] : 0;
$main_playerB3 = isset($_POST["main_playerB3"]) ? $_POST["main_playerB3"] : 0;

/////////////// B4 //////////////////
$member_idB4 = $_POST["member_idB4"] ?? '';
$score_killB4 = $_POST["score_killB4"] ?? '';
$score_deathB4 = $_POST["score_deathB4"] ?? '';
$score_assistB4 = $_POST["score_assistB4"] ?? '';
$is_mvpB4 = isset($_POST["is_mvpB4"]) ? $_POST["is_mvpB4"] : 0;
$main_playerB4 = isset($_POST["main_playerB4"]) ? $_POST["main_playerB4"] : 0;

/////////////// B5 //////////////////
$member_idB5 = $_POST["member_idB5"] ?? '';
$score_killB5 = $_POST["score_killB5"] ?? '';
$score_deathB5 = $_POST["score_deathB5"] ?? '';
$score_assistB5 = $_POST["score_assistB5"] ?? '';
$is_mvpB5 = isset($_POST["is_mvpB5"]) ? $_POST["is_mvpB5"] : 0;
$main_playerB5 = isset($_POST["main_playerB5"]) ? $_POST["main_playerB5"] : 0;

/////////////// B6 //////////////////
$member_idB6 = $_POST["member_idB6"] ?? '';
$score_killB6 = $_POST["score_killB6"] ?? '';
$score_deathB6 = $_POST["score_deathB6"] ?? '';
$score_assistB6 = $_POST["score_assistB6"] ?? '';
$is_mvpB6 = isset($_POST["is_mvpB6"]) ? $_POST["is_mvpB6"] : 0;
$main_playerB6 = isset($_POST["main_playerB6"]) ? $_POST["main_playerB6"] : 0;

$sql2 = "UPDATE tournament
SET teamA_score = '$winning_amountA',
teamb_score = '$winning_amountB'
WHERE tour_id = '$tour_id'";
// echo $sql2;

if ($team_winnerA == 1) {
    $team_winnerB = 0;
    // echo $team_winnerA . "<br>";
    // echo $team_winnerB;

    if ($team_winnerA == 1) {
        $w = $teamA_id;
        $n = 'A';
    } else if ($team_winnerA == 0) {
        $w = $teamB_id;
        $n = 'B';
    } else if ($team_winnerB == 1) {
        $w = $teamB_id;
        $n = 'B';
    } else if ($team_winnerB == 0) {
        $w = $teamA_id;
        $n = 'A';
    }
} else if ($team_winnerB == 1) {
    $team_winnerA = 0;
    // echo $team_winnerA . "<br>";
    // echo $team_winnerB;

    if ($team_winnerA == 1) {
        $w = $teamA_id;
        $n = 'A';
    } else if ($team_winnerA == 0) {
        $w = $teamB_id;
        $n = 'B';
    } else if ($team_winnerB == 1) {
        $w = $teamB_id;
        $n = 'B';
    } else if ($team_winnerB == 0) {
        $w = $teamA_id;
        $n = 'A';
    }
} else {
    $w = 99;
}

///////////////////aaaaaaaaaaaaaaaaaaaaaa
$sqlA1 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA1,$score_killA1,$score_deathA1,$score_assistA1,$is_mvpA1,$main_playerA1, $winning_amountA, $team_winnerA)";
// // echo $sqlA1;
$sqlA2 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA2,$score_killA2,$score_deathA2,$score_assistA2,$is_mvpA2,$main_playerA2, $winning_amountA, $team_winnerA)";
// // echo $sqlA2;
$sqlA3 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA3,$score_killA3,$score_deathA3,$score_assistA3,$is_mvpA3,$main_playerA3, $winning_amountA, $team_winnerA)";
// // echo $sqlA3;
$sqlA4 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA4,$score_killA4,$score_deathA4,$score_assistA4,$is_mvpA4,$main_playerA4, $winning_amountA, $team_winnerA)";
// // echo $sqlA4;
$sqlA5 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA5,$score_killA5,$score_deathA5,$score_assistA5,$is_mvpA5,$main_playerA5, $winning_amountA, $team_winnerA)";
// // echo $sqlA5;
$sqlA6 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,$member_idA6,$score_killA6,$score_deathA6,$score_assistA6,$is_mvpA6,$main_playerA6, $winning_amountA, $team_winnerA)";
// // echo $sqlA6;

$sqlA1u = "UPDATE `match_result` 
SET `score_kill`= $score_killA1,
`score_assist`= $score_assistA1,
`score_death`= $score_deathA1,
`is_mvp`= $is_mvpA1,
`main_player`= $main_playerA1,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA1'";
//echo $sqlA1u;
$sqlA2u = "UPDATE `match_result` 
SET `score_kill`= $score_killA2,
`score_assist`= $score_assistA2,
`score_death`= $score_deathA2,
`is_mvp`= $is_mvpA2,
`main_player`= $main_playerA2,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA2'";
//echo $sqlA2u;
$sqlA3u = "UPDATE `match_result` 
SET `score_kill`= $score_killA3,
`score_assist`= $score_assistA3,
`score_death`= $score_deathA3,
`is_mvp`= $is_mvpA3,
`main_player`= $main_playerA3,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA3'";
//echo $sqlA3u;
$sqlA4u = "UPDATE `match_result` 
SET `score_kill`= $score_killA4,
`score_assist`= $score_assistA4,
`score_death`= $score_deathA4,
`is_mvp`= $is_mvpA4,
`main_player`= $main_playerA4,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA4'";
//echo $sqlA4u;
$sqlA5u = "UPDATE `match_result` 
SET `score_kill`= $score_killA5,
`score_assist`= $score_assistA5,
`score_death`= $score_deathA5,
`is_mvp`= $is_mvpA5,
`main_player`= $main_playerA5,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA5'";
//echo $sqlA5u;
$sqlA6u = "UPDATE `match_result` 
SET `score_kill`= $score_killA6,
`score_assist`= $score_assistA6,
`score_death`= $score_deathA6,
`is_mvp`= $is_mvpA6,
`main_player`= $main_playerA6,
`winning_amount`= $winning_amountA,
`team_winner`= $team_winnerA WHERE tour_id = '$tour_id' AND team_id = '$teamA_id' AND member_id = '$member_idA6'";
//echo $sqlA6u;

// /////////////////bbbbbbbbbbbbbbb
$sqlB1 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB1,$score_killB1,$score_deathB1,$score_assistB1,$is_mvpB1,$main_playerB1, $winning_amountB, $team_winnerB)";
// // echo $sqlB1;
$sqlB2 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB2,$score_killB2,$score_deathB2,$score_assistB2,$is_mvpB2,$main_playerB2, $winning_amountB, $team_winnerB)";
// // echo $sqlB2;
$sqlB3 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB3,$score_killB3,$score_deathB3,$score_assistB3,$is_mvpB3,$main_playerB3, $winning_amountB, $team_winnerB)";
// // echo $sqlB3;
$sqlB4 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB4,$score_killB4,$score_deathB4,$score_assistB4,$is_mvpB4,$main_playerB4, $winning_amountB, $team_winnerB)";
// // echo $sqlB4;
$sqlB5 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB5,$score_killB5,$score_deathB5,$score_assistB5,$is_mvpB5,$main_playerB5, $winning_amountB, $team_winnerB)";
// // echo $sqlB5;
$sqlB6 = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamB_id,$member_idB6,$score_killB6,$score_deathB6,$score_assistB6,$is_mvpB6,$main_playerB6, $winning_amountB, $team_winnerB)";
// // echo $sqlB6;

$sqlB1u = "UPDATE `match_result` 
SET `score_kill`= $score_killB1,
`score_assist`= $score_assistB1,
`score_death`= $score_deathB1,
`is_mvp`= $is_mvpB1,
`main_player`= $main_playerB1,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB1'";
//echo $sqlB1u;
$sqlB2u = "UPDATE `match_result` 
SET `score_kill`= $score_killB2,
`score_assist`= $score_assistB2,
`score_death`= $score_deathB2,
`is_mvp`= $is_mvpB2,
`main_player`= $main_playerB2,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB2'";
//echo $sqlB2u;
$sqlB3u = "UPDATE `match_result` 
SET `score_kill`= $score_killB3,
`score_assist`= $score_assistB3,
`score_death`= $score_deathB3,
`is_mvp`= $is_mvpB3,
`main_player`= $main_playerB3,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB3'";
//echo $sqlB3u;
$sqlB4u = "UPDATE `match_result` 
SET `score_kill`= $score_killB4,
`score_assist`= $score_assistB4,
`score_death`= $score_deathB4,
`is_mvp`= $is_mvpB4,
`main_player`= $main_playerB4,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB4'";
//echo $sqlB4u;
$sqlB5u = "UPDATE `match_result` 
SET `score_kill`= $score_killB5,
`score_assist`= $score_assistB5,
`score_death`= $score_deathB5,
`is_mvp`= $is_mvpB5,
`main_player`= $main_playerB5,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB5'";
//echo $sqlB5u;
$sqlB6u = "UPDATE `match_result` 
SET `score_kill`= $score_killB6,
`score_assist`= $score_assistB6,
`score_death`= $score_deathB6,
`is_mvp`= $is_mvpB6,
`main_player`= $main_playerB6,
`winning_amount`= $winning_amountB,
`team_winner`= $team_winnerB WHERE tour_id = '$tour_id' AND team_id = '$teamB_id' AND member_id = '$member_idB6'";
//echo $sqlB6u;


$sql3 = "INSERT INTO `match_winner`(`tour_id`, `team_id`, `round_position`, `round_number`) 
VALUES ('$tour_id','$w','$round_position','2')";

$sql3u = "UPDATE `match_winner` 
SET `team_id`= $w,
`round_number`= '2' WHERE tour_id = '$tour_id'";


$sql4 = "INSERT INTO `tournament`(`teamA_id`, `teamA_score`, `teamB_id`, `teamb_score`, `round_position`, `round_number`, `round_id`, `tour_position`) 
VALUES ('$w','','','','$round_position','2','$z','$Positiontour')";

$sql4u = "UPDATE `tournament` 
SET `teamA_id`= $w
WHERE tour_position = '$Positiontour'";

$sql5 = "UPDATE tournament 
        SET teamB_id = '$w' 
        ORDER BY tour_id DESC LIMIT 1";

$sql5u = "UPDATE `tournament` 
SET `teamB_id`= $w
WHERE tour_position = '$Positiontour'";


if ($team_winnerA == 99 && $team_winnerB == 99) {

    $sqlresult = "SELECT tour_id,team_id FROM `match_result`";
    $qrresult = mysqli_query($conn, $sqlresult);
    $rowresult = mysqli_fetch_assoc($qrresult);

    $tourresult = $rowresult['tour_id'] ?? '';
    $teamresult = $rowresult['team_id'] ?? '';


    if ($tour_id != $tourresult) {

        if ($teamA_id != $teamresult) {

            $sql_mbA1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA1 . "'";
            $qr_mbA1 = mysqli_query($conn, $sql_mbA1);
            $row_mbA1 = mysqli_fetch_assoc($qr_mbA1);

            $member_mbA1 = $row_mbA1['member_id'] ?? '';

            if ($member_idA1 != $member_mbA1) {
                
                if ($member_idA1 != '') {
                    if ($conn->query($sqlA1)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA1 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA1 != '') {
                    if ($conn->query($sqlA1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbA2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA2 . "'";
            $qr_mbA2 = mysqli_query($conn, $sql_mbA2);
            $row_mbA2 = mysqli_fetch_assoc($qr_mbA2);

            $member_mbA2 = $row_mbA2['member_id'] ?? '';

            if ($member_idA2 != $member_mbA2) {

                if ($member_idA2 != '') {
                    if ($conn->query($sqlA2)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA2 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA2 != '') {
                    if ($conn->query($sqlA2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbA3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA3 . "'";
            $qr_mbA3 = mysqli_query($conn, $sql_mbA3);
            $row_mbA3 = mysqli_fetch_assoc($qr_mbA3);

            $member_mbA3 = $row_mbA3['member_id'] ?? '';

            if ($member_idA3 != $member_mbA3) {
                if ($member_idA3 != '') {
                    if ($conn->query($sqlA3)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA3 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA3 != '') {
                    if ($conn->query($sqlA3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbA4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA4 . "'";
            $qr_mbA4 = mysqli_query($conn, $sql_mbA4);
            $row_mbA4 = mysqli_fetch_assoc($qr_mbA4);

            $member_mbA4 = $row_mbA4['member_id'] ?? '';

            if ($member_idA4 != $member_mbA4) {
                if ($member_idA4 != '') {
                    if ($conn->query($sqlA4)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA4 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA4 != '') {
                    if ($conn->query($sqlA4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbA5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA5 . "'";
            $qr_mbA5 = mysqli_query($conn, $sql_mbA5);
            $row_mbA5 = mysqli_fetch_assoc($qr_mbA5);

            $member_mbA5 = $row_mbA5['member_id'] ?? '';

            if ($member_idA5 != $member_mbA5) {
                if ($member_idA5 != '') {
                    if ($conn->query($sqlA5)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA5 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA5 != '') {
                    if ($conn->query($sqlA5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbA6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA6 . "'";
            $qr_mbA6 = mysqli_query($conn, $sql_mbA6);
            $row_mbA6 = mysqli_fetch_assoc($qr_mbA6);

            $member_mbA6 = $row_mbA6['member_id'] ?? '';

            if ($member_idA6 != $member_mbA6) {
                if ($member_idA6 != '') {
                    if ($conn->query($sqlA6)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA6 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idA6 != '') {
                    if ($conn->query($sqlA6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                    }
                }
            }

     
        }
        if ($teamB_id != $teamresult) {

            $sql_mbB1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB1 . "'";
            $qr_mbB1 = mysqli_query($conn, $sql_mbB1);
            $row_mbB1 = mysqli_fetch_assoc($qr_mbB1);

            $member_mbB1 = $row_mbB1['member_id'] ?? '';

            if ($member_idB1 != $member_mbB1) {
                if ($member_idB1 != '') {
                    if ($conn->query($sqlB1)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB1 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB1 != '') {
                    if ($conn->query($sqlB1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                    }
                }
            }
            
            $sql_mbB2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB2 . "'";
            $qr_mbB2 = mysqli_query($conn, $sql_mbB2);
            $row_mbB2 = mysqli_fetch_assoc($qr_mbB2);

            $member_mbB2 = $row_mbB2['member_id'] ?? '';

            if ($member_idB2 != $member_mbB2) {
                if ($member_idB2 != '') {
                    if ($conn->query($sqlB2)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB2 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB2 != '') {
                    if ($conn->query($sqlB2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbB3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB3 . "'";
            $qr_mbB3 = mysqli_query($conn, $sql_mbB3);
            $row_mbB3 = mysqli_fetch_assoc($qr_mbB3);

            $member_mbB3 = $row_mbB3['member_id'] ?? '';

            if ($member_idB3 != $member_mbB3) {
                if ($member_idB3 != '') {
                    if ($conn->query($sqlB3)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB3 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB3 != '') {
                    if ($conn->query($sqlB3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbB4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB4 . "'";
            $qr_mbB4 = mysqli_query($conn, $sql_mbB4);
            $row_mbB4 = mysqli_fetch_assoc($qr_mbB4);

            $member_mbB4 = $row_mbB4['member_id'] ?? '';

            if ($member_idB4 != $member_mbB4) {
                if ($member_idB4 != '') {
                    if ($conn->query($sqlB4)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB4 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB4 != '') {
                    if ($conn->query($sqlB4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbB5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB5 . "'";
            $qr_mbB5 = mysqli_query($conn, $sql_mbB5);
            $row_mbB5 = mysqli_fetch_assoc($qr_mbB5);

            $member_mbB5 = $row_mbB5['member_id'] ?? '';

            if ($member_idB5 != $member_mbB5) {
                if ($member_idB5 != '') {
                    if ($conn->query($sqlB5)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB5 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB5 != '') {
                    if ($conn->query($sqlB5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                    }
                }
            }

            $sql_mbB6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB6 . "'";
            $qr_mbB6 = mysqli_query($conn, $sql_mbB6);
            $row_mbB6 = mysqli_fetch_assoc($qr_mbB6);

            $member_mbB6 = $row_mbB6['member_id'] ?? '';

            if ($member_idB6 != $member_mbB6) {
                if ($member_idB6 != '') {
                    if ($conn->query($sqlB6)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB6 . "<br>" . $conn->error;
                    }
                }
            } else {
                if ($member_idB6 != '') {
                    if ($conn->query($sqlB6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                    }
                }
            }
        }
    } else {

        if ($member_idA1 != '') {
            if ($conn->query($sqlA1u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA1u . "<br>" . $conn->error;
            }
        }
        if ($member_idA2 != '') {
            if ($conn->query($sqlA2u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA2u . "<br>" . $conn->error;
            }
        }
        if ($member_idA3 != '') {
            if ($conn->query($sqlA3u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA3u . "<br>" . $conn->error;
            }
        }
        if ($member_idA4 != '') {
            if ($conn->query($sqlA4u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA4u . "<br>" . $conn->error;
            }
        }
        if ($member_idA5 != '') {
            if ($conn->query($sqlA5u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA5u . "<br>" . $conn->error;
            }
        }
        if ($member_idA6 != '') {
            if ($conn->query($sqlA6u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlA6u . "<br>" . $conn->error;
            }
        }

        ///////////bbbbbbbbbb/////////////////////////
        if ($member_idB1 != '') {
            if ($conn->query($sqlB1u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB1u . "<br>" . $conn->error;
            }
        }
        if ($member_idB2 != '') {
            if ($conn->query($sqlB2u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB2u . "<br>" . $conn->error;
            }
        }
        if ($member_idB3 != '') {
            if ($conn->query($sqlB3u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB3u . "<br>" . $conn->error;
            }
        }
        if ($member_idB4 != '') {
            if ($conn->query($sqlB4u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB4u . "<br>" . $conn->error;
            }
        }
        if ($member_idB5 != '') {
            if ($conn->query($sqlB5u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB5u . "<br>" . $conn->error;
            }
        }
        if ($member_idB6 != '') {
            if ($conn->query($sqlB6u)) {
                header("location: ../?adminpages=matchcatch");
            } else {
                echo "Error: " . $sqlB6u . "<br>" . $conn->error;
            }
        }
    }
} else {

    if ($row9["teamA_score"] === '' || $row9["teamA_score"] === NULL) {
        ////////////////////////////////////// กดแกไขแล้วinsert //////////////////////////////////

        if ($row10["teamB_id"] == '' || $row10["teamB_id"] == NULL) {

            if (
                $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql5)
            ) {

                $sqlresult = "SELECT tour_id,team_id FROM `match_result`";
                $qrresult = mysqli_query($conn, $sqlresult);
                $rowresult = mysqli_fetch_assoc($qrresult);

                $tourresult = $rowresult['tour_id'];
                $teamresult = $rowresult['team_id'];

                if ($tour_id != $tourresult) {

                    if ($teamA_id != $teamresult) {

                        $sql_mbA1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA1 . "'";
                        $qr_mbA1 = mysqli_query($conn, $sql_mbA1);
                        $row_mbA1 = mysqli_fetch_assoc($qr_mbA1);
            
                        $member_mbA1 = $row_mbA1['member_id'] ?? '';
            
                        if ($member_idA1 != $member_mbA1) {
                            
                            if ($member_idA1 != '') {
                                if ($conn->query($sqlA1)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA1 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA1 != '') {
                                if ($conn->query($sqlA1u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA2 . "'";
                        $qr_mbA2 = mysqli_query($conn, $sql_mbA2);
                        $row_mbA2 = mysqli_fetch_assoc($qr_mbA2);
            
                        $member_mbA2 = $row_mbA2['member_id'] ?? '';
            
                        if ($member_idA2 != $member_mbA2) {
            
                            if ($member_idA2 != '') {
                                if ($conn->query($sqlA2)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA2 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA2 != '') {
                                if ($conn->query($sqlA2u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA3 . "'";
                        $qr_mbA3 = mysqli_query($conn, $sql_mbA3);
                        $row_mbA3 = mysqli_fetch_assoc($qr_mbA3);
            
                        $member_mbA3 = $row_mbA3['member_id'] ?? '';
            
                        if ($member_idA3 != $member_mbA3) {
                            if ($member_idA3 != '') {
                                if ($conn->query($sqlA3)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA3 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA3 != '') {
                                if ($conn->query($sqlA3u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA4 . "'";
                        $qr_mbA4 = mysqli_query($conn, $sql_mbA4);
                        $row_mbA4 = mysqli_fetch_assoc($qr_mbA4);
            
                        $member_mbA4 = $row_mbA4['member_id'] ?? '';
            
                        if ($member_idA4 != $member_mbA4) {
                            if ($member_idA4 != '') {
                                if ($conn->query($sqlA4)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA4 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA4 != '') {
                                if ($conn->query($sqlA4u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA5 . "'";
                        $qr_mbA5 = mysqli_query($conn, $sql_mbA5);
                        $row_mbA5 = mysqli_fetch_assoc($qr_mbA5);
            
                        $member_mbA5 = $row_mbA5['member_id'] ?? '';
            
                        if ($member_idA5 != $member_mbA5) {
                            if ($member_idA5 != '') {
                                if ($conn->query($sqlA5)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA5 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA5 != '') {
                                if ($conn->query($sqlA5u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA6 . "'";
                        $qr_mbA6 = mysqli_query($conn, $sql_mbA6);
                        $row_mbA6 = mysqli_fetch_assoc($qr_mbA6);
            
                        $member_mbA6 = $row_mbA6['member_id'] ?? '';
            
                        if ($member_idA6 != $member_mbA6) {
                            if ($member_idA6 != '') {
                                if ($conn->query($sqlA6)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA6 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA6 != '') {
                                if ($conn->query($sqlA6u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                 
                    }
                    if ($teamB_id != $teamresult) {
            
                        $sql_mbB1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB1 . "'";
                        $qr_mbB1 = mysqli_query($conn, $sql_mbB1);
                        $row_mbB1 = mysqli_fetch_assoc($qr_mbB1);
            
                        $member_mbB1 = $row_mbB1['member_id'] ?? '';
            
                        if ($member_idB1 != $member_mbB1) {
                            if ($member_idB1 != '') {
                                if ($conn->query($sqlB1)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB1 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB1 != '') {
                                if ($conn->query($sqlB1u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                                }
                            }
                        }
                        
                        $sql_mbB2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB2 . "'";
                        $qr_mbB2 = mysqli_query($conn, $sql_mbB2);
                        $row_mbB2 = mysqli_fetch_assoc($qr_mbB2);
            
                        $member_mbB2 = $row_mbB2['member_id'] ?? '';
            
                        if ($member_idB2 != $member_mbB2) {
                            if ($member_idB2 != '') {
                                if ($conn->query($sqlB2)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB2 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB2 != '') {
                                if ($conn->query($sqlB2u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB3 . "'";
                        $qr_mbB3 = mysqli_query($conn, $sql_mbB3);
                        $row_mbB3 = mysqli_fetch_assoc($qr_mbB3);
            
                        $member_mbB3 = $row_mbB3['member_id'] ?? '';
            
                        if ($member_idB3 != $member_mbB3) {
                            if ($member_idB3 != '') {
                                if ($conn->query($sqlB3)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB3 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB3 != '') {
                                if ($conn->query($sqlB3u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB4 . "'";
                        $qr_mbB4 = mysqli_query($conn, $sql_mbB4);
                        $row_mbB4 = mysqli_fetch_assoc($qr_mbB4);
            
                        $member_mbB4 = $row_mbB4['member_id'] ?? '';
            
                        if ($member_idB4 != $member_mbB4) {
                            if ($member_idB4 != '') {
                                if ($conn->query($sqlB4)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB4 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB4 != '') {
                                if ($conn->query($sqlB4u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB5 . "'";
                        $qr_mbB5 = mysqli_query($conn, $sql_mbB5);
                        $row_mbB5 = mysqli_fetch_assoc($qr_mbB5);
            
                        $member_mbB5 = $row_mbB5['member_id'] ?? '';
            
                        if ($member_idB5 != $member_mbB5) {
                            if ($member_idB5 != '') {
                                if ($conn->query($sqlB5)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB5 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB5 != '') {
                                if ($conn->query($sqlB5u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB6 . "'";
                        $qr_mbB6 = mysqli_query($conn, $sql_mbB6);
                        $row_mbB6 = mysqli_fetch_assoc($qr_mbB6);
            
                        $member_mbB6 = $row_mbB6['member_id'] ?? '';
            
                        if ($member_idB6 != $member_mbB6) {
                            if ($member_idB6 != '') {
                                if ($conn->query($sqlB6)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB6 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB6 != '') {
                                if ($conn->query($sqlB6u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                                }
                            }
                        }
                    }

                } else {
                    ////////////////aaaaaaaaaaaaa//////////////////////
                    if ($member_idA1 != '') {
                        if ($conn->query($sqlA1u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA2 != '') {
                        if ($conn->query($sqlA2u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA3 != '') {
                        if ($conn->query($sqlA3u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA4 != '') {
                        if ($conn->query($sqlA4u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA5 != '') {
                        if ($conn->query($sqlA5u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA6 != '') {
                        if ($conn->query($sqlA6u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                        }
                    }

                    ///////////bbbbbbbbbb/////////////////////////
                    if ($member_idB1 != '') {
                        if ($conn->query($sqlB1u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB2 != '') {
                        if ($conn->query($sqlB2u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB3 != '') {
                        if ($conn->query($sqlB3u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB4 != '') {
                        if ($conn->query($sqlB4u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB5 != '') {
                        if ($conn->query($sqlB5u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB6 != '') {
                        if ($conn->query($sqlB6u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                        }
                    }
                }
            } else {
                echo '<script>alert("เพิ่มสำเร็จ");window.location.href = "../?adminpages=matchcatch";</script>';
            }
        } else {

            if (
                $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4)
            ) {


                $sqlresult = "SELECT tour_id,team_id FROM `match_result`";
                $qrresult = mysqli_query($conn, $sqlresult);
                $rowresult = mysqli_fetch_assoc($qrresult);

                $tourresult = $rowresult['tour_id'];
                $teamresult = $rowresult['team_id'];

                if ($tour_id != $tourresult) {

                    if ($teamA_id != $teamresult) {

                        $sql_mbA1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA1 . "'";
                        $qr_mbA1 = mysqli_query($conn, $sql_mbA1);
                        $row_mbA1 = mysqli_fetch_assoc($qr_mbA1);
            
                        $member_mbA1 = $row_mbA1['member_id'] ?? '';
            
                        if ($member_idA1 != $member_mbA1) {
                            
                            if ($member_idA1 != '') {
                                if ($conn->query($sqlA1)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA1 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA1 != '') {
                                if ($conn->query($sqlA1u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA2 . "'";
                        $qr_mbA2 = mysqli_query($conn, $sql_mbA2);
                        $row_mbA2 = mysqli_fetch_assoc($qr_mbA2);
            
                        $member_mbA2 = $row_mbA2['member_id'] ?? '';
            
                        if ($member_idA2 != $member_mbA2) {
            
                            if ($member_idA2 != '') {
                                if ($conn->query($sqlA2)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA2 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA2 != '') {
                                if ($conn->query($sqlA2u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA3 . "'";
                        $qr_mbA3 = mysqli_query($conn, $sql_mbA3);
                        $row_mbA3 = mysqli_fetch_assoc($qr_mbA3);
            
                        $member_mbA3 = $row_mbA3['member_id'] ?? '';
            
                        if ($member_idA3 != $member_mbA3) {
                            if ($member_idA3 != '') {
                                if ($conn->query($sqlA3)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA3 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA3 != '') {
                                if ($conn->query($sqlA3u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA4 . "'";
                        $qr_mbA4 = mysqli_query($conn, $sql_mbA4);
                        $row_mbA4 = mysqli_fetch_assoc($qr_mbA4);
            
                        $member_mbA4 = $row_mbA4['member_id'] ?? '';
            
                        if ($member_idA4 != $member_mbA4) {
                            if ($member_idA4 != '') {
                                if ($conn->query($sqlA4)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA4 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA4 != '') {
                                if ($conn->query($sqlA4u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA5 . "'";
                        $qr_mbA5 = mysqli_query($conn, $sql_mbA5);
                        $row_mbA5 = mysqli_fetch_assoc($qr_mbA5);
            
                        $member_mbA5 = $row_mbA5['member_id'] ?? '';
            
                        if ($member_idA5 != $member_mbA5) {
                            if ($member_idA5 != '') {
                                if ($conn->query($sqlA5)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA5 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA5 != '') {
                                if ($conn->query($sqlA5u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbA6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idA6 . "'";
                        $qr_mbA6 = mysqli_query($conn, $sql_mbA6);
                        $row_mbA6 = mysqli_fetch_assoc($qr_mbA6);
            
                        $member_mbA6 = $row_mbA6['member_id'] ?? '';
            
                        if ($member_idA6 != $member_mbA6) {
                            if ($member_idA6 != '') {
                                if ($conn->query($sqlA6)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA6 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idA6 != '') {
                                if ($conn->query($sqlA6u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                 
                    }
                    if ($teamB_id != $teamresult) {
            
                        $sql_mbB1 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB1 . "'";
                        $qr_mbB1 = mysqli_query($conn, $sql_mbB1);
                        $row_mbB1 = mysqli_fetch_assoc($qr_mbB1);
            
                        $member_mbB1 = $row_mbB1['member_id'] ?? '';
            
                        if ($member_idB1 != $member_mbB1) {
                            if ($member_idB1 != '') {
                                if ($conn->query($sqlB1)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB1 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB1 != '') {
                                if ($conn->query($sqlB1u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                                }
                            }
                        }
                        
                        $sql_mbB2 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB2 . "'";
                        $qr_mbB2 = mysqli_query($conn, $sql_mbB2);
                        $row_mbB2 = mysqli_fetch_assoc($qr_mbB2);
            
                        $member_mbB2 = $row_mbB2['member_id'] ?? '';
            
                        if ($member_idB2 != $member_mbB2) {
                            if ($member_idB2 != '') {
                                if ($conn->query($sqlB2)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB2 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB2 != '') {
                                if ($conn->query($sqlB2u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB3 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB3 . "'";
                        $qr_mbB3 = mysqli_query($conn, $sql_mbB3);
                        $row_mbB3 = mysqli_fetch_assoc($qr_mbB3);
            
                        $member_mbB3 = $row_mbB3['member_id'] ?? '';
            
                        if ($member_idB3 != $member_mbB3) {
                            if ($member_idB3 != '') {
                                if ($conn->query($sqlB3)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB3 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB3 != '') {
                                if ($conn->query($sqlB3u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB4 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB4 . "'";
                        $qr_mbB4 = mysqli_query($conn, $sql_mbB4);
                        $row_mbB4 = mysqli_fetch_assoc($qr_mbB4);
            
                        $member_mbB4 = $row_mbB4['member_id'] ?? '';
            
                        if ($member_idB4 != $member_mbB4) {
                            if ($member_idB4 != '') {
                                if ($conn->query($sqlB4)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB4 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB4 != '') {
                                if ($conn->query($sqlB4u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB5 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB5 . "'";
                        $qr_mbB5 = mysqli_query($conn, $sql_mbB5);
                        $row_mbB5 = mysqli_fetch_assoc($qr_mbB5);
            
                        $member_mbB5 = $row_mbB5['member_id'] ?? '';
            
                        if ($member_idB5 != $member_mbB5) {
                            if ($member_idB5 != '') {
                                if ($conn->query($sqlB5)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB5 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB5 != '') {
                                if ($conn->query($sqlB5u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                                }
                            }
                        }
            
                        $sql_mbB6 = "SELECT member_id FROM `match_result` WHERE member_id ='" . $member_idB6 . "'";
                        $qr_mbB6 = mysqli_query($conn, $sql_mbB6);
                        $row_mbB6 = mysqli_fetch_assoc($qr_mbB6);
            
                        $member_mbB6 = $row_mbB6['member_id'] ?? '';
            
                        if ($member_idB6 != $member_mbB6) {
                            if ($member_idB6 != '') {
                                if ($conn->query($sqlB6)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB6 . "<br>" . $conn->error;
                                }
                            }
                        } else {
                            if ($member_idB6 != '') {
                                if ($conn->query($sqlB6u)) {
                                    header("location: ../?adminpages=matchcatch");
                                } else {
                                    echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                                }
                            }
                        }
                    }

                } else {
                    ////////////////aaaaaaaaaaaaa//////////////////////
                    if ($member_idA1 != '') {
                        if ($conn->query($sqlA1u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA2 != '') {
                        if ($conn->query($sqlA2u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA3 != '') {
                        if ($conn->query($sqlA3u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA4 != '') {
                        if ($conn->query($sqlA4u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA5 != '') {
                        if ($conn->query($sqlA5u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idA6 != '') {
                        if ($conn->query($sqlA6u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                        }
                    }

                    ///////////bbbbbbbbbb/////////////////////////
                    if ($member_idB1 != '') {
                        if ($conn->query($sqlB1u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB2 != '') {
                        if ($conn->query($sqlB2u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB3 != '') {
                        if ($conn->query($sqlB3u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB4 != '') {
                        if ($conn->query($sqlB4u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB5 != '') {
                        if ($conn->query($sqlB5u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                        }
                    }
                    if ($member_idB6 != '') {
                        if ($conn->query($sqlB6u)) {
                            header("location: ../?adminpages=matchcatch");
                        } else {
                            echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                        }
                    }
                }
            } else {
                echo '<script>alert("เพิ่มไม่สำเร็จ");window.location.href = "../?adminpages=matchcatch";</script>';
            }
        }


        ///////////////////////////////////////////////////////////////////
    } else {
        /////////////////////////////// กดแก้ไขแล้ว update ///////////////////////////////////
        $mod = $tour_id % 2;
        if ($mod != 0) {

            if (
                $conn->query($sql2) && $conn->query($sql3u) && $conn->query($sql4u)
            ) {


                ////////////////aaaaaaaaaaaaa//////////////////////
                if ($member_idA1 != '') {
                    if ($conn->query($sqlA1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA2 != '') {
                    if ($conn->query($sqlA2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA3 != '') {
                    if ($conn->query($sqlA3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA4 != '') {
                    if ($conn->query($sqlA4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA5 != '') {
                    if ($conn->query($sqlA5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA6 != '') {
                    if ($conn->query($sqlA6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                    }
                }

                ///////////bbbbbbbbbb/////////////////////////
                if ($member_idB1 != '') {
                    if ($conn->query($sqlB1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB2 != '') {
                    if ($conn->query($sqlB2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB3 != '') {
                    if ($conn->query($sqlB3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB4 != '') {
                    if ($conn->query($sqlB4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB5 != '') {
                    if ($conn->query($sqlB5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB6 != '') {
                    if ($conn->query($sqlB6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                    }
                }
            } else {
                echo '<script>alert("เพิ่มสำเร็จ");window.location.href = "../?adminpages=matchcatch";</script>';
            }
        } else {



            if (
                $conn->query($sql2) && $conn->query($sql3u) && $conn->query($sql5u)
            ) {

                ////////////////aaaaaaaaaaaaa//////////////////////
                if ($member_idA1 != '') {
                    if ($conn->query($sqlA1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA1u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA2 != '') {
                    if ($conn->query($sqlA2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA2u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA3 != '') {
                    if ($conn->query($sqlA3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA3u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA4 != '') {
                    if ($conn->query($sqlA4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA4u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA5 != '') {
                    if ($conn->query($sqlA5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA5u . "<br>" . $conn->error;
                    }
                }
                if ($member_idA6 != '') {
                    if ($conn->query($sqlA6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlA6u . "<br>" . $conn->error;
                    }
                }

                ///////////bbbbbbbbbb/////////////////////////
                if ($member_idB1 != '') {
                    if ($conn->query($sqlB1u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB1u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB2 != '') {
                    if ($conn->query($sqlB2u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB2u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB3 != '') {
                    if ($conn->query($sqlB3u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB3u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB4 != '') {
                    if ($conn->query($sqlB4u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB4u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB5 != '') {
                    if ($conn->query($sqlB5u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB5u . "<br>" . $conn->error;
                    }
                }
                if ($member_idB6 != '') {
                    if ($conn->query($sqlB6u)) {
                        header("location: ../?adminpages=matchcatch");
                    } else {
                        echo "Error: " . $sqlB6u . "<br>" . $conn->error;
                    }
                }
            } else {
                echo '<script>alert("เพิ่มสำเร็จ");window.location.href = "../?adminpages=matchcatch";</script>';
            }
        }
    }
}