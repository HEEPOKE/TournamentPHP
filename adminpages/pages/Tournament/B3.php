<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B3/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B3 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B3'";
            $resultB3 = $conn->query($B3);
            $rowB3 = $resultB3->fetch_assoc();
            $poB3 = $rowB3['tour_position'] ?? '';
            $teamB3 = $rowB3['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B3" value="<?php echo $name21; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB3_8" name="teamidB3_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB3 != '') { ?>
                    <option hidden selected value="<?php echo $teamB3; ?>"><?php echo $name21; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB5 = "SELECT * FROM team";
                $teamresult5 = $conn->query($teamB5);

                while ($row5 = $teamresult5->fetch_assoc()) {

                    $teamidB3_8 = $row5['team_id'];
                    $nameB5 = $row5['team_name'];
                    if (
                        $nameB5 != $name1 && $nameB5 != $name2
                        && $nameB5 != $name3  && $nameB5 != $name4
                        && $nameB5 != $name5 && $nameB5 != $name6
                        && $nameB5 != $name7 && $nameB5 != $name8
                        && $nameB5 != $name9 && $nameB5 != $name10
                        && $nameB5 != $name11 && $nameB5 != $name12
                        && $nameB5 != $name13 && $nameB5 != $name14
                        && $nameB5 != $name15 && $nameB5 != $name16
                        && $nameB5 != $name17 && $nameB5 != $name18
                        && $nameB5 != $name19 && $nameB5 != $name20
                        && $nameB5 != $name22
                        && $nameB5 != $name23 && $nameB5 != $name24
                        && $nameB5 != $name25 && $nameB5 != $name26
                        && $nameB5 != $name27 && $nameB5 != $name28
                        && $nameB5 != $name29 && $nameB5 != $name30
                        && $nameB5 != $name31 && $nameB5 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB3_8; ?>"><?php echo $nameB5; ?></option>
                <?php }
                } ?>
                <option value="81">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B3_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B3'";
            $resultB3_2 = $conn->query($B3_2);
            $rowB3_2 = $resultB3_2->fetch_assoc();
            $poB3_2 = $rowB3_2['tour_position'] ?? '';
            $teamB33 = $rowB3_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B33" value="<?php echo $name22; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB23_8" name="teamidB23_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB3_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB33; ?>"><?php echo $name22; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB6 = "SELECT * FROM team";
                $teamresult6 = $conn->query($teamB6);

                while ($row6 = $teamresult6->fetch_assoc()) {

                    $teamidB23_8 = $row6['team_id'];
                    $nameB6  = $row6['team_name'];
                    if (
                        $nameB6 != $name1 && $nameB6 != $name2
                        && $nameB6 != $name3  && $nameB6 != $name4
                        && $nameB6 != $name5 && $nameB6 != $name6
                        && $nameB6 != $name7 && $nameB6 != $name8
                        && $nameB6 != $name9 && $nameB6 != $name10
                        && $nameB6 != $name11 && $nameB6 != $name12
                        && $nameB6 != $name13 && $nameB6 != $name14
                        && $nameB6 != $name15 && $nameB6 != $name16
                        && $nameB6 != $name17 && $nameB6 != $name18
                        && $nameB6 != $name19 && $nameB6 != $name20
                        && $nameB6 != $name21
                        && $nameB6 != $name23 && $nameB6 != $name24
                        && $nameB6 != $name25 && $nameB6 != $name26
                        && $nameB6 != $name27 && $nameB6 != $name28
                        && $nameB6 != $name29 && $nameB6 != $name30
                        && $nameB6 != $name31 && $nameB6 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB23_8; ?>"><?php echo $nameB6; ?></option>
                <?php }
                } ?>
                <option value="80">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>