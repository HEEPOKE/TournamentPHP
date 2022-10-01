<?php
session_start();
require('../database/client.php');

$member_id = isset($_GET["member_id"]) ? $_GET["member_id"] : "";
$teamid = isset($_GET["team_id"]) ? $_GET["team_id"] : "";

date_default_timezone_set("Asia/Bangkok");
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$name_game = $_POST['name_game'];
$role = $_POST['role'];
$facebook = $_POST['cont_facebook'];
$line = $_POST['cont_line'];
$tiktok = $_POST['cont_tiktok'];
$youtube = $_POST['cont_youtube'];
$ig = $_POST['cont_ig'];
$open_id = $_POST['open_id'];
$date = date("d.m.Y.H.i.s");
$imgfile = basename($_FILES["img_profile"]["name"]);
$imgtype = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
$new_imgname = $date . "_"  . $name  . "." . $imgtype;
$img_path = "../img_profile/";
$buildname = $img_path . $new_imgname;
$imgup = move_uploaded_file($_FILES["img_profile"]["tmp_name"], $buildname);

// $select = "SELECT * FROM member WHERE member_id = $member_id";
// $queryselect = $con->query($select);
// $rowselect = mysqli_fetch_assoc($queryselect);

// $path = "../img_profile/";
// $img = $rowselect['img_profile'] ?? '';

// $deleteimg = $path . $img;
// unlink($deleteimg);

if ($member_id != "") {
  if ($_FILES["img_profile"]["error"] == 4) {
    $updatemember = "UPDATE  member  SET 
  name = '$name',
  gender = '$gender',
  age = '$age',
  address = '$address',
  name_game = '$name_game',
  role = '$role',
  Open_id = '$open_id'
  WHERE member_id = '$member_id'";
  } else {
    $updatemember = "UPDATE  member  SET 
    img_profile = '$new_imgname',
      name = '$name',
      gender = '$gender',
      age = '$age',
      address = '$address',
      name_game = '$name_game',
      role = '$role',
      Open_id = '$open_id'
      WHERE member_id = '$member_id'";
  }

  $updatecontact = "UPDATE contact SET 
  cont_line = '$line',
  cont_facebook = '$facebook',
  cont_tiktok = '$tiktok',
  cont_youtube = '$youtube',
  cont_ig = '$ig'
  WHERE member_id = '$member_id'";

  if ($conn->query($updatemember) === TRUE && $conn->query($updatecontact) === TRUE) {
    $_SESSION['member_id '] = $member_id;
    header("Location: ../?pages=createteam&detail=memberdetail&member_id=" . $member_id);
  } else {
    echo "Error updating record: " . $conn->error;
  }
  exit();
} else if ($member_id == "") {

  if ($_FILES["img_profile"]["error"] == 4) {
    $memberinsert = "INSERT INTO member(`name`, gender, age, `address`, name_game, `role`, Open_id) 
    VALUES ('$name','$gender','$age','$address','$name_game','$role','$open_id')";
  } else {
    $memberinsert = "INSERT INTO member(img_profile, `name`, gender, age, `address`, name_game, `role`, Open_id) 
    VALUES ('$new_imgname','$name','$gender','$age','$address','$name_game','$role','$open_id')";
  }
  $insertcontact  = "INSERT INTO contact (cont_line, cont_facebook, cont_tiktok, cont_youtube, cont_ig)
      VALUES ('$line', '$facebook', '$tiktok', '$youtube', '$ig')";

  if ($conn->query($memberinsert) === TRUE && $conn->query($insertcontact) === TRUE) {

    $memberid = "SELECT * FROM member ORDER BY member_id DESC LIMIT 1";
    $resultmemberid = $conn->query($memberid);
    $rowmemberid = mysqli_fetch_assoc($resultmemberid);

    $upcontact2 = "SELECT *FROM contact ORDER BY contact_id DESC LIMIT 1";
    $resultupcontact2 = $conn->query($upcontact2);
    $rowupcontact2 = mysqli_fetch_assoc($resultupcontact2);

    $memberr_id = $rowmemberid['member_id'];
    $contact_id = $rowupcontact2['contact_id'];

    $upteamid = "UPDATE member SET team_id = '$teamid' 
    WHERE member_id = '$memberr_id'";

    $upacteamid = "UPDATE acount SET team_id = '$teamid'
    WHERE acount_id =  " . $_SESSION['acount_id'] . "";

    $queryupmember = "UPDATE contact SET member_id =  '$memberr_id' 
    WHERE contact_id =  '$contact_id'";

    $upaccount = "UPDATE acount SET member_id =  '$memberr_id' 
    WHERE acount_id =  '" . $_SESSION['acount_id'] . "'";

    if ($conn->query($upteamid) === TRUE && $conn->query($queryupmember) === TRUE && $conn->query($upaccount) === TRUE && $conn->query($upacteamid) === TRUE) {
      
      $team = "SELECT * FROM team WHERE team_id = '$teamid'";
      $resultteam = $conn->query($team);
      $rowteam = mysqli_fetch_assoc($resultteam);
      $team_name = $rowteam['team_name'] ?? '';

      $url        = 'https://notify-api.line.me/api/notify';
      $token      = 'AdpN4IDuemS1DG2pDI9YTVjgkwyqnLbhHxtskAbeIGK';
      $headers    = [
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer ' . $token
      ];
      $fields     =    "message=การสมัครใหม่ \nชื่อ : " . $name . "\nตำเเหน่ง : " . $role . "\nทีม : " . $team_name;
      echo $fields;
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      
      // var_dump($result);
      $result = json_decode($result, TRUE);
      $_SESSION['member_id'] = $memberr_id;
      header("Location: ../?pages=createteam&detail=memberdetail&member_id=" . $memberr_id);
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
  exit;
}
