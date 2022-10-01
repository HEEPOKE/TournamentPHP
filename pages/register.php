<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<?php
	$key = isset($_GET["key"]) ? $_GET["key"] : "";
	include '../components/Headlogin_regis.php';
	?>
</head>

<body class="layout-fixed bgcolor01">
	<?php include '../components/acceptregis.php'; ?>
	<div class="limiter" id="regis" style="display: none;">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="../Services/RegisterService.php?key=<?php echo $key; ?>" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="rounded-circle logologin"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27" style="opacity: 100% !important;">
						สมัครสมาชิก
					</span>
					<div class="validate-input" data-validate="Enter username">
						<div>
							<span class="focus-input100"><i class="fa fa-user"></i></span>
						</div>
						<input class="input100 input-regis-user" type="text" id="username" name="username" placeholder= "ชื่อผู้ใช้" required>
					</div>
					<p>
					<div class="validate-input" data-validate="Enter password">
						<div>
							<span class="focus-input100"><i class="fa fa-unlock"></i></span>
						</div>
						<input class="input100 input-regis-pass" type="password" id="password" name="password" minlength="8" placeholder="รหัสผ่านขั้นต่ำ 8ตัว" required>
					</div>
					<p>
					<div class="validate-input" data-validate="Enter confirmpassword">
						<div>
							<span class="focus-input100"><i class="fa fa-unlock"></i></span>
						</div>
						<input class="input100 input-regis-pass" type="password" id="confirmpassword" name="confirmpassword" minlength="8" placeholder="ยืนยันรหัสผ่าน" required>
					</div>
					<p>
					<div class="validate-input" data-validate="Enter mail">
						<div>
							<span class="focus-input100"><i class="fa fa-envelope"></i></span>
						</div>
						<input class="input100 input-regis-email" type="email" id="mail" name="mail" placeholder="Email" title="Email Address !" required>
					</div>
					<p>
					<div class="validate-input" data-validate="Enter tel">
						<div>
							<span class="focus-input100"><i class="fa fa-phone"></i></span>
						</div>
						<input class="input100 input-regis-email" type="text" id="tel" name="tel" OnKeyPress="return chkNumber(this)" maxlength="10" placeholder="เบอร์โทรศัพท์" required>
					</div>
					<p>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							สร้างบัญชี
						</button>
					</div>
				</form>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" onclick="window.location.href='../'">
						ย้อนกลับ
					</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		function chkNumber(ele) {
			var vchar = String.fromCharCode(event.keyCode);
			if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
			ele.onKeyPress = vchar;
		}
	</script>
	<?php include '../components/Script.php'; ?>
</body>
</html>