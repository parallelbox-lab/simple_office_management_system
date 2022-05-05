<?php
$role = $this->session->userdata('role');
if($role == "technical"){?>
<!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Customer Table</p>
<?php $this->load->view('flash');?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Coordinate</th>
                                            <th>Survey Status</th>
                                            <th>service </th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                        <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>amount</th>
                                            <th>Date for survey</th>
                                            <th>service </th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                    <?php $i = 0; foreach($reports as $rows) { $i++;?>
                                    <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $rows->name;?></td>
                                            <td><?= $rows->phone;?></td>
                                            <td><?= $rows->email;?></td>
                                            <td><?= word_limiter($rows->address,3);?></td>
                                            <td><?= $rows->coordinate;?></td>
                                            <!-- <td><?php $timestamp = $rows->date_for_survey; echo date("F jS, Y", strtotime($timestamp));?></td> -->
                                            <td class="label label-success"><?= $rows->status;?></td>
                                            <td><?=  word_limiter($rows->service,5);?></td>
                                            <td><a href="<?= base_url();?>dashboard/view-report/<?= $rows->id;?>" class="btn btn-success del mb-1">View</a><a href="<?= base_url();?>dashboard/delete-report/<?= $rows->id;?>" class="btn btn-danger" id="del">Delete</a></td>
                                        </tr>
                                        <?php } ?>                                   

                                    </tbody>
</table>
<?php } else { redirect('dashboard');}?>
