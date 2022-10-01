<div class="modal fade" id="modal-default-editstatusteam<?php echo $team_id; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-editteam">เเก้ไขสถานะทีม <?php echo $team_name; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/EditstatusService.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="status" class="col-form-label">สถานะ</label>

                        <label for="status"></label>
                        <select name="status" id="status" style="width: 50%;">
                            <option>--กรุณากรอกข้อมูล--</option>
                            <option value="รอการอนุมัติ">รอการอนุมัติ</option>
                            <option value="ทำการอนุมัติสำเร็จแล้ว">ทำการอนุมัติสำเร็จแล้ว</option>

                        </select>
                        <br><br>


                    </div>

                    <input type="text" style="display: none" name="hidden-editteam" id="hidden-editteam" value="<?php echo $team_id; ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>