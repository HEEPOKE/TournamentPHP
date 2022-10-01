<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A7/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A7 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A7'";
            $resultA7 = $conn->query($A7);
            $rowA7 = $resultA7->fetch_assoc();
            $poA7 = $rowA7['tour_position'] ?? '';
            $teamA7 = $rowA7['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A7" value="<?php echo $name13; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA7_8" name="teamidA7_8" aria-label="Default select example" style="display: none;">
            <?php if ($poA7 != '') { ?>
                    <option hidden selected value="<?php echo $teamA7; ?>"><?php echo $name13; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA13 = "SELECT * FROM team";
                $teamresult13 = $conn->query($teamA13);

                while ($row13 = $teamresult13->fetch_assoc()) {

                    $teamidA7_8 = $row13['team_id'];
                    $nameA13 = $row13['team_name'];
                    if (
                        $nameA13 != $name1 && $nameA13 != $name2
                        && $nameA13 != $name3 && $nameA13 != $name4
                        && $nameA13 != $name5 && $nameA13 != $name6
                        && $nameA13 != $name7 && $nameA13 != $name8
                        && $nameA13 != $name9 && $nameA13 != $name10
                        && $nameA13 != $name11 && $nameA13 != $name12
                        && $nameA13 != $name14
                        && $nameA13 != $name15 && $nameA13 != $name16
                        && $nameA13 != $name17 && $nameA13 != $name18
                        && $nameA13 != $name19 && $nameA13 != $name20
                        && $nameA13 != $name21 && $nameA13 != $name22
                        && $nameA13 != $name23 && $nameA13 != $name24
                        && $nameA13 != $name25 && $nameA13 != $name26
                        && $nameA13 != $name27 && $nameA13 != $name28
                        && $nameA13 != $name29 && $nameA13 != $name30
                        && $nameA13 != $name31 && $nameA13 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA7_8; ?>"><?php echo $nameA13; ?></option>
                <?php }
                } ?>
                <option value="89">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A7_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A7'";
            $resultA7_2 = $conn->query($A7_2);
            $rowA7_2 = $resultA7_2->fetch_assoc();
            $poA7_2 = $rowA7_2['tour_position'] ?? '';
            $teamA77 = $rowA7_2['teamB_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A77" value="<?php echo $name14; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA27_8" name="teamidA27_8" aria-label="Default select example" style="display: none;">
            <?php if ($poA7_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA77; ?>"><?php echo $name14; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>

                <?php
                $teamA14 = "SELECT * FROM team";
                $teamresult14 = $conn->query($teamA14);

                while ($row14 = $teamresult14->fetch_assoc()) {

                    $teamidA27_8 = $row14['team_id'];
                    $nameA14  = $row14['team_name'];
                    if (
                        $nameA14 != $name1 && $nameA14 != $name2
                        && $nameA14 != $name3 && $nameA14 != $name4
                        && $nameA14 != $name5 && $nameA14 != $name6
                        && $nameA14 != $name7 && $nameA14 != $name8
                        && $nameA14 != $name9 && $nameA14 != $name10
                        && $nameA14 != $name11 && $nameA14 != $name12
                        && $nameA14 != $name13
                        && $nameA14 != $name15 && $nameA14 != $name16
                        && $nameA14 != $name17 && $nameA14 != $name18
                        && $nameA14 != $name19 && $nameA14 != $name20
                        && $nameA14 != $name21 && $nameA14 != $name22
                        && $nameA14 != $name23 && $nameA14 != $name24
                        && $nameA14 != $name25 && $nameA14 != $name26
                        && $nameA14 != $name27 && $nameA14 != $name28
                        && $nameA14 != $name29 && $nameA14 != $name30
                        && $nameA14 != $name31 && $nameA14 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA27_8; ?>"><?php echo $nameA14; ?></option>
                <?php }
                } ?>
                <option value="88">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>