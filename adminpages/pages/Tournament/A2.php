<div class="justify-content-center">
    <div class="row mt-3 mb-3 ml-2 mr-2">
        <div class="col-lg-1 col-md-1 col-sm-2 text-center">
            <span>A2/8</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A2 = "SELECT teamA_id,tour_position FROM `tournament` WHERE tour_position = 'A2'";
            $resultA2 = $conn->query($A2);
            $rowA2 = $resultA2->fetch_assoc();
            $poA2 = $rowA2['tour_position'] ?? '';
            $teamA2 = $rowA2['teamA_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A22" value="<?php echo $name3; ?>" style="display: block;width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA2_8" name="teamidA2_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA2; ?>"><?php echo $name3; ?></option>
                <?php } else { ?>
                    <option hidden selected value="คู่A2 ทีมA"> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA3 = "SELECT * FROM team";
                $teamresult3 = $conn->query($teamA3);

                while ($row3 = $teamresult3->fetch_assoc()) {

                    $teamidA2_8 = $row3['team_id'];
                    $nameA23 = $row3['team_name'];


                    if (
                        $nameA23 != $name1 && $nameA23 != $name2
                        && $nameA23 != $name4
                        && $nameA23 != $name5 && $nameA23 != $name6
                        && $nameA23 != $name7 && $nameA23 != $name8
                        && $nameA23 != $name9 && $nameA23 != $name10
                        && $nameA23 != $name11 && $nameA23 != $name12
                        && $nameA23 != $name13 && $nameA23 != $name14
                        && $nameA23 != $name15 && $nameA23 != $name16
                        && $nameA23 != $name17 && $nameA23 != $name18
                        && $nameA23 != $name19 && $nameA23 != $name20
                        && $nameA23 != $name21 && $nameA23 != $name22
                        && $nameA23 != $name23 && $nameA23 != $name24
                        && $nameA23 != $name25 && $nameA23 != $name26
                        && $nameA23 != $name27 && $nameA23 != $name28
                        && $nameA23 != $name29 && $nameA23 != $name30
                        && $nameA23 != $name31 && $nameA23 != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA2_8; ?>"><?php echo $nameA23; ?></option>
                <?php }
                } ?>
                <option value="ทีมคู่A2ทีมA ว่าง">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <?php
            $A2_2 = "SELECT teamB_id,tour_position FROM `tournament` WHERE tour_position = 'A2'";
            $resultA2_2 = $conn->query($A2_2);
            $rowA2_2 = $resultA2_2->fetch_assoc();
            $poA2_2 = $rowA2_2['tour_position'] ?? '';
            $teamA22 = $rowA2_2['teamB_id'] ?? '';
            ?>
            <input class="form-control text-white" id="A23" value="<?php echo $name4; ?>" style="display: block;width: 100%; height:100%;" disabled>
            <select class="form-control" id="teamidA22_8" name="teamidA22_8" aria-label="Default select example" style="display: none;">
                <?php if ($poA2_2 != '') { ?>
                    <option hidden selected value="<?php echo $teamA22; ?>"><?php echo $name4; ?></option>
                <?php } else { ?>
                    <option hidden selected> -- กรุณาเลือกทีม --</option>
                <?php } ?>
                <?php
                $teamA4 = "SELECT * FROM team";
                $teamresult4 = $conn->query($teamA4);

                while ($row4 = $teamresult4->fetch_assoc()) {

                    $teamidA22_8 = $row4['team_id'];
                    $name4A  = $row4['team_name'];
                    if (
                        $name4A != $name1 && $name4A != $name2
                        && $name4A != $name3
                        && $name4A != $name5 && $name4A != $name6
                        && $name4A != $name7 && $name4A != $name8
                        && $name4A != $name9 && $name4A != $name10
                        && $name4A != $name11 && $name4A != $name12
                        && $name4A != $name13 && $name4A != $name14
                        && $name4A != $name15 && $name4A != $name16
                        && $name4A != $name17 && $name4A != $name18
                        && $name4A != $name19 && $name4A != $name20
                        && $name4A != $name21 && $name4A != $name22
                        && $name4A != $name23 && $name4A != $name24
                        && $name4A != $name25 && $name4A != $name26
                        && $name4A != $name27 && $name4A != $name28
                        && $name4A != $name29 && $name4A != $name30
                        && $name4A != $name31 && $name4A != $name32
                    ) {
                ?>
                        <option value="<?php echo $teamidA22_8; ?>"><?php echo $name4A; ?></option>
                <?php }
                } ?>
                <option value="96">-- ยังไม่เลือกทีม --</option>
            </select>
        </div>
    </div>
</div>