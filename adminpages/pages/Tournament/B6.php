<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B6/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B6 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B6'";
            $resultB6 = $conn->query($B6);
            $rowB6 = $resultB6->fetch_assoc();
            $poB6 = $rowB6['tour_position'] ?? '';
            $teamB6 = $rowB6['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B6" value="<?php echo $name27; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB6_8" name="teamidB6_8" aria-label="Default select example" style="display: none;">
            <?php if ($poB6 != '') { ?>
                    <option hidden selected value="<?php echo $teamB6; ?>"><?php echo $name27; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB11 = "SELECT * FROM team";
                $teamresult11 = $conn->query($teamB11);

                while ($row11 = $teamresult11->fetch_assoc()) {

                    $teamidB6_8 = $row11['team_id'];
                    $nameB11 = $row11['team_name'];
                    if (
                        $nameB11 != $name1 && $nameB11 != $name2
                        && $nameB11 != $name3  && $nameB11 != $name4
                        && $nameB11 != $name5 && $nameB11 != $name6
                        && $nameB11 != $name7 && $nameB11 != $name8
                        && $nameB11 != $name9 && $nameB11 != $name10
                        && $nameB11 != $name11 && $nameB11 != $name12
                        && $nameB11 != $name13 && $nameB11 != $name14
                        && $nameB11 != $name15 && $nameB11 != $name16
                        && $nameB11 != $name17 && $nameB11 != $name18
                        && $nameB11 != $name19 && $nameB11 != $name20
                        && $nameB11 != $name21 && $nameB11 != $name22
                        && $nameB11 != $name23 && $nameB11 != $name24
                        && $nameB11 != $name25 && $nameB11 != $name26
                        && $nameB11 != $name28
                        && $nameB11 != $name29 && $nameB11 != $name30
                        && $nameB11 != $name31 && $nameB11 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB6_8; ?>"><?php echo $nameB11; ?></option>
                <?php }
                } ?>
                <option value="73">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B6_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B6'";
            $resultB6_2 = $conn->query($B6_2);
            $rowB6_2 = $resultB6_2->fetch_assoc();
            $poB6_2 = $rowB6_2['tour_position'] ?? '';
            $teamB66 = $rowB6_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B66" value="<?php echo $name28; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB26_8" name="teamidB26_8" aria-label="Default select example" style="display: none;">
            <?php if ($poB6_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB66; ?>"><?php echo $name28; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB12 = "SELECT * FROM team";
                $teamresult12 = $conn->query($teamB12);

                while ($row12 = $teamresult12->fetch_assoc()) {

                    $teamidB26_8 = $row12['team_id'];
                    $nameB12  = $row12['team_name'];
                    if (
                        $nameB12 != $name1 && $nameB12 != $name2
                        && $nameB12 != $name3  && $nameB12 != $name4
                        && $nameB12 != $name5 && $nameB12 != $name6
                        && $nameB12 != $name7 && $nameB12 != $name8
                        && $nameB12 != $name9 && $nameB12 != $name10
                        && $nameB12 != $name11 && $nameB12 != $name12
                        && $nameB12 != $name13 && $nameB12 != $name14
                        && $nameB12 != $name15 && $nameB12 != $name16
                        && $nameB12 != $name17 && $nameB12 != $name18
                        && $nameB12 != $name19 && $nameB12 != $name20
                        && $nameB12 != $name21 && $nameB12 != $name22
                        && $nameB12 != $name23 && $nameB12 != $name24
                        && $nameB12 != $name25 && $nameB12 != $name26
                        && $nameB12 != $name27
                        && $nameB12 != $name29 && $nameB12 != $name30
                        && $nameB12 != $name31 && $nameB12 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB26_8; ?>"><?php echo $nameB12; ?></option>
                <?php }
                } ?>
                <option value="74">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>