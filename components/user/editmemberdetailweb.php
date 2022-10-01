<?php

if ($img_profile == '') {
    $img_profile = 'no-image.jpg';
}

if (isset($_SESSION['acount_id'])) {
?>
    <form action="Services/AddmemberService.php?team_id=<?php echo $teamid; ?>&member_id=<?php echo $member_id ?>" method="POST" enctype="multipart/form-data">
        <div class="profile-pic pic-top">
            <img src="img_profile/<?php echo $img_profile; ?>" id="output" width="200" class="rounded-circle backimg" alt="" />
            <input class="fileup" id="img_profile" name="img_profile" accept="image/.png, .jpg, .jpeg" type="file" onchange="loadFile(event)" />
            <div class="profile-pic2  pic-top2">
                <img src="assets/icons/camera.png" class="rounded-circle spanimg bottomright pointer" alt="" onclick="$('#img_profile').click();" />
            </div>
        </div>
        <div class="img-proflie-detail">
            ขนาดไฟล์รูปภาพ 500*500 (px)
        </div>
        <div class="form-group text-white mt-5">
            <div class="row mb-3">
                <label for="name" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ชื่อ - นามสกุล : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="gender" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">เพศ : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <select class="form-select form-select-sm" id="gender" name="gender">
                        <?php if ($gender == '') { ?>
                            <option hidden selected>เพศ</option>
                        <?php } else { ?>
                            <option hidden selected value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                        <?php } ?>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                        <option value="เพศทางเลือก">เพศทางเลือก</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="age" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">อายุ : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" OnKeyPress="return chkNumber(this)" maxlength="2" id="age" name="age" value="<?php echo $age; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ที่อยู่ : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="address" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="name_game" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ชื่อในเกมส์ : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="name_game" name="name_game" value="<?php echo $name_game; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="role" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ตำเเหน่งที่เล่น : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <select class="form-select form-select-sm" id="role" name="role" required>
                        <?php if ($role == '') { ?>
                            <option hidden selected>ตำเเหน่งที่เล่น</option>
                        <?php } else { ?>
                            <option hidden selected value="<?php echo $role; ?>"><?php echo $role; ?></option>
                        <?php } ?>
                        <option value="ป่า">ป่า</option>
                        <option value="เลนมังกร">เลนมังกร</option>
                        <option value="เลนกลาง">เลนกลาง</option>
                        <option value="ออฟเลน">ออฟเลน</option>
                        <option value="ซัพพอร์ต">ซัพพอร์ต</option>
                        <?php

                        $spare = "SELECT * FROM member 
                        WHERE team_id = '$cspare' AND role = 'ตัวสำรอง'";

                        $result_spare = mysqli_query($conn, $spare);
                        $rowspare = mysqli_fetch_assoc($result_spare);

                        $spareteam = $rowspare['role'] ?? '';
                        ?>
                        <?php if ($spareteam == '') { ?>
                            <option value="ตัวสำรอง">ตัวสำรอง</option>
                        <?php } else { ?>
                            <option value="ตัวสำรอง" hidden>ตัวสำรอง</option>
                        <?php } ?>
                        <?php

                        $coach = "SELECT * FROM member 
                        WHERE team_id = '$ccoach' AND role = 'โค้ช'";

                        $result_coach = mysqli_query($conn, $coach);
                        $rowcoach = mysqli_fetch_assoc($result_coach);

                        $coachteam = $rowcoach['role'] ?? '';
                        ?>
                        <?php if ($coachteam == '') { ?>
                            <option value="โค้ช">โค้ช</option>
                        <?php } else { ?>
                            <option value="โค้ช" hidden>โค้ช</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cont_line" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ID Line : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="cont_line" name="cont_line" value="<?php echo $line; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cont_facebook" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">Facebook : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="cont_facebook" name="cont_facebook" value="<?php echo $facebook; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cont_tiktok" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">TikTok : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="cont_tiktok" name="cont_tiktok" value="<?php echo $tiktok; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cont_youtube" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">Youtube : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="cont_youtube" name="cont_youtube" value="<?php echo $youtube; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cont_ig" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">IG : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="cont_ig" name="cont_ig" value="<?php echo $ig; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="open_id" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">OPEN ID : </label>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="open_id" name="open_id" OnKeyPress="return chkNumber(this)" value="<?php echo $open_id; ?>" required>
                </div>
                <div class="col-md-1 l-taem">
                    <!-- Button trigger modal -->
                    <a class="" data-bs-toggle="modal" data-bs-target="#icons">
                        <img src="assets/icons/mark.png" class="img-id">
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="icons" tabindex="-1" aria-labelledby="iconsLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/icons/rovhui.jpg" class="img-icons">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center mb-3">
                <div class="col-lg-3 col-md-5">
                    <button class="btn btn-success" type="submit">ยืนยัน</button>
                </div>
                <div class="col-lg-3 col-md-5 ">
                    <button class="btn btn-danger" type="button" onclick="history.back()">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
<?php } ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    ///เช้ค width height
    var _URL = window.URL || window.webkitURL;
    $('#img_profile').change(function(e) {
        var file, img;

        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {

                if (this.width != this.height) {
                    alert("ภาพควรเป็นสี่เหรี่ยมจัตุรัสและมีขนาดอย่างน้อย 500px x 500px");
                    location.reload();
                } else if (this.width < 500 && this.height < 500) {
                    alert("ภาพควรเป็นสี่เหรี่ยมจัตุรัสและมีขนาดอย่างน้อย 500px x 500px");
                    location.reload();
                }

            };
            img.onerror = function() {
                alert("not a valid file: " + file.type);
            };
            img.src = _URL.createObjectURL(file);
        }

    });
</script>

<style>
    .btn-success,
    .btn-danger {
        border-radius: 50px;
    }

    .btn-success:hover {
        background-color: green;
    }

    .btn-danger:hover {
        background-color: red;
    }

    .img-icons {
        width: 100%;
        height: auto;
    }

    .img-id {
        width: 30px;
        height: 30px;
        margin-left: -20px;
    }

    .l-taem {
        text-align: left;
        margin-bottom: 5px;
        font-size: 20px;
    }

    .r-taem {
        text-align: right;
        margin-bottom: 5px;
        font-size: 20px;
    }

    .col-md-1 {
        text-align: left;
    }

    .img-proflie-detail {
        margin-top: 15px;
        font-size: 16px;
        color: darkgray;
    }



    @media screen and (max-width: 767px) {
        .img-proflie-detail {
            margin-top: 15px;
            font-size: 12px;
            margin-left: -6px;
            color: darkgray;
        }

        .l-taem {
            text-align: left;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .r-taem {
            text-align: right;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .col-md-4 {
            width: 40%;

        }

        .col-md-5 {
            width: 50%;
        }

        .col-md-1 {
            width: 10%;
        }

        .backimg {
            width: 125px;
            height: 125px;
            background-size: cover;
            background-repeat: no-repeat;
            /* background-color: #fff; */
            background: transparent;

        }

        .img-proflie-detail {
            margin-top: 5px;
            font-size: 14px;
            color: darkgray;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 100%;
        }

        .modeladdleader-moblie {
            padding: 5px;
        }

        @media screen and (max-width: 375px) {
            .img-proflie-detail {
                margin-top: 5px;
                font-size: 12px;
                color: darkgray;
            }

            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto;
                border: 1px solid #888;
                width: 100%;
            }

            .modeladdleader-moblie {
                padding: 5px;
            }

            .backimg {
                width: 125px;
                height: 125px;
                background-size: cover;
                background-repeat: no-repeat;
                /* background-color: #fff; */
                background: transparent;

            }

        }


    }
</style>