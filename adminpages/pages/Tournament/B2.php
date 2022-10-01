<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B2/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B2 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B2'";
            $resultB2 = $conn->query($B2);
            $rowB2 = $resultB2->fetch_assoc();
            $poB2 = $rowB2['tour_position'] ?? '';
            $teamB2 = $rowB2['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B2" value="<?php echo $name19; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB2_8" name="teamidB2_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB2; ?>"><?php echo $name19; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB3 = "SELECT * FROM team";
                $teamresult3 = $conn->query($teamB3);

                while ($row3 = $teamresult3->fetch_assoc()) {

                    $teamidB2_8 = $row3['team_id'];
                    $nameB3 = $row3['team_name'];
                    if (
                        $nameB3 != $name1 && $nameB3 != $name2
                        && $nameB3 != $name3  && $nameB3 != $name4
                        && $nameB3 != $name5 && $nameB3 != $name6
                        && $nameB3 != $name7 && $nameB3 != $name8
                        && $nameB3 != $name9 && $nameB3 != $name10
                        && $nameB3 != $name11 && $nameB3 != $name12
                        && $nameB3 != $name13 && $nameB3 != $name14
                        && $nameB3 != $name15 && $nameB3 != $name16
                        && $nameB3 != $name17 && $nameB3 != $name18
                        && $nameB3 != $name20
                        && $nameB3 != $name21 && $nameB3 != $name22
                        && $nameB3 != $name23 && $nameB3 != $name24
                        && $nameB3 != $name25 && $nameB3 != $name26
                        && $nameB3 != $name27 && $nameB3 != $name28
                        && $nameB3 != $name29 && $nameB3 != $name30
                        && $nameB3 != $name31 && $nameB3 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB2_8; ?>"><?php echo $nameB3; ?></option>
                <?php }
                } ?>
                <option value="83">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B2_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B2'";
            $resultB2_2 = $conn->query($B2_2);
            $rowB2_2 = $resultB2_2->fetch_assoc();
            $poB2_2 = $rowB2_2['tour_position'] ?? '';
            $teamB22 = $rowB2_2['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B22" value="<?php echo $name20; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB22_8" name="teamidB22_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB2_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB22; ?>"><?php echo $name20; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB4 = "SELECT * FROM team";
                $teamresult4 = $conn->query($teamB4);

                while ($row4 = $teamresult4->fetch_assoc()) {

                    $teamidB22_8 = $row4['team_id'];
                    $nameB4  = $row4['team_name'];
                    if (
                        $nameB4 != $name1 && $nameB4 != $name2
                        && $nameB4 != $name3  && $nameB4 != $name4
                        && $nameB4 != $name5 && $nameB4 != $name6
                        && $nameB4 != $name7 && $nameB4 != $name8
                        && $nameB4 != $name9 && $nameB4 != $name10
                        && $nameB4 != $name11 && $nameB4 != $name12
                        && $nameB4 != $name13 && $nameB4 != $name14
                        && $nameB4 != $name15 && $nameB4 != $name16
                        && $nameB4 != $name17 && $nameB4 != $name18
                        && $nameB4 != $name19
                        && $nameB4 != $name21 && $nameB4 != $name22
                        && $nameB4 != $name23 && $nameB4 != $name24
                        && $nameB4 != $name25 && $nameB4 != $name26
                        && $nameB4 != $name27 && $nameB4 != $name28
                        && $nameB4 != $name29 && $nameB4 != $name30
                        && $nameB4 != $name31 && $nameB4 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB22_8; ?>"><?php echo $nameB4; ?></option>
                <?php }
                } ?>
                <option value="82">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>