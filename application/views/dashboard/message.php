<?php
$role = $this->session->userdata('role');
if($role == "sales"){?>
<div class="container">
 <?php $this->load->view('flash'); ?>
        <form action="" method="post">
        <div class="row">
    <div class="col-lg-6">
            <div class="form-group">
                <label for="name" class="<?= form_error('name') ? 'text-danger' : '' ?>">Customer Name</label>
                <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" placeholder="E.g Faleye Ajibola" value="<?= set_value('name'); ?>">
                <?php echo form_error('name'); ?>
            </div>
</div><!--End col-lg-6 -->
<div class="col-lg-6">
            <div class="form-group">
                <label for="phone number" class="<?= form_error('phone') ? 'text-danger' : '' ?>">Phone number</label>
                <input type="number" name="phone" class="form-control <?= form_error('phone') ? 'is-invalid' : '' ?>" placeholder="E.g 08136149210" value="<?= set_value('phone'); ?>">
                <?php echo form_error('phone'); ?>
            </div>
            </div><!--End col-lg-6 -->
            <div class="col-lg-6">
            <div class="form-group">
                <label for="email" class="<?= form_error('email') ? 'text-danger' : '' ?>">Email</label>
                <input type="email" name="email"  class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" placeholder="E.g example@gmail.com" value="<?= set_value('email'); ?>">
                <?php echo form_error('email'); ?>
            </div>
            </div><!--End col-lg-6 -->
            
            <div class="col-lg-6">
            <div class="form-group">
                <label for="address/location" class="<?= form_error('address') ? 'text-danger' : '' ?>">Address/Location</label>
                <input type="text" name="address" class="form-control <?= form_error('address') ? 'is-invalid' : '' ?>" placeholder="E.g N0 3 Anifowose Street " value="<?= set_value('address'); ?>">
                <?php echo form_error('address'); ?>
            </div>
            </div><!--End col-lg-6 -->
            <div class="col-lg-12">
            <label for="coordinate" class="<?= form_error('coordinate') ? 'text-danger' : '' ?>">Customer coordinate</label>
            <div class="form-group">
                <input type="text" name="coordinate" class="form-control <?= form_error('coordinate') ? 'is-invalid' : '' ?>" placeholder="E.g 45049 , -49393.00" value="<?= set_value('coordinate'); ?>">
                <?php echo form_error('coordinate'); ?>
    </div>          
    </div>           
            <div class="col-lg-12">
            <div class="form-group">
                <label for="service" class="<?= form_error('service') ? 'text-danger' : '' ?>">Plan Requested By Customer</label>
                <textarea name="service" class="form-control <?= form_error('service') ? 'is-invalid' : '' ?>" placeholder="E.g Unlimited Data with 5 MBPS" value="<?= set_value('service'); ?>"></textarea>
                <?php echo form_error('service'); ?>

            </div>
            </div><!--End col-lg-6 -->
            <div class="col-lg-6">
            <div class="form-group">
          <button class="btn btn-success" name="send"><i class="fa fa-save"></i> Send to Technical</button>   
         </div>
         </div><!--End col-lg-6 -->
</div><!-- end row -->
        </form>
    
</div>


 <?php } else { redirect('dashboard');}?>
