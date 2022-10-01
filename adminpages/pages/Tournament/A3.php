<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A3/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A3 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A3'";
            $resultA3 = $conn->query($A3);
            $rowA3 = $resultA3->fetch_assoc();
            $poA3 = $rowA3['tour_position'] ?? '';
            $teamA3 = $rowA3['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A3" value="<?php echo $name5; ?>" style="display: block; width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA3_8" name="teamidA3_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA3 != '') { ?>
                    <option hidden selected value="<?php echo $teamA3; ?>"><?php echo $name5; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA5 = "SELECT * FROM team";
                $teamresult5 = $conn->query($teamA5);

                while ($row5 = $teamresult5->fetch_assoc()) {

                    $teamidA3_8 = $row5['team_id'];
                    $nameA5 = $row5['team_name'];
                    if (
                        $nameA5 != $name1 && $nameA5 != $name2
                        && $nameA5 != $name3  && $nameA5 != $name4
                        && $nameA5 != $name6
                        && $nameA5 != $name7 && $nameA5 != $name8
                        && $nameA5 != $name9 && $nameA5 != $name10
                        && $nameA5 != $name11 && $nameA5 != $name12
                        && $nameA5 != $name13 && $nameA5 != $name14
                        && $nameA5 != $name15 && $nameA5 != $name16
                        && $nameA5 != $name17 && $nameA5 != $name18
                        && $nameA5 != $name19 && $nameA5 != $name20
                        && $nameA5 != $name21 && $nameA5 != $name22
                        && $nameA5 != $name23 && $nameA5 != $name24
                        && $nameA5 != $name25 && $nameA5 != $name26
                        && $nameA5 != $name27 && $nameA5 != $name28
                        && $nameA5 != $name29 && $nameA5 != $name30
                        && $nameA5 != $name31 && $nameA5 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA3_8; ?>"><?php echo $nameA5; ?></option>
                <?php }
                } ?>
                <option value="95">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A3_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A3'";
            $resultA3_2 = $conn->query($A3_2);
            $rowA3_2 = $resultA3_2->fetch_assoc();
            $poA3_2 = $rowA3_2['tour_position'] ?? '';
            $teamA33 = $rowA3_2['teamB_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A33" value="<?php echo $name6; ?>" style="display: block;width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA23_8" name="teamidA23_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA3_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA33; ?>"><?php echo $name6; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA6 = "SELECT * FROM team";
                $teamresult6 = $conn->query($teamA6);

                while ($row6 = $teamresult6->fetch_assoc()) {

                    $teamidA23_8 = $row6['team_id'];
                    $nameA6  = $row6['team_name'];
                    if (
                        $nameA6 != $name1 && $nameA6 != $name2
                        && $nameA6 != $name3  && $nameA6 != $name4
                        && $nameA6 != $name5
                        && $nameA6 != $name7 && $nameA6 != $name8
                        && $nameA6 != $name9 && $nameA6 != $name10
                        && $nameA6 != $name11 && $nameA6 != $name12
                        && $nameA6 != $name13 && $nameA6 != $name14
                        && $nameA6 != $name15 && $nameA6 != $name16
                        && $nameA6 != $name17 && $nameA6 != $name18
                        && $nameA6 != $name19 && $nameA6 != $name20
                        && $nameA6 != $name21 && $nameA6 != $name22
                        && $nameA6 != $name23 && $nameA6 != $name24
                        && $nameA6 != $name25 && $nameA6 != $name26
                        && $nameA6 != $name27 && $nameA6 != $name28
                        && $nameA6 != $name29 && $nameA6 != $name30
                        && $nameA6 != $name31 && $nameA6 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA23_8; ?>"><?php echo $nameA6; ?></option>
                <?php }
                } ?>
                <option value="94">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>