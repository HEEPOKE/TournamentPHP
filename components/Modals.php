<div class="modal fade" id="modal-default-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../Services/DeleteService.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-modal-delete"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="text" style="display: none" name="hidden-member" id="hidden-member-delete">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary col-3">ยืนยัน</button>
                    <button type="button" class="btn btn-danger col-3" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="imgModalCenter" tabindex="-1" role="dialog" aria-labelledby="imgModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imgModalCenterTitle">แจ้งเตือน</h5>
            </div>
            <div class="modal-body">
                <?php if (isset($_SESSION['img']) && $_SESSION['img'] == '1') { ?>
                    กรุณาอัพโหลดรูปภาพโลโก้ของทีม
                <?php } else if (isset($_SESSION['img']) && $_SESSION['img'] == '2') { ?>
                    กรุณาอัพโหลดรูปโปรไฟล์ของคุณ
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>