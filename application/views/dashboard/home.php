    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
</div>

<!-- Content Row -->
<div class="row">

   
<?php
       $role = $this->session->userdata('role');
        if($role == "sales"){?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Reports sent
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            echo $this->db->count_all_results();
                        ?></div>
                            </div>
                            <div class="col">
                                <!-- <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Successful Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','success');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Failed Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','failed');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php } ?>
<?php
       $role = $this->session->userdata('role');
        if($role == "technical"){?>
<!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                           $this->db->where('status','untouched');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="<?= base_url();?>dashboard/successfull-survey">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Successful Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','success');
                            echo $this->db->count_all_results();
                        ?></div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Failed Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','failed');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="<?= base_url();?>dashboard/successfull-survey">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                           Total Survey sent to support</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('list_equipment');
                            echo $this->db->count_all_results();
                        ?></div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php } ?>
<?php
       $role = $this->session->userdata('role');
        if($role == "support"){?>
<!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="<?= base_url();?>dashboard/sent-invoice-list">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Invoice sent</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('list_equipment');
                           $this->db->where('invoice_status','success');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Successful Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','success');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Failed Survey</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $this->db->from('report_table');
                            $this->db->where('status','failed');
                            echo $this->db->count_all_results();
                        ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php } ?>

<?php
       $role = $this->session->userdata('role');
        if($role == "sales"){?>
<div class="card p-3 mb-3">
<h4 class="text-dark mb-3">Successful Surveys </h4>
<div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Coordinate long & lati</th>
                <th>Survey Status</th>
                <th>service </th>
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

                                    <?php $i = 0; foreach($survey as $rows) { $i++;?>
                                    <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $rows->name;?></td>
                                            <td><?= $rows->phone;?></td>
                                            <td><?= $rows->email;?></td>
                                            <td><?=  word_limiter($rows->address,2,'...');?></td>
                                            <td><?= $rows->coordinate;?></td>
                                            <td class="label label-success"><?= $rows->status;?></td>
                                            <td><?=  word_limiter($rows->service,5);?></td>
                                        </tr>
                                        
                                        <?php } ?>                                   
                            <?php if($survey == null){?>
                            <tr><td valign="top" colspan="10" style="text-align:center">No Data is Available</td></tr>
                            <?php } ?>
                                    </tbody>
</table>

                                    </div>
                            </div>
<?php } ?>

<?php
       $role = $this->session->userdata('role');
        if($role == "support"){?>
        <div class="card mb-3">
<div class="card-body">
<h4 class="text-dark mb-3"></h4>
<div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Survey Status</th>
                <th>service </th>
                <th>Equipments needed</th>
                <th>Action</th>
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

                                    <?php $i = 0; foreach($surveyS as $rows) { $i++;?>
                                    <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $rows->name;?></td>
                                            <td><?= $rows->phone;?></td>
                                            <td><?= $rows->email;?></td>
                                            <td><?= $rows->address;?></td>
                                            <td class="label label-success"><?= $rows->survey_status;?></td>
                                            <td><?=  word_limiter($rows->service,5);?></td>
                                            <td><?=  word_limiter($rows->items,5);?></td>
                                            <td><a href="<?= base_url();?>dashboard/view/<?= $rows->id;?>" class="btn btn-success del mb-1">View</a><a href="<?= base_url();?>dashboard/delete-report/<?= $rows->id;?>" class="btn btn-danger" id="del">Delete</a></td>
                                        </tr>
                                        
                                        <?php } ?>                                   
                            <?php if($surveyS == null){?>
                            <tr><td valign="top" colspan="10" style="text-align:center">No Data is Available</td></tr>
                            <?php } ?>
                                    </tbody>
</table>
                            </div>
                                    </div>
                            </div>

<?php } ?>

<?php
       $role = $this->session->userdata('role');
        if($role == "technical"){?>
<div class="card-body">
<h4 class="text-dark mb-3">New Surveys </h4>
<div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
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
                <th>Action</th>
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

                                    <?php $i = 0; foreach($report as $rows) { $i++;?>
                                    <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $rows->name;?></td>
                                            <td><?= $rows->phone;?></td>
                                            <td><?= $rows->email;?></td>
                                            <td><?= word_limiter($rows->address,1 ,'...');?></td>
                                            <td><?= $rows->longitude;?> and <?= $rows->latitude;?></td>
                                            <td class="label label-success"><?= $rows->status;?></td>
                                            <td><?=  word_limiter($rows->service,5);?></td>
                                            <td><a href="<?= base_url();?>dashboard/view-report/<?= $rows->id;?>" class="btn btn-success del mb-1">View</a><a href="<?= base_url();?>dashboard/delete-report/<?= $rows->id;?>" class="btn btn-danger" id="del">Delete</a></td>

                                        </tr>
                                        <?php } ?>                                   
                                        <?php if($report == null){?>
                            <tr><td valign="top" colspan="10" style="text-align:center">No Data is Available</td></tr>
                            <?php } ?>
                                    </tbody>
</table>

                                    </div>
 <?php } ?>