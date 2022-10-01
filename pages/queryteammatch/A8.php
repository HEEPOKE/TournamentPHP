<?php 

$sql17 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'A1_4'";
$query17 = mysqli_query($conn, $sql17);
$row17 = mysqli_fetch_assoc($query17);
$nameteamaA1_4 = iconv_substr($row17['A_name'] ?? '',0,25,'UTF-8');
$nameteambA1_4 = iconv_substr($row17['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA1_4 = $row17['teamA_score'] ?? '';
$scoreteambA1_4 = $row17['teamb_score'] ?? '';

$sql18 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'A2_4'";
$query18 = mysqli_query($conn, $sql18);
$row18 = mysqli_fetch_assoc($query18);
$nameteamaA2_4 = iconv_substr($row18['A_name'] ?? '',0,25,'UTF-8');
$nameteambA2_4 = iconv_substr($row18['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA2_4 = $row18['teamA_score'] ?? '';
$scoreteambA2_4 = $row18['teamb_score'] ?? '';

$sql19 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'A3_4'";
$query19 = mysqli_query($conn, $sql19);
$row19 = mysqli_fetch_assoc($query19);
$nameteamaA3_4 = iconv_substr($row19['A_name'] ?? '',0,25,'UTF-8');
$nameteambA3_4 = iconv_substr($row19['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA3_4 = $row19['teamA_score'] ?? '';
$scoreteambA3_4 = $row19['teamb_score'] ?? '';

$sql20 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '8' AND a.tour_position = 'A4_4'";
$query20 = mysqli_query($conn, $sql20);
$row20 = mysqli_fetch_assoc($query20);
$nameteamaA4_4 = iconv_substr($row20['A_name'] ?? '',0,25,'UTF-8');
$nameteambA4_4 = iconv_substr($row20['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA4_4 = $row20['teamA_score'] ?? '';
$scoreteambA4_4 = $row20['teamb_score'] ?? '';

?>
