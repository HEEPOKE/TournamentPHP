<?php
session_start();
require('database/client.php');

$login = isset($_GET['login']) ? $_GET['login'] : '0';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/Linkbootstrap.php'; ?>
    <?php include 'components/user/Headindex.php'; ?>
</head>
<style>
    <?php include 'index.css'; ?>
</style>

<body class="layout-fixed bgcolor01">
    <div class="">
        <div class="wrapper">
            <div class="content-wrapper">
                <!-- login -->
                <?php include 'components/Head.php'; ?>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">แจ้งเตือน</h5>
                            </div>
                            <div class="modal-body">
                                บัญชีผู้ใช้หรือรหัสผ่านผิด กรุณากรอกใหม่
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- โลโก้กลางเว็บ -->
                <div>
                    <img src="assets\icons\logo sgm esport2.png" alt="Sortgaming" class="Biglogo">
                </div>
                <div>
                    <img src="assets\icons\new ชื่อรายการ.png" class="text-tour" alt="">
                </div>
                <?php include 'pages/home.php'; ?>
                <?php
                $pages = isset($_GET['pages']) ? $_GET['pages'] : '';

                switch ($pages) {
                    case 'createteam':
                        include 'pages/createteam.php';
                        break;
                    case 'rovmatch':
                        include 'pages/rovmatch.php';
                        break;
                    case 'rovtables':
                        include 'pages/rovtables.php';
                        break;
                    case 'rovteam':
                        include 'pages/rovteam.php';
                        break;
                    case 'rule':
                        include 'pages/rule.php';
                        break;
                    case 'hightlightmatch':
                        include 'pages/hightlightmatch.php';
                        break;
                }
                ?>
                <?php include 'components/Bootstrapscript.php'; ?>
                <?php include 'components/Scriptindex.php'; ?>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>