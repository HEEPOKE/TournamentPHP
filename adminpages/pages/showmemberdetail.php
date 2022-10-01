<?php
$contactmember_id = isset($_GET["memberid"]) ? $_GET["memberid"] : "";

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">เเก้ไขข้อมูลผู้เล่น</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <?php
        $querymem = "SELECT * FROM acount as a
        INNER JOIN member as b ON a.member_id = b.member_id
        INNER JOIN contact as c ON c.member_id = b.member_id
        INNER JOIN team as d ON d.team_id = a.team_id
        WHERE b.member_id = '$contactmember_id'";

        $querymem = mysqli_query($conn, $querymem);
        $row = mysqli_fetch_assoc($querymem);

        $rowimg_profile = $row['img_profile'] ?? '';
        $rowname = $row['name'] ?? '';
        $rowgender = $row['gender'] ?? '';
        $rowage = $row['age'] ?? '';
        $rowaddress = $row['address'] ?? '';
        $rowname_game = $row['name_game'] ?? '';
        $rowrole = $row['role'] ?? '';
        $rowopen_id = $row['Open_id'] ?? '';
        $rowline = $row['cont_line'] ?? '';
        $rowfacebook = $row['cont_facebook'] ?? '';
        $rowtiktok = $row['cont_tiktok'] ?? '';
        $rowyoutube = $row['cont_youtube'] ?? '';
        $rowig = $row['cont_ig'] ?? '';
        $rowteam_id = $row['team_id'] ?? '';
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">เเก้ไขข้อมูลผู้เล่น : <?php echo $rowname; ?></h2>
                        <button class="btn btn-primary text-white col-2 edit-password" type="button" data-target="#modal-default-resetpassmember<?php echo $contactmember_id; ?>" data-toggle="modal">
                            เเก้ไขรหัสผ่านผู้เล่น
                        </button>
                        <button class="btn btn-warning text-white col-2 float-end" type="button" data-target="#modal-default-editmember<?php echo $contactmember_id; ?>" data-toggle="modal">
                            เเก้ไขข้อมูลผู้เล่น
                        </button>
                    </div>
                    <?php include '../components/admin/Editmembermodal.php'; ?>
                    <?php include '../components/admin/Resetpasswordmodal.php'; ?>
                    <?php include '../components/admin/Resetmodal.php'; ?>
                    <div class="card-body">
                        <div class="profile-pic pic-top">
                            <a>
                                <img src="../img_profile/<?php echo $rowimg_profile; ?>" onclick="$('#imglogo_profile').click();" id="output" width="200" class="rounded-circle backimg" alt="" />
                                <input class="fileup" id="img_profile" name="img_profile" type="file" onchange="loadFile(event)" />
                            </a>
                        </div>
                        <div class="form-group text-white mt-5">
                            <div class="row mb-3">
                                <label for="name" class="col-lg-6 col-form-label text-right">ชื่อ : <?php echo $rowname; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="contt_facebook" class="col-lg-6 col-form-label text-right">เพศ : <?php echo $rowgender; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="age" class="col-lg-6 col-form-label text-right">อายุ : <?php echo $rowage; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-lg-6 col-form-label text-right">ที่อยู่ : <?php echo $rowaddress; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="name_game" class="col-lg-6 col-form-label text-right">ชื่อในเกม : <?php echo $rowname_game; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="role" class="col-lg-6 col-form-label text-right">ตำเเหน่งที่เล่น : <?php echo $rowrole; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="cont_line" class="col-lg-6 col-form-label text-right">ID Line : <?php echo $rowline; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="cont_facebook" class="col-lg-6 col-form-label text-right">Facebook : <?php echo $rowfacebook; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="cont_tiktok" class="col-lg-6 col-form-label text-right">Tiktok : <?php echo $rowtiktok; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="cont_youtube" class="col-lg-6 col-form-label text-right">Youtube : <?php echo $rowyoutube; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="cont_ig" class="col-lg-6 col-form-label text-right">Instragram : <?php echo $rowig; ?></label>
                            </div>
                            <div class="row mb-3">
                                <label for="Open_id" class="col-lg-6 col-form-label text-right">Open_id : <?php echo $rowopen_id; ?></label>
                            </div>
                            <center>
                                <button class="btn btn-danger col-2" data-target="#modal-default-deletemember<?php echo $contactmember_id; ?>" data-toggle="modal">
                                    ลบผู้เล่น
                                </button>
                            </center>
                            <?php include '../components/admin/Deletemembermodal.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<style>
    .edit-password {
        margin-left: 788px;
    }

    .text-right {
        text-align: center !important;
        margin-left: 397px;
    }
</style>