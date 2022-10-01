<?php
$sql2 = "SELECT * FROM rule WHERE rule_id = '1'";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">กฎการแข่งขัน</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="row justify-content-center">
            กฎการแข่งขัน
            </div>
            <form action="adminservices/RuleService.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center mt-2">
                    <textarea  cols="80" id="rule" name="rule" rows="10" type="submit" ><?php echo $row2["rule_detail"]; ?></textarea>
                </div>
                <div class="col-12">
                    <center class="mt-4"><button class="btn btn-success" style="width: 80px; height: 50px;">ยืนยัน</button>

                    </center>
                </div>
            </form>
        </div>
    </div>

</section>
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('rule', {
      width: '70%',
      height: 500,
      removeButtons: 'PasteFromWord'
    });
</script>