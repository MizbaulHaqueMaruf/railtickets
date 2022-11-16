<?php
if (!isset($file_access)) die("Direct File Access Denied");
$source = 'train';
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
                                All Trains</h3>
                            <div class='float-right'>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#add">
                                    Add New Train
                                </button></div>
                        </div>

                        <div class="card-body">

                            <table id="example1" style="align-items: stretch;"
                                class="table table-hover w-100 table-bordered table-striped<?php //
                                                                                                                                            ?>">
                                <thead>
                                    <tr>
                                        <th>Train Number</th>
                                        <th>Train Name</th>
                                        <th>SHOVON Seat</th>
                                        <th>SHULOV Seat</th>
                                        <th>BERTH Seat</th>
                                        <th>AC Seat</th>
                                        <th style="width: 30%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $row = $conn->query("SELECT * FROM train");
                                    if ($row->num_rows < 1) echo "No Records Yet";
                                    $sn = 0;
                                    while ($fetch = $row->fetch_assoc()) {
                                        $id = $fetch['Number'];
                                    ?>

                                    <tr>
                                        <td><?php echo ++$sn; ?></td>
                                        <td><?php echo $fullname = $fetch['name']; ?></td>
                                        <td><?php echo $fetch['SHOVON']; ?></td>
                                        <td><?php echo $fetch['SHULOV']; ?></td>
                                        <td><?php echo $fetch['BERTH']; ?></td>
                                        <td><?php echo $fetch['AC']; ?></td>
                                        <td>
                                            <form method="POST">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#edit<?php echo $id ?>">
                                                    Edit
                                                </button> -

                                                <input type="hidden" class="form-control" name="del_train"
                                                    value="<?php echo $id ?>" required id="">
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure about this?')"
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
                                                        <p>Train Name : <input type="text" class="form-control"
                                                                name="name" value="<?php echo $fetch['name'] ?>"
                                                                required minlength="3" id=""></p>
                                                        <p>SHOVON Capacity : <input type="number" min='0'
                                                                class="form-control"
                                                                value="<?php echo $fetch['SHOVON'] ?>"
                                                                name="SHOVON" required id="">
                                                        </p>
                                                        <p>SHULOV Capacity : <input type="number" min='0'
                                                                class="form-control"
                                                                value="<?php echo $fetch['SHULOV'] ?>"
                                                                name="SHULOV" required id="">
                                                        </p>
                                                        <p>BERTH Capacity : <input type="number" min='0'
                                                                class="form-control"
                                                                value="<?php echo $fetch['BERTH'] ?>"
                                                                name="BERTH" required id="">
                                                        </p>
                                                        <p>AC Capacity : <input type="number" min='0'
                                                                class="form-control"
                                                                value="<?php echo $fetch['AC'] ?>"
                                                                name="AC" required id="">
                                                        </p>
                                                        <p>

                                                            <input class="btn btn-info" type="submit" value="Edit Train"
                                                                name='edit'>
                                                        </p>
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

<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header">
                <h4 class="modal-title">Add New Train
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <table class="table table-bordered">
                        <tr>
                            <th>Train Name</th>
                            <td><input type="text" class="form-control" name="name" required minlength="3" id=""></td>
                        </tr>
                        <tr>
                            <th>SHOVON Capacity</th>
                            <td><input type="number" min='0' class="form-control" name="SHOVON" required id=""></td>
                        </tr>
                        <tr>
                            <th>SHULOV Capacity</th>
                            <td><input type="number" min='0' class="form-control" name="SHULOV" required id="">
                            </td>
                        </tr>
                        <tr>
                            <th>BERTH Capacity</th>
                            <td><input type="number" min='0' class="form-control" name="BERTH" required id=""></td>
                        </tr>
                        <tr>
                            <th>AC Capacity</th>
                            <td><input type="number" min='0' class="form-control" name="AC" required id="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <input class="btn btn-info" type="submit" value="Add Train" name='submit'>
                            </td>
                        </tr>
                    </table>
                </form>



            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $first_seat = $_POST['SHOVON'];
    $second_seat = $_POST['SHULOV'];
    $third_seat = $_POST['BERTH'];
    $fourth_seat = $_POST['AC'];
    if (!isset($name, $first_seat, $second_seat, $third_seat, $fourth_seat)) {
        alert("Fill Form Properly!");
    } else {
        $conn = connect();
        //Check if train exists
        $check = $conn->query("SELECT * FROM train WHERE name = '$name' ")->num_rows;
        if ($check) {
            alert("Train exists");
        } else {
            $ins = $conn->prepare("INSERT INTO train (name, SHOVON, SHULOV, BERTH, AC) VALUES (?,?,?,?,?)");
            $ins->bind_param("sssss", $name, $first_seat, $second_seat, $third_seat, $fourth_seat);
            $ins->execute();
            alert("Train Added!");
            load($_SERVER['PHP_SELF'] . "$me");
        }
    }
}

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $first_seat = $_POST['SHOVON'];
    $second_seat = $_POST['SHULOV'];
    $third_seat = $_POST['BERTH'];
    $fourth_seat = $_POST['AC'];
    $id = $_POST['id'];
    if (!isset($name, $first_seat, $second_seat, $third_seat, $fourth_seat)) {
        alert("Fill Form Properly!");
    } else {
        $conn = connect();
        //Check if train exists
        $check = $conn->query("SELECT * FROM train WHERE name = '$name' ")->num_rows;
        if ($check == 2) {
            alert("Train name exists");
        } else {
            $ins = $conn->prepare("UPDATE train SET name = ?, SHOVON = ?, SHULOV = ?, BERTH = ?, AC = ? WHERE Number = ?");
            $ins->bind_param("sssssi", $name, $first_seat, $second_seat, $third_seat, $fourth_seat, $id);
            $ins->execute();
            alert("Train Modified!");
            load($_SERVER['PHP_SELF'] . "$me");
        }
    }
}

if (isset($_POST['del_train'])) {
    $con = connect();
    $conn = $con->query("DELETE FROM train WHERE id = '" . $_POST['del_train'] . "'");
    if ($con->affected_rows < 1) {
        alert("Train Could Not Be Deleted. This Train Has Been Tied To Another Data!");
        load($_SERVER['PHP_SELF'] . "$me");
    } else {
        alert("Train Deleted!");
        load($_SERVER['PHP_SELF'] . "$me");
    }
}
?>