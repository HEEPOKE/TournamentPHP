<div class="modal fade" id="modal-default-showmemberteam<?php echo $team_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-showmemberteam">สมาชิกภายใน <?php echo $team_name; ?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <?php

                    $membershow = "SELECT * FROM team as a
                INNER JOIN member as b ON a.team_id = b.team_id
                INNER JOIN contact as c ON c.member_id = b.member_id
                WHERE a.team_id = '$team_id'";

                    $membershowquery = mysqli_query($conn, $membershow);
                    ?>
                    <?php
                        $num = 1;
                    while ($memberrow = mysqli_fetch_assoc($membershowquery)) {
                        $membername = $memberrow['name'];
                        $rowmember_id = $memberrow['member_id'];

                    ?>
                        <div class="row mt-2">
                            <div class="container">
                                <?php echo $num++; ?> . <?php echo $membername; ?>
                                <div class="float-end">
                                    <button class="btn btn-info" onclick="window.location.href='?adminpages=showmemberdetail&memberid=<?php echo $rowmember_id; ?>'">
                                        เเก้ไขข้อมูลผู้เล่น
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>