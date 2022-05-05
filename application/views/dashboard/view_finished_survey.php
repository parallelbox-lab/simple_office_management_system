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
<p><b>Current Survey Status</b>:<br/> <?=$reports['status']; ?></p>
<h3>Equipments Needed for Installation </h3>
<p><br/><?=$reports['equipments']; ?></p>

</div>
</p>

<p>
    
</div>
</div>
</div>
</div>
</div>

<?php } else { redirect('dashboard');}?>