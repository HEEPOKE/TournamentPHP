<div class="modal fade" id="modalreset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalreset">เเก้ไขรหัสผ่านของผู้เล่น <?php echo $rowname_game; ?> สำเร็จ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($_SESSION['Reset']) && $_SESSION['Reset'] == '1') { ?>
                    <h5>เปลี่ยนรหัสผ่านสำเร็จ</h5>
                <?php } else if (isset($_SESSION['Reset']) && $_SESSION['Reset'] == '2') { ?>
                    <h5>รหัสผ่านที่กรอกไม่ตรงกัน</h5>
                <?php } else if (isset($_SESSION['Reset']) && $_SESSION['Reset'] == '3') { ?>
                    <h5>ไม่สามารถเปลี่ยนรหัสผ่านได้</h5>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>