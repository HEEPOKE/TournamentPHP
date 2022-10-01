<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">เพิ่มข้อมูลทีม</h1>

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
                        <h2 class="card-title">เพิ่มข้อมูลทีม</h2>
                    </div>

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="card-body text-center">
                                <div class="mt-2">
                                    <form action="Services/AddteamService.php" method="POST" enctype="multipart/form-data">
                                        <div class="profile-pic pic-top">
                                            <a>
                                                <img src="assets/icons/white.jpg" id="output" width="200" class="rounded-circle backimg" alt="" />
                                                <input class="fileup" id="imglogo_team" name="imglogo_team" type="file" onchange="loadFile(event)" />
                                                <div class="profile-pic2  pic-top2">
                                                    <a>
                                                        <img src="assets/icons/camera.png" onclick="$('#imglogo_team').click();" class="rounded-circle backimg" alt="" />
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="form-group text-white mt-5">
                                            <div class="row mb-3">
                                                <label for="team_name" class="col-sm-4 col-form-label text-right">ชื่อทีม : </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" id="team_name" name="team_name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="contt_facebook" class="col-sm-4 col-form-label text-right">Facebook : </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" id="contt_facebook" name="contt_facebook">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="contt_tiktok" class="col-sm-4 col-form-label text-right">TikTok : </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" id="contt_tiktok" name="contt_tiktok">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center ">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary  text-white col-3" type="submit">ยืนยัน</button>
                                                <button class="btn btn-danger  text-white col-3" type="button" onclick="history.back()">ยกเลิก</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
</section>