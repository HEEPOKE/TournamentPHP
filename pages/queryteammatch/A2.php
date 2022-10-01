<?php 

$sql29 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '2' AND a.tour_position = 'AFinal'";
$query29 = mysqli_query($conn, $sql29);
$row29 = mysqli_fetch_assoc($query29);
$nameteamaAFinal = iconv_substr($row29['A_name'] ?? '',0,25,'UTF-8');
$nameteambAFinal = iconv_substr($row29['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaAFinal = $row29['teamA_score'] ?? '';
$scoreteambAFinal = $row29['teamb_score'] ?? '';

?>
