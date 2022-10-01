<div class="content-header">
    <?php

    $num = 1;

    $sql = "SELECT a.*, teamA.team_name as a_name, teamB.team_name as B_name, matchdate.*
FROM tournament as a 
INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
   INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
   WHERE round_number = '16'
   ORDER BY tour_id ASC";
    $query = mysqli_query($conn, $sql)



    ?>
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="150px">
                                    ลำดับการเเข่งขัน</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="150px">
                                    รอบการเเข่งขัน</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="50px">
                                    สาย</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="80px">
                                </th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                    ชื่อทีม</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                    <strong>VS.</strong>
                                </th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                    ชื่อทีม</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                    วันที่</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" width="80px">
                                    ผลการเเข่งขัน</th>
                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" width="120px">
                                    ดูการเเข่งขัน</th>

                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" width="120px">
                                    จัดการผลการแข่งขัน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_array($query)) {
                                $datethai = $row["date"];
                                // $now = date("d")."/".date("m")."/".(date("Y")+543);
                                $now = $datethai . date("d-m-Y");
                                // echo $now;
                                $tour_id = $row['tour_id'];



                                // $sql2 = "SELECT * FROM `tournament_date` 
                                // ORDER BY tourdate_id ASC";
                                // $query2 = mysqli_query($conn, $sql2);
                                // $row2 = mysqli_fetch_assoc($query2);

                                //// วันที่ ////
                                $myD = substr($row['date'], -2, 2);
                                // echo $myD;
                                $myM = substr($row['date'], 5, -3);
                                // echo $myM;
                                $myY = substr($row['date'], 0, -6);
                                //  echo $myY;
                                $myYBuddhist = $myY + 543;

                            ?>
                                <tr>
                                    <td class="text-white"><?php echo $num++; ?></td>
                                    <td class="text-white"><?php echo $row['round']; ?></td>
                                    <td class="text-white"><?php echo $row['round_position']; ?></td>
                                    <td class="text-white"><?php echo $row['tour_position']; ?></td>
                                    <td class="text-white"><?php echo $row['a_name']; ?></td>
                                    <td class="text-white">VS.</td>
                                    <td class="text-white"><?php echo $row['B_name']; ?></td>
                                    <td class="text-white"><?php echo  $myD . -$myM . -$myYBuddhist; ?>&nbsp;&nbsp;<?php echo $row["time"]; ?></td>
                                    <td class="text-white"><?php echo $row['teamA_score']; ?> - <?php echo $row['teamb_score']; ?></td>
                                    <td class="text-white">
                                        <button onclick="window.location.href='?adminpages=seeconclude&tour_id=<?php echo $tour_id; ?>'" class="btn btn-info text-white" style="width:100px; height:40px;" type="button">
                                            <i class="fa-solid fa-eye"></i> ดู
                                        </button>
                                    </td>
                                    <td class="text-white">
                                        <button onclick="window.location.href='?adminpages=conclude&tour_id=<?php echo $tour_id; ?>'" class="btn btn-warning text-white" style="width:100px; height:40px;" type="button">
                                            <i class="fa-solid fa-pencil"></i> แก้ไข
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>