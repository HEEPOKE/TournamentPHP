<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminSortgaming</title>
    <?php include '../components/Headlogin_regis.php'; ?>
</head>

<body class="layout-fixed bgcolor01">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="../Services/LoginService.php" method="POST" class="login100-form validate-form">
                    <span class="login100-form-logo">
                        <i class="rounded-circle logologin"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27" style="opacity: 100% !important;">
                        เข้าสู่ระบบหลังเขา
                    </span>
                    <div class="validate-input" data-validate="Enter username">
                        <div>
                            <span class="focus-input100"><i class="fa fa-user"></i></span>
                        </div>
                        <input class="input100 input-regis-user" type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้" required>
                    </div>
                    <p>
                    <div class="validate-input" data-validate="Enter password">
                        <div>
                            <span class="focus-input100"><i class="fa fa-unlock"></i></span>
                        </div>
                        <input class="input100 input-regis-pass" type="password" id="password" name="password" minlength="8" placeholder="กรอกรหัสผ่าน" required>
                    </div>
                    <p>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            เข้าสู่ระบบ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include '../components/Script.php'; ?>
</body>

</html>