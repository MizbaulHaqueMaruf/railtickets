<?php
if (!isset($file_access)) die("Direct File Access Denied");
$source = 'payment';

?>
<div class="content">



    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-12">


                <div class="card card-success">
                    <div class="card-header border-0">
                        <h3 class="card-title">All Payments</h3>

                    </div>
                    <div class="card-body">
                        <table id='example1' class="table table-striped table-bordered table-hover table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Payment_ID</th>
                                    <th>User email</th>
                                    <th>Schedule_ID</th>
                                    <th>Amount</th>
                                    <th>Reference</th>
                                    <th>Date of Payment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $row = $conn->query("SELECT * FROM payment");
                                if ($row->num_rows < 1) echo "No Records Yet";
                                $sn = 0;
                                while ($fetch = $row->fetch_assoc()) {
                                    $id = $fetch['id'];
                                ?>

                                <tr>
                                    <td><?php echo ++$sn; ?></td>
                                    <td><?php echo $fullname = $fetch['user_email']; ?></td>
                                    <td><?php echo $fetch['schedule_id']; ?></td>
                                    <td><?php echo $fetch['amount']; ?></td>
                                    <td><?php echo $fetch['ref']; ?></td>
                                    <td><?php echo $fetch['date']; ?></td>
                                    <td>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- /.col -->
</div>
<!-- /.row -->

</div>