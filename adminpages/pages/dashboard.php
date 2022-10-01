<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
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
                        <h2 class="card-title">Dashboard</h2>
                    </div>
                    <?php

                    $num = 1;

                    $sql = "SELECT a.*, teamA.team_name as a_name, teamB.team_name as B_name, matchdate.*
                    FROM tournament as a 
                    INNER JOIN team as teamA ON teamA.team_id = a.teamA_id
                    INNER JOIN team as teamB ON teamB.team_id = a.teamB_id
                   	INNER JOIN tournament_date as matchdate ON matchdate.tourdate_id = a.round_id
                    ORDER BY tour_id ASC";
                    $query = mysqli_query($conn, $sql);

                    ?>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 mt-1">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                    ลำดับการเเข่งขัน</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="200px">
                                                    รอบการเเข่งขัน</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    ชื่อทีม</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    <strong>ผลการเเข่งขัน</strong>
                                                </th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    ชื่อทีม</th>
                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    วันที่</th>

                                                <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    ผู้ชนะ</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_array($query)) {
                                                $tour_id = $row['tour_id'];

                                                //// วันที่ ////
                                                $myD = substr($row['date'], -2, 2);
                                                // echo $myD;
                                                $myM = substr($row['date'], 5, -3);
                                                // echo $myM;
                                                $myY = substr($row['date'], 0, -6);
                                                //  echo $myY;
                                                $myYBuddhist = $myY + 543;



                                            ?>
                                                <?php
                                                if ($row["teamA_score"] > $row["teamb_score"]) {
                                                ?>
                                                    <tr>
                                                        <td class="text-white"><?php echo $num++; ?></td>
                                                        <td class="text-white"><?php echo $row['round']; ?></td>
                                                        <td class="text-orange"><?php echo $row['a_name']; ?></td>
                                                        <td class="text-white"><?php echo $row['teamA_score']; ?> - <?php echo $row['teamb_score']; ?></td>
                                                        <td style="color:#969697;"><?php echo $row['B_name']; ?></td>
                                                        <td class="text-white"><?php echo $myD . -$myM . -$myYBuddhist . ' ' . $row["time"] ?></td>
                                                        <td class="text-orange"><?php
                                                                                if ($row["teamA_score"] > $row["teamb_score"]) {
                                                                                    echo $row['a_name'];
                                                                                } else if ($row["teamA_score"] < $row["teamb_score"]) {
                                                                                    echo $row['B_name'];
                                                                                } else {
                                                                                    echo '';
                                                                                }
                                                                                ?></td>
                                                    </tr>
                                                <?php
                                                } else if ($row["teamA_score"] < $row["teamb_score"]) {
                                                ?>
                                                    <tr>
                                                        <td class="text-white"><?php echo $num++; ?></td>
                                                        <td class="text-white"><?php echo $row['round']; ?></td>
                                                        <td style="color:#969697;"><?php echo $row['a_name']; ?></td>
                                                        <td class="text-white"><?php echo $row['teamA_score']; ?> - <?php echo $row['teamb_score']; ?></td>
                                                        <td class="text-orange"><?php echo $row['B_name']; ?></td>
                                                        <td class="text-white"><?php echo $myD . -$myM . -$myYBuddhist . ' ' . $row["time"] ?></td>
                                                        <td class="text-orange"><?php
                                                                                if ($row["teamA_score"] > $row["teamb_score"]) {
                                                                                    echo $row['a_name'];
                                                                                } else if ($row["teamA_score"] < $row["teamb_score"]) {
                                                                                    echo $row['B_name'];
                                                                                } else {
                                                                                    echo '';
                                                                                }
                                                                                ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            <?php
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
</section>
</div>