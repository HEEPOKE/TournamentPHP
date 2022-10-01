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
                    <img src="assets/icons/white.jpg" onclick="$('#imglogo_team').click();" id="output" width="200" class="rounded-circle backimg" alt="" />
                    <input class="fileup" id="imglogo_team" name="imglogo_team" type="file" onchange="loadFile(event)" />
                    <div class="profile-pic2  pic-top2">
                        <a>
                            <img src="assets/icons/camera.png" class="rounded-circle spanimg bottomright" alt="">
                        </a>
                    </div>
                </a>
            </div>
            <div class="form-group text-white">
                <div class="col-6">
                    <label for="name">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="col-6">
                    <label for="gender">เพศ</label>
                    <select class="form-select" id="gender" name="gender">
                        <option hidden selected>เพศ</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                        <option value="เพศทางเลือก">เพศทางเลือก</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="age">อายุ</label>
                    <input type="text" class="form-control" OnKeyPress="return chkNumber(this)" maxlength="2" name="age"
                        id="age">
                </div>
                <div class="col-6">
                    <label for="name_game">ชื่อในเกม</label>
                    <input type="text" class="form-control" name="name_game" id="name_game" required>
                </div>
                <div class="col-6">
                    <label for="role">ตำเเหน่งที่เล่น</label>
                    <select class="form-select" id="role" name="role">
                        <option hidden selected>ตำเเหน่งที่เล่น</option>
                        <option value="ป่า">ป่า</option>
                        <option value="เลนมังกร">เลนมังกร</option>
                        <option value="เลนกลาง">เลนกลาง</option>
                        <option value="ออฟเลน">ออฟเลน</option>
                        <option value="ซัพพอร์ต">ซัพพอร์ต</option>
                        <option value="ตัวสำรอง">ตัวสำรอง</option>
                        <option value="โค้ช">โค้ช</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="address">ที่อยู่</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="col-6">
                    <label for="contt_line">ID Line</label>
                    <input type="text" class="form-control" name="contt_line" id="contt_line">
                </div>
                <div class="col-6">
                    <label for="contt_facebook">Facebook</label>
                    <input type="text" class="form-control" id="contt_facebook" name="contt_facebook">
                </div>
                <div class="col-6">
                    <label for="contt_tiktok">TikTok</label>
                    <input type="text" class="form-control" id="contt_tiktok" name="contt_tiktok">
                </div>
                <div class="col-6">
                    <label for="contt_youtube">Youtube</label>
                    <input type="text" class="form-control" name="contt_youtube" id="contt_youtube">
                </div>
                <div class="col-6">
                    <label for="contt_ig">IG</label>
                    <input type="text" class="form-control" name="contt_ig" id="contt_ig">
                </div>
                <div class="col-6">
                    <label for="open_id">Open ID</label>
                    <input type="text" class="form-control" name="open_id" id="open_id" required>
                    <a href="assets/icons/rovhui.jpg"><img src="assets/icons/mark.png"></a>
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
