<?php
$tour_id = isset($_GET["tour_id"]) ? $_GET["tour_id"] : "";

$sql = "SELECT a.*, teamA.team_name as a_name, teamB.team_name as B_name, matchdate.*
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE tour_id = '$tour_id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamA_id = b.team_id
WHERE tour_id = '$tour_id'";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamB_id = b.team_id
WHERE tour_id = '$tour_id'";
$query3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($query3);

$sqlteamA = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamA_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE tour_id = '$tour_id'";
$queryteamA = mysqli_query($conn, $sqlteamA);
$rowteamA = mysqli_num_rows($queryteamA);

$teamA1 = mysqli_fetch_array($queryteamA);
$teamA2 = mysqli_fetch_array($queryteamA);
$teamA3 = mysqli_fetch_array($queryteamA);
$teamA4 = mysqli_fetch_array($queryteamA);
$teamA5 = mysqli_fetch_array($queryteamA);
$teamA6 = mysqli_fetch_array($queryteamA);

//////////////////////////   member A //////////////////////////
$sqlteamA1 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*, result.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamA_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN match_result as result ON result.member_id = memberA.member_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE a.tour_id = '$tour_id'";
$queryteamA1 = mysqli_query($conn, $sqlteamA1);
$rowteamA1 = mysqli_num_rows($queryteamA1);
$teamA11 = mysqli_fetch_array($queryteamA1);
$teamA21 = mysqli_fetch_array($queryteamA1);
$teamA31 = mysqli_fetch_array($queryteamA1);
$teamA41 = mysqli_fetch_array($queryteamA1);
$teamA51 = mysqli_fetch_array($queryteamA1);
$teamA61 = mysqli_fetch_array($queryteamA1);
///////////////////////////////////////////////////////////////
// echo $teamA11["is_mvp"];
// echo $teamA21["is_mvp"];

$sqlteamB = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamB_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE tour_id = '$tour_id'";
$queryteamB = mysqli_query($conn, $sqlteamB);
$rowteamB = mysqli_num_rows($queryteamB);

$teamB1 = mysqli_fetch_array($queryteamB);
$teamB2 = mysqli_fetch_array($queryteamB);
$teamB3 = mysqli_fetch_array($queryteamB);
$teamB4 = mysqli_fetch_array($queryteamB);
$teamB5 = mysqli_fetch_array($queryteamB);
$teamB6 = mysqli_fetch_array($queryteamB);

///////////////////// member B //////////////////////////////
$sqlteamB1 = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*, result.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamB_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN match_result as result ON result.member_id = memberA.member_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE a.tour_id = '$tour_id'";
$queryteamB1 = mysqli_query($conn, $sqlteamB1);
$rowteamB1 = mysqli_num_rows($queryteamB1);

$teamB11 = mysqli_fetch_array($queryteamB1);
$teamB21 = mysqli_fetch_array($queryteamB1);
$teamB31 = mysqli_fetch_array($queryteamB1);
$teamB41 = mysqli_fetch_array($queryteamB1);
$teamB51 = mysqli_fetch_array($queryteamB1);
$teamB61 = mysqli_fetch_array($queryteamB1);
/////////////////////////////////////////////////////////////

$sql10 = "SELECT * FROM `tournament` ORDER BY tour_id DESC";
$query10 = mysqli_query($conn, $sql10);
$row10 = mysqli_fetch_assoc($query10);
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ผลการเเข่งขัน</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid"> 
        <div class="card">
            <br>
            <form action="adminservices/concludeservice.php" method="post">
                <input type="hidden" value="<?php echo $tour_id; ?>" name="tour_id"></input>
                <input type="hidden" value="<?php echo $row["round_position"]; ?>" name="round_position"></input>
                <input type="hidden" value="<?php echo $$row10["round_id"]; ?>" name="round_id"></input>

                <input type="hidden" value="<?php echo $row["teamA_id"]; ?>" name="teamA_id"></input>
                <input type="hidden" value="<?php echo $row["teamB_id"]; ?>" name="teamB_id"></input>

                <div class="row">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="row">
                                <center>
                                    <img src="../imglogo_team/<?php echo $row2['imglogo_team']; ?>" class="rounded-circle " alt="" width="100" height="100">
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <!-- <span>ทีม <?php echo $row['a_name']; ?></span> -->
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <div class="col-md-12">
                                        <span style="width: 200px;">จำนวนรอบที่ชนะ</span>
                                        <font color="orange"><?php echo $row2["teamA_score"]; ?></font>
                                    </div>
                                </center>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-1 KD">
                                    <span>Kill</span>
                                </div>
                                <div class="col-md-1 KD">
                                    <span>Assist</span>
                                </div>
                                <div class="col-md-1 KD">
                                    <span>Death</span>
                                </div>
                            </div>

                            <?php
                            $memberA1 = $teamA1['member_id'] ?? '';
                            $nameA1 = $teamA1['name_game'] ?? '';

                            $teamA1s = iconv_substr($nameA1, 0, 10, 'UTF-8');  

                            if ($memberA1 != '' && $nameA1 != '') { ?>
                                <div class="row">
                                    <input id="member_idA1" name="member_idA1" style="width: 50px;" value="<?php echo $teamA1['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA1s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA11["score_kill"]) ? $teamA11["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA11["score_assist"]) ? $teamA11["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA11["score_death"]) ? $teamA11["score_death"] : 0; ?>
                                    </div>

                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA11["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA11["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA11["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA11["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA2 = $teamA2['member_id'] ?? '';
                            $nameA2 = $teamA2['name_game'] ?? '';

                            $teamA2s = iconv_substr($nameA2, 0, 10, 'UTF-8');

                            if ($memberA2 != '' && $nameA2 != '') { ?>
                                <div class="row">
                                    <input id="member_idA2" name="member_idA2" style="width: 50px;" value="<?php echo $teamA2['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA2s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA21["score_kill"]) ? $teamA21["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA21["score_assist"]) ? $teamA21["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA21["score_death"]) ? $teamA21["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA21["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA21["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA21["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA21["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA3 = $teamA3['member_id'] ?? '';
                            $nameA3 = $teamA3['name_game'] ?? '';

                            $teamA3s = iconv_substr($nameA3, 0, 10, 'UTF-8');

                            if ($memberA3 != '' && $nameA3 != '') { ?>
                                <div class="row">
                                    <input id="member_idA3" name="member_idA3" style="width: 50px;" value="<?php echo $teamA3['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA3s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA31["score_kill"]) ? $teamA31["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA31["score_assist"]) ? $teamA31["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA31["score_death"]) ? $teamA31["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA31["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA31["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA31["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA31["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA4 = $teamA4['member_id'] ?? '';
                            $nameA4 = $teamA4['name_game'] ?? '';

                            $teamA4s = iconv_substr($nameA4, 0, 10, 'UTF-8');

                            if ($memberA4 != '' && $nameA4 != '') { ?>
                                <div class="row">
                                    <input id="member_idA4" name="member_idA4" style="width: 50px;" value="<?php echo $teamA4['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA4s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA41["score_kill"]) ? $teamA41["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA41["score_assist"]) ? $teamA41["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA41["score_death"]) ? $teamA41["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA41["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA41["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA41["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA41["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA5 = $teamA5['member_id'] ?? '';
                            $nameA5 = $teamA5['name_game'] ?? '';

                            $teamA5s = iconv_substr($nameA5, 0, 10, 'UTF-8');

                            if ($memberA5 != '' && $nameA5 != '') { ?>
                                <div class="row">
                                    <input id="member_idA5" name="member_idA5" style="width: 50px;" value="<?php echo $teamA5['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA5s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA51["score_kill"]) ? $teamA51["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA51["score_assist"]) ? $teamA51["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA51["score_death"]) ? $teamA51["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA51["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA51["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA51["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA51["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA6 = $teamA6['member_id'] ?? '';
                            $nameA6 = $teamA6['name_game'] ?? '';

                            $teamA6s = iconv_substr($nameA6, 0, 10, 'UTF-8');

                            if ($memberA6 != '' && $nameA6 != '') { ?>
                                <div class="row">
                                    <input id="member_idA6" name="member_idA6" style="width: 50px;" value="<?php echo $teamA6['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA6s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA61["score_kill"]) ? $teamA61["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA61["score_assist"]) ? $teamA61["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamA61["score_death"]) ? $teamA61["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamA61["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamA61["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamA61["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamA61["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="col-md-6">
                            <div class="row ">
                                <center>
                                    <img src="../imglogo_team/<?php echo $row3['imglogo_team'] ?? ''; ?>" class="rounded-circle " alt="" width="100" height="100">
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <!-- <span>ทีม <?php echo $row['B_name'] ?? ''; ?></span> -->
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <div class="col-md-12">
                                        <span style="width: 200px;">จำนวนรอบที่ชนะ</span>
                                        <font color="orange"><?php echo $row3["teamb_score"]; ?></font>
                                    </div>
                                </center>
                            </div>

                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-1  KD">
                                    <span>Kill</span>
                                </div>
                                <div class="col-md-1 KD">
                                    <span>Assist</span>
                                </div>
                                <div class="col-md-1 KD">
                                    <span>Death</span>
                                </div>
                            </div>

                            <?php
                            $memberB1 = $teamB1['member_id'] ?? '';
                            $nameB1 = $teamB1['name_game'] ?? '';

                            $teamB1s = iconv_substr($nameB1, 0, 10, 'UTF-8');

                            if ($memberB1 != '' && $nameB1 != '') { ?>
                                <div class="row">
                                    <input id="member_idB1" name="member_idB1" style="width: 50px;" value="<?php echo $teamB1['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB1s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB11["score_kill"]) ? $teamB11["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB11["score_assist"]) ? $teamB11["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB11["score_death"]) ? $teamB11["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB11["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB11["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB11["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB11["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB2 = $teamB2['member_id'] ?? '';
                            $nameB2 = $teamB2['name_game'] ?? '';

                            $teamB2s = iconv_substr($nameB2, 0, 10, 'UTF-8');

                            if ($memberB2 != '' && $nameB2 != '') { ?>
                                <div class="row">
                                    <input id="member_idB2" name="member_idB2" style="width: 50px;" value="<?php echo $teamB2['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB2s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB21["score_kill"]) ? $teamB21["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB21["score_assist"]) ? $teamB21["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB21["score_death"]) ? $teamB21["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB21["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB21["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB21["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB21["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB3 = $teamB3['member_id'] ?? '';
                            $nameB3 = $teamB3['name_game'] ?? '';

                            $teamB3s = iconv_substr($nameB3, 0, 10, 'UTF-8');

                            if ($memberB3 != '' && $nameB3 != '') { ?>
                                <div class="row">
                                    <input id="member_idB3" name="member_idB3" style="width: 50px;" value="<?php echo $teamB3['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB3s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB31["score_kill"]) ? $teamB31["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB31["score_assist"]) ? $teamB31["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB31["score_death"]) ? $teamB31["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB31["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB31["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB31["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB31["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB4 = $teamB4['member_id'] ?? '';
                            $nameB4 = $teamB4['name_game'] ?? '';

                            $teamB4s = iconv_substr($nameB4, 0, 10, 'UTF-8');

                            if ($memberB4 != '' && $nameB4 != '') { ?>
                                <div class="row">
                                    <input id="member_idB4" name="member_idB4" style="width: 50px;" value="<?php echo $teamB4['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB4s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB41["score_kill"]) ? $teamB41["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB41["score_assist"]) ? $teamB41["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB41["score_death"]) ? $teamB41["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB41["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB41["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB41["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB41["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB5 = $teamB5['member_id'] ?? '';
                            $nameB5 = $teamB5['name_game'] ?? '';

                            $teamB5s = iconv_substr($nameB5, 0, 10, 'UTF-8');

                            if ($memberB5 != '' && $nameB5 != '') { ?>
                                <div class="row">
                                    <input id="member_idB6" name="member_idB5" style="width: 50px;" value="<?php echo $teamB5['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB5s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB51["score_kill"]) ? $teamB51["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB51["score_assist"]) ? $teamB51["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB51["score_death"]) ? $teamB51["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB51["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB51["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB51["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB51["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB6 = $teamB6['member_id'] ?? '';
                            $nameB6 = $teamB6['name_game'] ?? '';

                            $teamB6s = iconv_substr($nameB6, 0, 10, 'UTF-8');

                            if ($memberB6 != '' && $nameB6 != '') { ?>
                                <div class="row">
                                    <input id="member_idB6" name="member_idB6" style="width: 50px;" value="<?php echo $teamB6['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB6s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB61["score_kill"]) ? $teamB61["score_kill"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB61["score_assist"]) ? $teamB61["score_assist"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php echo !empty($teamB61["score_death"]) ? $teamB61["score_death"] : 0; ?>
                                    </div>
                                    <div class="col-md-1">
                                        <?php
                                        if (empty($teamB61["is_mvp"])) {
                                        ?>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else if ($teamB61["is_mvp"] == '1') {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    MVP
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <?php
                                        if (empty($teamB61["main_player"])) {
                                        ?>

                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else if ($teamB61["main_player"] == '1') {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6">
                            <?php
                            if (empty($teamA11["team_winner"])) {
                            ?>


                            <?php
                            } else if ($teamA11["team_winner"] == '1') {
                            ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-4">
                                        <input type="radio" checked>
                                        <label>ทีมผู้ชนะ</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio">
                                        <label>ทีมผู้แพ้</label>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-4">
                                        <input type="radio">
                                        <label>ทีมผู้ชนะ</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" checked>
                                        <label>ทีมผู้แพ้</label>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                       

                        <div class="col-lg-6 col-md-6">
                        <?php
                            if (empty($teamB11["team_winner"])) {
                            ?>

                            <?php
                            } else if ($teamB11["team_winner"] == '1') {
                            ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-4">
                                        <input type="radio" checked>
                                        <label>ทีมผู้ชนะ</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio">
                                        <label>ทีมผู้แพ้</label>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-4">
                                        <input type="radio">
                                        <label>ทีมผู้ชนะ</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" checked>
                                        <label>ทีมผู้แพ้</label>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <center class="mt-2">

            </form>
            <button class="btn btn-danger" type="button" onclick="history.back()" style="width: 100px; height: 40px;">ย้อนกลับ</button>
            </center>
        </div>
    </div>
    </div>
</section>

<style>
    .col-md-1 {
        margin-right: 6%;
    }

    .col-lg-1 {
        margin-right: 15%;
    }
</style>