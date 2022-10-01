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

// echo $row['tour_id'];

$sql2 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamA_id = b.team_id
WHERE tour_id = '$tour_id'";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamB_id = b.team_id
WHERE tour_id = '$tour_id'";
$query3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($query3);

// $sql4 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamB_id = b.team_id
// WHERE tour_id = '$tour_id'";
// $query3 = mysqli_query($conn, $sql4);
// $row4 = mysqli_fetch_assoc($query4);

$sqltestA = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamA_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE tour_id = '$tour_id'";
$querytestA = mysqli_query($conn, $sqltestA);
$rowtestA = mysqli_num_rows($querytestA);

echo $rowtestA;

$sqltestB = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name, matchdate.* ,memberA.*
FROM tournament as a 
INNER JOIN member as memberA ON memberA.team_id = a.teamB_id
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
WHERE tour_id = '$tour_id'";
$querytestB = mysqli_query($conn, $sqltestB);
$rowtestB = mysqli_num_rows($querytestB);

echo $rowtestB;


?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ผลการเเข่งขัน</h1>

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <br>
            <form action="adminservices/concludeservice.php" method="post">
                <input type="hidden" value="<?php echo $tour_id; ?>" name="tour_id"></input>
                <input type="hidden" value="<?php echo $row["teamA_id"]; ?>" name="teamA_id"></input>
                <input type="hidden" value="<?php echo $row["teamB_id"]; ?>" name="teamB_id"></input>
                <input type="hidden" value="<?php echo $rowtestA["member_id"]; ?>" name="member_id"></input>

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
                                        <input style="width: 50px;" id="winning_amountA" name="winning_amountA" type="number"></input>
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
                            foreach ($querytestA as $value) {
                            ?>

                                <input id="member_id" name="member_id" style="width: 50px;" value="<?php echo $value['member_id'] ?>" type="hidden" />
                                <div class="col-md-1">
                                    <span><?php echo $value['name'] ?></span>
                                </div>
                            <?php } ?>

                            <div class="row">
                                <div class="col-md-1">
                                    <input id="score_killA1" name="score_killA1" style="width: 50px;" type="number"></input>
                                    <input id="score_killA2" name="score_killA2" style="width: 50px;" type="number"></input>
                                    <!-- <input id="score_killA3" name="score_killA3" style="width: 50px;" type="number"></input>
                                    <input id="score_killA4" name="score_killA4" style="width: 50px;" type="number"></input>
                                    <input id="score_killA5" name="score_killA5" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <input id="score_assistA1" name="score_assistA1" style="width: 50px;" type="number"></input>
                                    <input id="score_assistA2" name="score_assistA2" style="width: 50px;" type="number"></input>
                                    <!-- <input id="score_assistA3" name="score_assistA3" style="width: 50px;" type="number"></input>
                                    <input id="score_assistA4" name="score_assistA4" style="width: 50px;" type="number"></input>
                                    <input id="score_assistA5" name="score_assistA5" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <input id="score_deathA1" name="score_deathA1" style="width: 50px;" type="number"></input>
                                    <input id="score_deathA2" name="score_deathA2" style="width: 50px;" type="number"></input>
                                    <!-- <input id="score_deathA3" name="score_deathA3" style="width: 50px;" type="number"></input>
                                    <input id="score_deathA4" name="score_deathA4" style="width: 50px;" type="number"></input>
                                    <input id="score_deathA5" name="score_deathA5" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <!-- <input type="radio" id="is_mvpA" name="is_mvpA" value="1">
                                    <label>MVP</label><br> -->
                                    <!-- <input type="radio" id="is_mvpA2" name="is_mvpA2" value="1">
                                    <label>MVP</label><br> -->
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-check form-switch mb-2">
                                        <!-- <input class="form-check-input" type="checkbox" id="main_playerA" name="main_playerA" value="1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label> -->
                                        <!-- <input class="form-check-input" type="checkbox" id="main_playerA2" name="main_playerA2" value="1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label> -->
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="row ">
                                <center>
                                    <img src="../imglogo_team/<?php echo $row3['imglogo_team']; ?>" class="rounded-circle " alt="" width="100" height="100">
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <!-- <span>ทีม <?php echo $row['B_name']; ?></span> -->
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <div class="col-md-12">
                                        <span style="width: 200px;">จำนวนรอบที่ชนะ</span>
                                        <input style="width: 50px;" id="winning_amountB" name="winning_amountB" type="number"></input>
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
                            while ($resB = mysqli_fetch_array($querytestB)) {
                            ?>
                                <input id="member_id" name="member_id" style="width: 50px;" value="<?php echo $resB['member_id'] ?>" type="hidden" />

                                <div class="col-md-1">
                                    <span><?php echo $resB['name'] ?></span>
                                </div>
                            <?php } ?>


                            <div class="row">
                                <div class="col-md-1">
                                    <!-- <input id="score_killB" name="score_killB" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <!-- <input id="score_assistB" name="score_assistB" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <!-- <input id="score_deathB" name="score_deathB" style="width: 50px;" type="number"></input> -->
                                </div>
                                <div class="col-md-1">
                                    <!-- <input type="radio" id="is_mvpB" name="is_mvpB" value="1">
                                    <label>MVP</label><br> -->
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <!-- <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="main_playerB" name="main_playerB" value="1">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">ตัวจริง</label>
                                    </div> -->
                                </div>
                            </div>




                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-3">
                            <input type="radio" id="team_winnerA" name="team_winner" value="1">
                            <label>ทีมผู้ชนะ</label>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-3">
                            <!-- <input type="radio" id="team_winnerB" name="team_winner" value="1">
                            <label>ทีมผู้ชนะ</label> -->
                        </div>
                    </div>
                </div>

                <div class="col-12">

                    <input name="<?php $rowtestA ?>" value="<?php $rowtestA ?>" type="hidden" />
                    <center class="mt-2">
                        <button class="btn btn-success" type="submit" style="width: 80px; height: 40px;">ยืนยัน</button>
                        <button class="btn btn-danger" style="width: 80px; height: 40px;">ยกเลิก</button>
                    </center>
                </div>
            </form>
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

    /* .KD {
        margin-left: 0px;
    } */
</style>