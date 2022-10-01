<?php

$sql31 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '3' AND a.round_position = '3rd'";
$query31 = mysqli_query($conn, $sql31);
$row31 = mysqli_fetch_assoc($query31);
$nameteama3rd = iconv_substr($row31['A_name'] ?? '',0,25,'UTF-8');
$nameteamb3rd = iconv_substr($row31['B_name'] ?? '',0,25,'UTF-8');
$scoreteama3rd = $row31['teamA_score'] ?? '';
$scoreteamb3rd = $row31['teamb_score'] ?? '';

$sql32 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '1' AND a.round_position = '1st'";
$query32 = mysqli_query($conn, $sql32);
$row32 = mysqli_fetch_assoc($query32);
$nameteamaFinal = iconv_substr($row32['A_name'] ?? '',0,25,'UTF-8');
$nameteambFinal = iconv_substr($row32['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaFinal = $row32['teamA_score'] ?? '';
$scoreteambFinal = $row32['teamb_score'] ?? '';

?>