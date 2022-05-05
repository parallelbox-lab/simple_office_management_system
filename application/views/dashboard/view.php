<?php
$role = $this->session->userdata('role');
if($role == "support"){?>
<div class="container">
<div class="row">
    
<div class="col-lg-12">
<?php $this->load->view('flash'); ?>
<div style="color:#000;">  
<h3>Customer Information </h3>
<div class="mb-5 pb-5">
<p><b>Customer Name:</b><br/> <?= $reports['name'];?></p>
<p><b>Customer Phone Number:</b><br/>  <?= $reports['phone'];?></p>
<p><b>Customer Email:</b><br/>  <?= $reports['email']; ?></p>
<p><b>Customer Address:</b><br/>  <?= $reports['address']; ?></p>
<p><b>Service Needed by customer</b>:<br/> <?=$reports['service']; ?></p>
<p><b>Survey Status</b>:<br/> <?=$reports['survey_status']; ?></p>
<p><b>Equipments Needed for Installation</b></p>
<p><?=$reports['items']; ?></p>
<p><b>If Invoice is sent to client change status to sent </b>
<form action="" method="post">
    <div class="row">
        <div class="col-sm-2">
    <select name="status" class="form-control">
        <option value="success">Sent</option>
        <option value="failed">Pending</option>
    </select>
        </div>
        <button type="submit" name="send" class="mr-auto btn btn-success">Save Changes </button>
</form>
</div>
</p>

<p>
    
</div>
</div>
</div>
</div>
</div>

<?php } else { redirect('dashboard');}?>