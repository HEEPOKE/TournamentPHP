<?php
$num = 1;

$sql2 = "SELECT * FROM member WHERE team_id = '$team_id'";
$query2 = mysqli_query($conn, $sql2);

?>
<div class="modal fade" id="modal-default-rovteam<?php echo $team_id; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-rovteam">รายละเอียดทีม <?php echo $team_name; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/rovteamService.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imglogo_team" class="col-form-label"></label>
                        <?php
                        while ($row2 = (mysqli_fetch_array($query2) ?? false)) {
                        ?>
                            <label for="imglogo_team" class="col-form-label"><?php echo $num++; ?><?php echo $row2["name"]; ?></label><br>
                        <?php
                        }
                        ?>
                    </div>
                    <input type="text" style="display: none" name="hidden-rovteam" id="hidden-rovteam" value="<?php echo $team_id; ?>">
                </form>
            </div>
        </div>
    </div>
</div>