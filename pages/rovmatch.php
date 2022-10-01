<div class="container" id="rovmate">
    <div class="dropdown col-md-2">


        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            $matchdd = isset($_GET['match']) ? $_GET['match'] : '';
            if ($matchdd == 'A') {
                echo "สาย A";
            }
            if ($matchdd == 'B') {
                echo "สาย B";
            }
            if ($matchdd == 'Final') {
                echo "รอบชิงชนะเลิศ";
            }
            if ($matchdd == 'all' || $matchdd == '') {
                echo "สายการเเข่งขัน";
            }

            ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="?pages=rovmatch&match=all">สายการแข่งขัน</a></li>
            <li><a class="dropdown-item" href="?pages=rovmatch&match=A">สาย A</a></li>
            <li><a class="dropdown-item" href="?pages=rovmatch&match=B">สาย B</a></li>
            <li><a class="dropdown-item" href="?pages=rovmatch&match=Final">รอบชิงชนะเลิศ</a></li>
        </ul>
    </div>

    <?php
    $match = isset($_GET['match']) ? $_GET['match'] : '';
    if ($match == 'A') {
        include 'match/matchA.php';
    }
    if ($match == 'B') {
        include 'match/matchB.php';
    }
    if ($match == 'Final') {
        include 'match/Final.php';
    }
    if ($match == 'all' || $match == '') {
        include 'match/all.php';
    }

    ?>
</div>

<style>
    .scroll-x {
        overflow-x: scroll;
        width: 100%;
        font-family: kanit;
    }

    .dropdown-toggle {
        font-family: 'Kanit';
    }

    .dropdown-item {
        font-family: 'Kanit';
    }

    #rovmate {
        display: block;
        font-family: 'Kanit';
    }

    @media screen and (max-width: 1200px) {
        #rovmate {
            display: none;
            font-family: kanit;
        }
    }
</style>