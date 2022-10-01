<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>B5/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B5 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'B5'";
            $resultB5 = $conn->query($B5);
            $rowB5 = $resultB5->fetch_assoc();
            $poB5 = $rowB5['tour_position'] ?? '';
            $teamB5 = $rowB5['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="B5" value="<?php echo $name25; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB5_8" name="teamidB5_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB5 != '') { ?>
                    <option hidden selected value="<?php echo $teamB5; ?>"><?php echo $name25; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB9 = "SELECT * FROM team";
                $teamresult9 = $conn->query($teamB9);

                while ($row9 = $teamresult9->fetch_assoc()) {

                    $teamidB5_8 = $row9['team_id'];
                    $nameB9 = $row9['team_name'];
                    if (
                        $nameB9 != $name1 && $nameB9 != $name2
                        && $nameB9 != $name3  && $nameB9 != $name4
                        && $nameB9 != $name5 && $nameB9 != $name6
                        && $nameB9 != $name7 && $nameB9 != $name8
                        && $nameB9 != $name9 && $nameB9 != $name10
                        && $nameB9 != $name11 && $nameB9 != $name12
                        && $nameB9 != $name13 && $nameB9 != $name14
                        && $nameB9 != $name15 && $nameB9 != $name16
                        && $nameB9 != $name17 && $nameB9 != $name18
                        && $nameB9 != $name19 && $nameB9 != $name20
                        && $nameB9 != $name21 && $nameB9 != $name22
                        && $nameB9 != $name23 && $nameB9 != $name24
                        && $nameB9 != $name25
                        && $nameB9 != $name27 && $nameB9 != $name28
                        && $nameB9 != $name29 && $nameB9 != $name30
                        && $nameB9 != $name31 && $nameB9 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB5_8; ?>"><?php echo $nameB9; ?></option>
                <?php }
                } ?>
                <option value="77">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $B5_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'B5'";
            $resultB5_2 = $conn->query($B5_2);
            $rowB5_2 = $resultB5_2->fetch_assoc();
            $poB5_2 = $rowB5_2['tour_position'] ?? '';
            $teamB55 = $rowB5_2['teamB_id'] ?? '';

            ?> 
            <input class="form-control text-white" id="B55" value="<?php echo $name26; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-select" id="teamidB25_8" name="teamidB25_8" aria-label="Default select example" style="display: none;">
                <?php if ($poB5_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamB55; ?>"><?php echo $name26; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamB10 = "SELECT * FROM team";
                $teamresult10 = $conn->query($teamB10);

                while ($row10 = $teamresult10->fetch_assoc()) {

                    $teamidB25_8 = $row10['team_id'];
                    $nameB10  = $row10['team_name'];
                    if (
                        $nameB10 != $name1 && $nameB10 != $name2
                        && $nameB10 != $name3  && $nameB10 != $name4
                        && $nameB10 != $name5 && $nameB10 != $name6
                        && $nameB10 != $name7 && $nameB10 != $name8
                        && $nameB10 != $name9 && $nameB10 != $name10
                        && $nameB10 != $name11 && $nameB10 != $name12
                        && $nameB10 != $name13 && $nameB10 != $name14
                        && $nameB10 != $name15 && $nameB10 != $name16
                        && $nameB10 != $name17 && $nameB10 != $name18
                        && $nameB10 != $name19 && $nameB10 != $name20
                        && $nameB10 != $name21 && $nameB10 != $name22
                        && $nameB10 != $name23 && $nameB10 != $name24
                        && $nameB10 != $name25
                        && $nameB10 != $name27 && $nameB10 != $name28
                        && $nameB10 != $name29 && $nameB10 != $name30
                        && $nameB10 != $name31 && $nameB10 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidB25_8; ?>"><?php echo $nameB10; ?></option>
                <?php }
                } ?>
                <option value="76">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>