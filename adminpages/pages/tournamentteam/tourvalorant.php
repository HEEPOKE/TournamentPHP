<div class="row">
    <?php
    while ($row = mysqli_fetch_array($query)) {
        $img_logoteam = $row['img_logoteam'] ?? '';
        $team_name = $row['team_name'] ?? '';
        $facebook = $row['contt_facebook'] ?? '';
        $tiktok = $row['contt_tiktok'] ?? '';
        $name = $row['name'] ?? '';
        $status = $row['status'] ?? '';
    ?>
        <div class="col-sm-12 mt-2">
            <table id="table_data" class="table table-bordered table-striped dataTable dtr-inline text-center table-dark table-hover border-secondary" aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="60px">
                            ลำดับ</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                            Logo Team</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            ชื่อทีม</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            สมาชิกในทีม</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            สถานะทีม</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                            การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-white"><?php echo $num++; ?></td>
                        <td class="text-white"><img src="../imglogo_team/<?php echo $img_logoteam; ?>" width="100px" height="100px"></td>
                        <td class="text-white"><?php echo $team_name; ?></td>
                        <td class="text-white">
                            1.<?php echo $name; ?><br>
                            2.<?php echo $name; ?><br>
                            3.<?php echo $name; ?><br>
                            4.<?php echo $name; ?><br>
                            5.<?php echo $name; ?><br>
                        </td>
                        <td class="text-white">
                            <button class="btn btn-success btn-sm" onclick="submitteam`<?php echo $row['team_id']; ?>`" data-target="#modal-default-submitteam" data-toggle="modal">
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                <?php echo $status; ?>
                            </button>
                        </td>
                        <td class="text-white">
                            <button type="button" class="btn btn-warning text-white" onclick="editteam`<?php echo $row['team_id']; ?>`" data-target="#modal-default-editteam" data-toggle="modal">
                                แก้ไข
                            </button>
                            <button onclick="deleteteam`<?php echo $row['team_id']; ?>`" class="btn btn-danger text-white" data-target="#modal-default-deleteteam" data-toggle="modal">
                                ลบ
                            </button>
                        </td>
                    </tr>
                    <?php include '../components/admin/Submitmodal.php'; ?>
                    <?php include '../components/admin/Editteammodal.php'; ?>
                    <?php include '../components/admin/Deteleteammodal.php'; ?>
                <?php
            }
                ?>
                </tbody>
            </table>
        </div>
</div>