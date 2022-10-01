<?php

$team_id = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

$sql = "SELECT * FROM team WHERE team_id = '" . $_SESSION["team_id"] . "' OR team_id = '$team_id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION["team_id"] = $row['team_id'] ?? '';
$imglogo_team = $row['imglogo_team'] ?? '';
$team_name = $row['team_name'] ?? '';
$facebook = $row['contt_facebook'] ?? '';
$tiktok = $row['contt_tiktok'] ?? '';

$teamidd = $_SESSION["team_id"] ?? '';

if ($imglogo_team == '') {
    $imglogo_team = 'no-image.jpg';
}

?>
<div class="card-body">
    <div class="text-white float-end">
        <span>
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </span>
        <a type="button">ข้อมูลทีม</a>
    </div>
    <div class="profile-pic pic-top">
        <img src="imglogo_team/<?php echo $imglogo_team; ?>" id="output" class="rounded-circle backimg" alt="" />
    </div>
    <div class="mt-2" id="teamd-web">
        <div class="row">
            <div class="col-lg-6 col-md-3 col-sm-3 r-taem">ชื่อทีม : </div>
            <div class="col-lg-6 col-md-9 col-sm-3 l-taem"><?php echo $team_name; ?></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-3 col-sm-3 r-taem">Facebook : </div>
            <div class="col-lg-6 col-md-9 col-sm-3 l-taem"><?php echo $facebook; ?></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-3 col-sm-3 r-taem">Tiktok : </div>
            <div class="col-lg-6 col-md-9 col-sm-3 l-taem"><?php echo $tiktok; ?></div>
        </div>
        <div class="row justify-content-md-center mb-3">
            <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == 'leader')) { ?>
                <div class="col-lg-3 col-md-6">
                    <button class="btn btn-warning" onclick="window.location.href='?pages=createteam&detail=editteamdetail&team_id=<?php echo $teamidd; ?>'">เเก้ไขข้อมูลทีม</button><br>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="btn btn-success" type="button" data-bs-target="#modallink" data-bs-toggle="modal" data-dismiss="modal">เชิญเพื่อนเข้าร่วมทีม</button>
                </div>
            <?php } ?>
        </div>
        <?php include 'components/user/modallink.php' ?>
    </div>
</div>
<style>
    .text-white {
        font-family: kanit;
    }

    .btn-success,
    .btn-warning {
        border-radius: 50px;
        color: #fff;
    }

    .btn-success:hover {
        background-color: green;
    }

    .btn-warning:hover {
        background-color: yellow;
    }

    .l-taem {
        text-align: left;
        margin-bottom: 5px;
        font-size: 20px;
    }

    .r-taem {
        text-align: right;
        margin-bottom: 5px;
        font-size: 20px;
    }

    .dropdown-toggle {
        font-family: kanit;
    }
    .backimg {
            width: 125px;
            height: 125px;
            background-size: cover;
            background-repeat: no-repeat;
            background: transparent;
        }


    @media screen and (max-width: 992px) {

        .col-md-3 {
            width: auto;
        }


        .l-taem {
            text-align: left;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .r-taem {
            text-align: right;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .col-md-3 {
            width: 45%;

        }

        .col-md-9 {
            width: 55%;
        }

        .backimg {
            width: 125px;
            height: 125px;
            background-size: cover;
            background-repeat: no-repeat;
            background: transparent;
        }

        .dropdown-toggle {
            font-family: kanit;
        }
    }

    @media screen and (max-width: 767px) {


        .col-md-3 {
            width: auto;
        }


        .l-taem {
            text-align: left;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .r-taem {
            text-align: right;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .col-md-3 {
            width: 45%;

        }

        .col-md-9 {
            width: 55%;
        }

        .backimg {
            width: 125px;
            height: 125px;
            background-size: cover;
            background-repeat: no-repeat;
            background: transparent;
        }

        .dropdown-toggle {
            font-family: kanit;
        }
    }
</style>