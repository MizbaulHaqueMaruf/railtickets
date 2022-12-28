<?php
if (!isset($file_access)) die("Direct File Access Denied");
$source = 'dynamic';
$me = "?page=$source";
?>

<div class="content">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                Schedules</h3>
                            <div class='float-right'>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#add">
                                    Add New One-Time Schedule &#128645;
                                </button> -->
                                <button type="button" class="btn btn-primary " data-toggle="modal"
                                    data-target="#add2">
                                    Add Schedule 
                                </button>
                            </div>
                        </div>

                        <div class="card-body">

                            <table id="example1" style="align-items: stretch;"
                                class="table table-hover w-100 table-bordered table-striped<?php //
                                                                                                                                            ?>">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Train</th>
                                        <th>Route</th>
                                        <th>Shovon Fee</th>
                                        <th>Shulov Fee</th>
                                        <th>Berth Fee</th>
                                        <th>AC Fee</th>
                                        <th>Date/Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $row = $conn->query("SELECT * FROM schedule");

                                    if ($row->num_rows < 1) echo "No Records Yet";
                                    $sn = 0;
                                    while ($fetch = $row->fetch_assoc()) {
                                        $id = $fetch['id']; ?><tr>
                                        <td><?php echo ++$sn; ?></td>
                                        <td><?php echo getTrainName($fetch['train_id']); ?></td>
                                        <td><?php echo getRoutePath($fetch['route_id']);
                                                $fullname = " Schedule" ?></td>
                                        <td>BDT <?php echo ($fetch['SHOVON']); ?></td>
                                        <td>BDT <?php echo ($fetch['SHULOV']); ?></td>
                                        <td>BDT <?php echo ($fetch['BERTH']); ?></td>
                                        <td>BDT <?php echo ($fetch['AC']); ?></td>

                                        <td><?php echo $fetch['date'], " / ", formatTime($fetch['time']); ?></td>

                                        <td>
                                            <form method="POST">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#edit<?php echo $id ?>">
                                                    Edit
                                                </button> -

                                                <input type="hidden" class="form-control" name="del_train"
                                                    value="<?php echo $id ?>" required id="">
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="edit<?php echo $id ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editing <?php echo $fullname;


                                                                                        ?></h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form action="" method="post">
                                                        <input type="hidden" class="form-control" name="id"
                                                            value="<?php echo $id ?>" required id="">

                                                        <p>Train : <select class="form-control" name="train_id" required
                                                                id="">
                                                                <option value="">Select Train</option>
                                                                <?php
                                                                    $cons = connect()->query("SELECT * FROM train");
                                                                    while ($t = $cons->fetch_assoc()) {
                                                                        echo "<option " . ($fetch['train_id'] == $t['Number'] ? 'selected="selected"' : '') . " value='" . $t['Number'] . "'>" . $t['name'] . "</option>";
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </p>

                                                        <p>Route : <select class="form-control" name="route_id" required
                                                                id="">
                                                                <option value="">Select Route</option>
                                                                <?php
                                                                    $cond = connect()->query("SELECT * FROM route");
                                                                    while ($r = $cond->fetch_assoc()) {
                                                                        echo "<option  " . ($fetch['route_id'] == $r['id'] ? 'selected="selected"' : '') . " value='" . $r['id'] . "'>" . getRoutePath($r['id']) . "</option>";
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            SHOVON FEE: <input class="form-control"
                                                                type="number" value="<?php echo $fetch['SHOVON'] ?>"
                                                                name="SHOVON" required id="">
                                                        </p>
                                                        <p>
                                                            SHULOV FEE: <input class="form-control"
                                                                type="number" value="<?php echo $fetch['SHULOV'] ?>"
                                                                name="SHULOV" required id="">
                                                        </p>
                                                        <p>
                                                            BERTH FEE: <input class="form-control"
                                                                type="number" value="<?php echo $fetch['BERTH'] ?>"
                                                                name="BERTH" required id="">
                                                        </p>
                                                        <p>
                                                            AC FEE: <input class="form-control"
                                                                type="number" value="<?php echo $fetch['AC'] ?>"
                                                                name="AC" required id="">
                                                        </p>
                                                        <p>
                                                            Date :
                                                            <input type="date" class="form-control"
                                                                onchange="check(this.value)" id="date"
                                                                placeholder="Date" name="date" required
                                                                value="<?php echo (date('Y-m-d', strtotime($fetch["date"]))) ?>">

                                                        </p>
                                                        <p>
                                                            Time : <input class="form-control" type="time"
                                                                value="<?php echo $fetch['time'] ?>" name="time"
                                                                required id="">
                                                        </p>
                                                        <p class="float-right"><input type="submit" name="edit"
                                                                class="btn btn-success" value="Edit Schedule"></p>
                                                    </form>

                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        <?php
                                    }
                                        ?>

                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</section>
</div>


        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> -->


<div class="modal fade" id="add2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header">
                <h4 class="modal-title">Add Schedule 
                </h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            Train : <select class="form-control" name="train_id" required id="">
                                <option value="">Select Train</option>
                                <?php
                                $con = connect()->query("SELECT * FROM train");
                                while ($row = $con->fetch_assoc()) {
                                    echo "<option value='" . $row['Number'] . "'>" . $row['name'] . "</option>";
                                }
                                ?>
                            </select>

                        </div>
                        <div class="col-sm-6">
                            Route : <select class="form-control" name="route_id" required id="">
                                <option value="">Select Route</option>
                                <?php
                                $con = connect()->query("SELECT * FROM route");
                                while ($row = $con->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . getRoutePath($row['id']) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            SHOVON Charge : <input class="form-control" type="number" name="SHOVON" required>
                        </div>
                        <div class="col-sm-6">

                            SHULOV Charge : <input class="form-control" type="number" name="SHULOV" required>
                        </div>
                        <div class="col-sm-6">
                            BERTH Charge : <input class="form-control" type="number" name="BERTH" required>
                        </div>
                        <div class="col-sm-6">

                            AC Charge : <input class="form-control" type="number" name="AC" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            From Date : <input class="form-control" onchange="check(this.value)" type="date"
                                name="from_date" required>
                        </div>
                        <div class="col-sm-6">
                            End Date : <input class="form-control" onchange="check(this.value)" type="date"
                                name="to_date" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-sm-6"> Every :
                            <select class="form-control" name="every">
                                <option value="Day">Day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div> -->
                        <div class="col-sm-6">

                            Time : <input class="form-control" type="time" name="time" required id="">
                        </div>
                    </div>
                    <hr>
                    <input type="submit" name="submit2" class="btn btn-success" value="Add Schedule"></p>
                </form>

                <script>
                function check(val) {
                    val = new Date(val);
                    var age = (Date.now() - val) / 31557600000;
                    var formDate = document.getElementById('date');
                    if (age > 0) {
                        alert("You are using a past/current date!");
                        val.value = "";
                        return false;
                    }
                }
                </script>

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php




if (isset($_POST['submit2'])) {
    $route_id = $_POST['route_id'];
    $train_id = $_POST['train_id'];
    $first_fee = $_POST['SHOVON'];
    $second_fee = $_POST['SHULOV'];
    $third_fee = $_POST['BERTH'];
    $fourth_fee = $_POST['AC'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    //$every = $_POST['every'];

    $time = $_POST['time'];
    if (!isset($route_id, $train_id, $first_fee, $second_fee, $third_fee, $fourth_fee, $date, $time)) {
        alert("Fill Form Properly!");
    } else {


        $from_date = formatDate($from_date);
        $to_date = formatDate($to_date);
        $startDate = $from_date;
        $endDate = $to_date;
        $conn = connect();
        //if ($every == 'Day') {
            for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
                $date = date('Y-m-d', $i);
                $ins = $conn->prepare("INSERT INTO `schedule`(`train_id`, `route_id`, `date`, `time`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES (?,?,?,?,?,?,?,?)");
                $ins->bind_param("iissiiii", $train_id, $route_id, $date, $time, $first_fee, $second_fee, $third_fee, $fourth_fee);
                $ins->execute();

                $sql="SELECT SHOVON, SHULOV, BERTH , AC from train where Number =$train_id";
                $result=mysqli_query($conn, $sql);
                $row=mysqli_fetch_assoc($result);
                $shovon=$row['SHOVON'];
                $shulov=$row['SHULOV'];
                $berth=$row['BERTH'];
                $ac=$row['AC'];
                $schedule_finder="SELECT id from schedule where train_id = $train_id And route_id=$route_id and time='$time' and date ='$date'";
                $result2=mysqli_query($conn,$schedule_finder);
                $row2=mysqli_fetch_assoc($result2);
                $schedule_id=$row2['id'];
                $sql2="INSERT INTO `seats_info`(`schedule_id`, `train_number`, `route_id`, `date`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES ($schedule_id,$train_id,$route_id,'$date',$shovon,$shulov,$berth,$ac)";
                $final_result=mysqli_query($conn,$sql2);
                // $shovon = "SELECT SHOVON FROM train where Number = $train_id";
                // $shulov = "SELECT SHULOV FROM train where Number = $train_id";
                // $berth = "SELECT BERTH FROM train where Number = $train_id";
                // $ac = "SELECT AC FROM train where Number = $train_id";
                // $schedule_id = "SELECT id FROM schedule WHERE train_id = $train_id AND route_id = $route_id";
                // $ins1 = $conn->prepare("INSERT INTO `seats_info`(`schedule_id`, `train_number`, `route_id`, `date`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES (?,?,?,?,?,?,?,?)");
                // $ins1->bind_param("iiisiiii", $schedule_id, $train_id, $route_id, $date, $shovon, $shulov, $berth, $ac);
                // $ins1->execute();
        //    }
        // } else {
        //     for ($i = strtotime($every, strtotime($startDate)); $i <= strtotime($endDate); $i = strtotime('+1 week', $i)) {
        //         $date = date('d-m-Y', $i);

        //         $ins = $conn->prepare("INSERT INTO `schedule`(`train_id`, `route_id`, `date`, `time`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES (?,?,?,?,?,?,?,?)");
        //         $ins->bind_param("iissiiii", $train_id, $route_id, $date, $time, $first_fee, $second_fee, $third_fee, $fourth_fee);
        //         $ins->execute();
        //     }
         }


        alert("Schedules Added!");
        load($_SERVER['PHP_SELF'] . "$me");
    }
}


if (isset($_POST['edit'])) {
    $route_id = $_POST['route_id'];
    $train_id = $_POST['train_id'];
    $first_fee = $_POST['SHOVON'];
    $second_fee = $_POST['SHULOV'];
    $third_fee = $_POST['BERTH'];
    $fourth_fee = $_POST['AC'];
    $date = $_POST['date'];
    $date = formatDate($date);
    $time = $_POST['time'];
    $id = $_POST['id'];
    if (!isset($route_id, $train_id, $first_fee, $second_fee, $third_fee, $fourth_fee, $date, $time)) {
        alert("Fill Form Properly!");
    } else {
        $conn = connect();
        $ins = $conn->prepare("UPDATE `schedule` SET `train_id`=?,`route_id`=?,`date`=?,`time`=?,`SHOVON`=?,`SHULOV`=?,`BERTH`=?,`AC`=? WHERE id = ?");
        $ins->bind_param("iissiiiii", $train_id, $route_id, $date, $time, $first_fee, $second_fee, $third_fee, $fourth_fee, $id);
        $ins->execute();

        alert("Schedule Modified!");
        load($_SERVER['PHP_SELF'] . "$me");
    }
}

if (isset($_POST['del_train'])) {
    $con = connect();
    $conn = $con->query("DELETE FROM schedule WHERE id = '" . $_POST['del_train'] . "'");
    if ($con->affected_rows < 1) {
        alert("Schedule Could Not Be Deleted. This Route Has Been Tied To Another Data!");
        load($_SERVER['PHP_SELF'] . "$me");
    } else {
        alert("Schedule Deleted!");
        load($_SERVER['PHP_SELF'] . "$me");
    }
}
?>