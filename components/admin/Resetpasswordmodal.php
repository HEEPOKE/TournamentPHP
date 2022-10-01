<div class="modal fade" id="modal-default-resetpassmember<?php echo $contactmember_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-resetpassmember">เเก้ไขรหัสผ่านของผู้เล่น <?php echo $rowname_game; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/ResetpasswordService.php?member_id=<?php echo $contactmember_id; ?>" method="POST">
                    <div class="mb-3">
                        <label for="password" class="col-form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" name="password" minlenght = "8" placeholder="กรอกรหัสผ่านขั้นต่ำ 8 ตัว">
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="col-form-label">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" minlength = "8" placeholder="ยืนยันรหัสผ่าน">
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