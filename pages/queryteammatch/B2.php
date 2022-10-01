<?php

$sql30 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '2' AND a.tour_position = 'BFinal'";
$query30 = mysqli_query($conn, $sql30);
$row30 = mysqli_fetch_assoc($query30);
$nameteamaBFinal = iconv_substr($row30['A_name'] ?? '',0,25,'UTF-8');
$nameteambBFinal = iconv_substr($row30['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaBFinal = $row30['teamA_score'] ?? '';
$scoreteambBFinal = $row30['teamb_score'] ?? '';


?>