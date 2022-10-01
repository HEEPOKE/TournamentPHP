<?php 

$sql27 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '4' AND a.tour_position = 'B1_2'";
$query27 = mysqli_query($conn, $sql27);
$row27 = mysqli_fetch_assoc($query27);
$nameteamaB1_2 = iconv_substr($row27['A_name'] ?? '',0,25,'UTF-8');
$nameteambB1_2 = iconv_substr($row27['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB1_2 = $row27['teamA_score'] ?? '';
$scoreteambB1_2 = $row27['teamb_score'] ?? '';

$sql28 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '4' AND a.tour_position = 'B2_2'";
$query28 = mysqli_query($conn, $sql28);
$row28 = mysqli_fetch_assoc($query28);
$nameteamaB2_2 = iconv_substr($row28['A_name'] ?? '',0,25,'UTF-8');
$nameteambB2_2 = iconv_substr($row28['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB2_2 = $row28['teamA_score'] ?? '';
$scoreteambB2_2 = $row28['teamb_score'] ?? '';


?>
