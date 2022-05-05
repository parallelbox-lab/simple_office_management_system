<?php
$role = $this->session->userdata('role');
if($role == "technical"){?>
<div class="container">
<div class="mt-1">
    <h3 class="text-dark" style="font-size:21px">Customer Information</h3>

    <p><b>Customer Name:</b><br/> <?= $reports['name'];?></p>
    <p><b>Customer Phone Number:</b><br/>  <?= $reports['phone'];?></p>
    <p><b>Customer Email:</b><br/>  <?= $reports['email']; ?></p>
    <p><b>Customer Address:</b><br/>  <?= $reports['address']; ?></p>
    <p><b>Service Needed by customer</b>:<br/> <?=$reports['service']; ?></p>

    </div>

<h3 class="text-dark mb-3" style="font-size:21px">Add Equipments Needed for Installation</h3>
<form action="" method="post">
    <div class="row">
    <div class="col">
    <div class="form-group" >
    <div>
        <textarea class="form-control  <?php echo form_error('items') ? 'is-invalid' : 'is-valid' ?>" name="items" placeholder="E.g 2 poles, Wires " style="height:150px;resize:none;border-radius:0px;"><?php if(isset($reports['equipments'])){echo $reports['equipments'];}?></textarea>
      <!-- <input type="text" name="addmore[][items]" class="form-control name_list <?php echo form_error('addmore') ? 'is-invalid' : 'is-valid' ?>" style="border-radius:0;" placeholder="Add equipment">
      <button type="button" name="add" id="add" class="btn btn-success" style="border-radius:0;">+</button>   -->
      <?php echo form_error('items'); ?>
    </div>
    </div>
    </div>
    
    </div>
    <input type="hidden" name="name" value="<?= $reports['name'];?>">
    <input type="hidden" name="phone" value="<?= $reports['phone'];?>">
    <input type="hidden" name="email" value="<?= $reports['email']; ?>">
    <input type="hidden" name="address" value="<?= $reports['address']; ?>">
    <input type="hidden" name="service" value="<?=$reports['service']; ?>">
    <input type="hidden" name="status" value="<?=$reports['status']; ?>">
    <div class="form-group">
        <button class="btn btn-success" id="submit" name="send">Send <i class="fa fa-share"></i></button>
    </div>
  
   </div>
<?php } else { redirect('dashboard');}?>
