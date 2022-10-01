<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A1/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A1 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A1'";
            $resultA1 = $conn->query($A1);
            $rowA1 = $resultA1->fetch_assoc();
            $poA1 = $rowA1['tour_position'] ?? '';
            $teamA1 = $rowA1['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="X" value="<?php echo $name1; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA1_8" name="teamidA1_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA1 != '') { ?>
                    <option hidden selected value="<?php echo $teamA1; ?>"><?php echo $name1; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA1 = "SELECT * FROM team";
                $teamresult1 = $conn->query($teamA1);

                while ($row1 = $teamresult1->fetch_assoc()) {

                    $teamidA1_8 = $row1['team_id'];
                    $name  = $row1['team_name'];
                    if (
                        $name != $name2
                        && $name != $name3  && $name != $name4
                        && $name != $name5 && $name != $name6
                        && $name != $name7 && $name != $name8
                        && $name != $name9 && $name != $name10
                        && $name != $name11 && $name != $name12
                        && $name != $name13 && $name != $name14
                        && $name != $name15 && $name != $name16
                        && $name != $name17 && $name != $name18
                        && $name != $name19 && $name != $name20
                        && $name != $name21 && $name != $name22
                        && $name != $name23 && $name != $name24
                        && $name != $name25 && $name != $name26
                        && $name != $name27 && $name != $name28
                        && $name != $name29 && $name != $name30
                        && $name != $name31 && $name != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA1_8; ?>"><?php echo $name; ?></option>
                <?php }
                }
                ?>
                <option value="99">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A1_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A1'";
            $resultA1_2 = $conn->query($A1_2);
            $rowA1_2 = $resultA1_2->fetch_assoc();
            $poA1_2 = $rowA1_2['tour_position'] ?? '';
            $teamA11 = $rowA1_2['teamB_id'] ?? '';
         
            ?>
            <input class="form-control text-white" id="XXXX" value="<?php echo $name2; ?>" style="display: block;width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA21_8" name="teamidA21_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA1_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA11; ?>"><?php echo $name2; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA2 = "SELECT * FROM team";
                $teamresult2 = $conn->query($teamA2);

                while ($row2 = $teamresult2->fetch_assoc()) {

                    $teamidA21_8 = $row2['team_id'];
                    $nameA2  = $row2['team_name'];
                    if (
                        $nameA2 != $name1
                        && $nameA2 != $name3  && $nameA2 != $name4
                        && $nameA2 != $name5 && $nameA2 != $name6
                        && $nameA2 != $name7 && $nameA2 != $name8
                        && $nameA2 != $name9 && $nameA2 != $name10
                        && $nameA2 != $name11 && $nameA2 != $name12
                        && $nameA2 != $name13 && $nameA2 != $name14
                        && $nameA2 != $name15 && $nameA2 != $name16
                        && $nameA2 != $name17 && $nameA2 != $name18
                        && $nameA2 != $name19 && $nameA2 != $name20
                        && $nameA2 != $name21 && $nameA2 != $name22
                        && $nameA2 != $name23 && $nameA2 != $name24
                        && $nameA2 != $name25 && $nameA2 != $name26
                        && $nameA2 != $name27 && $nameA2 != $name28
                        && $nameA2 != $name29 && $nameA2 != $name30
                        && $nameA2 != $name31 && $nameA2 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA21_8; ?>"><?php echo $nameA2; ?></option>
                <?php }
                } ?>
                <option value="98">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>