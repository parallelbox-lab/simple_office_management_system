<?php
$role = $this->session->userdata('role');
if($role == "support"){?>
<div class="container">
<div class="mt-1">
    <h3 class="text-dark" style="font-size:21px">Customer Information</h3>

    <p><b>Customer Name:</b><br/> <?= $reports['name'];?></p>
    <p><b>Customer Phone Number:</b><br/>  <?= $reports['phone'];?></p>
    <p><b>Customer Email:</b><br/>  <?= $reports['email']; ?></p>
    <p><b>Customer Address:</b><br/>  <?= $reports['address']; ?></p>
    <p><b>Service Needed by customer</b>:<br/> <?=$reports['service']; ?></p>
    <p><b>Service Needed by customer</b>:<br/> <?=$reports['items']; ?></p>


    </div>

   </div>
<?php } else { redirect('dashboard');}?>
