<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A6/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A6 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A6'";
            $resultA6 = $conn->query($A6);
            $rowA6 = $resultA6->fetch_assoc();
            $poA6 = $rowA6['tour_position'] ?? '';
            $teamA6 = $rowA6['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A6" value="<?php echo $name11; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA6_8" name="teamidA6_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA6 != '') { ?>
                    <option hidden selected value="<?php echo $teamA6; ?>"><?php echo $name11; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA11 = "SELECT * FROM team";
                $teamresult11 = $conn->query($teamA11);

                while ($row11 = $teamresult11->fetch_assoc()) {

                    $teamidA6_8 = $row11['team_id'];
                    $nameA11 = $row11['team_name'];
                    if (
                        $nameA11 != $name1 && $nameA11 != $name2
                        && $nameA11 != $name3 && $nameA11 != $name4
                        && $nameA11 != $name5 && $nameA11 != $name6
                        && $nameA11 != $name7 && $nameA11 != $name8
                        && $nameA11 != $name9 && $nameA11 != $name10
                        && $nameA11 != $name12
                        && $nameA11 != $name13 && $nameA11 != $name14
                        && $nameA11 != $name15 && $nameA11 != $name16
                        && $nameA11 != $name17 && $nameA11 != $name18
                        && $nameA11 != $name19 && $nameA11 != $name20
                        && $nameA11 != $name21 && $nameA11 != $name22
                        && $nameA11 != $name23 && $nameA11 != $name24
                        && $nameA11 != $name25 && $nameA11 != $name26
                        && $nameA11 != $name27 && $nameA11 != $name28
                        && $nameA11 != $name29 && $nameA11 != $name30
                        && $nameA11 != $name31 && $nameA11 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA6_8; ?>"><?php echo $nameA11; ?></option>
                <?php }
                } ?>
                <option value="91">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A6_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A6'";
            $resultA6_2 = $conn->query($A6_2);
            $rowA6_2 = $resultA6_2->fetch_assoc();
            $poA6_2 = $rowA6_2['tour_position'] ?? '';
            $teamA66 = $rowA6_2['teamB_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A66" value="<?php echo $name12; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA26_8" name="teamidA26_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA6_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA66; ?>"><?php echo $name12; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA12 = "SELECT * FROM team";
                $teamresult12 = $conn->query($teamA12);

                while ($row12 = $teamresult12->fetch_assoc()) {

                    $teamidA26_8 = $row12['team_id'];
                    $nameA12  = $row12['team_name'];
                    if (
                        $nameA12 != $name1 && $nameA12 != $name2
                        && $nameA12 != $name3 && $nameA12 != $name4
                        && $nameA12 != $name5 && $nameA12 != $name6
                        && $nameA12 != $name7 && $nameA12 != $name8
                        && $nameA12 != $name9 && $nameA12 != $name10
                        && $nameA12 != $name11
                        && $nameA12 != $name13 && $nameA12 != $name14
                        && $nameA12 != $name15 && $nameA12 != $name16
                        && $nameA12 != $name17 && $nameA12 != $name18
                        && $nameA12 != $name19 && $nameA12 != $name20
                        && $nameA12 != $name21 && $nameA12 != $name22
                        && $nameA12 != $name23 && $nameA12 != $name24
                        && $nameA12 != $name25 && $nameA12 != $name26
                        && $nameA12 != $name27 && $nameA12 != $name28
                        && $nameA12 != $name29 && $nameA12 != $name30
                        && $nameA12 != $name31 && $nameA12 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA26_8; ?>"><?php echo $nameA12; ?></option>
                <?php }
                } ?>
                <option value="90">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>