<?php

$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";
$sql = $sql = "SELECT * FROM member as b
INNER JOIN contact as c ON c.member_id = b.member_id
INNER JOIN acount as e ON e.member_id = b.member_id
WHERE e.member_id = '" . $member_id . "'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$img_profile = $row['img_profile'] ?? '';
$name = $row['name'] ?? '';
$gender = $row['gender'] ?? '';
$age = $row['age'] ?? '';
$address = $row['address'] ?? '';
$name_game = $row['name_game'] ?? '';
$role = $row['role'] ?? '';
$line = $row['cont_line'] ?? '';
$facebook = $row['cont_facebook'] ?? '';
$tiktok = $row['cont_tiktok'] ?? '';
$youtube = $row['cont_youtube'] ?? '';
$ig = $row['cont_ig'] ?? '';
$open_id = $row['Open_id'] ?? '';

if ($img_profile == '') {
    $img_profile = 'no-image.jpg';
}
?>
<div class="card-body justify-content-center">
    <div class="text-white float-end">
        <span>
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </span>
        <a type="button">ข้อมูลหัวหน้าทีม</a>
    </div>
    <div class="profile-pic pic-top">
        <img src="img_profile/<?php echo $img_profile; ?>" class="rounded-circle backimg" alt="">
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
        <button class="btn text-white col-md-3" style="background-color: #ff6211; border-radius: 20px;" onclick="window.location.href='?pages=createteam&detail=addleader&member_id=<?php echo $member_id; ?>'">เเก้ไขข้อมูล</button>
    <?php } ?>
</div>

<style>
    .text-white{
        font-family: kanit;
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
    @media screen and (max-width: 1200px){
        .backimg{
            width: 130px;
            height: 130px;
            
        } 
    }

    @media screen and (max-width: 992px){
        .backimg{
            width: 110px;
            height: 110px;
            
        } 
    }
    @media screen and (max-width: 767px){
        .backimg{
            width: 100px;
            height: 100px;
        } 
    }
    @media screen and (max-width: 375px){
        .backimg{
            width: 90px;
            height: 90px;
        }
    }
    
    
      
    
   
    
   
    

    

    
</style>