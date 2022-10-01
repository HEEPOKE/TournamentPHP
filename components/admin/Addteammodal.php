<div class="modal fade" id="modal-default-addteam" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-addteam">เพิ่มทีม</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/AddteamService.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imglogo_team" class="col-form-label">โลโก้ทีม</label>
                        <input type="file" class="form-control" id="imglogo_team" name="imglogo_team">
                    </div>
                    <div class="mb-3">
                        <label for="team_name" class="col-form-label">ชื่อทีม</label>
                        <input type="text" class="form-control" id="team_name" name="team_name" placeholder="กรอกชื่อทีม">
                    </div>
                    <div class="mb-3">
                        <label for="contt_facebook" class="col-form-label">Facebook</label>
                        <input type="text" class="form-control" id="contt_facebook" name="contt_facebook" placeholder="กรอก Facebook ของทีม">
                    </div>
                    <div class="mb-3">
                        <label for="contt_tiktok" class="col-form-label">Tiktok</label>
                        <input type="text" class="form-control" id="contt_tiktok" name="contt_tiktok" placeholder="กรอก Tiktok ของทีม">
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