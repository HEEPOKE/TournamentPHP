<div class="container">
    <div class="row">
        <div class="col-md-3">
            <label class="float-start title-tabeltour">
                <h2 class="text-white">ตารางการเเข่งขัน</h2>
            </label>
        </div>
        <div class="col-md-9 dropdown-rovtable">
            <div class="dropdown col-md-3 ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    $tabledd = isset($_GET['table']) ? $_GET['table'] : '';
                    if ($tabledd == '32') {
                        echo "Round of 32";
                    }
                    if ($tabledd == '16') {
                        echo "Round of 16";
                    }
                    if ($tabledd == '8') {
                        echo "Quater Final";
                    }
                    if ($tabledd == '4') {
                        echo "semi Finals";
                    }
                    if ($tabledd == '3') {
                        echo "รอบชิงที่ 3";
                    }
                    if ($tabledd == '2') {
                        echo "Final";
                    }
                    if ($tabledd == '') {
                        echo "เลือกรอบการแข่งขัน";
                    }

                    ?>

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="?pages=rovtables&table=32">Round of 32</a></li>
                    <li><a class="dropdown-item" href="?pages=rovtables&table=16">Round of 16</a></li>
                    <li><a class="dropdown-item" href="?pages=rovtables&table=8">Quater Final</a></li>
                    <li><a class="dropdown-item" href="?pages=rovtables&table=4">semi Finals</a></li>
                    <li><a class="dropdown-item" href="?pages=rovtables&table=3">รอบชิงที่ 3</a></li>
                    <li><a class="dropdown-item" href="?pages=rovtables&table=2">Final</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $table = isset($_GET['table']) ? $_GET['table'] : '';
    if ($table == '2') {
        include 'tables/2.php';
    }
    if ($table == '3') {
        include 'tables/3.php';
    }
    if ($table == '4') {
        include 'tables/4.php';
    }
    if ($table == '8') {
        include 'tables/8.php';
    }
    if ($table == '16') {
        include 'tables/16.php';
    }
    if ($table == '32' || $table == '') {
        include 'tables/32.php';
    }
    ?>
</div>

<style>
    .col-md-2 {
        width: 15%;
        font-family: kanit;
        margin-left: 12px;
    }

    .title-tabeltour {
        font-family: kanit;
        width: 300px;
    }

    .dropdown-rovtable {
        font-family: kanit;
        width: 700px;
    }

    @media screen and (max-width: 992px) {
        .col-md-2 {
            width: 94%;
            margin-left: 12px;
        }
    }
</style>