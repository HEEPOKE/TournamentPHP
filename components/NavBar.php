<div class="container-fluid menu-desktop ">

    <ul class="nav-desktop nav-justified">
        <li>
            <img class="img-logo-left-header" width="65" src="assets\icons\Logosortgaming01.png" alt="Logosortgaming">
        </li>
        <li>
            <a class=" nav-link  text-white comenu active " href="?page=home">หน้าหลัก</a>
        </li>
        <li>
            <a class="nav-link  text-white comenu " href="?page=rule">กฏกติกา</a>
        </li>
        <li>
            <a class="nav-link text-white comenu" href="?page=rovteam">ทีมที่เข้าเเข่งขัน</a>
        </li>
        <li>
            <a class="nav-link text-white comenu" href="?page=rovmatch">เเมตซ์การเเข่งขัน</a>
        </li>
        <li>
            <a class="nav-link text-white comenu" href="?page=rovtournament">สายการเเข่งขัน</a>
        </li>
        <li>
            <a class="nav-link  text-white comenu" href="?page=rovrank">อันดับ</a>
        </li>
        <li>
            <a class="nav-link  text-white comenu" href="?page=vdo">VDO</a>
        </li>
       
        <li>
            <img src="assets\icons\logo_arena_of_valor.png" width="120" class="img-logo-right-header" alt="Logosortgaming">
        </li>
    </ul>
</div>
<!--navbar responsive-->
<nav class="navbar-mobile navbar-expand-lg navbar-light bg-dark menu-mobile">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img class="img-logo-sgm-header" width="65" src="assets\icons\Logosortgaming01.png" alt="Logosortgaming">
            <img class="img-logo-sport-header" width="120" src="assets\icons\logo_arena_of_valor.png" alt="Logosortgaming">
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="navbar-brand text-white comenu" href="?page=home">หน้าหลัก</a>
                <a class="nav-link active text-white comenu" aria-current="page" href="?page=rule">กฏกติกา</a>
                <a class="nav-link text-white comenu" href="page=rule">ทีมที่เข้าเเข่งขัน</a>
                <a class="nav-link text-white comenu" href="?page=rovteam">เเมตซ์การเเข่งขัน</a>
                <a class="nav-link text-white comenu" href="?page=rovmatch">สายการเเข่งขัน</a>
                <a class="nav-link text-white comenu" href="?page=rovrank">อันดับ</a>
                <a class="nav-link text-white comenu" href="?page=vdo">VDO</a>
                <a class="nav-link text-white comenu disabled" href="Services/LogoutService.php" tabindex="-1" aria-disabled="true">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</nav>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("container-fluid menu-desktop");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

