<?php 
$sql = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A1'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$nameteamaA1 = iconv_substr($row['A_name'] ?? '',0,25,'UTF-8');
$nameteambA1 = iconv_substr($row['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA1 = $row['teamA_score'] ?? '';
$scoreteambA1 = $row['teamb_score'] ?? '';

$sql2 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A2'";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);
$nameteamaA2 = iconv_substr($row2['A_name'] ?? '',0,25,'UTF-8');
$nameteambA2 = iconv_substr($row2['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA2 = $row2['teamA_score'] ?? '';
$scoreteambA2 = $row2['teamb_score'] ?? '';

$sql3 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A3'";
$query3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($query3);
$nameteamaA3 = iconv_substr($row3['A_name'] ?? '',0,25,'UTF-8');
$nameteambA3 = iconv_substr($row3['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA3 = $row3['teamA_score'] ?? '';
$scoreteambA3 = $row3['teamb_score'] ?? '';

$sql4 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A4'";
$query4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($query4);
$nameteamaA4 = iconv_substr($row4['A_name'] ?? '',0,25,'UTF-8');
$nameteambA4 = iconv_substr($row4['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA4 = $row4['teamA_score'] ?? '';
$scoreteambA4 = $row4['teamb_score'] ?? '';

$sql5 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A5'";
$query5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_assoc($query5);
$nameteamaA5 = iconv_substr($row5['A_name'] ?? '',0,25,'UTF-8');
$nameteambA5 = iconv_substr($row5['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA5 = $row5['teamA_score'] ?? '';
$scoreteambA5 = $row5['teamb_score'] ?? '';

$sql6 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A6'";
$query6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_assoc($query6);
$nameteamaA6 = iconv_substr($row6['A_name'] ?? '',0,25,'UTF-8');
$nameteambA6 = iconv_substr($row6['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA6 = $row6['teamA_score'] ?? '';
$scoreteambA6 = $row6['teamb_score'] ?? '';

$sql7 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A7'";
$query7 = mysqli_query($conn, $sql7);
$row7 = mysqli_fetch_assoc($query7);
$nameteamaA7 = iconv_substr($row7['A_name'] ?? '',0,25,'UTF-8');
$nameteambA7 = iconv_substr($row7['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA7 = $row7['teamA_score'] ?? '';
$scoreteambA7 = $row7['teamb_score'] ?? '';

$sql8 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'A8'";
$query8 = mysqli_query($conn, $sql8);
$row8 = mysqli_fetch_assoc($query8);
$nameteamaA8 = iconv_substr($row8['A_name'] ?? '',0,25,'UTF-8');
$nameteambA8 = iconv_substr($row8['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaA8 = $row8['teamA_score'] ?? '';
$scoreteambA8 = $row8['teamb_score'] ?? '';

$sql9 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B1'";
$query9 = mysqli_query($conn, $sql9);
$row9 = mysqli_fetch_assoc($query9);
$nameteamaB1 = iconv_substr($row9['A_name'] ?? '',0,25,'UTF-8');
$nameteambB1 = iconv_substr($row9['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB1 = $row9['teamA_score'] ?? '';
$scoreteambB1 = $row9['teamb_score'] ?? '';

$sql10 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B2'";
$query10 = mysqli_query($conn, $sql10);
$row10 = mysqli_fetch_assoc($query10);
$nameteamaB2 = iconv_substr($row10['A_name'] ?? '',0,25,'UTF-8');
$nameteambB2 = iconv_substr($row10['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB2 = $row10['teamA_score'] ?? '';
$scoreteambB2 = $row10['teamb_score'] ?? '';

$sql11 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B3'";
$query11 = mysqli_query($conn, $sql11);
$row11 = mysqli_fetch_assoc($query11);
$nameteamaB3 = iconv_substr($row11['A_name'] ?? '',0,25,'UTF-8');
$nameteambB3 = iconv_substr($row11['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB3 = $row11['teamA_score'] ?? '';
$scoreteambB3 = $row11['teamb_score'] ?? '';

$sql12 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B4'";
$query12 = mysqli_query($conn, $sql12);
$row12 = mysqli_fetch_assoc($query12);
$nameteamaB4 = iconv_substr($row12['A_name'] ?? '',0,25,'UTF-8');
$nameteambB4 = iconv_substr($row12['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB4 = $row12['teamA_score'] ?? '';
$scoreteambB4 = $row12['teamb_score'] ?? '';

$sql13 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B5'";
$query13 = mysqli_query($conn, $sql13);
$row13 = mysqli_fetch_assoc($query13);
$nameteamaB5 = iconv_substr($row13['A_name'] ?? '',0,25,'UTF-8');
$nameteambB5 = iconv_substr($row13['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB5 = $row13['teamA_score'] ?? '';
$scoreteambB5 = $row13['teamb_score'] ?? '';

$sql14 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B6'";
$query14 = mysqli_query($conn, $sql14);
$row14 = mysqli_fetch_assoc($query14);
$nameteamaB6 = iconv_substr($row14['A_name'] ?? '',0,25,'UTF-8');
$nameteambB6 = iconv_substr($row14['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB6 = $row14['teamA_score'] ?? '';
$scoreteambB6 = $row14['teamb_score'] ?? '';

$sql15 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B7'";
$query15 = mysqli_query($conn, $sql15);
$row15 = mysqli_fetch_assoc($query15);
$nameteamaB7 = iconv_substr($row15['A_name'] ?? '',0,25,'UTF-8');
$nameteambB7 = iconv_substr($row15['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB7 = $row15['teamA_score'] ?? '';
$scoreteambB7 = $row15['teamb_score'] ?? '';

$sql16 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
WHERE a.round_number = '16' AND a.tour_position = 'B8'";
$query16 = mysqli_query($conn, $sql16);
$row16 = mysqli_fetch_assoc($query16);
$nameteamaB8 = iconv_substr($row16['A_name'] ?? '',0,25,'UTF-8');
$nameteambB8 = iconv_substr($row16['B_name'] ?? '',0,25,'UTF-8');
$scoreteamaB8 = $row16['teamA_score'] ?? '';
$scoreteambB8 = $row16['teamb_score'] ?? '';

?>
