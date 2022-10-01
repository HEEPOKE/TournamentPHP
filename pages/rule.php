<div class="container">
    <div class="rulepage">
        <div class="card-body">
            <?php
            $sql = "SELECT * FROM rule";
            $rule = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($rule);
            ?>

            <?php echo $row['rule_detail']; ?>
        </div>
    </div>
</div>


<style>
    pre {
        font-family: monospace;
        white-space: normal;
        margin: 1em 0;
    }

    .rulepage .card-body .card-body img {
        float: right;
        height: 309px;
        margin-left: 135px;
        margin-right: 70px;
        max-width: 600px;
        margin-top: 30px;
    }

    @media screen and (max-width:1400px) {
        .rulepage .card-body img {
            float: right;
            height: auto;
            margin-right: 65px;
            margin-top: 40px;
            width: 550px;
        }


    }

    @media screen and (max-width:1200px) {
        .rulepage .card-body img {
            float: right;
            height: auto;
            margin-right: 50px;
            margin-top: 50px;
            width: 500px;
        }


    }

    @media screen and (max-width:992px) {
        .rulepage .card-body img {
            float: center;
            height: auto;
            /* margin-right: 45px; */
            /* margin-left: 55px; */
            margin-top: 50px;
            width: 450px;
        }


    }

    @media screen and (max-width:991px) {
        .rulepage .card-body img {
            float: center;
            height: auto;
            margin-right: 7%;
            margin-top: 50px;
            width: 90%;
        }


    }

    @media screen and (max-width:767px) {
        .rulepage .card-body img {
            float: center;
            height: auto;
            margin-right: 3%;
            margin-top: 5%;
            width: 97%;

        }


    }
</style>