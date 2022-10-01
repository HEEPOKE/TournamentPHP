<div class="container-login100">
    <div class="wrap-login100">
        <span class="login100-form-logo">
            <i class="rounded-circle logologin"></i>
        </span>
        <span class="login100-form-title p-b-34 p-t-27" style="opacity: 100% !important;">
            ข้อมูลโปรไฟล์
        </span>
        <div class="row validate-input" data-validate="Enter username">
            <div class="col-lg-5 col-md-5 col-sm-6"><label class="text-label">ชื่อผู้ใช้งาน : </label></div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <p class="text-profile" id="username" name="username"><?php echo $username; ?></p>
            </div>
        </div>
        <div class="row validate-input" data-validate="Enter mail">
            <div class="col-lg-5 col-md-5 col-sm-6"><label class="text-label">Email : </label></div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <p class="text-profile" id="mail" name="mail"><?php echo $mail; ?></p>
            </div>
        </div>
        <div class="row validate-input" data-validate="Enter tel">
            <div class="col-lg-5 col-md-5 col-sm-6"><label class="text-label">เบอร์โทรศัพท์ : </label></div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <p class="text-profile" id="tel" name="tel" OnKeyPress="return chkNumber(this)" maxlength="10"><?php echo $tel; ?></p>
            </div>
        </div>
        <br>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="window.location.href='profile.php?profile=editprofile'">
                เเก้ไขโปรไฟล์
            </button>
            <button class="login100-form-btn" onclick="window.location.href='profile.php?profile=resetpassword'">
                เเก้ไขรหัสผ่าน
            </button>
            <button class="login100-form-btn" onclick="window.location.href='../'">
                กลับหน้าหลัก
            </button>
        </div>
    </div>
</div>
<style>
    .text-label {
        text-align: right;
        color: #ffffff;
        font-size: 18px;
        margin-right: -2px;
    }

    .text-profile {
        color: #ffffff;
        font-size: 18px;
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

.col-sm-6 {
    width: 46%;
    margin-left: -15px;

}



.backimg {
    width: 125px;
    height: 125px;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #fff;
}
}
</style>