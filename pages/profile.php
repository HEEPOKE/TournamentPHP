<?php
session_start();
require('../database/client.php');

$account_id = isset($_GET["account_id"]) ? $_GET["account_id"] : "";

$acount_id = $_SESSION['acount_id'] ?? '';

$sql = "SELECT * FROM acount 
WHERE acount_id = '$acount_id' OR acount_id = '$account_id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$username = $row['username'] ?? '';
$mail = $row['mail'] ?? '';
$tel = $row['tel'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>โปรไฟล์</title>
	<?php include '../components/Headlogin_regis.php'; ?>
</head>

<body class="layout-fixed bgcolor01">
	<div class="limiter">
		<?php
		$profile = isset($_GET['profile']) ? $_GET['profile'] : 'showprofile';

		switch ($profile) {
			case 'editprofile':
				include 'profile/editprofile.php';
				break;
			case 'resetpassword':
				include 'profile/resetpassword.php';
				break;
			default:
				include 'profile/showprofile.php';
				break;
		}
		?>
	</div>
	<?php include '../components/Script.php'; ?>
</body>

</html>