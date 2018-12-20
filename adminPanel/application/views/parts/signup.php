<div class="form-container">
    <div class="header-img">
      <img src="<?php echo Base_URL; ?>/assets/images/Icon-leaf.png" alt="not found" class="leaf">
    </div><!-- close header-img -->
   <div class="heading">
       <h2>Create user account</h2>
   </div><!-- close heading -->  
    <?php echo form_open("accountController/signupSubmit", "POST"); ?>
       <div class="group">
           <?php echo form_input(['type' => 'text', 'name' => 'fullName', 'class' => 'control', 'placeholder' => 'Enter Name...', 'value' => $this->set_value('fullName')]); ?>
           <div class="error">
             <?php if(!empty($this->errors['fullName'])): ?>
              <?php echo $this->errors['fullName']; ?>
             <?php endif; ?>
           </div>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'Enter Email...', 'value' => $this->set_value('email')]); ?>
           <div class="error">
             <?php if(!empty($this->errors['email'])): ?>
              <?php echo $this->errors['email']; ?>
             <?php endif; ?>
           </div>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Create New Password...', 'value' => $this->set_value('password')]); ?>
           <div class="error">
             <?php if(!empty($this->errors['password'])): ?>
              <?php echo $this->errors['password']; ?>
             <?php endif; ?>
           </div>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirm Password...', 'value' => $this->set_value('confirmPassword')]); ?>
           <div class="error">
             <?php if(!empty($this->errors['confirmPassword'])): ?>
              <?php echo $this->errors['confirmPassword']; ?>
             <?php endif; ?>
           </div>
       </div><!-- close group -->
       <div class="group m-20">
           <?php echo form_submit(['class' => 'btn', 'value' => 'Create account &rarr;']); ?>
       </div><!-- close group -->
       <div class="group m-30">
         <?php echo anchor("accountController/login", "already have an account ?", ['class' => 'links']); ?>
       </div>
   <?php echo form_close(); ?>
   
  </div><!-- close container -->