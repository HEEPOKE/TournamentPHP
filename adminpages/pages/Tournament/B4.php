<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B4/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B4 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B4'";
            $resultB4 = $conn->query($B4);
            $rowB4 = $resultB4->fetch_assoc();
            $poB4 = $rowB4['tour_position'] ?? '';
            $teamB4 = $rowB4['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B4" value="<?php echo $name23; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB4_8" name="teamidB4_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB4 != '') { ?>
                    <option hidden selected value="<?php echo $teamB4; ?>"><?php echo $name23; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB7 = "SELECT * FROM team";
                $teamresult7 = $conn->query($teamB7);

                while ($row7 = $teamresult7->fetch_assoc()) {

                    $teamidB4_8 = $row7['team_id'];
                    $nameB7 = $row7['team_name'];
                    if (
                        $nameB7 != $name1 && $nameB7 != $name2
                        && $nameB7 != $name3  && $nameB7 != $name4
                        && $nameB7 != $name5 && $nameB7 != $name6
                        && $nameB7 != $name7 && $nameB7 != $name8
                        && $nameB7 != $name9 && $nameB7 != $name10
                        && $nameB7 != $name11 && $nameB7 != $name12
                        && $nameB7 != $name13 && $nameB7 != $name14
                        && $nameB7 != $name15 && $nameB7 != $name16
                        && $nameB7 != $name17 && $nameB7 != $name18
                        && $nameB7 != $name19 && $nameB7 != $name20
                        && $nameB7 != $name21 && $nameB7 != $name22
                        && $nameB7 != $name24
                        && $nameB7 != $name25 && $nameB7 != $name26
                        && $nameB7 != $name27 && $nameB7 != $name28
                        && $nameB7 != $name29 && $nameB7 != $name30
                        && $nameB7 != $name31 && $nameB7 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB4_8; ?>"><?php echo $nameB7; ?></option>
                <?php }
                } ?>
                <option value="79">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B4_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B4'";
            $resultB4_2 = $conn->query($B4_2);
            $rowB4_2 = $resultB4_2->fetch_assoc();
            $poB4_2 = $rowB4_2['tour_position'] ?? '';
            $teamB44 = $rowB4_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B44" value="<?php echo $name24; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB24_8" name="teamidB24_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB4_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB44; ?>"><?php echo $name24; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB8 = "SELECT * FROM team";
                $teamresult8 = $conn->query($teamB8);

                while ($row8 = $teamresult8->fetch_assoc()) {

                    $teamidB24_8 = $row8['team_id'];
                    $nameB8  = $row8['team_name'];
                    if (
                        $nameB8 != $name1 && $nameB8 != $name2
                        && $nameB8 != $name3  && $nameB8 != $name4
                        && $nameB8 != $name5 && $nameB8 != $name6
                        && $nameB8 != $name7 && $nameB8 != $name8
                        && $nameB8 != $name9 && $nameB8 != $name10
                        && $nameB8 != $name11 && $nameB8 != $name12
                        && $nameB8 != $name13 && $nameB8 != $name14
                        && $nameB8 != $name15 && $nameB8 != $name16
                        && $nameB8 != $name17 && $nameB8 != $name18
                        && $nameB8 != $name19 && $nameB8 != $name20
                        && $nameB8 != $name21 && $nameB8 != $name22
                        && $nameB8 != $name23
                        && $nameB8 != $name25 && $nameB8 != $name26
                        && $nameB8 != $name27 && $nameB8 != $name28
                        && $nameB8 != $name29 && $nameB8 != $name30
                        && $nameB8 != $name31 && $nameB8 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB24_8; ?>"><?php echo $nameB8; ?></option>
                <?php }
                } ?>
                <option value="78">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>