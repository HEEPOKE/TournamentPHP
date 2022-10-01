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
$ccoach = $rowmember['team_id'] ?? '';

?>
<div class="card-body text-center">
    <div class="text-white float-end">
        <i class="fa fa-pencil" aria-hidden="true"></i>
        <a type="button">เพิ่มข้อมูลหัวหน้าทีม</a>
    </div>
    <div class="mt-2">
        <div id="addleader-web">
            <?php include 'components/Modals.php' ?>
            <?php include 'components/user/addleaderdetailweb.php'; ?>
        </div>
    </div>
</div>
<style>
    .text-white {
        font-family: kanit;
    }
</style>
<script>
    function chkNumber(ele) {
        var vchar = String.fromCharCode(event.keyCode);
        if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
        ele.onKeyPress = vchar;
    }
</script>