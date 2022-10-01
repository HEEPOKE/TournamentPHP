<div class="content-header">
    <div class="container-fluid">
        <?php if (isset($_SESSION['username'])) { ?>
            <div class="row">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <button class="text-white logbutton" onclick="location.href='pages/profile.php'">
                            ข้อมูลส่วนตัว
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="text-white logbutton" onclick="window.location.href='Services/LoginService.php?logout=1'">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            ออกจากระบบ
                        </button>
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <div class="nav">
                <div class="container-fluid">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="Services/LoginService.php" method="POST">
                            <div class="row login-head">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <input class="form-control form-control-sm" type="text" id="name" name="username" placeholder="Username" required="">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <input class="form-control form-control-sm" type="password" id="password" name="password" placeholder="Password" required="">
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <button class="btn btn-login-head btn-sm login-btn-home">เข้าสู่ระบบ</button>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<style>
    .navbar-toggle {
        background-color: #ff7211;
    }

    .login-head .col-md-6 {
        width: 35%;
    }

    .login-head .col-md-12 {
        width: 30%;
    }

    .btn-collapse {
        width: 55px;
        opacity: 0.9;
        margin-left: 90%;
    }

    .login-btn-home {
        border-radius: 20px;
    }
</style>