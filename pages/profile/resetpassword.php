<div class="container-login100">
	<div class="wrap-login100">
		<form action="../Services/ResetpasswordService.php" method="POST" class="login100-form validate-form">
			<span class="login100-form-logo">
				<i class="rounded-circle logologin"></i>
			</span>
			<span class="login100-form-title p-b-34 p-t-27" style="opacity: 100% !important;">
				รีเซ็ทรหัสผ่าน
			</span>
			<div class="validate-input" data-validate="Enter password">
				<div>
					<span class="focus-input100"><i class="fa fa-unlock"></i></span>
				</div>
				<input class="input100 input-regis-pass" type="password" id="password" name="password" minlength="8" placeholder="กรอกรหัสผ่านขั้นต่ำ 8 ตัว">
			</div>
			<p>
			<div class="validate-input" data-validate="Enter confirmpassword">
				<div>
					<span class="focus-input100"><i class="fa fa-unlock"></i></span>
				</div>
				<input class="input100 input-regis-pass" type="password" id="confirmpassword" name="confirmpassword" minlength="8" placeholder="ยืนยันรหัสผ่าน">
			</div>
			<p>
			<div class="container-login100-form-btn">
				<button type="submit" class="login100-form-btn">
				เเก้ไขรหัสผ่าน
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