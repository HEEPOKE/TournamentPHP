<?php
session_start();
require('../../database/client.php');

$tour_id = $_POST["tour_id"];
$team_winner = $_POST["team_winner"];
$member_id = $_POST["member_id"];
$teamA_id = $_POST["teamA_id"];
$member_id = $_POST["member_id"];
$score_killA1 = $_POST["score_killA1"];
$score_killA2 = $_POST["score_killA2"];
// $score_killA3 = $_POST["score_killA3"];
// $score_killA4 = $_POST["score_killA4"];
// $score_killA5 = $_POST["score_killA5"];
$score_deathA1 = $_POST["score_deathA1"];
$score_deathA2 = $_POST["score_deathA2"];
// $score_deathA3 = $_POST["score_deathA3"];
// $score_deathA4 = $_POST["score_deathA4"];
// $score_deathA5 = $_POST["score_deathA5"];
$score_assistA1 = $_POST["score_assistA1"];
$score_assistA2 = $_POST["score_assistA2"];
// $score_assistA3 = $_POST["score_assistA3"];
// $score_assistA4 = $_POST["score_assistA4"];
// $score_assistA5 = $_POST["score_assistA5"];
// $is_mvpA = $_POST["is_mvpA"];
// $is_mvpA2 = $_POST["is_mvpA2"];
// $main_playerA1 = $_POST["main_playerA1"];
// $main_playerA2 = $_POST["main_playerA2"];
$winning_amountA = $_POST["winning_amountA"];


// $teamB_id = $_POST["teamB_id"];
// $member_id = $_POST["member_id"];
// $score_killB = $_POST["score_killB"];
// $score_deathB = $_POST["score_deathB"];
// $score_assistB = $_POST["score_assistB"];
// $is_mvpB = $_POST["is_mvpB"];
// $main_playerB = $_POST["main_playerB"];
// $winning_amountB = $_POST["winning_amountB"];


// echo 'tour_id: ' . $tour_id . '<br>';
// echo 'team_winner: ' . $team_winner . '<br>..........................<br><br>';


// echo 'teamA_id: ' . $teamA_id . '<br>';
// echo 'member_id: ' . $member_id . '<br>';
// // echo 'score_killA: ' . $score_killA . '<br>';
// // echo 'score_deathA: ' . $score_deathA . '<br>';
// // echo 'score_assistA: ' . $score_assistA . '<br>';
// echo 'is_mvpA: ' . $is_mvpA . '<br>';
// echo 'main_playerA: ' . $main_playerA . '<br>';
// echo 'winning_amountA: ' . $winning_amountA . '<br>..........................<br><br>';


// echo 'teamB_id: ' . $teamB_id . '<br>';
// echo 'member_id: ' . $member_id . '<br>';
// echo 'score_killB: ' . $score_killB . '<br>';
// echo 'score_deathB: ' . $score_deathB . '<br>';
// echo 'score_assistB: ' . $score_assistB . '<br>';
// echo 'is_mvpB: ' . $is_mvpB . '<br>';
// echo 'main_playerB: ' . $main_playerB . '<br>';
// echo 'winning_amountB: ' . $winning_amountB . '<br>..........................<br><br>';






$sql = "INSERT INTO `match_result`(`tour_id`, `team_id`, `member_id`, `score_kill`, `score_death`, `score_assist`, `is_mvp`, `create_at`, `update_at`, `main_player`, `winning_amount`, `team_winner`) 
VALUES ($tour_id,$teamA_id,'$member_id',$score_killA1,$score_deathA1,$score_assistA1,'1','2022-07-10 00:00:00','2022-07-10 00:00:00', '1', $winning_amountA, $team_winner),
($tour_id,$teamA_id,'$member_id',$score_killA2,$score_deathA2,$score_assistA2,'1','2022-07-10 00:00:00','2022-07-10 00:00:00', '1', $winning_amountA, $team_winner)";

if ($conn->query($sql) === TRUE) {
    header("location: ../?adminpages=matchcatch");
} else {
    echo '<script>alert("เพิ่มทีมไม่สำเร็จ");window.location.href = "../?adminpages=matchcatch";</script>';
}
