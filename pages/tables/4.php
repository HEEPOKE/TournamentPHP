<div class="container">
    <div class="matchbody_team">
        <div class="row my-3 justify-content-center text-center">
            <?php
            $sqlteam = "SELECT a.*, teamA.team_name as A_name, teamB.team_name as B_name,teamA.imglogo_team as imglogoA,teamB.imglogo_team as imglogoB
             FROM tournament as a 
             INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
             INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
             WHERE round_number = '2'";
            $queryteam = mysqli_query($conn, $sqlteam);

            while (($row = mysqli_fetch_array($queryteam))) {
                $teamA = $row['A_name'] ?? '';
                $imglogoA = $row['imglogoA'] ?? '';
                $teamB = $row['B_name'] ?? '';
                $imglogoB = $row['imglogoB'] ?? '';
                $teamA_score = $row['teamA_score'] ?? '';
                $teamB_score = $row['teamb_score'] ?? '';

                if ($imglogoA == '') {
                    $imglogoA = 'no-image.jpg';
                }

                if ($imglogoB == '') {
                    $imglogoB = 'no-image.jpg';
                }
            ?>

                <div class="navbar navbar-expand-md team32">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-white">
                        <?php echo $teamA; ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-white">
                        <img src="imglogo_team/<?php echo $imglogoA; ?>">
                        <?php echo '&nbsp;&nbsp;' ?><?php echo $teamA_score; ?> vs <?php echo $teamB_score; ?>
                        <?php echo '&nbsp;&nbsp;' ?><img src="imglogo_team/<?php echo $imglogoB; ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-white">
                        <?php echo $teamB; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<style>
    .team32 {
        background: rgb(50, 61, 90);
        border-radius: 10px;
        justify-content: space-between;
        font-family: kanit;
        margin-bottom: 8px;
        margin-top: 8px;
        font-size: 22px;
    }

    .team32 img {
        height: 45px;
        width: 45px;
    }

    @media screen and (max-width: 767px) {
        .team32 {
            background: rgb(50, 61, 90);
            border-radius: 10px;
            justify-content: space-between;
            font-family: kanit;
            margin-bottom: 10px;
            font-size: 12px;
        }

        .team32 img {
            height: 20px;
            width: 20px;
        }

    }
</style>