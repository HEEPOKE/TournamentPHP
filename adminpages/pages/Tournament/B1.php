<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B1/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B1 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B1'";
            $resultB1 = $conn->query($B1);
            $rowB1 = $resultB1->fetch_assoc();
            $poB1 = $rowB1['tour_position'] ?? '';
            $teamB1 = $rowB1['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B1" value="<?php echo $name17; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB1_8" name="teamidB1_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB1 != '') { ?>
                    <option hidden selected value="<?php echo $teamB1; ?>"><?php echo $name17; ?></option>
                <?php } else { ?>
                    <option hidden selected value="คู่B1 ทีมA"> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB1 = "SELECT * FROM team";
                $teamresult1 = $conn->query($teamB1);

                while ($row1 = $teamresult1->fetch_assoc()) {

                    $teamidB1_8 = $row1['team_id'];
                    $nameB1  = $row1['team_name'];
                    if (
                        $nameB1 != $name1 && $nameB1 != $name2
                        && $nameB1 != $name3  && $nameB1 != $name4
                        && $nameB1 != $name5 && $nameB1 != $name6
                        && $nameB1 != $name7 && $nameB1 != $name8
                        && $nameB1 != $name9 && $nameB1 != $name10
                        && $nameB1 != $name11 && $nameB1 != $name12
                        && $nameB1 != $name13 && $nameB1 != $name14
                        && $nameB1 != $name15 && $nameB1 != $name16
                        && $nameB1 != $name18
                        && $nameB1 != $name19 && $nameB1 != $name20
                        && $nameB1 != $name21 && $nameB1 != $name22
                        && $nameB1 != $name23 && $nameB1 != $name24
                        && $nameB1 != $name25 && $nameB1 != $name26
                        && $nameB1 != $name27 && $nameB1 != $name28
                        && $nameB1 != $name29 && $nameB1 != $name30
                        && $nameB1 != $name31 && $nameB1 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB1_8; ?>"><?php echo $nameB1; ?></option>
                <?php }
                } ?>
                <option value="85">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B1_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B1'";
            $resultB1_2 = $conn->query($B1_2);
            $rowB1_2 = $resultB1_2->fetch_assoc();
            $poB1_2 = $rowB1_2['tour_position'] ?? '';
            $teamB11 = $rowB1_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B11" value="<?php echo $name18; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB21_8" name="teamidB21_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB1_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB11; ?>"><?php echo $name18; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB2 = "SELECT * FROM team";
                $teamresult2 = $conn->query($teamB2);

                while ($row2 = $teamresult2->fetch_assoc()) {

                    $teamidB11_8 = $row2['team_id'];
                    $nameB11  = $row2['team_name'];
                    if (
                        $nameB11 != $name1 && $nameB11 != $name2
                        && $nameB11 != $name3  && $nameB11 != $name4
                        && $nameB11 != $name5 && $nameB11 != $name6
                        && $nameB11 != $name7 && $nameB11 != $name8
                        && $nameB11 != $name9 && $nameB11 != $name10
                        && $nameB11 != $name11 && $nameB11 != $name12
                        && $nameB11 != $name13 && $nameB11 != $name14
                        && $nameB11 != $name15 && $nameB11 != $name16
                        && $nameB11 != $name17
                        && $nameB11 != $name19 && $nameB11 != $name20
                        && $nameB11 != $name21 && $nameB11 != $name22
                        && $nameB11 != $name23 && $nameB11 != $name24
                        && $nameB11 != $name25 && $nameB11 != $name26
                        && $nameB11 != $name27 && $nameB11 != $name28
                        && $nameB11 != $name29 && $nameB11 != $name30
                        && $nameB11 != $name31 && $nameB11 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB11_8; ?>"><?php echo $nameB11; ?></option>
                <?php }
                } ?>
                <option value="84">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>