<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B8/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B8 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B8'";
            $resultB8 = $conn->query($B8);
            $rowB8 = $resultB8->fetch_assoc();
            $poB8 = $rowB8['tour_position'] ?? '';
            $teamB8 = $rowB8['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B8" value="<?php echo $name31; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB8_8" name="teamidB8_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB8 != '') { ?>
                    <option hidden selected value="<?php echo $teamB8; ?>"><?php echo $name31; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB15 = "SELECT * FROM team";
                $teamresult15 = $conn->query($teamB15);

                while ($row15 = $teamresult15->fetch_assoc()) {

                    $teamidB8_8 = $row15['team_id'];
                    $nameB15 = $row15['team_name'];
                    if (
                        $nameB15 != $name1 && $nameB15 != $name2
                        && $nameB15 != $name3  && $nameB15 != $name4
                        && $nameB15 != $name5 && $nameB15 != $name6
                        && $nameB15 != $name7 && $nameB15 != $name8
                        && $nameB15 != $name9 && $nameB15 != $name10
                        && $nameB15 != $name11 && $nameB15 != $name12
                        && $nameB15 != $name13 && $nameB15 != $name14
                        && $nameB15 != $name15 && $nameB15 != $name16
                        && $nameB15 != $name17 && $nameB15 != $name18
                        && $nameB15 != $name19 && $nameB15 != $name20
                        && $nameB15 != $name21 && $nameB15 != $name22
                        && $nameB15 != $name23 && $nameB15 != $name24
                        && $nameB15 != $name25 && $nameB15 != $name26
                        && $nameB15 != $name27 && $nameB15 != $name28
                        && $nameB15 != $name29 && $nameB15 != $name30
                        && $nameB15 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB8_8; ?>"><?php echo $nameB15; ?></option>
                <?php }
                } ?>
                <option value="69">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B8_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B8'";
            $resultB8_2 = $conn->query($B8_2);
            $rowB8_2 = $resultB8_2->fetch_assoc();
            $poB8_2 = $rowB8_2['tour_position'] ?? '';
            $teamB88 = $rowB8_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B88" value="<?php echo $name32; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB28_8" name="teamidB28_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB8_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB88; ?>"><?php echo $name32; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB16 = "SELECT * FROM team";
                $teamresult16 = $conn->query($teamB16);

                while ($row16 = $teamresult16->fetch_assoc()) {

                    $teamidB28_8 = $row16['team_id'];
                    $nameB16  = $row16['team_name'];
                    if (
                        $nameB16 != $name1 && $nameB16 != $name2
                        && $nameB16 != $name3  && $nameB16 != $name4
                        && $nameB16 != $name5 && $nameB16 != $name6
                        && $nameB16 != $name7 && $nameB16 != $name8
                        && $nameB16 != $name9 && $nameB16 != $name10
                        && $nameB16 != $name11 && $nameB16 != $name12
                        && $nameB16 != $name13 && $nameB16 != $name14
                        && $nameB16 != $name15 && $nameB16 != $name16
                        && $nameB16 != $name17 && $nameB16 != $name18
                        && $nameB16 != $name19 && $nameB16 != $name20
                        && $nameB16 != $name21 && $nameB16 != $name22
                        && $nameB16 != $name23 && $nameB16 != $name24
                        && $nameB16 != $name25 && $nameB16 != $name26
                        && $nameB16 != $name27 && $nameB16 != $name28
                        && $nameB16 != $name29 && $nameB16 != $name30
                        && $nameB16 != $name31
                    ) {
                ?>
                        <option value="<?php echo $teamidB28_8; ?>"><?php echo $nameB16; ?></option>
                <?php }
                } ?>
                <option value="68">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>