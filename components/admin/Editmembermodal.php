<div class="modal fade" id="modal-default-editmember<?php echo $contactmember_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-editmember">เเก้ไขข้อมูลผู้เล่น <?php echo $rowname_game; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/EditmemberService.php?member_id=<?php echo $contactmember_id; ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="img_profile" class="col-form-label">รูปโปรไฟล์</label><br>
                        <img src="../img_profile/<?php echo $rowimg_profile ?>" onclick="$('#img_profile').click();" id="output" width="100" height="100" class="rounded-circle" alt="เลือกรูปภาพ" />
                        <input class="fileup" id="img_profile" name="img_profile" type="file" onchange="loadFile(event)" />
                    </div>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $rowname; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="col-form-label">เพศ</label>
                        <select class="form-select" id="gender" name="gender">
                            <option hidden selected value="<?php echo $rowgender; ?>"><?php echo $rowgender; ?></option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                            <option value="เพศทางเลือก">เพศทางเลือก</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="col-form-label">อายุ</label>
                        <input type="text" class="form-control" id="age" name="age" OnKeyPress="return chkNumber(this)" minlength="2" value="<?php echo $rowage; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="col-form-label">ที่อยู่</label>
                        <input type="text" class="form-control" id="address" name="address" OnKeyPress="return chkNumber(this)" minlength="2" value="<?php echo $rowaddress; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name_game" class="col-form-label">ชื่อในเกม</label>
                        <input type="text" class="form-control" id="name_game" name="name_game" value="<?php echo $rowname_game; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="col-form-label">ตำเเหน่ง</label>
                        <select class="form-select" id="role" name="role">
                            <option hidden selected value="<?php echo $rowrole; ?>"><?php echo $rowrole; ?></option>
                            <option value="ป่า">ป่า</option>
                            <option value="เลนมังกร">เลนมังกร</option>
                            <option value="เลนกลาง">เลนกลาง</option>
                            <option value="ออฟเลน">ออฟเลน</option>
                            <option value="ซัพพอร์ต">ซัพพอร์ต</option>
                            <?php

                            $spare = "SELECT * FROM member as a
                            INNER JOIN team as b ON a.team_id = b.team_id 
                            WHERE a.team_id = '$rowteam_id' AND role = 'ตัวสำรอง'";

                            $result_spare = mysqli_query($conn, $spare);
                            $rowspare = mysqli_fetch_assoc($result_spare);

                            $spareteam = $rowspare['role'] ?? '';
                            ?>
                            <?php if ($spareteam == '') { ?>
                                <option value="ตัวสำรอง">ตัวสำรอง</option>
                            <?php } else { ?>
                                <option value="ตัวสำรอง" hidden>ตัวสำรอง</option>
                            <?php } ?>
                            <?php

                            $coach = "SELECT * FROM member as a
                            INNER JOIN team as b ON a.team_id = b.team_id 
                            WHERE a.team_id = '$rowteam_id' AND a.role = 'โค้ช'";

                            $result_coach = mysqli_query($conn, $coach);
                            $rowcoach = mysqli_fetch_assoc($result_coach);

                            $coachteam = $rowcoach['role'] ?? '';
                            ?>
                            <?php if ($coachteam == '') { ?>
                                <option value="โค้ช">โค้ช</option>
                            <?php } else { ?>
                                <option value="โค้ช" hidden>โค้ช</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cont_line" class="col-form-label">ID Line</label>
                        <input type="text" class="form-control" id="cont_line" name="cont_line" value="<?php echo $rowline; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cont_facebook" class="col-form-label">Facebook</label>
                        <input type="text" class="form-control" id="cont_facebook" name="cont_facebook" value="<?php echo $rowfacebook; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cont_tiktok" class="col-form-label">Tiktok</label>
                        <input type="text" class="form-control" id="cont_tiktok" name="cont_tiktok" value="<?php echo $rowtiktok; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cont_youtube" class="col-form-label">Youtube</label>
                        <input type="text" class="form-control" id="cont_youtube" name="cont_youtube" value="<?php echo $rowyoutube; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cont_ig" class="col-form-label">Instragram</label>
                        <input type="text" class="form-control" id="cont_ig" name="cont_ig" value="<?php echo $rowig; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Open_id" class="col-form-label">Open_id</label>
                        <input type="text" class="form-control" id="Open_id" name="Open_id" value="<?php echo $rowopen_id; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>