<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการข้อมูลทีม</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">ข้อมูลทีมที่มาสมัคร</h2>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">                        
                            <?php include '../components/admin/Addteammodal.php'; ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 mt-2">
                                <?php

                                $numall = 1;

                                $sql = "SELECT * FROM team where status = 'ทำการอนุมัติสำเร็จแล้ว'"; 
                                $query = mysqli_query($conn, $sql);

                                ?>
                                <table id="example" class="table table-bordered table-striped dataTable dtr-inline text-center table-dark table-hover border-secondary" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="60px">
                                                ลำดับ</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                Logo Team</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                ชื่อทีม</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                สถานะทีม</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                การจัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                           
                                            $team_id = $row['team_id'];
                                            $imglogo_team = $row['imglogo_team'] ?? '';
                                            $team_name = $row['team_name'] ?? '';
                                            $facebook = $row['contt_facebook'] ?? '';
                                            $tiktok = $row['contt_tiktok'] ?? '';
                                            $name = $row['name'] ?? '';
                                            $status = $row['status'] ?? '';

                                            if ($imglogo_team == '') {
                                                $imglogo_team = 'no-image.jpg';
                                            }
                                        ?>
                                            <tr>
                                                <td class="text-white"><?php echo $numall++; ?></td>
                                                <td class="text-white"><img src="../imglogo_team/<?php echo $imglogo_team; ?>" class="img-team"></td>
                                                <td class="text-white"><?php echo $team_name; ?></td>
                                                <td class="text-white"><?php echo $status;?></td>
                                                <td class="text-white">
                                                    <button type="button" class="btn btn-info text-white" data-target="#modal-default-showmemberteam<?php echo $team_id; ?>" data-toggle="modal">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                    </button>
                                                    <button type="button" class="btn btn-warning text-white"  data-target="#modal-default-editteam<?php echo $team_id; ?>" data-toggle="modal">
                                                    <i class="fa-solid fa-pencil"></i> 
                                                    </button>
                                                    <button class="btn btn-danger text-white" data-target="#modal-default-deleteteam<?php echo $team_id; ?>" data-toggle="modal">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php include '../components/admin/Showmembermodal.php'; ?>
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
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>