<?php 

$sql25 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '4' AND a.tour_position = 'A1_2'";
$query25 = mysqli_query($conn, $sql25);
$row25 = mysqli_fetch_assoc($query25);
$nameteamaA1_2 = iconv_substr($row25['A_name'] ?? '',0,25,'UTF-8');
$nameteambA1_2 = iconv_substr($row25['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA1_2 = $row25['teamA_score'] ?? '';
$scoreteambA1_2 = $row25['teamb_score'] ?? '';


$sql26 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '4' AND a.tour_position = 'A2_2'";
$query26 = mysqli_query($conn, $sql26);
$row26 = mysqli_fetch_assoc($query26);
$nameteamaA2_2 = iconv_substr($row26['A_name'] ?? '',0,25,'UTF-8');
$nameteambA2_2 = iconv_substr($row26['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA2_2 = $row26['teamA_score'] ?? '';
$scoreteambA2_2 = $row26['teamb_score'] ?? '';

?>
