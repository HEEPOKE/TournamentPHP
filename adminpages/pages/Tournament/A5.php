<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A5/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A5 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A5'";
            $resultA5 = $conn->query($A5);
            $rowA5 = $resultA5->fetch_assoc();
            $poA5 = $rowA5['tour_position'] ?? '';
            $teamA5 = $rowA5['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A5" value="<?php echo $name9; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA5_8" name="teamidA5_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA5 != '') { ?>
                    <option hidden selected value="<?php echo $teamA5; ?>"><?php echo $name9; ?></option>
                <?php } else { ?>
                    <option hidden selected value="คู่A5 ทีมA"> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA9 = "SELECT * FROM team";
                $teamresult9 = $conn->query($teamA9);

                while ($row9 = $teamresult9->fetch_assoc()) {

                    $teamidA5_8 = $row9['team_id'];
                    $nameA9 = $row9['team_name'];
                    if (
                        $nameA9 != $name1 && $nameA9 != $name2
                        && $nameA9 != $name3  && $nameA9 != $name4
                        && $nameA9 != $name5 && $nameA9 != $name6
                        && $nameA9 != $name7 && $nameA9 != $name8
                        && $nameA9 != $name10
                        && $nameA9 != $name11 && $nameA9 != $name12
                        && $nameA9 != $name13 && $nameA9 != $name14
                        && $nameA9 != $name15 && $nameA9 != $name16
                        && $nameA9 != $name17 && $nameA9 != $name18
                        && $nameA9 != $name19 && $nameA9 != $name20
                        && $nameA9 != $name21 && $nameA9 != $name22
                        && $nameA9 != $name23 && $nameA9 != $name24
                        && $nameA9 != $name25 && $nameA9 != $name26
                        && $nameA9 != $name27 && $nameA9 != $name28
                        && $nameA9 != $name29 && $nameA9 != $name30
                        && $nameA9 != $name31 && $nameA9 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA5_8; ?>"><?php echo $nameA9; ?></option>
                <?php }
                } ?>
                <option value="ทีมคู่A5ทีมA ว่าง">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A5_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A5'";
            $resultA5_2 = $conn->query($A5_2);
            $rowA5_2 = $resultA5_2->fetch_assoc();
            $poA5_2 = $rowA5_2['tour_position'] ?? '';
            $teamA55 = $rowA5_2['teamB_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A55" value="<?php echo $name10; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA25_8" name="teamidA25_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA5_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA55; ?>"><?php echo $name10; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA10 = "SELECT * FROM team";
                $teamresult10 = $conn->query($teamA10);

                while ($row10 = $teamresult10->fetch_assoc()) {

                    $teamidA25_8 = $row10['team_id'];
                    $nameA10  = $row10['team_name'];
                    if (
                        $nameA10 != $name1 && $nameA10 != $name2
                        && $nameA10 != $name3  && $nameA10 != $name4
                        && $nameA10 != $name5 && $nameA10 != $name6
                        && $nameA10 != $name7 && $nameA10 != $name8
                        && $nameA10 != $name9
                        && $nameA10 != $name11 && $nameA10 != $name12
                        && $nameA10 != $name13 && $nameA10 != $name14
                        && $nameA10 != $name15 && $nameA10 != $name16
                        && $nameA10 != $name17 && $nameA10 != $name18
                        && $nameA10 != $name19 && $nameA10 != $name20
                        && $nameA10 != $name21 && $nameA10 != $name22
                        && $nameA10 != $name23 && $nameA10 != $name24
                        && $nameA10 != $name25 && $nameA10 != $name26
                        && $nameA10 != $name27 && $nameA10 != $name28
                        && $nameA10 != $name29 && $nameA10 != $name30
                        && $nameA10 != $name31 && $nameA10 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA25_8; ?>"><?php echo $nameA10; ?></option>
                <?php }
                } ?>
                <option value="94">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>