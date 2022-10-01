<?php if (isset($_SESSION['username'])) { ?>
    <div class="row">
        <?php
        $acc = "SELECT * FROM acount WHERE username = '" . $_SESSION['username'] . "'";
        $acc_result = mysqli_query($conn, $acc);
        $acc_row = mysqli_fetch_assoc($acc_result);

        $teamid = $acc_row['team_id'] ?? '';

        $leader = "SELECT * FROM acount as a 
            INNER JOIN member as b ON a.team_id = b.team_id 
            WHERE a.team_id = '$team_id' AND a.type = 'leader'";

        $leader_result = mysqli_query($conn, $leader);
        $leader_row = mysqli_fetch_assoc($leader_result);

        $img_leader = $leader_row['img_profile'] ?? '';
        $name_leader = $leader_row['name'] ?? '';
        $member_idleader = $leader_row['member_id'] ?? '';

        if ($img_leader == '') {
            $img_leader = 'no-image.jpg';
        }

        $detailmem = "SELECT * FROM member 
        WHERE team_id = '$team_id' OR team_id = '$teamid'";

        $resultmem = mysqli_query($conn, $detailmem);

        ?>
        <?php if ($teamid != '') { ?>
            <button type="button" class="btn addbutteam btn-secondary text-white mt-2" onclick="window.location.href='?pages=createteam&detail=teamdetail'">
                <img src="imglogo_team/<?php echo $imglogo_team; ?>" class="rounded-circle picc float-start" alt="">
                <div class="ml-top"><?php echo $team_name; ?></div>
            </button>
        <?php } elseif ($teamid == '') { ?>
            <button type="button" class="btn addbutteam btn-secondary text-white mt-2" onclick="buildLeader2();">
                สร้างทีม
            </button>
        <?php } ?>

        <?php if ($member_idleader != '') { ?>
            <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=leader&member_id=<?php echo  $member_idleader; ?>'">
                <img src="img_profile/<?php echo $img_leader; ?>" class="rounded-circle picc float-start" alt="">
                <div class="m2-top"><?php echo $name_leader; ?></div>
            </button>
            <?php } else {

            if ($teamid == '' || $teamid == NULL) { ?>
                <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=editteamdetail'">
                    +
                </button>
            <?php } else { ?>
                <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=addleader'">
                    +
                </button>
            <?php } ?>

        <?php } ?>

        <?php
        for ($i = 1; $i <= 7; $i++) {
            if ($i <= $rowcount['count']) { ?>
                <?php

                $rowmem = $resultmem->fetch_assoc();
                if ($i != 1) {

                    $team_namemem = $rowmem['team_name'] ?? '';
                    $namemem = $rowmem['name'] ?? '';
                    $img_profilemem = $rowmem['img_profile'] ?? '';
                    $member_idmem = $rowmem['member_id'] ?? '';
                    $team_idmem = $rowmem['team_id'] ?? '';

                    if ($img_profilemem == '') {
                        $img_profilemem = 'no-image.jpg';
                    }

                ?>
                    <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=memberdetail&member_id=<?php echo  $member_idmem; ?>'">
                        <img src="img_profile/<?php echo $img_profilemem; ?>" class="rounded-circle picc float-start" alt="">
                        <div class="m3-top"><?php echo $namemem; ?></div>
                        <div></div>
                    </button>
                <?php
                }
            } else if ($_SESSION["type"] == 'leader') {
                // echo $_SESSION["type"] . '000';
                if ($member_idleader != '') {
                ?>
                    <button type="button" class="btn addbut text-white mt-2" data-bs-target="#modallink" data-bs-toggle="modal" data-dismiss="modal">
                        +
                    </button>
                <?php } else if ($teamid == '') { ?>
                    <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=editteamdetail'">
                        +
                    </button>
                <?php } else { ?>
                    <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=addleader'">
                        +
                    </button>
                <?php } ?>

            <?php } else if ($_SESSION["type"] == 'member') { ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn addbut text-white mt-2" data-bs-toggle="modal" data-bs-target="#nolink">
                   +
                </button>
            <?php } else { ?>
                <button type="button" class="btn addbut text-white mt-2" onclick="window.location.href='?pages=createteam&detail=memberdetail'">
                    +
                </button>
        <?php }
        } ?>

    </div>
<?php } ?>

<script>
    function buildLeader2() {
        alert("กรุณาสร้างโปรไฟล์ก่อน !!");
    }
</script>
<style>
    .nolink-body{
        color: #ff7211;
        font-size: 20px;
    }
    .nolink-header{
        height: 0px;
    }
    .ml-top {
        margin-top: 6px;
        font-size: 24px;
        font-family: kanit;
    }

    .m2-top {
        margin-top: 10px;
        font-size: 18px;
    }

    .m3-top {
        margin-top: 10px;
        font-size: 18px;
    }
</style>