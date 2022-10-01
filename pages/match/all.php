<?php include 'pages/queryteammatch/AB32.php'; ?>
<?php include 'pages/queryteammatch/A8.php'; ?>
<?php include 'pages/queryteammatch/B8.php'; ?>
<?php include 'pages/queryteammatch/A4.php'; ?>
<?php include 'pages/queryteammatch/B4.php'; ?>
<?php include 'pages/queryteammatch/A2.php'; ?>
<?php include 'pages/queryteammatch/B2.php'; ?>
<?php include 'pages/queryteammatch/Final.php'; ?>


<?php $aA1 = iconv_substr($nameteamaA1 ?? '', 0, 18, 'UTF-8');
$aA2 = iconv_substr($nameteamaA2 ?? '', 0, 18, 'UTF-8');
$aA3 = iconv_substr($nameteamaA3 ?? '', 0, 18, 'UTF-8');
$aA4 = iconv_substr($nameteamaA4 ?? '', 0, 18, 'UTF-8');
$aA5 = iconv_substr($nameteamaA5 ?? '', 0, 18, 'UTF-8');
$aA6 = iconv_substr($nameteamaA6 ?? '', 0, 18, 'UTF-8');
$aA7 = iconv_substr($nameteamaA7 ?? '', 0, 18, 'UTF-8');
$aA8 = iconv_substr($nameteamaA8 ?? '', 0, 18, 'UTF-8');

$bA1 = iconv_substr($nameteambA1 ?? '', 0, 18, 'UTF-8');
$bA2 = iconv_substr($nameteambA2 ?? '', 0, 18, 'UTF-8');
$bA3 = iconv_substr($nameteambA3 ?? '', 0, 18, 'UTF-8');
$bA4 = iconv_substr($nameteambA4 ?? '', 0, 18, 'UTF-8');
$bA5 = iconv_substr($nameteambA5 ?? '', 0, 18, 'UTF-8');
$bA6 = iconv_substr($nameteambA6 ?? '', 0, 18, 'UTF-8');
$bA7 = iconv_substr($nameteambA7 ?? '', 0, 18, 'UTF-8');
$bA8 = iconv_substr($nameteambA8 ?? '', 0, 18, 'UTF-8');

$aB1 = iconv_substr($nameteamaB1 ?? '', 0, 18, 'UTF-8');
$aB2 = iconv_substr($nameteamaB2 ?? '', 0, 18, 'UTF-8');
$aB3 = iconv_substr($nameteamaB3 ?? '', 0, 18, 'UTF-8');
$aB4 = iconv_substr($nameteamaB4 ?? '', 0, 18, 'UTF-8');
$aB5 = iconv_substr($nameteamaB5 ?? '', 0, 18, 'UTF-8');
$aB6 = iconv_substr($nameteamaB6 ?? '', 0, 18, 'UTF-8');
$aB7 = iconv_substr($nameteamaB7 ?? '', 0, 18, 'UTF-8');
$aB8 = iconv_substr($nameteamaB8 ?? '', 0, 18, 'UTF-8');

$bB1 = iconv_substr($nameteambB1 ?? '', 0, 18, 'UTF-8');
$bB2 = iconv_substr($nameteambB2 ?? '', 0, 18, 'UTF-8');
$bB3 = iconv_substr($nameteambB3 ?? '', 0, 18, 'UTF-8');
$bB4 = iconv_substr($nameteambB4 ?? '', 0, 18, 'UTF-8');
$bB5 = iconv_substr($nameteambB5 ?? '', 0, 18, 'UTF-8');
$bB6 = iconv_substr($nameteambB6 ?? '', 0, 18, 'UTF-8');
$bB7 = iconv_substr($nameteambB7 ?? '', 0, 18, 'UTF-8');
$bB8 = iconv_substr($nameteambB8 ?? '', 0, 18, 'UTF-8'); ?>

<div class="">
    <div class="matchbody_all">
        <!-- สายA รอบ16ทีม -->
        <div class="row mb-2 ">
            <div><br></div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_2">
                    <div class="slot_2 slot--horizontal_2">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aA1; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bA1; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_10">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aA2; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bA2; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_2">
                    <div class="slot_2 slot--horizontal_2">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aA3; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bA3; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_10">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aA4; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bA4; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_2">
                    <div class="slot_2 slot--horizontal_2">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aA5; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bA5; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_10">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aA6; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bA6; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_2">
                    <div class="slot_2 slot--horizontal_2">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aA7; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bA7; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--bottom_10">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aA8; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bA8; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายA รอบ8ทีม -->
        <div class="row mb-2 m-top ">
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--bottom_5">
                    <div class="slot_2 slot--horizontal_4">
                        <div class="slot_2 slot--top_3">
                            <div class="team_2 team--home_2">
                                <p class="team__nameall"><?php echo $nameteamaA1_4; ?></p>
                            </div>
                            <div class="team_2 team--away_2 team--winner_2">
                                <p class="team__nameall"><?php echo $nameteambA1_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--bottom_6">
                    <div class="slot_2 slot--top_3">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaA2_4; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambA2_4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--bottom_5">
                    <div class="slot_2 slot--horizontal_4">
                        <div class="slot_2 slot--top_3">
                            <div class="team_2 team--home_2">
                                <p class="team__nameall"><?php echo $nameteamaA3_4; ?></p>
                            </div>
                            <div class="team_2 team--away_2 team--winner_2">
                                <p class="team__nameall"><?php echo $nameteambA3_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--bottom_6">
                    <div class="slot_2 slot--top_3">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaA4_4; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambA4_4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายA รอบ4ทีม -->
        <div class="row mb-2 m-top lr2">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="slot_2 slot--bottom_7">
                    <div class="slot_2 slot--top_3">
                        <div class="slot_2 slot--horizontal_8">
                            <div class="slot_2 slot--top_3">
                                <div class="team_2 team--home_2">
                                    <p class="team__nameall"><?php echo $nameteamaA1_2; ?></p>
                                </div>
                                <div class="team_2 team--away_2 team--winner_2">
                                    <p class="team__nameall"><?php echo $nameteambA1_2; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 lr">
                <div class="slot_2 slot--bottom_8">
                    <div class="slot_2 slot--top_5">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaA2_2; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambA2_2; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายA รอบ2ทีม -->
        <div class="row g-5 mb-2 m-top lr1">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="slot_2 slot--top_4">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $nameteamaAFinal; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $nameteambAFinal; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- รอบชิงชนะเลิศ -->
        <div class="row g-5 mb-2 m-top lr1">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="slot_2 slot--center_2">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $nameteamaFinal; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $nameteambFinal; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="team_2 team--home_2">
                    <p class="team__nameall"><?php echo $nameteama3rd; ?></p>
                </div>
                <div class="team_2 team--away_2 team--winner_2">
                    <p class="team__nameall"><?php echo $nameteamb3rd; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="team_3 BORZNE">
                    <p class="team__nameall">BROZNE</p>
                </div>
            </div>
        </div>
        <!-- สายB รอบ2ทีม -->
        <div class="row g-5 mb-2 m-top lr1">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="slot_2 slot--center_3">
                    <div class="slot_2 slot--bottom_9">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaBFinal; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambBFinal; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายB รอบ4ทีม -->
        <div class="row g-5 mb-2 m-top lr2">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="slot_2 slot--top_4">
                    <div class="slot_2 slot--horizontal_7">
                        <div class="slot_2 slot--bottom_3">
                            <div class="team_2 team--home_2">
                                <p class="team__nameall"><?php echo $nameteamaB1_2; ?></p>
                            </div>
                            <div class="team_2 team--away_2 team--winner_2">
                                <p class="team__nameall"><?php echo $nameteambB1_2; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 lr">
                <div class="slot_2 slot--top_4">
                    <div class="slot_2 slot--bottom_3">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaB2_2; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambB2_2; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายB รอบ8ทีม -->
        <div class="row g-5 mb-2 m-top">
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--top_6">
                    <div class="slot_2 slot--horizontal_5">
                        <div class="slot_2 slot--bottom_3">
                            <div class="team_2 team--home_2">
                                <p class="team__nameall"><?php echo $nameteamaB1_4; ?></p>
                            </div>
                            <div class="team_2 team--away_2 team--winner_2">
                                <p class="team__nameall"><?php echo $nameteambB1_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--top_7">
                    <div class="slot_2 slot--bottom_3">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaB2_4; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambB2_4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--top_6">
                    <div class="slot_2 slot--horizontal_5">
                        <div class="slot_2 slot--bottom_3">
                            <div class="team_2 team--home_2">
                                <p class="team__nameall"><?php echo $nameteamaB3_4; ?></p>
                            </div>
                            <div class="team_2 team--away_2 team--winner_2">
                                <p class="team__nameall"><?php echo $nameteambB3_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box4">
                <div class="slot_2 slot--top_7">
                    <div class="slot_2 slot--bottom_3">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $nameteamaB4_4; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $nameteambB4_4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- สายB รอบ16ทีม -->
        <div class="row  mb-2 m-top">
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="slot_2 slot--horizontal_9">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aB1; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bB1; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aB2; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bB2; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="slot_2 slot--horizontal_9">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aB3; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bB3; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aB4; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bB4; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="slot_2 slot--horizontal_9">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aB5; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bB5; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aB6; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bB6; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="slot_2 slot--horizontal_9">
                        <div class="team_2 team--home_2">
                            <p class="team__nameall"><?php echo $aB7; ?></p>
                        </div>
                        <div class="team_2 team--away_2 team--winner_2">
                            <p class="team__nameall"><?php echo $bB7; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-12 box3">
                <div class="slot_2 slot--top_8">
                    <div class="team_2 team--home_2">
                        <p class="team__nameall"><?php echo $aB8; ?></p>
                    </div>
                    <div class="team_2 team--away_2 team--winner_2">
                        <p class="team__nameall"><?php echo $bB8; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    p {
        padding: .5em;
        height: 2em;
        text-align: center;
    }

    .matchbody_all {
        width: 1300px;
    }

    .lr2 {
        margin-left: 180px;
    }

    .lr2 .lr {
        margin-left: 330px;
    }

    .lr1 {
        margin-left: 500px;
    }

    .container1 .row .col-lg-1 {
        width: 159px;
    }

    .m-top {
        padding-top: 100px;
    }

    .box3 {
        width: 160px;
        margin-left: -5px;
    }

    .box4 {
        width: 260px;
        margin-left: 42px;
    }
</style>