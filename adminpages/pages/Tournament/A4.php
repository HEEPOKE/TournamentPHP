<div class="justify-content-center">
    <form action="adminservices/TournamentA/A4_8.php" method="POST">
        <div class="row mt-3 mb-3 ml-2 mr-2">
            <div class="col-lg-1 col-md-1 col-sm-2 text-center">
                <span>A4/8</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
                <?php
                $A4 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A4'";
                $resultA4 = $conn->query($A4);
                $rowA4 = $resultA4->fetch_assoc();
                $poA4 = $rowA4['tour_position'] ?? '';
                $teamA4 = $rowA4['teamA_id'] ?? '';
                ?>
                <input class="form-control text-white" id="A4" value="<?php echo $name7; ?>" style="display: block; width: 100%; height:100%;" disabled>
                <select class="form-control" id="teamidA4_8" name="teamidA4_8" aria-label="Default select example" style="display: none;">
                    <?php if ($poA4 != '') { ?>
                        <option hidden selected value="<?php echo $teamA4; ?>"><?php echo $name7; ?></option>
                    <?php } else { ?>
                        <option hidden selected value="คู่A4 ทีมA"> -- กรุณาเลือกทีม --</option>
                    <?php } ?>
                    <?php
                    $teamA7 = "SELECT * FROM team";
                    $teamresult7 = $conn->query($teamA7);

                    while ($row7 = $teamresult7->fetch_assoc()) {

                        $teamidA4_8 = $row7['team_id'];
                        $nameA7 = $row7['team_name'];
                        if (
                            $nameA7 != $name1 && $nameA7 != $name2
                            && $nameA7 != $name3  && $nameA7 != $name4
                            && $nameA7 != $name5 && $nameA7 != $name6
                            && $nameA7 != $name8
                            && $nameA7 != $name9 && $nameA7 != $name10
                            && $nameA7 != $name11 && $nameA7 != $name12
                            && $nameA7 != $name13 && $nameA7 != $name14
                            && $nameA7 != $name15 && $nameA7 != $name16
                            && $nameA7 != $name17 && $nameA7 != $name18
                            && $nameA7 != $name19 && $nameA7 != $name20
                            && $nameA7 != $name21 && $nameA7 != $name22
                            && $nameA7 != $name23 && $nameA7 != $name24
                            && $nameA7 != $name25 && $nameA7 != $name26
                            && $nameA7 != $name27 && $nameA7 != $name28
                            && $nameA7 != $name29 && $nameA7 != $name30
                            && $nameA7 != $name31 && $nameA7 != $name32
                        ) {
                    ?>
                            <option value="<?php echo $teamidA4_8; ?>"><?php echo $nameA7; ?></option>
                    <?php }
                    } ?>
                    <option value="93">-- ยังไม่เลือกทีม --</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
                <?php
                $A4_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A4'";
                $resultA4_2 = $conn->query($A4_2);
                $rowA4_2 = $resultA4_2->fetch_assoc();
                $poA4_2 = $rowA4_2['tour_position'] ?? '';
                $teamA44 = $rowA4_2['teamB_id'] ?? '';
                ?>
                <input class="form-control text-white" id="A44" value="<?php echo $name8; ?>" style="display: block; width: 100%; height:100%;" disabled>
                <select class="form-control" id="teamidA24_8" name="teamidA24_8" aria-label="Default select example" style="display: none;">
                    <?php if ($poA4_2 != '') { ?>
                        <option hidden selected value="<?php echo $teamA44; ?>"><?php echo $name8; ?></option>
                    <?php } else { ?>
                        <option hidden selected> -- กรุณาเลือกทีม --</option>
                    <?php } ?>

                    <?php
                    $teamA8 = "SELECT * FROM team";
                    $teamresult8 = $conn->query($teamA8);

                    while ($row8 = $teamresult8->fetch_assoc()) {

                        $teamidA24_8 = $row8['team_id'];
                        $nameA8  = $row8['team_name'];
                        if (
                            $nameA8 != $name1 && $nameA8 != $name2
                            && $nameA8 != $name3  && $nameA8 != $name4
                            && $nameA8 != $name5 && $nameA8 != $name6
                            && $nameA8 != $name7
                            && $nameA8 != $name9 && $nameA8 != $name10
                            && $nameA8 != $name11 && $nameA8 != $name12
                            && $nameA8 != $name13 && $nameA8 != $name14
                            && $nameA8 != $name15 && $nameA8 != $name16
                            && $nameA8 != $name17 && $nameA8 != $name18
                            && $nameA8 != $name19 && $nameA8 != $name20
                            && $nameA8 != $name21 && $nameA8 != $name22
                            && $nameA8 != $name23 && $nameA8 != $name24
                            && $nameA8 != $name25 && $nameA8 != $name26
                            && $nameA8 != $name27 && $nameA8 != $name28
                            && $nameA8 != $name29 && $nameA8 != $name30
                            && $nameA8 != $name31 && $nameA8 != $name32
                        ) {
                    ?>
                            <option value="<?php echo $teamidA24_8; ?>"><?php echo $nameA8; ?></option>
                    <?php }
                    } ?>
                    <option value="92">-- ยังไม่เลือกทีม --</option>
                </select>
            </div>
        </div>
</div>