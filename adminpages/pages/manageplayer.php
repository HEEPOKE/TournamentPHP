<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการข้อมูลส่วนบุคคล</h1>
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
                        <h2 class="card-title">จัดการข้อมูลส่วนบุคคล</h2>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="">
                                    <div class="col-sm-12  ">
                                        <div class="dt-buttons flex-wrap col-12 ">
                                            <button class="btn btn-primary btn-sm col-2 float-start dropdown-toggle" type="button" id="tournamentplayer" data-bs-toggle="dropdown" aria-expanded="false">
                                                ทัวร์นาเมนต์
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="tournamentplayer">
                                                <li><a class="dropdown-item" href="?pages=rovtables&table=2">Rov player</a></li>
                                                <li><a class="dropdown-item" href="?pages=rovtables&table=4">Valorant player</a></li>
                                            </ul>
                                            <button class="btn btn-primary btn-sm col-2 float-end" data-target="#modal-default-addplayer" data-toggle="modal">
                                                เพิ่มผู้เล่น
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include '../components/admin/Addplayermodal.php'; ?>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <div class="row">
                                <div class="col-sm-12 mt-2">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center table-dark table-hover border-secondary" aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="60px">
                                                    ลำดับ</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" width="100px">
                                                    รูปโปรไฟล์</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                    ชื่อ-นามสกุล</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    อายุ</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    เพศ</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    ชื่อในเกม</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    ตำเเหน่งที่เล่น</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Open_id</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    ดูรายละเอียด</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <?php

                                        $num = 1;

                                        $sql = "SELECT * FROM acount as a
                                        INNER JOIN member as b ON a.member_id = b.member_id
                                        INNER JOIN contact as c ON c.member_id = b.member_id
                                        INNER JOIN team as d ON d.team_id = a.team_id";

                                        $query = mysqli_query($conn, $sql);

                                        ?>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_array($query)) {
                                                $team_name = $row['team_name'] ?? '';
                                                $img_profile = $row['img_profile'] ?? '';
                                                $name = $row['name'] ?? '';
                                                $gender = $row['gender'] ?? '';
                                                $age = $row['age'] ?? '';
                                                $address = $row['address'] ?? '';
                                                $name_game = $row['name_game'] ?? '';
                                                $role = $row['role'] ?? '';
                                                $Open_id = $row['Open_id'] ?? '';
                                                $line = $row['cont_line'] ?? '';
                                                $facebook = $row['cont_facebook'] ?? '';
                                                $tiktok = $row['cont_tiktok'] ?? '';
                                                $youtube = $row['cont_youtube'] ?? '';
                                                $ig = $row['cont_ig'] ?? '';
                                            ?>
                                                <tr>
                                                    <td class="text-white"><?php echo $num++; ?></td>
                                                    <td class="text-white"><?php echo $img_profile; ?></td>
                                                    <td class="text-white"><?php echo $name; ?></td>
                                                    <td class="text-white"><?php echo $age; ?></td>
                                                    <td class="text-white"><?php echo $gender; ?></td>
                                                    <td class="text-white"><?php echo $name_game; ?></td>
                                                    <td class="text-white"><?php echo $role; ?></td>
                                                    <td class="text-white"><?php echo $Open_id; ?></td>
                                                    <td class="text-white">
                                                        <button type="button" onclick="editplayer(`<?php echo $row['member_id']; ?>`)" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modal-default-showdetail">
                                                            ดูรายละเอียด
                                                        </button>
                                                    </td>
                                                    <td class="text-white">
                                                        <button type="button" onclick="editplayer(`<?php echo $row['member_id']; ?>`)" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-default-editplayer">
                                                            แก้ไข
                                                        </button>
                                                        <button onclick="deletplayer(`<?php echo $row['member_id']; ?>`)" class="btn btn-danger text-white" data-target="#modal-default-deleteplayer" data-toggle="modal">
                                                            ลบ
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php include '../components/admin/Showdetailmodal.php'; ?>
                                                <?php include '../components/admin/Editplayermodal.php'; ?>
                                                <?php include '../components/admin/Deteleplayermodal.php'; ?>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>