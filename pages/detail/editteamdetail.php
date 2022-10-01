<?php

$team_id = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

$sql = "SELECT * FROM team WHERE team_id = '" . $_SESSION["team_id"] . "' OR team_id = '$team_id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION["team_id"] = $row['team_id'] ?? '';
$imglogo_team = $row['imglogo_team'] ?? '';
$team_name = $row['team_name'] ?? '';
$facebook = $row['contt_facebook'] ?? '';
$tiktok = $row['contt_tiktok'] ?? '';

?>
<div class="card-body text-center">
    <div class="text-white float-end">
        <button class="btn PP" disabled>
            <span>
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </span>
            แก้ไขข้อมูลทีม
        </button>
    </div>
    <div class="mt-2">
        <div id="editteamd-web">
            <?php include 'components/Modals.php' ?>
            <?php include 'components/user/editteamdetailweb.php'; ?>
        </div>
    </div>
</div>