<?php
$sql = "SELECT * FROM url_hightlight";
$res_hightlight = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res_hightlight);

?>
<div class="container">
    <label class="title-tabeltour">
        <h2 class="text-white">ไฮไลท์หลังแข่ง</h2>
    </label>
    <div class="row-12">
        <?php echo $row['url'] ?>
    </div>
</div>
</div>

<style>
    iframe {
        margin-left: 10%;
        margin-right: 10%;
        width: 80%;
        height: 600px;
    }

    .text-white {
        font-family: kanit;
    }

    @media screen and (max-width: 992px) {
        iframe {
            margin-left: 10%;
            margin-right: 10%;
            width: 80%;
            height: 250px;
        }
    }
</style>