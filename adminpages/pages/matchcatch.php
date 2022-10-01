<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จับคู่การเเข่งขัน</h1>
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
                        
                        <button class="btn btn-primary row-3 md-3 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            กรุณาเลือกรอบการแข่งขัน
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=32">รอบ 32 ทีม</a></li>
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=16">รอบ 16 ทีม</a></li>
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=8">รอบ 8 ทีม</a></li>
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=semi">รอบ semi finals</a></li>
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=3rd">รอบ 3rd place</a></li>
                            <li><a class="dropdown-item" href="?adminpages=matchcatch&match=final">รอบ Final</a></li>
                        </ul>
                    </div>
                    <?php

                    $match = isset($_GET['match']) ? $_GET['match'] : '';

                    if ($match == '16') {
                        include 'pages/matchtables/16.php';
                    } elseif ($match == '8') {
                        include 'pages/matchtables/8.php';
                    } elseif ($match == 'semi') {
                        include 'pages/matchtables/semi.php';
                    } elseif ($match == 'final') {
                        include 'pages/matchtables/final.php';
                    } elseif ($match == '32') {
                        include 'pages/matchtables/32.php';
                    } elseif ($match == '3rd') {
                        include 'pages/matchtables/3rd.php';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>