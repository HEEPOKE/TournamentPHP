<div class="container">
    <div class="row">
        <div class="class">
            <label class="text-white float-start rovteam">
                <h2 class="text-white">
                    ทีมที่เข้าร่วม
                </h2>
            </label>
        </div>
    </div>
</div>
<div class="container text-center">
    <?php
    $sqlteam = "SELECT * FROM team WHERE status = 'ทำการอนุมัติสำเร็จแล้ว'";
    $queryteam = mysqli_query($conn, $sqlteam);
    $num = 1;
    ?>
    <div class="row my-3 rov-teamdetails" width="100%">
        <?php
        while ($rowteams = (mysqli_fetch_array($queryteam))) {
            $imglogo_team = $rowteams['imglogo_team'] ?? '';
            $team_id = $rowteams['team_id'];
            $team_name = $rowteams['team_name'];

            if ($imglogo_team == '') {
                $imglogo_team = 'no-image.jpg';
            }

        ?>
            <div class="card text-center">
                <div class="card-body col-sm-12">
                    <img src="imglogo_team/<?php echo $imglogo_team; ?>" class="card-img-top" alt="sgm_imglogo_team">
                    <h5 class="card-title"><?php echo $team_name; ?></h5>
                    <button type="button" class="btn btn-main btn-details" data-target="#modal-rovteam<?php echo $team_id; ?>" data-toggle="modal">รายละเอียดเพิ่มเติม</button>
                    <div class="modal fade" id="modal-rovteam<?php echo $team_id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <?php
                            $number = 1;
                            $sqlmember = "SELECT * FROM team as a 
                            INNER JOIN member as b ON a.team_id = b.team_id
                            WHERE a.team_id = '$team_id'";

                            $resultmember = mysqli_query($conn, $sqlmember);
                            ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title w-100 text-center">ทีม <?php echo $team_name; ?></h5>
                                    <i class="fa fa-close setclose" type="button" data-dismiss="modal" aria-label="Close" aria-label="Close"></i>
                                </div>
                                <div class="modal-body">
                                    <div class="img-modellogo">
                                        <img src="imglogo_team/<?php echo $imglogo_team; ?>" class="card-img-toplogo" alt="sgm_imglogo_team">
                                    </div>
                                    <div class="row-6">สมาชิกในทีม</div>
                                    <div class="row mt-3">
                                        <?php
                                        while ($rowmember = mysqli_fetch_array($resultmember) ?? false) {
                                            $name_game = $rowmember['name_game'];
                                            $img_profile = $rowmember['img_profile'] ?? '';

                                            if ($img_profile == '') {
                                                $img_profile = 'no-image.jpg';
                                            }
                                        ?>

                                            <div class="col-lg-1 col-md-2 col-sm-6">
                                                <div class="">
                                                    <img src="img_profile/<?php echo $img_profile; ?>" class="memberlogo">
                                                </div>
                                                <div class="">
                                                    <?php echo $number++; ?>.<?php echo $name_game; ?>
                                                </div>
                                            </div>


                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</div>
