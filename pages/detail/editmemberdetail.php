<?php
$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";
$teamid = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

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
$ccoach = $rowmember['team_id'] ?? '';

?>
<div class="card-body text-center">
    <div class="text-white float-end">
        <button class="btn PP" disabled>
            <span>
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </span>
            เพิ่มข้อมูลสมาชิก
        </button>
    </div>
    <div class="mt-2">
        <div id="editmember-web">
            <?php include 'components/Modals.php' ?>
            <?php include 'components/user/editmemberdetailweb.php'; ?>
        </div>
    </div>
</div>