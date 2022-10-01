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
