<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ไฮไลท์หลังเเข่ง</h1>
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
                        <h2 class="card-title">ไฮไลท์หลังเเข่ง</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 mt-2">
                                <?php
                                $num = 1;
                                $sql = "SELECT * FROM `url_hightlight` ORDER BY url_id DESC";
                                $query = mysqli_query($conn, $sql);
                                ?>
                                <button type="button" onclick="window.location.href='?adminpages=inserthighlight'" class="btn btn-success text-white">
                                    เพิ่ม
                                </button>
                                <table id="example" class="table table-bordered table-striped dataTable dtr-inline text-center table-dark table-hover border-secondary" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="60px">
                                                ลำดับ</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" width="60px">
                                                tour_id</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                url</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                สถานะ</th>
                                            <th class="text-white" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                การจัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                            $url_id = $row['url_id'];
                                        ?>

                                            <tr>
                                                <td class="text-white"><?php echo $num++; ?></td>
                                                <td class="text-white"><?php echo $row["tour_id"]; ?></td>
                                                <td class="text-white"><?php echo $row["url"]; ?></td>
                                                <td class="text-white"><?php echo $row["status"]; ?></td>
                                                <td class="text-white">

                                                    <button type="button" class="btn btn-warning text-white" onclick="window.location.href='?adminpages=edithighlight&url_id<?php echo $url_id; ?>'">
                                                        แก้ไข
                                                    </button>
                                                    <button type="button" onclick="deleteurl(`<?php echo $url_id; ?>`)" class="btn btn-danger text-white">
                                                        ลบ
                                                    </button>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php include '../components/admin/Highlightmodal.php'; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example1_previous">
                                        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>