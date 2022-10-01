<?php

$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";

$sql = "SELECT * FROM member as b
INNER JOIN contact as c ON c.member_id = b.member_id
INNER JOIN acount as e ON e.member_id = b.member_id
WHERE e.member_id = '" . $member_id . "'";

$result = mysqli_query($conn, $sql);
$rowmember = mysqli_fetch_assoc($result);

$img_profile = $rowmember['img_profile'] ?? '';
$name = $rowmember['name'] ?? '';
$age = $rowmember['age'] ?? '';
$gender = $rowmember['gender'] ?? '';
$address = $rowmember['address'] ?? '';
$name_game = $rowmember['name_game'] ?? '';
$role = $rowmember['role'] ?? '';
$line = $rowmember['cont_line'] ?? '';
$facebook = $rowmember['cont_facebook'] ?? '';
$tiktok = $rowmember['cont_tiktok'] ?? '';
$youtube = $rowmember['cont_youtube'] ?? '';
$ig = $rowmember['cont_ig'] ?? '';
$open_id = $rowmember['Open_id'] ?? '';
$username = $rowmember['username'] ?? '';

if ($img_profile == '') {
    $img_profile = 'no-image.jpg';
}
if (isset($_SESSION['acount_id'])) {
?>
    <div class="card-body justify-content-center">
        <div class="text-white float-end">
            <span>
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </span>
            <a type="button" disabled>ข้อมูลสมาชิก</a>
        </div>
        <div class="profile-pic pic-top">
            <img src="img_profile/<?php echo $img_profile; ?>" id="output" width="200" class="rounded-circle backimg" alt="" />
        </div>
        <div class="mt-2">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">ชื่อ-สกุล : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $name; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">เพศ : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $gender; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">อายุ : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $age; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">ที่อยู่ : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $address; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">ชื่อในเกม : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $name_game; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">ตำเเหน่งที่เล่น : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $role; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">ID Line : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $line; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">Facebook : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $facebook; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">Tiktok : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $tiktok; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">Youtube : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $youtube; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">IG : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $ig; ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 r-taem">Open_id : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 l-taem"><?php echo $open_id; ?></div>
            </div>
        </div>

        <?php if ($_SESSION['member_id'] == $member_id) { ?>
            <button class="btn text-white col-md-3" style="background-color: #ff7211; border-radius: 20px;" onclick="window.location.href='?pages=createteam&detail=editmemberdetail&member_id=<?php echo $member_id; ?>'">เเก้ไขข้อมูล</button>
        <?php } ?>
    </div>
<?php } ?>

<style>
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
        background: transparent;
    }

    .picc {
        width: 50px;
        height: 50px;
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px;
        background-color: transparent;
    }


    @media screen and (max-width: 992px) {


        .col-md-3 {
            width: auto;
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

        .col-md-3 {
            width: 45%;

        }

        .col-md-9 {
            width: 55%;
        }

        .backimg {
            width: 125px;
            height: 125px;
            background-size: cover;
            background-repeat: no-repeat;
            background: transparent;
        }
    }
</style>