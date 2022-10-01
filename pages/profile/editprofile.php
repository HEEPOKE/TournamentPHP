<div class="container-login100">
	<div class="wrap-login100">
		<form action="../Services/ChangeprofileService.php" method="POST" class="login100-form validate-form">
			<span class="login100-form-logo">
				<i class="rounded-circle logologin"></i>
			</span>
			<span class="login100-form-title p-b-34 p-t-27" style="opacity: 100% !important;">
				เเก้ไขโปรไฟล์
			</span>
			<div class="validate-input" data-validate="Enter username">
				<div>
					<span class="focus-input100"><i class="fa fa-user"></i></span>
				</div>
				<input class="input100 input-regis-user" type="text" id="username" name="username" value="<?php echo $username; ?>">
			</div>
			<p>
			<div class="validate-input" data-validate="Enter mail">
				<div>
					<span class="focus-input100"><i class="fa fa-envelope"></i></span>
				</div>
				<input class="input100 input-regis-email" type="email" id="mail" name="mail" value="<?php echo $mail; ?>" title="Email Address !">
			</div>
			<p>
			<div class="validate-input" data-validate="Enter tel">
				<div>
					<span class="focus-input100"><i class="fa fa-phone"></i></span>
				</div>
				<input class="input100 input-regis-email" type="text" id="tel" name="tel" OnKeyPress="return chkNumber(this)" maxlength="10" value="<?php echo $tel; ?>">
			</div>
			<p>
			<div class="container-login100-form-btn">
				<button type="submit" class="login100-form-btn">
					ยืนยัน
				</button>
			</div>
		</form>
		<div class="container-login100-form-btn">
			<button class="login100-form-btn" onclick="window.location.href='profile.php'">
				กลับหน้าโปรไฟล์
			</button>
		</div>
	</div>
</div>