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
        <form action="adminservices/updatetourAService.php" method="POST">
            <!-- <div class="container"> -->
            <!-- A1/8 -->
            <?php include 'pages/Tournament/A1.php' ?>
            <!-- A2/8 -->
            <?php include 'pages/Tournament/A2.php' ?>
            <!-- A3/8 -->
            <?php include 'pages/Tournament/A3.php' ?>
            <!-- A4/8 -->
            <?php include 'pages/Tournament/A4.php' ?>
            <!-- A5/8 -->
            <?php include 'pages/Tournament/A5.php' ?>
            <!-- A6/8 -->
            <?php include 'pages/Tournament/A6.php' ?>
            <!-- A7/8 -->
            <?php include 'pages/Tournament/A7.php' ?>
            <!-- A8/8 -->
            <?php include 'pages/Tournament/A8.php' ?>
            <!-- </div> -->
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <button type="submit" id="AAA" class="btn btn-success text-white col-lg-12 col-md-12" style="display: none;">บันทึก</button>
        </form>
                    <button type="button" id="AA" class="btn btn-warning text-white col-lg-12 col-md-12" onclick="QQ()" style="display: block;">เเก้ไข</button>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <button type="button" id="ZZZ" class="btn btn-danger text-white col-lg-12 col-md-12" onclick="setClose()" style="display: none;">ยกเลิก</button>
                </div>
                <div class="col-lg-4 col-md-3"></div>
            </div>
</section>
<?php include 'pages/Tournament/tourA.php' ?>