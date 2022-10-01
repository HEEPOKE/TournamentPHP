<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tournament</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <button class="page1 btn-lg btn-secondary col-2" onclick="window.location.href='?adminpages=tournamentA'">สาย A</button>
        <button class="page1 btn-lg btn-secondary col-2" onclick="window.location.href='?adminpages=tournamentB'">สาย B</button>
    </div>
    <div class="card mt-2 mb-2">
        <form action="adminservices/updatetourBService.php" method="POST">
            <!-- <div class="container"> -->
            <!-- B1/8 -->
            <?php include 'pages/Tournament/B1.php' ?>
            <!-- B2/8 -->
            <?php include 'pages/Tournament/B2.php' ?>
            <!-- B3/8 -->
            <?php include 'pages/Tournament/B3.php' ?>
            <!-- B4/8 -->
            <?php include 'pages/Tournament/B4.php' ?>
            <!-- B5/8 -->
            <?php include 'pages/Tournament/B5.php' ?>
            <!-- B6/8 -->
            <?php include 'pages/Tournament/B6.php' ?>
            <!-- B7/8 -->
            <?php include 'pages/Tournament/B7.php' ?>
            <!-- B8/8 -->
            <?php include 'pages/Tournament/B8.php' ?>
            <!-- </div> -->
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <button type="submit" id="BBB" class="btn btn-success text-white col-lg-12  col-md-12" style="display: none;">บันทึก</button>
        </form>
                    <button type="button" id="BB" class="btn btn-warning text-white col-lg-12 col-md-12" onclick="GG()" style="display: block;">เเก้ไข</button>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <button type="button" id="QQQ" class="btn btn-danger text-white col-lg-12  col-md-12" onclick="setClose()" style="display: none;">ยกเลิก</button>
                </div>
                <div class="col-lg-4 col-md-3"></div>
    </div>
</section>
<?php include 'pages/Tournament/tourB.php' ?>