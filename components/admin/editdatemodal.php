<div class="modal fade" id="modal-default-editdatemodal<?php echo $tourdate_id; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-default-editdatemodal">แก้ไขรอบการแข่งขัน </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminservices/Editdatematchservice.php" method="post">
                    <div class="row justify-content-center">
                        <div class="row mb-2 justify-content-center">
                            <input type="text" id="round" name="round" style="width: 220px; height: 30px;"></input>
                        </div>
                        <div class="row mb-2 justify-content-center">
                            <input type="date" id="datematch" name="datematch" style="width: 220px; height: 30px;"></input>
                        </div>
                        <div class="row mb-2 justify-content-center">
                            <input type="time" id="timematch" name="timematch" style="width: 220px; height: 30px;"></input>
                        </div>
                    </div>
                    <div class="col-12">
                        <center class="mt-2"><button class="btn btn-success" >ยืนยัน</button>
                           
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>