<?php
session_start();

require('../database/client.php');
$_SESSION['type'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/admin/Adminlink.php'; ?>
    <?php include '../components/Linkbootstrap.php'; ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed fontss">
    <?php
    $team1 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A1'";
    $team1_query = mysqli_query($conn, $team1);
    $rowteam1 = mysqli_fetch_array($team1_query);

    $name1 = $rowteam1['team_name'] ?? '';

    $team2 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A1'";
    $team2_query = mysqli_query($conn, $team2);
    $rowteam2 = mysqli_fetch_array($team2_query);

    $name2 = $rowteam2['team_name'] ?? '';

    $team3 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A2'";
    $team3_query = mysqli_query($conn, $team3);
    $rowteam3 = mysqli_fetch_array($team3_query);

    $name3 = $rowteam3['team_name'] ?? '';

    $team4 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A2'";
    $team4_query = mysqli_query($conn, $team4);
    $rowteam4 = mysqli_fetch_array($team4_query);

    $name4 = $rowteam4['team_name'] ?? '';

    $team5 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A3'";
    $team5_query = mysqli_query($conn, $team5);
    $rowteam5 = mysqli_fetch_array($team5_query);

    $name5 = $rowteam5['team_name'] ?? '';

    $team6 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A3'";
    $team6_query = mysqli_query($conn, $team6);
    $rowteam6 = mysqli_fetch_array($team6_query);

    $name6 = $rowteam6['team_name'] ?? '';

    $team7 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A4'";
    $team7_query = mysqli_query($conn, $team7);
    $rowteam7 = mysqli_fetch_array($team7_query);

    $name7 = $rowteam7['team_name'] ?? '';

    $team8 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A4'";
    $team8_query = mysqli_query($conn, $team8);
    $rowteam8 = mysqli_fetch_array($team8_query);

    $name8 = $rowteam8['team_name'] ?? '';

    $team9 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A5'";
    $team9_query = mysqli_query($conn, $team9);
    $rowteam9 = mysqli_fetch_array($team9_query);

    $name9 = $rowteam9['team_name'] ?? '';

    $team10 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A5'";
    $team10_query = mysqli_query($conn, $team10);
    $rowteam10 = mysqli_fetch_array($team10_query);

    $name10 = $rowteam10['team_name'] ?? '';

    $team11 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A6'";
    $team11_query = mysqli_query($conn, $team11);
    $rowteam11 = mysqli_fetch_array($team11_query);

    $name11 = $rowteam11['team_name'] ?? '';

    $team12 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A6'";
    $team12_query = mysqli_query($conn, $team12);
    $rowteam12 = mysqli_fetch_array($team12_query);

    $name12 = $rowteam12['team_name'] ?? '';

    $team13 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A7'";
    $team13_query = mysqli_query($conn, $team13);
    $rowteam13 = mysqli_fetch_array($team13_query);

    $name13 = $rowteam13['team_name'] ?? '';

    $team14 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A7'";
    $team14_query = mysqli_query($conn, $team14);
    $rowteam14 = mysqli_fetch_array($team14_query);

    $name14 = $rowteam14['team_name'] ?? '';

    $team15 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'A8'";
    $team15_query = mysqli_query($conn, $team15);
    $rowteam15 = mysqli_fetch_array($team15_query);

    $name15 = $rowteam15['team_name'] ?? '';

    $team16 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'A8'";
    $team16_query = mysqli_query($conn, $team16);
    $rowteam16 = mysqli_fetch_array($team16_query);

    $name16 = $rowteam16['team_name'] ?? '';

    $team17 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B1'";
    $team17_query = mysqli_query($conn, $team17);
    $rowteam17 = mysqli_fetch_array($team17_query);

    $name17 = $rowteam17['team_name'] ?? '';

    $team18 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B1'";
    $team18_query = mysqli_query($conn, $team18);
    $rowteam18 = mysqli_fetch_array($team18_query);

    $name18 = $rowteam18['team_name'] ?? '';

    $team19 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B2'";
    $team19_query = mysqli_query($conn, $team19);
    $rowteam19 = mysqli_fetch_array($team19_query);

    $name19 = $rowteam19['team_name'] ?? '';

    $team20 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B2'";
    $team20_query = mysqli_query($conn, $team20);
    $rowteam20 = mysqli_fetch_array($team20_query);

    $name20 = $rowteam20['team_name'] ?? '';

    $team21 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B3'";
    $team21_query = mysqli_query($conn, $team21);
    $rowteam21 = mysqli_fetch_array($team21_query);

    $name21 = $rowteam21['team_name'] ?? '';

    $team22 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B3'";
    $team22_query = mysqli_query($conn, $team22);
    $rowteam22 = mysqli_fetch_array($team22_query);

    $name22 = $rowteam22['team_name'] ?? '';

    $team23 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B4'";
    $team23_query = mysqli_query($conn, $team23);
    $rowteam23 = mysqli_fetch_array($team23_query);

    $name23 = $rowteam23['team_name'] ?? '';

    $team24 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B4'";
    $team24_query = mysqli_query($conn, $team24);
    $rowteam24 = mysqli_fetch_array($team24_query);

    $name24 = $rowteam24['team_name'] ?? '';

    $team25 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B5'";
    $team25_query = mysqli_query($conn, $team25);
    $rowteam25 = mysqli_fetch_array($team25_query);

    $name25 = $rowteam25['team_name'] ?? '';

    $team26 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B5'";
    $team26_query = mysqli_query($conn, $team26);
    $rowteam26 = mysqli_fetch_array($team26_query);

    $name26 = $rowteam26['team_name'] ?? '';

    $team27 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B6'";
    $team27_query = mysqli_query($conn, $team27);
    $rowteam27 = mysqli_fetch_array($team27_query);

    $name27 = $rowteam27['team_name'] ?? '';

    $team28 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B6'";
    $team28_query = mysqli_query($conn, $team28);
    $rowteam28 = mysqli_fetch_array($team28_query);

    $name28 = $rowteam28['team_name'] ?? '';

    $team29 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B7'";
    $team29_query = mysqli_query($conn, $team29);
    $rowteam29 = mysqli_fetch_array($team29_query);

    $name29 = $rowteam29['team_name'] ?? '';

    $team30 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B7'";
    $team30_query = mysqli_query($conn, $team30);
    $rowteam30 = mysqli_fetch_array($team30_query);

    $name30 = $rowteam30['team_name'] ?? '';

    $team31 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamA_id
    WHERE b.tour_position = 'B8'";
    $team31_query = mysqli_query($conn, $team31);
    $rowteam31 = mysqli_fetch_array($team31_query);

    $name31 = $rowteam31['team_name'] ?? '';

    $team32 = "SELECT * FROM team as a
    INNER JOIN tournament as b ON a.team_id = b.teamB_id
    WHERE b.tour_position = 'B8'";
    $team32_query = mysqli_query($conn, $team32);
    $rowteam32 = mysqli_fetch_array($team32_query);

    $name32 = $rowteam32['team_name'] ?? '';


    ?>
    <div class="wrapper">
        <!-- <?php include '../components/Loading.php'; ?> -->
        <?php include '../components/admin/Adminmenu.php'; ?>
        <div class="content-wrapper">
            <?php
            $adminpages = isset($_GET['adminpages']) ? $_GET['adminpages'] : 'dashboard';

            switch ($adminpages) {
                case 'conclude':
                    include 'pages/conclude.php';
                    break;
                case 'match':
                    include 'pages/match.php';
                    break;
                case 'matchcatch':
                    include 'pages/matchcatch.php';
                    break;
                case 'breakin':
                    include 'pages/breakin.php';
                    break;
                case 'tournamentA':
                    include 'pages/Tournament/tournamentA.php';
                    break;
                case 'tournamentB':
                    include 'pages/Tournament/tournamentB.php';
                    break;
                case 'manageteam':
                    include 'pages/manageteam.php';
                    break;
                case 'managestatus':
                    include 'pages/managestatus.php';
                    break;
                case 'addteamdetail':
                    include 'pages/addteamdetail.php';
                    break;
                case 'editteamdetail':
                    include 'pages/editteamdetail.php';
                    break;
                case 'addplayerdetail':
                    include 'pages/addplayerdetail.php';
                    break;
                case 'editrule':
                    include 'pages/editrule.php';
                    break;
                case 'editdatematch':
                    include 'pages/editdatematch.php';
                    break;
                case 'showmemberdetail':
                    include 'pages/showmemberdetail.php';
                    break;
                case 'edithightlightmatch':
                    include 'pages/edithightlightmatch.php';
                    break;
                case 'inserthighlight':
                    include 'pages/inserthighlight.php';
                    break;
                case 'edithighlight':
                    include 'pages/edithighlight.php';
                    break;
                case 'conclude16':
                    include 'pages/conclude16.php';
                    break;
                case 'conclude8':
                    include 'pages/conclude8.php';
                    break;
                case 'concludesemi':
                    include 'pages/concludesemi.php';
                    break;
                case 'concludefinal':
                    include 'pages/concludefinal.php';
                    break;
                case 'conclude3rd':
                    include 'pages/conclude3rd.php';
                    break;
                case 'seeconclude':
                    include 'pages/seeconclude.php';
                    break;
                case 'seeconclude16':
                    include 'pages/seeconclude16.php';
                    break;
                case 'seeconclude8':
                    include 'pages/seeconclude8.php';
                    break;
                case 'seeconcludesemi':
                    include 'pages/seeconcludesemi.php';
                    break;
                case 'seeconcludefinal':
                    include 'pages/seeconcludefinal.php';
                    break;
                case 'seeconclude3rd':
                    include 'pages/seeconclude3rd.php';
                    break;
                default:
                    include 'pages/dashboard.php';
                    break;
            }
            ?>

            <!-- <?php include '../components/Footer.php'; ?> -->
        </div>
        <?php include '../components/Bootstrapscript.php'; ?>
        <?php include '../components/admin/Adminscript.php'; ?>
</body>

</html>