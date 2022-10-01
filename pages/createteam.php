<div class=" container">
    <h3 class="text-white ">

        <?php

        if ($_GET['detail'] == "addleader") {
            echo "เพิ่มข้อมูลหัวหน้าทีม";
        } else if ($_GET['detail'] == "teamdetail") {
            echo "ข้อมูลทีม";
        } else if ($_GET['detail'] == "memberdetail") {
            echo "ข้อมูลส่วนตัว";
        } else if ($_GET['detail'] == "leader") {
            echo "ข้อมูลส่วนตัวหัวหน้าทีม";
        } else if ($_GET['detail'] == "editmemberdetail") {
            echo "แก้ไขข้อมูลส่วนตัวสมาชิก";
        } else {
            echo "ข้อมูลทีม";
        }; ?>
    </h3>

    <?php
    $team_id = $_SESSION['team_id'] ?? '';

    $teamid = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

    $detailteam  = "SELECT * FROM team
    WHERE team_id = '$team_id' OR team_id = '$teamid'";

    $resultteam = mysqli_query($conn, $detailteam);
    $rowteam = $resultteam->fetch_assoc();

    $team_name = $rowteam['team_name'] ?? '';
    $imglogo_team = $rowteam['imglogo_team'] ?? '';
    $team_id = $rowteam['team_id'] ?? '';

    if ($imglogo_team == '') {
        $imglogo_team = 'no-image.jpg';
    }

    $count  = "SELECT COUNT(`member_id`) as count FROM `member`
    WHERE team_id = '$team_id' OR team_id = '$teamid'";
    $resultcount = mysqli_query($conn, $count);
    $rowcount = $resultcount->fetch_assoc();

    ?>
    <div class="row">
        <div class="col-lg-3 col-md-4" id="createteam-web">
            <?php
            include 'components/user/memberlist.php';
            ?>
        </div>

        <div class="col-lg-3 col-md-8 col-sm-12" id="createteam-mobile">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownteammember" data-bs-toggle="dropdown" aria-expanded="false">
                    ข้อมูลทีม
                </button>
                <ul class="dropdown-menu">
                    <?php
                    include 'components/user/memberlist.php';
                    ?>
                </ul>
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="inputdata bg-inputdata">
                <?php
                $detail = isset($_GET['detail']) ? $_GET['detail'] : 'teamdetail';
                if ($detail == 'editteamdetail') {
                    include 'pages/detail/editteamdetail.php';
                }
                if ($detail == 'memberdetail') {
                    include 'pages/detail/memberdetail.php';
                }
                if ($detail == 'editmemberdetail') {
                    include 'pages/detail/editmemberdetail.php';
                }
                if ($detail == 'teamdetail') {
                    include 'pages/detail/teamdetail.php';
                }
                if ($detail == 'leader') {
                    include 'pages/detail/leaderdetail.php';
                }
                if ($detail == 'addleader') {
                    include 'pages/detail/addleaderdetail.php';
                }
                ?>
            </div>
        </div>
        <?php include 'components/user/modallink.php' ?>
        <?php include 'components/user/linkmodal.php' ?>
    </div>
</div>
<style>
.text-white{
    font-family: kanit;
}
.dropdown-toggle{
    font-family: kanit;
}
</style>