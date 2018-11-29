<div class="form-container">
    <div class="header-img">
      <img src="<?php echo Base_URL; ?>/assets/images/Icon-leaf.png" alt="not found" class="leaf">
    </div><!-- close header-img -->
   <div class="heading">
       <h2>User Login</h2>
   </div><!-- close heading -->  
    <?php echo form_open("", "post"); ?>
       
       <div class="group">
           <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'Enter Email']); ?>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Enter Password']); ?>
       </div><!-- close group -->

       <div class="group m-20">
           <?php echo form_submit(['class' => 'btn', 'value' => 'Login &rarr;']); ?>
       </div><!-- close group -->
       <div class="group m-30">
         <?php echo anchor("accountController/index", "Create new account ?", ['class' => 'links']); ?>
       </div>
   <?php echo form_close(); ?>
   
  </div><!-- close container -->