<?php $hashKey = md5($_SESSION["team_id"] ?? ''); ?>
<div class="modal fade" id="modallink" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center">เชิญสมาชิกเข้าร่วมทีม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="text-black">
                    ลิงค์ชวนเพื่อนเข้าทีม
                </label>
                <input class="form-control" type="text" value="https://esport.sortgaming.com/pages/register.php?key=<?php echo $hashKey; ?>" id="myInput"></input>
                <button onclick="myFunction()" class="btn text-white linkcopy">copy</button>
            </div>
        </div>
    </div>
</div>
<!------โค้ดก็อปปี้-------->
<script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
</script>