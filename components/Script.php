<script>
	$(".hover").mouseleave(
		function() {
			$(this).removeClass("hover");
		}
	);
</script>
<script>
	$('#topheader .navbar-nav a').on('click', function() {
		$('#topheader .navbar-nav').find('li.active').removeClass('active');
		$(this).parent('li').addClass('active');
	});
</script>
<script>
	function uploadimg() {
		document.getElementById("imglogo_team").click();
	}

	function showimg() {
		var file = document.getElementById("imglogo_team").files[0];
		var reader = new FileReader();
		reader.onloadend = function() {
			document.getElementById("previewimg").src = reader.result;
		}
		if (file) {
			reader.readAsDataURL(file);
		} else {
			document.getElementById("previewimg").src = "";
		}
	}
</script>
<script>
	function comparepassword() {
		var password = document.getElementById("password");
		var confirmpassword = document.getElementById("confirmpassword");

		if (password != confirmpassword) {
			alert("รหัสผ่านไม่ตรงกัน");
		} else {
			header("location:../");
		}
	}
</script>
<script>
	function chkNumber(ele) {
		var vchar = String.fromCharCode(event.keyCode);
		if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
		ele.onKeyPress = vchar;
	}
</script>