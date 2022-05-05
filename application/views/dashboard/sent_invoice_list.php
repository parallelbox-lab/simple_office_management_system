<?php
$role = $this->session->userdata('role');
if($role == "support"){?>
<!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-5 text-gray-800" style="text-transform:uppercase;font-weight:800">List of Invoice sent </h1>
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

                                    <?php $i = 0; foreach($invoice_list as $rows) { $i++;?>
                                    <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $rows->name;?></td>
                                            <td><?= $rows->phone;?></td>
                                            <td><?= $rows->email;?></td>
                                            <td><?= word_limiter($rows->address,3);?></td>
                                            <td class="label label-success"><?= $rows->status;?></td>
                                            <td><?=  word_limiter($rows->service,5);?></td>
                                            <td><a href="<?= base_url();?>dashboard/invoice-sent/<?= $rows->id;?>" class="btn btn-primary mb-1">View</a></td>
                                        </tr>
                                        <?php } ?>                                   

                                    </tbody>
</table>
</div>
<?php } else { redirect('dashboard');}?>
