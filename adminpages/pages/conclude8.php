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

if ($row2['imglogo_team'] == '') {
    $row2['imglogo_team'] = 'no-image.jpg';
}

$sql3 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamB_id = b.team_id
WHERE tour_id = '$tour_id'";
$query3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($query3);

if ($row3['imglogo_team'] == '') {
    $row3['imglogo_team'] = 'no-image.jpg';
}

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

$sql10 = "SELECT * FROM `tournament` ORDER BY tour_id DESC";
$query10 = mysqli_query($conn, $sql10);
$row10 = mysqli_fetch_assoc($query10);

$teamAid = $row["teamA_id"];
$teamBid = $row["teamB_id"];

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
            <form action="adminservices/conclude8service.php" method="post">
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
                                    <?php $sqlscr_teamA = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid'";
                                    $qr_scr_teamA = mysqli_query($conn, $sqlscr_teamA);
                                    $res_scr_teamA = mysqli_fetch_assoc($qr_scr_teamA); ?>

                                    <div class="col-md-12">
                                        <span style="width: 200px;">จำนวนรอบที่ชนะ</span>
                                        <input style="width: 50px;" id="winning_amountA" name="winning_amountA" type="number" value="<?php echo  $res_scr_teamA['winning_amount'] ?? 0 ?>"></input>
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

                            $sqlA1 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA1'";
                            $qr_sqlA1 = mysqli_query($conn, $sqlA1);
                            $res_memberA1 = mysqli_fetch_array($qr_sqlA1);

                            if ($memberA1 != '' && $nameA1 != '') { ?>
                                <div class="row">
                                    <input id="member_idA1" name="member_idA1" style="width: 50px;" value="<?php echo $teamA1['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA1s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA1" name="score_killA1" style="width: 50px;" type="number" value="<?php echo $res_memberA1['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA1" name="score_assistA1" style="width: 50px;" type="number" value="<?php echo $res_memberA1['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA1" name="score_deathA1" style="width: 50px;" type="number" value="<?php echo $res_memberA1['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA1" name="is_mvpA1" value="1" <?php if ($res_memberA1['is_mvp'] ?? '' ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA1" name="main_playerA1" value="1" <?php if ($res_memberA1['main_player'] ?? '' ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA2 = $teamA2['member_id'] ?? '';
                            $nameA2 = $teamA2['name_game'] ?? '';

                            $teamA2s = iconv_substr($nameA2, 0, 10, 'UTF-8');

                            $sqlA2 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA2'";
                            $qr_sqlA2 = mysqli_query($conn, $sqlA2);
                            $res_memberA2 = mysqli_fetch_array($qr_sqlA2);

                            if ($memberA2 != '' && $nameA2 != '') { ?>
                                <div class="row">
                                    <input id="member_idA2" name="member_idA2" style="width: 50px;" value="<?php echo $teamA2['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA2s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA2" name="score_killA2" style="width: 50px;" type="number" value="<?php echo $res_memberA2['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA2" name="score_assistA2" style="width: 50px;" type="number" value="<?php echo $res_memberA2['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA2" name="score_deathA2" style="width: 50px;" type="number" value="<?php echo $res_memberA2['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA2" name="is_mvpA2" value="1" <?php if ($res_memberA2['is_mvp'] ?? '' ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA2" name="main_playerA2" value="1" <?php if ($res_memberA2['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA3 = $teamA3['member_id'] ?? '';
                            $nameA3 = $teamA3['name_game'] ?? '';

                            $teamA3s = iconv_substr($nameA3, 0, 10, 'UTF-8');

                            $sqlA3 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA3'";
                            $qr_sqlA3 = mysqli_query($conn, $sqlA3);
                            $res_memberA3 = mysqli_fetch_array($qr_sqlA3);

                            if ($memberA3 != '' && $nameA3 != '') { ?>
                                <div class="row">
                                    <input id="member_idA3" name="member_idA3" style="width: 50px;" value="<?php echo $teamA3['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA3s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA3" name="score_killA3" style="width: 50px;" type="number" value="<?php echo $res_memberA3['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA3" name="score_assistA3" style="width: 50px;" type="number" value="<?php echo $res_memberA3['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA3" name="score_deathA3" style="width: 50px;" type="number" value="<?php echo $res_memberA3['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA3" name="is_mvpA3" value="1" <?php if ($res_memberA3['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA3" name="main_playerA3" value="1" <?php if ($res_memberA3['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA4 = $teamA4['member_id'] ?? '';
                            $nameA4 = $teamA4['name_game'] ?? '';

                            $teamA4s = iconv_substr($nameA4, 0, 10, 'UTF-8');

                            $sqlA4 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA4'";
                            $qr_sqlA4 = mysqli_query($conn, $sqlA4);
                            $res_memberA4 = mysqli_fetch_array($qr_sqlA4);

                            if ($memberA4 != '' && $nameA4 != '') { ?>
                                <div class="row">
                                    <input id="member_idA4" name="member_idA4" style="width: 50px;" value="<?php echo $teamA4['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA4s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA4" name="score_killA4" style="width: 50px;" type="number" value="<?php echo $res_memberA4['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA4" name="score_assistA4" style="width: 50px;" type="number" value="<?php echo $res_memberA4['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA4" name="score_deathA4" style="width: 50px;" type="number" value="<?php echo $res_memberA4['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA4" name="is_mvpA4" value="1" <?php if ($res_memberA4['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA4" name="main_playerA4" value="1" <?php if ($res_memberA4['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA5 = $teamA5['member_id'] ?? '';
                            $nameA5 = $teamA5['name_game'] ?? '';

                            $teamA5s = iconv_substr($nameA5, 0, 10, 'UTF-8');

                            $sqlA5 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA5'";
                            $qr_sqlA5 = mysqli_query($conn, $sqlA5);
                            $res_memberA5 = mysqli_fetch_array($qr_sqlA5);

                            if ($memberA5 != '' && $nameA5 != '') { ?>
                                <div class="row">
                                    <input id="member_idA5" name="member_idA5" style="width: 50px;" value="<?php echo $teamA5['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA5s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA5" name="score_killA5" style="width: 50px;" type="number" value="<?php echo $res_memberA5['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA5" name="score_assistA5" style="width: 50px;" type="number" value="<?php echo $res_memberA5['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA5" name="score_deathA5" style="width: 50px;" type="number" value="<?php echo $res_memberA5['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA5" name="is_mvpA5" value="1" <?php if ($res_memberA5['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA5" name="main_playerA5" value="1" <?php if ($res_memberA5['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberA6 = $teamA6['member_id'] ?? '';
                            $nameA6 = $teamA6['name_game'] ?? '';

                            $teamA6s = iconv_substr($nameA6, 0, 10, 'UTF-8');

                            $sqlA6 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid' and member_id = '$memberA6'";
                            $qr_sqlA6 = mysqli_query($conn, $sqlA6);
                            $res_memberA6 = mysqli_fetch_array($qr_sqlA6);

                            if ($memberA6 != '' && $nameA6 != '') { ?>
                                <div class="row">
                                    <input id="member_idA6" name="member_idA6" style="width: 50px;" value="<?php echo $teamA6['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamA6s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killA6" name="score_killA6" style="width: 50px;" type="number" value="<?php echo $res_memberA6['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistA6" name="score_assistA6" style="width: 50px;" type="number" value="<?php echo $res_memberA6['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathA6" name="score_deathA6" style="width: 50px;" type="number" value="<?php echo $res_memberA6['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpA6" name="is_mvpA6" value="1" <?php if ($res_memberA6['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerA6" name="main_playerA6" value="1" <?php if ($res_memberA6['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
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
                                    <?php $sqlscr_teamB = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid'";
                                    $qr_scr_teamB = mysqli_query($conn, $sqlscr_teamB);
                                    $res_scr_teamB = mysqli_fetch_assoc($qr_scr_teamB); ?>

                                    <div class="col-md-12">
                                        <span style="width: 200px;">จำนวนรอบที่ชนะ</span>
                                        <input style="width: 50px;" id="winning_amountB" name="winning_amountB" type="number" value="<?php echo  $res_scr_teamB['winning_amount'] ?? 0 ?>"></input>
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

                            $sqlB1 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB1'";
                            $qr_sqlB1 = mysqli_query($conn, $sqlB1);
                            $res_memberB1 = mysqli_fetch_array($qr_sqlB1);

                            if ($memberB1 != '' && $nameB1 != '') { ?>
                                <div class="row">
                                    <input id="member_idB1" name="member_idB1" style="width: 50px;" value="<?php echo $teamB1['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB1s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB1" name="score_killB1" style="width: 50px;" type="number" value="<?php echo $res_memberB1['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB1" name="score_assistB1" style="width: 50px;" type="number" value="<?php echo $res_memberB1['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB1" name="score_deathB1" style="width: 50px;" type="number" value="<?php echo $res_memberB1['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB1" name="is_mvpB1" value="1" <?php if ($res_memberB1['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB1" name="main_playerB1" value="1" <?php if ($res_memberB1['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB2 = $teamB2['member_id'] ?? '';
                            $nameB2 = $teamB2['name_game'] ?? '';

                            $teamB2s = iconv_substr($nameB2, 0, 10, 'UTF-8');

                            $sqlB2 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB2'";
                            $qr_sqlB2 = mysqli_query($conn, $sqlB2);
                            $res_memberB2 = mysqli_fetch_array($qr_sqlB2);

                            if ($memberB2 != '' && $nameB2 != '') { ?>
                                <div class="row">
                                    <input id="member_idB2" name="member_idB2" style="width: 50px;" value="<?php echo $teamB2['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB2s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB2" name="score_killB2" style="width: 50px;" type="number" value="<?php echo $res_memberB2['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB2" name="score_assistB2" style="width: 50px;" type="number" value="<?php echo $res_memberB2['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB2" name="score_deathB2" style="width: 50px;" type="number" value="<?php echo $res_memberB2['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB2" name="is_mvpB2" value="1" <?php if ($res_memberB2['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB2" name="main_playerB2" value="1" <?php if ($res_memberB2['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB3 = $teamB3['member_id'] ?? '';
                            $nameB3 = $teamB3['name_game'] ?? '';

                            $teamB3s = iconv_substr($nameB3, 0, 10, 'UTF-8');

                            $sqlB3 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB3'";
                            $qr_sqlB3 = mysqli_query($conn, $sqlB3);
                            $res_memberB3 = mysqli_fetch_array($qr_sqlB3);

                            if ($memberB3 != '' && $nameB3 != '') { ?>
                                <div class="row">
                                    <input id="member_idB3" name="member_idB3" style="width: 50px;" value="<?php echo $teamB3['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB3s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB3" name="score_killB3" style="width: 50px;" type="number" value="<?php echo $res_memberB3['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB3" name="score_assistB3" style="width: 50px;" type="number" value="<?php echo $res_memberB3['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB3" name="score_deathB3" style="width: 50px;" type="number" value="<?php echo $res_memberB3['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB3" name="is_mvpB3" value="1" <?php if ($res_memberB3['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB3" name="main_playerB3" value="1" <?php if ($res_memberB3['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB4 = $teamB4['member_id'] ?? '';
                            $nameB4 = $teamB4['name_game'] ?? '';

                            $teamB4s = iconv_substr($nameB4, 0, 10, 'UTF-8');

                            $sqlB4 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB4'";
                            $qr_sqlB4 = mysqli_query($conn, $sqlB4);
                            $res_memberB4 = mysqli_fetch_array($qr_sqlB4);

                            if ($memberB4 != '' && $nameB4 != '') { ?>
                                <div class="row">
                                    <input id="member_idB4" name="member_idB4" style="width: 50px;" value="<?php echo $teamB4['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB4s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB4" name="score_killB4" style="width: 50px;" type="number" value="<?php echo $res_memberB4['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB4" name="score_assistB4" style="width: 50px;" type="number" value="<?php echo $res_memberB4['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB4" name="score_deathB4" style="width: 50px;" type="number" value="<?php echo $res_memberB4['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB4" name="is_mvpB4" value="1" <?php if ($res_memberB4['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB4" name="main_playerB4" value="1" <?php if ($res_memberB4['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB5 = $teamB5['member_id'] ?? '';
                            $nameB5 = $teamB5['name_game'] ?? '';

                            $teamB5s = iconv_substr($nameB5, 0, 10, 'UTF-8');

                            $sqlB5 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB5'";
                            $qr_sqlB5 = mysqli_query($conn, $sqlB5);
                            $res_memberB5 = mysqli_fetch_array($qr_sqlB5);

                            if ($memberB5 != '' && $nameB5 != '') { ?>
                                <div class="row">
                                    <input id="member_idB6" name="member_idB5" style="width: 50px;" value="<?php echo $teamB5['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB5s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB5" name="score_killB5" style="width: 50px;" type="number" value="<?php echo $res_memberB5['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB5" name="score_assistB5" style="width: 50px;" type="number" value="<?php echo $res_memberB5['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB5" name="score_deathB5" style="width: 50px;" type="number" value="<?php echo $res_memberB5['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB5" name="is_mvpB5" value="1" <?php if ($res_memberB5['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB5" name="main_playerB5" value="1" <?php if ($res_memberB5['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $memberB6 = $teamB6['member_id'] ?? '';
                            $nameB6 = $teamB6['name_game'] ?? '';

                            $teamB6s = iconv_substr($nameB6, 0, 10, 'UTF-8');

                            $sqlB6 = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid' and member_id = '$memberB6'";
                            $qr_sqlB6 = mysqli_query($conn, $sqlB6);
                            $res_memberB6 = mysqli_fetch_array($qr_sqlB6);

                            if ($memberB6 != '' && $nameB6 != '') { ?>
                                <div class="row">
                                    <input id="member_idB6" name="member_idB6" style="width: 50px;" value="<?php echo $teamB6['member_id'] ?? '' ?>" type="hidden" />
                                    <div class="col-md-1">
                                        <span><?php echo $teamB6s; ?></span>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_killB6" name="score_killB6" style="width: 50px;" type="number" value="<?php echo $res_memberB6['score_kill'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_assistB6" name="score_assistB6" style="width: 50px;" type="number" value="<?php echo $res_memberB6['score_assist'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <input id="score_deathB6" name="score_deathB6" style="width: 50px;" type="number" value="<?php echo $res_memberB6['score_death'] ?? 0 ?>"></input>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_mvpB6" name="is_mvpB6" value="1" <?php if ($res_memberB6['is_mvp'] ?? '' == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                MVP
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 box9">
                                        <div class="form-check form-switch mb-2">
                                            <input class="form-check-input" type="checkbox" id="main_playerB6" name="main_playerB6" value="1" <?php if ($res_memberB6['main_player'] ?? '' == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="row mt-5">
                        <?php $sqlwin_teamA = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamAid'";
                        $qr_win_teamA = mysqli_query($conn, $sqlwin_teamA);
                        $res_win_teamA = mysqli_fetch_assoc($qr_win_teamA);
                        $res_num_teamA = mysqli_num_rows($qr_win_teamA); ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="col-3">
                                <input type="radio" id="team_winnerA1" name="team_winnerA" value="1" <?php if ($res_num_teamA > 0) {
                                                                                                            if ($res_win_teamA['team_winner']  == 1) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                                <label>ทีมผู้ชนะ</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="team_winnerA2" name="team_winnerA" value="0" <?php if ($res_num_teamA > 0) {
                                                                                                            if ($res_win_teamA['team_winner'] == 0) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                                <label>ทีมผู้แพ้</label>
                            </div>
                        </div>

                        <?php $sqlwin_teamB = "SELECT * FROM `match_result` WHERE tour_id = '$tour_id' and team_id = '$teamBid'";
                        $qr_win_teamB = mysqli_query($conn, $sqlwin_teamB);
                        $res_win_teamB = mysqli_fetch_assoc($qr_win_teamB);
                        $res_num_teamB = mysqli_num_rows($qr_win_teamB); ?>


                        <div class="col-lg-6 col-md-6">
                            <div class="col-3">
                                <input type="radio" id="team_winnerB1" name="team_winnerB" value="1" <?php if ($res_num_teamB > 0) {
                                                                                                            if ($res_win_teamB['team_winner'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                                <label>ทีมผู้ชนะ</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" id="team_winnerB2" name="team_winnerB" value="0" <?php if ($res_num_teamB > 0) {
                                                                                                            if ($res_win_teamB['team_winner'] == 0) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                                <label>ทีมผู้แพ้</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <center class="mt-2">
                            <button class="btn btn-success" type="submit" style="width: 80px; height: 40px;">ยืนยัน</button>
            </form>
            <button class="btn btn-danger" type="button" onclick="history.back()" style="width: 80px; height: 40px;">ยกเลิก</button>
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