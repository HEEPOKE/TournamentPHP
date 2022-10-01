<div class="modal fade" id="modal-default-editurl<?php echo $url_id; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-editurl<?php echo $url_id; ?>">เเก้ไขไฮไลท์ <?php echo $team_name; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/EditteamService.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imglogo_team" class="col-form-label">tour_id</label>
                        <input type="file" class="form-control" id="imglogo_team" name="imglogo_team" value="<?php echo $imglogo_team; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="team_name" class="col-form-label">url</label>
                        <input type="text" class="form-control" id="team_name" name="team_name" value="<?php echo $team_name; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="contt_facebook" class="col-form-label">สถานะ</label>
                        <input type="text" class="form-control" id="contt_facebook" name="contt_facebook" value="<?php echo $facebook; ?>">
                    </div>
                    <input type="text" style="display: none" name="hidden-editurl" id="hidden-editurl" value="">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">ยืนยัน</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>