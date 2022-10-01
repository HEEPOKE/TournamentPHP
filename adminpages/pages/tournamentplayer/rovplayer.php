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
                            ที่อยู่</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            ชื่อในเกม</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            ตำเเหน่งที่เล่น</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Open_id</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            ID Line</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Facebook</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Tiktok</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Youtube</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Instragram</th>
                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                            การจัดการ</th>
                    </tr>
                </thead>
                <?php

                $num = 1;

                $sql = "SELECT * FROM acount as a
                INNER JOIN member as b ON a.member_id  = b.member_id
                INNER JOIN contact as c ON c.member_id = b.member_id
                INNER JOIN team as d ON d.team_id = a.team_id";

                $query = mysqli_query($conn, $sql);

                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
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
                            <td class="text-white"><?php echo $address; ?></td>
                            <td class="text-white"><?php echo $name_game; ?></td>
                            <td class="text-white"><?php echo $role; ?></td>
                            <td class="text-white"><?php echo $Open_id; ?></td>
                            <td class="text-white"><?php echo $line; ?></td>
                            <td class="text-white"><?php echo $facebook; ?></td>
                            <td class="text-white"><?php echo $tiktok; ?></td>
                            <td class="text-white"><?php echo $youtube; ?></td>
                            <td class="text-white"><?php echo $ig; ?></td>
                            <td class="text-white">
                                <button type="button" onclick="editplayer`<?php echo $row['member_id']; ?>`" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-default-editplayer">
                                    แก้ไข
                                </button>
                                <button onclick="deleteplayer`<?php echo $row['member_id']; ?>`" class="btn btn-danger text-white" data-target="#modal-default-deleteplayer" data-toggle="modal">
                                    ลบ
                                </button>
                            </td>
                        </tr>
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