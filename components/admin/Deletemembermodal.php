<div class="modal fade" id="modal-default-deletemember<?php echo $contactmember_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="adminservices/DeletememberService.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-modal-deletemember">
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $name = "SELECT * FROM member as a
                INNER JOIN contact as b on a.member_id = b.member_id
                WHERE a.member_id = '$contactmember_id'";

                $resultname = mysqli_query($conn, $name);
                $rowname = mysqli_fetch_array($resultname);

                $member_name = $rowname['name'] ?? '';

                ?>
                <div class="modal-body text-center">
                    <h3>ต้องการลบ<?php echo $member_name; ?> ออกจากทีม?</h3>
                    <input type="text" style="display: none" name="hiddenmember-delete" id="hiddenmember-delete" value="<?php echo $contactmember_id ?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success col-3">ยืนยัน</button>
                    <button type="button" class="btn btn-danger col-3" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>