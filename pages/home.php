<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-5 col-sx-12 sitebar-left bg-web" id="home-web">
            <div class="site-home">
                <a type="button" onclick="window.location.href='?pages=home'" <?php if ($_GET['pages'] == "home") {
                                                                                    echo "style='color: #ff7211'";
                                                                                } ?>>
                    <i class="fa fa-home " aria-hidden="home"></i> หน้าหลัก
                </a>
            </div>
            <div class="site-true">
                <a type="button" onclick="window.location.href='?pages=rule'" <?php if ($_GET['pages'] == "rule") {
                                                                                    echo "style='color: #ff7211'";
                                                                                }; ?>>
                    <i class="fa fa-balance-scale" aria-hidden="true"></i> กฏกติกา</a>
            </div>
            <div class="site-rovteam">
                <a type="button" onclick="window.location.href='?pages=rovteam'" <?php if ($_GET['pages'] == "rovteam") {
                                                                                        echo "style='color: #ff7211'";
                                                                                    }; ?>>
                    <i class="fa fa-users" aria-hidden="true"></i> ทีมที่เข้าร่วมเเข่ง</a>
            </div>
            <div class="site-rovmatch" id="site-rovmatch">
                <a type="button" onclick="window.location.href='?pages=rovmatch'" <?php if ($_GET['pages'] == "rovmatch") {
                                                                                        echo "style='color: #ff7211'";
                                                                                    }; ?>>
                    <i class="fa fa-sitemap " aria-hidden="true"></i> สายการเเข่งขัน</a>
            </div>
            <div class="site-rovtables ">
                <a type="button" onclick="window.location.href='?pages=rovtables'" <?php if ($_GET['pages'] == "rovtables") {
                                                                                        echo "style='color: #ff7211'";
                                                                                    }; ?>>
                    <i class="fa fa-table" aria-hidden="true"></i> ตารางการเเข่งขัน</a>
            </div>
            <div class="site-hightlightmatch">
                <a type="button" onclick="window.location.href='?pages=hightlightmatch'" <?php if ($_GET['pages'] == "hightlightmatch") {
                                                                                                echo "style='color: #ff7211'";
                                                                                            }; ?>>
                    <i class="fa fa-video-camera" aria-hidden="true"></i> ไฮไลท์หลังเเข่ง</a>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sx-12 sitebar-left bg-mobile" id="home-mobile">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle site-home" type="button" data-bs-toggle="dropdown" aria-expanded="false" <?php

                                                                                                                                            if ($_GET['pages'] == "home") {
                                                                                                                                                $Db_active = 'หน้าหลัก';
                                                                                                                                                $icone_active = 'fa-home';
                                                                                                                                            } else if ($_GET['pages'] == "rule") {
                                                                                                                                                $Db_active = 'กฏกติกา';
                                                                                                                                                $icone_active = 'fa-balance-scale';
                                                                                                                                            } else if ($_GET['pages'] == "rovteam") {
                                                                                                                                                $Db_active = 'ทีมที่เข้าร่วมเเข่ง';
                                                                                                                                                $icone_active = 'fa-users';
                                                                                                                                            } else if ($_GET['pages'] == "rovtables") {
                                                                                                                                                $Db_active = 'ตารางการเเข่งขัน';
                                                                                                                                                $icone_active = 'fa-table';
                                                                                                                                            } else if ($_GET['pages'] == "hightlightmatch") {
                                                                                                                                                $Db_active = 'ไฮไลท์หลังเเข่ง';
                                                                                                                                                $icone_active = 'fa-video-camera';
                                                                                                                                            } else {
                                                                                                                                                $Db_active = 'หน้าหลัก';
                                                                                                                                                $icone_active = 'fa-home';
                                                                                                                                            }

                                                                                                                                            ?>>
                    <i class="fa <?php echo $icone_active; ?>" aria-hidden="home"></i> <?php echo $Db_active ?>
                </button>
                <ul class="dropdown-menu" style="width: 100%;" aria-labelledby="home-mobile">
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='?pages=home'" <?php if ($_GET['pages'] == "home") {
                                                                                                                        echo "style='color: #ff7211'";
                                                                                                                    }; ?>><i class="fa fa-home " aria-hidden="home"></i> หน้าหลัก</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='?pages=rule'" <?php if ($_GET['pages'] == "rule") {
                                                                                                                        echo "style='color: #ff7211'";
                                                                                                                    }; ?>><i class="fa fa-balance-scale" aria-hidden="true"></i> กฏกติกา</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='?pages=rovteam'" <?php if ($_GET['pages'] == "rovteam") {
                                                                                                                        echo "style='color: #ff7211'";
                                                                                                                    }; ?>><i class="fa fa-users" aria-hidden="true"></i> ทีมที่เข้าร่วมเเข่ง</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='?pages=rovtables'" <?php if ($_GET['pages'] == "rovtables") {
                                                                                                                            echo "style='color: #ff7211'";
                                                                                                                        }; ?>><i class="fa fa-table" aria-hidden="true"></i> ตารางการเเข่งขัน</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='?pages=hightlightmatch'" <?php if ($_GET['pages'] == "hightlightmatch") {
                                                                                                                                echo "style='color: #ff7211'";
                                                                                                                            }; ?>><i class="fa fa-video-camera" aria-hidden="true"></i> ไฮไลท์หลังเเข่ง</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sx-12 ">
            <?php
            $countteam = "SELECT COUNT(team_id) AS countteam FROM team WHERE status = 'ทำการอนุมัติสำเร็จแล้ว'";
            $countteam = mysqli_query($conn, $countteam);
            $countteam = mysqli_fetch_array($countteam);
            $team = $countteam['countteam'];
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sx-12 logo-home">
                    <img src="assets/icons/logo-home.png" width="100%" alt="">
                </div>
            </div>
            <div class="bg-tournament">
                <div class="row">
                    <div class="col-lg-4  border-web border-end border-2">
                        <div class="col-lg-4 col-md-12">
                            <span>
                                <img class="img-r" src="assets/icons/ปฏิทิน.png" alt="">
                                <span class="today">
                                    31 สิงหาคม 2565
                                    <br>
                                    15:00น.
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4  border-web border-end border-2">
                        <div class="col-lg-4 col-md-12 col-sx-12 line-tour">
                            <span>
                                <img class="img-r" src="assets/icons/ถ้วยรางวัล.png" alt="">
                                <span class="reward"> 30,000 บาท</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4  border-web">
                        <div class="col-lg-4 col-md-12 col-sx-12 user-tour">
                            <span>
                                <img class="img-r" src="assets\icons\ทีมที่เข้าร่วม.png" alt="">
                                <span class="team1"><?php echo $team; ?>ทีม</span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-lg-4 border-mobile border-bottom border-2 tournament">
                        <div class="col-md-4 ">
                            <img class="img-r" src="assets/icons/ปฏิทิน.png" alt="">
                        </div>
                        <div class="col-md-8 today">
                            31 สิงหาคม 2565
                            <br>
                            15:00น.
                        </div>
                    </div>
                    <div class="col-lg-4 border-mobile border-bottom border-2 tournament">
                        <div class="col-md-4 ">
                            <img class="img-r" src="assets/icons/ถ้วยรางวัล.png" alt="">
                        </div>
                        <div class="col-md-8 reward">
                            30,000 บาท
                        </div>
                    </div>
                    <div class="col-lg-4 border-mobile border-bottom border-2 tournament">
                        <div class="col-md-4 ">
                            <img class="img-r" src="assets\icons\ทีมที่เข้าร่วม.png" alt="">
                        </div>
                        <div class="col-md-8 team1">
                            <?php echo $team; ?> ทีม
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="resgister-tour">
                    <?php
                    $username = $_SESSION['username'] ?? '';
                    $acount = "SELECT * FROM acount WHERE username = '$username'";
                    $result = mysqli_query($conn, $acount);
                    $rowac = mysqli_fetch_assoc($result) ?? false;

                    $teamid = $rowac['team_id'] ?? '';
                    $memberid = $rowac['member_id'] ?? '';

                    ?>
                    <?php if (isset($_SESSION['username']) && $teamid != '') { ?>
                        <button onclick="window.location.href='?pages=createteam&detail=teamdetail'" type="button" class="btn-register">ทีมของฉัน</button>
                        <?php } elseif (isset($_SESSION['username']) && $team_id == '') {

                        if ($memberid == '') { ?>
                            <button onclick="buildLeader();" type="button" class="btn-register">สร้างทีม</button>
                        <?php
                        } else { ?>
                            <button onclick="window.location.href='?pages=createteam&detail=editteamdetail'" type="button" class="btn-register">สร้างทีม</button>
                        <?php
                        }
                        ?>
                    <?php } else { ?>
                        <!-- <button onclick="window.location.href='pages/register.php'" type="button" class="btn-register">สมัครเเข่ง</button> -->
                        <button onclick="fullteam();" type="button" class="btn-register">สร้างทีม</button>

                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 com-md-12 col-sx-12 social-contract">
                    <a target="_blank" href="https://discord.com/invite/BXgsU7Vwap"><img src="assets/icons/discord.png" class="socialgo" alt="discord"></a>
                    <a target="_blank" href="https://www.facebook.com/SortgamingTH/"><img src="assets/icons/facebook.png" class="socialgo" alt="Facebook"></a>
                    <a target="_blank" href="https://www.youtube.com/c/SortGamingTH"><img src="assets/icons/youtube.png" class="socialgo" alt="youtube"></a>
                    <a target="_blank" href="https://www.tiktok.com/@sortgamingth"><img src="assets/icons/tiktok.png" class="socialgo" alt="tiktok"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function buildLeader() {
        //   alert("กรุณาสร้างโปรไฟล์ก่อน !!");
        window.location.href = '?pages=createteam&detail=addleader';
    }

    function fullteam() {
          alert("ทีมสมัครเต็มแล้ว !!");
        window.location.href = '?pages=home';
    }
</script>
<style>
    #home-web {
        display: block;
    }

    #home-mobile {
        display: none;
    }

    .team1 {
        color: green;
    }

    .img-r {
        margin-right: 20px;
        margin-left: 17px;
        width: 70px;
        height: 70px;
    }

    .border-bottom {
        width: 90%;
        margin-left: 20px;
    }

    .today {
        width: 200px;
        font-size: 20px;
        margin-top: 5px;
    }

    .reward,
    .team1 {
        width: 200px;
        font-size: 20px;
        margin-top: 15px;
    }

    .img-r-reward {
        margin-left: -89px;
    }

    .reward-tournament {
        margin-top: 15px;
        margin-left: 22px;
    }

    .img-r-taem {
        margin-left: -138px;
    }

    .team1-tounament {
        margin-left: 25px;
        margin-top: 15px;
    }

    .site-home,
    .site-true,
    .site-rovteam,
    .site-rovmatch,
    .site-rovtables,
    .site-hightlightmatch {
        border-bottom: solid 1px #fff;
        padding: 3%;
        color: #f9fafb;
    }

    .site-home:hover,
    .site-true:hover,
    .site-rovteam:hover,
    .site-rovmatch:hover,
    .site-rovtables:hover,
    .site-hightlightmatch:hover {
        color: #ff7211;
    }

    @media screen and (max-width: 1400px) {
        .img-r {
            margin-right: 20px;
            margin-left: 17px;
            width: 65px;
            height: 65px;
        }

        .today,
        .reward,
        .team1 {
            width: 200px;
            font-size: 17px;
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 1200px) {
        .site-rovmatch {
            display: none;
        }
    }

    @media screen and (max-width: 767px) {
        #home-web {
            display: none;
        }

        #home-mobile {
            display: block;

        }

        .img-r {
            margin-right: 20px;
            margin-left: 17px;
            width: 70px;
            height: auto;
        }

        .today,
        .reward,
        .team1 {
            width: 200px;
            font-size: 17px;
            margin-top: 10px;
        }


        span.team1 {
            margin-top: 10px;
        }

        span.reward {
            margin-top: 10px;
        }

        span.reward-tour {
            margin-top: 15px;
            margin-left: 22px;
            font-size: 18px;
        }

        .reward-tounament {
            margin-left: 23px;
            font-size: 18px;
            margin-top: 10px;
        }

        .img-team {
            margin-left: -105px;
        }

        .team-tounament1 {
            margin-left: 26px;
            margin-top: 15px;
        }


        .dropdown-menu {
            width: 100%;
        }

        .dropdown-item {
            background-color: #f9fafb;
            color: #000000;
        }

        .dropdown-item:hover {
            background-color: #ff7211;
            color: #f9fafb;
        }

        .dropdown-toggle {
            border-radius: 20px;
            border: solid 3px #2d3560;
            background-color: #000000;

        }

    }

    @media screen and (max-width: 375px) {
        #home-web {
            display: none;
        }

        #home-mobile {
            display: block;

        }

        .img-r {
            margin-right: 20px;
            margin-left: 17px;
            width: 50px;
            height: auto;
        }

        .today,
        .reward,
        .team1 {
            width: 200px;
            font-size: 15px;
            margin-top: 10px;
        }


        span.team1 {
            margin-top: 10px;
        }

        span.reward {
            margin-top: 10px;
        }

        span.reward-tour {
            margin-top: 15px;
            margin-left: 22px;
            font-size: 18px;
        }

        .img-r-tournament {
            margin-left: -83px;
        }

        .reward-tounament {
            margin-left: 23px;
            font-size: 18px;
            margin-top: 10px;
        }

        .img-team {
            margin-left: -105px;
        }

        .team-tounament1 {
            margin-left: 26px;
            margin-top: 15px;
        }


        .dropdown-menu {
            width: 100%;
        }

        .dropdown-item {
            background-color: #f9fafb;
            color: #000000;
        }

        .dropdown-item:hover {
            background-color: #ff7211;
            color: #f9fafb;
        }

        .dropdown-toggle {
            border-radius: 20px;
            border: solid 3px #2d3560;
            background-color: #000000;

        }

    }
</style>