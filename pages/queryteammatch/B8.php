<?php 

$sql21 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'B1_4'";
$query21 = mysqli_query($conn, $sql21);
$row21 = mysqli_fetch_assoc($query21);
$nameteamaB1_4 = iconv_substr($row21['A_name'] ?? '',0,25,'UTF-8');
$nameteambB1_4 = iconv_substr($row21['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB1_4 = $row21['teamA_score'] ?? '';
$scoreteambB1_4 = $row21['teamb_score'] ?? '';

$sql22 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'B2_4'";
$query22 = mysqli_query($conn, $sql22);
$row22 = mysqli_fetch_assoc($query22);
$nameteamaB2_4 = iconv_substr($row22['A_name'] ?? '',0,25,'UTF-8');
$nameteambB2_4 = iconv_substr($row22['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB2_4 = $row22['teamA_score'] ?? '';
$scoreteambB2_4 = $row22['teamb_score'] ?? '';

$sql23 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'B3_4'";
$query23 = mysqli_query($conn, $sql23);
$row23 = mysqli_fetch_assoc($query23);
$nameteamaB3_4 = iconv_substr($row23['A_name'] ?? '',0,25,'UTF-8');
$nameteambB3_4 = iconv_substr($row23['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB3_4 = $row23['teamA_score'] ?? '';
$scoreteambB3_4 = $row23['teamb_score'] ?? '';

$sql24 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'B4_4'";
$query24 = mysqli_query($conn, $sql24);
$row24 = mysqli_fetch_assoc($query24);
$nameteamaB4_4 = iconv_substr($row24['A_name'] ?? '',0,25,'UTF-8');
$nameteambB4_4 = iconv_substr($row24['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB4_4 = $row24['teamA_score'] ?? '';
$scoreteambB4_4 = $row24['teamb_score'] ?? '';

?>
