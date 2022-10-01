<div class="modal fade" id="modal-default-deleteteam<?php echo $team_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="adminservices/DeleteteamService.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-modal-deleteteam">
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3>ต้องการลบทีม<?php echo $team_name; ?>?</h3>
                    <input type="text" style="display: none" name="hidden-team" id="hiddenteam-delete" value="<?php echo $team_id ?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success col-3">ยืนยัน</button>
                    <button type="button" class="btn btn-danger col-3" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>
