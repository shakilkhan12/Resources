<div class="form-container">
    <div class="header-img">
      <img src="<?php echo Base_URL; ?>/assets/images/Icon-leaf.png" alt="not found" class="leaf">
    </div><!-- close header-img -->
   <div class="heading">
       <h2>Create user account</h2>
   </div><!-- close heading -->  
    <?php echo form_open("", "POST"); ?>
       <div class="group">
           <?php echo form_input(['type' => 'text', 'name' => 'fullName', 'class' => 'control', 'placeholder' => 'Enter Name...']); ?>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'Enter Email...']); ?>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Create New Password...']); ?>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirm Password...']); ?>
       </div><!-- close group -->
       <div class="group m-20">
           <?php echo form_submit(['class' => 'btn', 'value' => 'Create account &rarr;']); ?>
       </div><!-- close group -->
       <div class="group m-30">
         <?php echo anchor("accountController/login", "already have an account ?", ['class' => 'links']); ?>
       </div>
   <?php echo form_close(); ?>
   
  </div><!-- close container -->