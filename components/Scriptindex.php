<script>
  $('#topheader .navbar-nav a').on('click', function() {
    $('#topheader .navbar-nav').find('li.active').removeClass('active');
    $(this).parent('li').addClass('active');
  });
</script>
<script>
  function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
    ele.onKeyPress = vchar;
  }
</script>
<script>
  var loadFile = function(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
  };
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
  <?php
  if (isset($_SESSION['error'])) {
    echo '$("#exampleModalCenter").modal("show");';
    unset($_SESSION['error']);
  }
  ?>
</script>
<script>
    <?php
    if (isset($_SESSION['img'])) {
        echo '$("#imgModalCenter").modal("show");';
        unset($_SESSION['img']);
    }
    ?>
</script>