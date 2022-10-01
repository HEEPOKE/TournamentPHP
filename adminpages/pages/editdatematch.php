<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการรอบการแข่งขัน</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == 'superadmin')) { ?>
                            <div class="col-12">
                                <left class="mt-2"><button class="btn btn-success" data-target="#modal-default-insertdatemodal" data-toggle="modal">
                                        <i class="fa-solid fa-circle-plus"></i> เพิ่มรอบการแข่งขัน
                                    </button>
                                </left>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <?php
                            $num = 1;



                            $sql = "SELECT a.* , b.tour_position
                            FROM tournament_date as a
                            INNER JOIN tournament as b ON b.tour_id = a.tourdate_id";

                            $query = mysqli_query($conn, $sql);

                            ?>
                            <div class="row">
                                <div class="col-sm-12 mt-1">
                                    <table id="example" class="table table-bordered table-striped dataTable dtr-inline text-center table-dark table-hover border-secondary" aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                    ลำดับ</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                    รอบ</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                </th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    วัน</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    <strong>เวลา</strong>
                                                </th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    <strong>จัดการข้อมูล</strong>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_array($query)) {
                                                $tourdate_id = $row["tourdate_id"];
                                                $round = $row["round"];
                                                $datematch = $row["date"];
                                                $timematch = $row["time"];

                                                //// วันที่ ////
                                                $myD = substr($row['date'], -2, 2);
                                                // echo $myD;
                                                $myM = substr($row['date'], 5, -3);
                                                // echo $myM;
                                                $myY = substr($row['date'], 0, -6);
                                                //  echo $myY;
                                                $myYBuddhist = $myY + 543;

                                                // $sql2 = "SELECT * FROM tournament as a INNER JOIN team as b ON a.teamA_id = b.team_id";
                                                // $query2 = mysqli_query($conn, $sql2);
                                                // $row2 = mysqli_fetch_assoc($query2);

                                                // $sql2 = "SELECT * FROM tournament_date as a INNER JOIN tournament as b ON b.round_id = a.tourdate_id
                                                // ORDER BY tourdate_id DESC";
                                                // $query2 = mysqli_query($conn, $sql2);
                                                // $row2 = mysqli_fetch_assoc($query2);
                                            ?>
                                                <tr>
                                                    <td class="text-white"><?php echo $num++; ?></td>
                                                    <td class="text-white"><?php echo $row["round"]; ?></td>
                                                    <td class="text-white"><?php echo $row["tour_position"]; ?></td>
                                                    <td class="text-white"><?php echo $myD . -$myM . -$myYBuddhist; ?></td>
                                                    <td class="text-white"><?php echo $row["time"]; ?></td>
                                                    <td class="text-white">
                                                        <?php if (isset($_SESSION['type']) && ($_SESSION['type'] == 'superadmin')) { ?>
                                                            <button class="btn btn-warning col" style="width:100px; height:40px;" data-target="#modal-default-editdatemodal<?php echo $tourdate_id; ?>" data-toggle="modal">
                                                                <i class="fa-solid fa-pencil"></i> แก้ไข
                                                            </button>
                                                            <button class="btn btn-danger" style="width:100px; height:40px;" data-target="#modal-default-deletedatemodal<?php echo $tourdate_id; ?>" data-toggle="modal">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i> ลบ
                                                            </button>
                                                        <?php } elseif (isset($_SESSION['type']) && ($_SESSION['type'] == 'admin')) { ?>
                                                            <button class="btn btn-warning" style="width:100px; height:40px;" data-target="#modal-default-editdatemodal<?php echo $tourdate_id; ?>" data-toggle="modal">
                                                                <i class="fa-solid fa-pencil"></i> แก้ไข
                                                            </button>
                                                        <?php } ?>
                                                    </td>

                                                    <div class="modal fade" id="modal-default-editdatemodal<?php echo $tourdate_id; ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="adminservices/Editdatematchmodalservice.php" method="post">
                                                                    <input type="hidden" value="<?php echo $tourdate_id; ?>" name="tourdate_id"></input>
                                                                    <input type="hidden" value="<?php echo $round; ?>" name="round"></input>
                                                                    <input type="hidden" value="<?php echo $datematch; ?>" name="datematch"></input>
                                                                    <input type="hidden" value="<?php echo $timematch; ?>" name="timematch"></input>

                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="modal-default-editdatemodal">แก้ไขรอบการแข่งขัน </h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row justify-content-center">
                                                                            <div class="row mb-2 justify-content-center">
                                                                                <label for="round" class="form-label">รอบการแข่งขัน :</label>
                                                                                <input type="text" class="form-control" id="round" name="round" value="<?php echo $row["round"]; ?>"></input>
                                                                            </div>
                                                                            <div class="row mb-2 justify-content-center">
                                                                                <label for="datematch" class="form-label">วันที่ :</label>
                                                                                <input type="date" class="form-control" id="datematch" name="datematch" value="<?php echo $row["date"]; ?>"></input>
                                                                            </div>
                                                                            <div class="row mb-2 justify-content-center">
                                                                                <label for="timematch" class="form-label">เวลา :</label>
                                                                                <input type="time" class="form-control" id="timematch" name="timematch" value="<?php echo $row["time"]; ?>"></input>
                                                                            </div>
                                                                            <!-- <div class="row mb-2 justify-content-center">
                                                                                <label for="timematch" class="form-label">ทัวร์นาเมนต์ : </label>
                                                                                <select name="tourp" id="tourp">
                                                                                    <option value=""></option>
                                                                                    <option value="A1">A1</option>
                                                                                    <option value="A2">A2</option>
                                                                                    <option value="A3">A3</option>
                                                                                    <option value="A4">A4</option>
                                                                                    <option value="A5">A5</option>
                                                                                    <option value="A6">A6</option>
                                                                                    <option value="A7">A7</option>
                                                                                    <option value="A8">A8</option>
                                                                                    <option value="B1">B1</option>
                                                                                    <option value="B2">B2</option>
                                                                                    <option value="B3">B3</option>
                                                                                    <option value="B4">B4</option>
                                                                                    <option value="B5">B5</option>
                                                                                    <option value="B6">B6</option>
                                                                                    <option value="B7">B7</option>
                                                                                    <option value="B8">B8</option>
                                                                                </select>
                                                                            </div> -->
                                                                        </div>
                                                                        <!-- <div class="col-12 text-center">
                                                                                <div class="mt-2"><button type="submit" class="btn btn-success" >ยืนยัน</button> </div>
                                                                                <div class="mt-2"><button type="button" class="btn btn-danger" >ยกเลิก</button></div>
                                                                                
                                                                                
                                                                            </div> -->
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">บันทึก</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="modal-default-deletedatemodal<?php echo $tourdate_id; ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="adminservices/deletedatematchmodalservice.php" method="post">
                                                                    <input type="hidden" value="<?php echo $tourdate_id; ?>" name="tourdate_id"></input>
                                                                    <input type="hidden" value="<?php echo $round; ?>" name="round"></input>
                                                                    <input type="hidden" value="<?php echo $datematch; ?>" name="datematch"></input>
                                                                    <input type="hidden" value="<?php echo $timematch; ?>" name="timematch"></input>
                                                                    <div class="modal-header">

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row justify-content-center">

                                                                            <center>
                                                                                <h4 class="modal-title" id="modal-default-deletedatemodal">คุณแน่ใจรึป่าวที่จะลบ? </h4>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-center">
                                                                        <button type="submit" class="btn btn-success">ตกลง</button>
                                                                        <button type="submit" data-dismiss="modal" class="btn btn-danger">ยกเลิก</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php include '../components/admin/insertdatemodal.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>