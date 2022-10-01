<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B7/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B7 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B7'";
            $resultB7 = $conn->query($B7);
            $rowB7 = $resultB7->fetch_assoc();
            $poB7 = $rowB7['tour_position'] ?? '';
            $teamB7 = $rowB7['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B7" value="<?php echo $name29; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB7_8" name="teamidB7_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB7 != '') { ?>
                    <option hidden selected value="<?php echo $teamB7; ?>"><?php echo $name29; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB13 = "SELECT * FROM team";
                $teamresult13 = $conn->query($teamB13);

                while ($row13 = $teamresult13->fetch_assoc()) {

                    $teamidB7_8 = $row13['team_id'];
                    $nameB13 = $row13['team_name'];
                    if (
                        $nameB13 != $name1 && $nameB13 != $name2
                        && $nameB13 != $name3  && $nameB13 != $name4
                        && $nameB13 != $name5 && $nameB13 != $name6
                        && $nameB13 != $name7 && $nameB13 != $name8
                        && $nameB13 != $name9 && $nameB13 != $name10
                        && $nameB13 != $name11 && $nameB13 != $name12
                        && $nameB13 != $name13 && $nameB13 != $name14
                        && $nameB13 != $name15 && $nameB13 != $name16
                        && $nameB13 != $name17 && $nameB13 != $name18
                        && $nameB13 != $name19 && $nameB13 != $name20
                        && $nameB13 != $name21 && $nameB13 != $name22
                        && $nameB13 != $name23 && $nameB13 != $name24
                        && $nameB13 != $name25 && $nameB13 != $name26
                        && $nameB13 != $name27 && $nameB13 != $name28
                        && $nameB13 != $name30
                        && $nameB13 != $name31 && $nameB13 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB7_8; ?>"><?php echo $nameB13; ?></option>
                <?php }
                } ?>
                <option value="71">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B7_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B7'";
            $resultB7_2 = $conn->query($B7_2);
            $rowB7_2 = $resultB7_2->fetch_assoc();
            $poB7_2 = $rowB7_2['tour_position'] ?? '';
            $teamB77 = $rowB7_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B77" value="<?php echo $name30; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB27_8" name="teamidB27_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB7_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB77; ?>"><?php echo $name30; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB14 = "SELECT * FROM team";
                $teamresult14 = $conn->query($teamB14);

                while ($row14 = $teamresult14->fetch_assoc()) {

                    $teamidB27_8 = $row14['team_id'];
                    $nameB14  = $row14['team_name'];
                    if (
                        $nameB14 != $name1 && $nameB14 != $name2
                        && $nameB14 != $name3  && $nameB14 != $name4
                        && $nameB14 != $name5 && $nameB14 != $name6
                        && $nameB14 != $name7 && $nameB14 != $name8
                        && $nameB14 != $name9 && $nameB14 != $name10
                        && $nameB14 != $name11 && $nameB14 != $name12
                        && $nameB14 != $name13 && $nameB14 != $name14
                        && $nameB14 != $name15 && $nameB14 != $name16
                        && $nameB14 != $name17 && $nameB14 != $name18
                        && $nameB14 != $name19 && $nameB14 != $name20
                        && $nameB14 != $name21 && $nameB14 != $name22
                        && $nameB14 != $name23 && $nameB14 != $name24
                        && $nameB14 != $name25 && $nameB14 != $name26
                        && $nameB14 != $name27 && $nameB14 != $name28
                        && $nameB14 != $name29
                        && $nameB14 != $name31 && $nameB14 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB27_8; ?>"><?php echo $nameB14; ?></option>
                <?php }
                } ?>
                <option value="70">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>