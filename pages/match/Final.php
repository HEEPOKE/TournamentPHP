<?php include 'pages/queryteammatch/Final.php'; ?>
<?php 
$nameteamaFinals = iconv_substr($nameteamaFinal, 0, 15, 'UTF-8');
$nameteambFinals = iconv_substr($nameteambFinal, 0, 15, 'UTF-8');
$nameteama3rds = iconv_substr($nameteama3rd, 0, 15, 'UTF-8');
$nameteamb3rds = iconv_substr($nameteamb3rd, 0, 15, 'UTF-8');
?>
<div class=""><br><br></div>
<div class="matchbody_3">
    <div class="final">
        <div class="slot_2 slot--vertical_2">
            <div class="row g-5 m-top lr2">
                <div class="col-4">
                    <div class="team_2 team--away team--winner rounded">
                        <p class="finalteam-a"><?php echo $scoreteamaFinal; ?></p>
                        <p class="team__name_3 final-a "><?php echo $nameteamaFinals; ?></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="imgfinal">
                        <img src="assets/icons/logo_champion_gold.png" alt="" width="400" height="300">
                    </div>
                </div>
                <div class="col-4">
                    <div class="team_2 team--away team--winner rounded ">
                        <p class="finalteam-b"><?php echo $scoreteambFinal; ?></p>
                        <p class="team__name_3 final-b"><?php echo $nameteambFinals; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slot_2 slot--vertical_3">
            <div class="row g-5 mb-2 lr1">
                <div class="col-6">
                    <div class="team_2 team--away team--winner rounded">
                        <p class="team__score"><?php echo $scoreteama3rd; ?></p>
                        <p class="team__name_3 team-final3"><?php echo $nameteama3rds; ?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="slot_2 slot--vertical_4">
            <div class="row g-5 mb-2 lr1">
                <div class="col-6">
                    <div class="team_3 place3 3rd place-tour">
                        <p class="team__name3rd">3rd place</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slot_2 slot--vertical_5">
            <div class="row g-5 mb-2 lr1">
                <div class="col-6">
                    <div class="team_2 team--away team--winner rounded">
                        <p class="team__score"><?php echo $scoreteamb3rd; ?></p>
                        <p class="team__name_2 teamB.3rd teamfinal-3"><?php echo $nameteamb3rds; ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .slot--vertical_5:before {
            border: 1px solid #666666;
            width: 1px;
            height: 55px;
            transform: translate(8550%, -5%);
        }



        .final {
            margin-left: 0px;
            margin-right: 120px;
            text-align: center;
        }

        .lr2 {
            margin-left: 240px;
        }

        .lr2 .lr {
            margin-left: 40px;
        }

        .lr1 {
            margin-left: 500px;
        }

        .final .row .col-lg-1 {
            width: 159px;
        }


        .box4 {
            width: 260px;
            margin-left: 50px;
        }

        .final .team__name,
        .final .team__score {
            /* padding: 15px; */
            /* display: flex; */
            align-items: center;
        }

        .final .team__name3rd {
            padding: 15px;
            /* display: flex; */
            align-items: center;
            margin-left: -32px;
        }


        .final .team__score2 {
            padding: 8px;
            /* display: flex; */
            align-items: center;
        }

        .final .team__score {
            border-left: 0px solid #909090;
            color: #d68819;
            flex: 0 0 60px;
            justify-content: center;
            /* width: 2px; */
            height: 69px;
            font-size: 45px;
            font-weight: 500;
            margin-left: 230px;
        }

        .final .team__score2 {
            border-right: 1px solid #909090;
            color: #d68819;
            flex: 0 0 60px;
            justify-content: center;
            /* width: 2px; */
            height: 69px;
            font-size: 35px;
        }

        .final .team--away {
            color: rgb(50, 50, 50);
            height: 70px;
            font-size: 30px;
            align-items: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .final .team {
            /* display: flex; */
            justify-content: space-between;
            align-items: stretch;
            font-weight: 700;
            background: #ddd;
        }

        .imgfinal {
            display: flex;
            justify-content: center;
            transform: translate(0%, -40%);
        }

        .final-b {
            margin-top: -85px;
            margin-left: 30px;
            font-size: 25px;
            font-family: 'Kanit';
        }

        .final-a {
            margin-top: -85px;
            margin-left: -28px;
            font-size: 25px;
            font-family: 'Kanit';
        }

        .team-final3 {
            margin-top: -85px;
            margin-left: -35px;
            font-size: 25px;
            font-family: 'Kanit';
        }

        .teamfinal-3 {
            margin-top: -85px;
           margin-left: -43px;
            font-size: 25px;
            font-family: 'Kanit';
        }

        .place-tour {
            margin-left: 40px;
            margin-top: -17px;
        }

        .finalteam-a {
            margin-left: 200px;
            border-left: 0px solid #909090;
            color: #d68819;
            flex: 0 0 60px;
            justify-content: center;
            height: 69px;
            font-size: 45px;
            font-weight: 500;
        }

        .finalteam-b {
            margin-top: -2px;
            margin-left: -205px;
            border-left: 0px solid #909090;
            color: #d68819;
            flex: 0 0 60px;
            justify-content: center;
            height: 69px;
            font-size: 45px;
            font-weight: 500;
        }


        @media screen and (max-width: 1400px) {

            .col-4,
            .col-6 {
                width: 290px;
            }

            .slot--vertical_2:before {
                border: 1px solid #666666;
                width: 1px;
                height: 55px;
                transform: translate(-5950%, -124%);
                margin-left: 65px;
            }

            .slot--vertical_3:before {
                border: 1px solid #666666;
                width: 1px;
                height: 55px;
                transform: translate(8550%, -4%);
                margin-left: 30px;
            }

            .slot--vertical_4:before {
                border: 1px solid #666666;
                width: 1px;
                height: 55px;
                transform: translate(14950%, -700%);
                /* margin-top: 6px !important; */
                margin-left: 15px;
            }

            .slot--vertical_5:before {
                border: 1px solid #666666;
                width: 1px;
                height: 55px;
                transform: translate(8550%, -5%);
                margin-left: 25px;
            }


            .finalteam-a {
                margin-left: 185px;
                border-left: 0px solid #909090;
                color: #d68819;
                flex: 0 0 60px;
                justify-content: center;
                height: 69px;
                font-size: 45px;
                font-weight: 500;
            }

            .finalteam-b {
                margin-top: -1px;
                margin-left: -175px;
                border-left: 0px solid #909090;
                color: #d68819;
                flex: 0 0 60px;
                justify-content: center;
                height: 69px;
                font-size: 45px;
                font-weight: 500;
            }

            .final .team__name,
            .final .team__score {
                /* padding: 15px; */
                /* display: flex; */
                align-items: center;
            }

            .final .team__name3rd {
                padding: 15px;
                /* display: flex; */
                align-items: center;
                margin-left: 10px;
            }


            .final .team__score2 {
                padding: 8px;
                /* display: flex; */
                align-items: center;
            }

            .final .team__score {
                border-left: 0px solid #909090;
                color: #d68819;
                flex: 0 0 60px;
                justify-content: center;
                /* width: 2px; */
                height: 69px;
                font-size: 45px;
                font-weight: 500;
                margin-left: 160px;
            }

            .final .team__score2 {
                border-right: 1px solid #909090;
                color: #d68819;
                flex: 0 0 60px;
                justify-content: center;
                /* width: 2px; */
                height: 69px;
                font-size: 35px;
            }

            .final .team--away {
                color: rgb(50, 50, 50);
                height: 70px;
                font-size: 30px;
                align-items: center;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .final .team {
                /* display: flex; */
                justify-content: space-between;
                align-items: stretch;
                font-weight: 700;
                background: #ddd;
            }

            .imgfinal {
                display: flex;
                justify-content: center;
                transform: translate(0%, -40%);
            }

            .final-b {
                margin-top: -85px;
                margin-left: 30px;
                font-size: 25px;
                font-family: 'Kanit';
            }

            .final-a {
                margin-top: -85px;
                margin-left: -28px;
                font-size: 25px;
                font-family: 'Kanit';
            }

            .team-final3 {
                margin-top: -85px;
                margin-left: -35px;
                font-size: 25px;
                font-family: 'Kanit';
            }

            .teamfinal-3 {
                margin-top: -85px;
                margin-left: -39px;
                font-size: 25px;
                font-family: 'Kanit';
            }

            .place-tour {
                margin-left: 0px;
                margin-top: 0px;
            }

            .team_3 {
                /* height: 80px; */
                display: flex;
                align-items: center;
                margin-left: 0px;
                width: 245px;
            }

        }
    </style>