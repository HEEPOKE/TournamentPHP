<?php

if ($imglogo_team == '') {
    $imglogo_team = 'no-image.jpg';
}

?>

<form action="Services/AddteamService.php?team_id=<?php echo $team_id; ?>" method="POST" enctype="multipart/form-data">
    <div class="profile-pic pic-top">
        <a>
            <img src="imglogo_team/<?php echo $imglogo_team; ?>" id="output" class="rounded-circle backimg" alt="" />
            <input class="fileup" id="imglogo_team" name="imglogo_team" type="file" accept="image/.png, .jpg, .jpeg" onchange="loadFile(event)" />
            <div class="profile-pic2 pic-top2">
                <img src="assets/icons/camera.png" class="rounded-circle spanimg bottomright pointer" alt="" onclick="$('#imglogo_team').click();" />
            </div>
        </a>
    </div>
    <div class="img-proflie-detail">
        ขนาดไฟล์รูปภาพ 500*500 (px)
    </div>
    <div class="form-group text-white mt-3">
        <div class="row mb-3">
            <label for="team_name" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">ชื่อทีม : </label>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <input type="text" class="form-control form-control-sm" id="team_name" name="team_name" value="<?php echo $team_name; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="contt_facebook" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">Facebook : </label>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <input type="text" class="form-control form-control-sm" id="contt_facebook" name="contt_facebook" value="<?php echo $facebook; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="contt_tiktok" class="col-lg-4 col-md-4 col-sm-5 col-form-label text-right">TikTok : </label>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <input type="text" class="form-control form-control-sm" id="contt_tiktok" name="contt_tiktok" value="<?php echo $tiktok; ?>">
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center mb-3">
        <div class="col-lg-3 col-md-5">
            <button class="btn btn-success" onclick="sizes()" type="submit">ยืนยัน</button>
        </div>
        <div class="col-lg-3 col-md-5 ">
            <button class="btn btn-danger" type="button" onclick="window.location.href='?pages=createteam&teamdetail'">ยกเลิก</button>
        </div>
    </div>
</form>

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

    .backimg {
        width: 125px;
        height: 125px;
        background-size: cover;
        background-repeat: no-repeat;
        /* background-color: #fff; */
        background: transparent;
    }

    .img-proflie-detail {
        margin-top: 10px;
        font-size: 16px;
        color: darkgray;
    }

    @media screen and (max-width: 375px) {
        .img-proflie-detail {
            margin-top: -40px;
            margin-left: -6px;
            font-size: 16px;
            color: darkgray;

        }
    }


    @media screen and (max-width: 767px) {
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
            margin-top: 6px;
            font-size: 16px;
            color: darkgray;
            margin-left: -6px;
        }



    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    ///เช้ค width height
    var _URL = window.URL || window.webkitURL;
    $('#imglogo_team').change(function(e) {
        var file, img;

        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {

                if (this.width != this.height) {
                    alert("ภาพควรเป็นสี่เหรี่ยมจัตุรัสและมีขนาดอย่างน้อย 500px x 500px");
                    location.reload();
                }else if(this.width < 500 && this.height < 500){
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