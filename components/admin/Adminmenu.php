<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="?adminpages=dashboard" class="nav-link">Dashboard</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="adminservices/LogoutService.php">
                Log Out
            </a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link">
        <img src="assets/icons/Logosortgaming01.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sortgaming</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/icons/Logosortgaming01.png" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?adminpages=dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="?adminpages=tournamentA" class="nav-link">
                        <i class="nav-icon fa fa-trophy"></i>
                        <p>
                            ทัวร์นาเมนต์
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?adminpages=managestatus" class="nav-link">
                        <i class="nav-icon fa fa-check-circle"></i>
                        <p>
                            จัดการอนุมัติทีม
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?adminpages=manageteam" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            จัดการข้อมูลทีม
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?adminpages=editdatematch" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            จัดการรอบการแข่งขัน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?adminpages=matchcatch" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            การจัดการเเข่งขัน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?adminpages=editrule" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            แก้ไขกฎ
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                <a href="?adminpages=edithightlightmatch" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        ไฮไลท์หลังเเข่ง
                    </p>
                </a>
            </li> -->
            </ul>
        </nav>
    </div>
</aside>