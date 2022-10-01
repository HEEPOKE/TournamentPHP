<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">เเบ่งสายการเเข่งขัน</h1>

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                        <h2 class="card-title">เเบ่งสายการเเข่งขัน</h2>
                    </div>
        <?php

$num = 1;

$sql = "SELECT * FROM acount as a
INNER JOIN member as b ON a.member_id = b.member_id
INNER JOIN team as c ON c.team_id = a.team_id";


$query = mysqli_query($conn, $sql)

?>
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">
                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                aria-controls="example1" type="button">
                                <span>Copy</span>
                            </button>
                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                aria-controls="example1" type="button">
                                <span>CSV</span>
                            </button>
                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                aria-controls="example1" type="button">
                                <span>Excel</span>
                            </button>
                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                aria-controls="example1" type="button">
                                <span>PDF</span>
                            </button>
                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1"
                                type="button">
                                <span>Print</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" width="60px">
                                        ลำดับ</th>
                                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Browser: activate to sort column ascending">
                                            ชื่อทีม</th>
                                    <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" width="200px">
                                        Logo Team</th>
                                    <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">
                                        วันที่/เวลาเเข่งขัน</th>
                                        <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">
                                       ผลการเเข่งขัน</th>
                                    <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">
                                       ชื่อทัวร์นาเมนต์</th>
                                       <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">
                                      สภานะการเเข่งขัน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                                <tr>
                                    <td class="text-white"><?php echo $num++; ?></td>
                                    <td class="text-white"><?php echo $row['team_name']; ?></td>
                                    <td class="text-white"><?php echo $row['imglogo_team']; ?></td>
                                    <td class="text-white"></td>
                                    <td class="text-white"></td>
                                    <td class="text-white"></td>
                                    <td class="text-white"><?php echo $row['status']; ?></td>
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
</section>
</div>