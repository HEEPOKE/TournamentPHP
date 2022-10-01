<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A8/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A8 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A8'";
            $resultA8 = $conn->query($A8);
            $rowA8 = $resultA8->fetch_assoc();
            $poA8 = $rowA8['tour_position'] ?? '';
            $teamA8 = $rowA8['teamA_id'] ?? '';

            ?>
            <input class="form-control text-white" id="A8" value="<?php echo $name15; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA8_8" name="teamidA8_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA8 != '') { ?>
                    <option hidden selected value="<?php echo $teamA8; ?>"><?php echo $name15; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA15 = "SELECT * FROM team";
                $teamresult15 = $conn->query($teamA15);

                while ($row15 = $teamresult15->fetch_assoc()) {

                    $teamidA8_8 = $row15['team_id'];
                    $nameA15 = $row15['team_name'];
                    if (
                        $nameA15 != $name1 && $nameA15 != $name2
                        && $nameA15 != $name3  && $nameA15 != $name4
                        && $nameA15 != $name5 && $nameA15 != $name6
                        && $nameA15 != $name7 && $nameA15 != $name8
                        && $nameA15 != $name9 && $nameA15 != $name10
                        && $nameA15 != $name11 && $nameA15 != $name12
                        && $nameA15 != $name13 && $nameA15 != $name14
                        && $nameA15 != $name16
                        && $nameA15 != $name17 && $nameA15 != $name18
                        && $nameA15 != $name19 && $nameA15 != $name20
                        && $nameA15 != $name21 && $nameA15 != $name22
                        && $nameA15 != $name23 && $nameA15 != $name24
                        && $nameA15 != $name25 && $nameA15 != $name26
                        && $nameA15 != $name27 && $nameA15 != $name28
                        && $nameA15 != $name29 && $nameA15 != $name30
                        && $nameA15 != $name31 && $nameA15 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA8_8; ?>"><?php echo $nameA15; ?></option>
                <?php }
                } ?>
                <option value="87">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A8_8 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A8'";
            $resultA8_8 = $conn->query($A8_8);
            $rowA8_8 = $resultA8_8->fetch_assoc();
            $poA8_8 = $rowA8_8['tour_position'] ?? '';
            $teamA88 = $rowA8_8['teamB_id'] ?? '';

            ?>
            <input class="form-control text-white" id="A88" value="<?php echo $name16; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA28_8" name="teamidA28_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA8_8 != '') { ?>
                    <option hidden selected value="<?php echo $teamA88; ?>"><?php echo $name16; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA16 = "SELECT * FROM team";
                $teamresult16 = $conn->query($teamA16);

                while ($row16 = $teamresult16->fetch_assoc()) {

                    $teamidA28_8 = $row16['team_id'];
                    $nameA16  = $row16['team_name'];
                    if (
                        $nameA16 != $name1 && $nameA16 != $name2
                        && $nameA16 != $name3 && $nameA16 != $name4
                        && $nameA16 != $name5 && $nameA16 != $name6
                        && $nameA16 != $name7 && $nameA16 != $name8
                        && $nameA16 != $name9 && $nameA16 != $name10
                        && $nameA16 != $name11 && $nameA16 != $name12
                        && $nameA16 != $name13 && $nameA16 != $name14
                        && $nameA16 != $name15
                        && $nameA16 != $name17 && $nameA16 != $name18
                        && $nameA16 != $name19 && $nameA16 != $name20
                        && $nameA16 != $name21 && $nameA16 != $name22
                        && $nameA16 != $name23 && $nameA16 != $name24
                        && $nameA16 != $name25 && $nameA16 != $name26
                        && $nameA16 != $name27 && $nameA16 != $name28
                        && $nameA16 != $name29 && $nameA16 != $name30
                        && $nameA16 != $name31 && $nameA16 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA28_8; ?>"><?php echo $nameA16; ?></option>
                <?php }
                } ?>
                <option value="86">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>