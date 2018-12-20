
<div class="accountMessage">
  <?php $this->flash('signupSuccess', 'alert alert-success'); ?>
  <?php $this->flash("emailError", "alert alert-danger"); ?>
  <?php $this->flash("passwordError", "alert alert-danger"); ?>
</div>

<div class="form-container">
    <div class="header-img">
      <img src="<?php echo Base_URL; ?>/assets/images/Icon-leaf.png" alt="not found" class="leaf">
    </div><!-- close header-img -->
   <div class="heading">
       <h2>User Login</h2>
   </div><!-- close heading -->  
    <?php echo form_open("accountController/loginSubmit", "post"); ?>
       
       <div class="group">
           <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'Enter Email', 'value' => $this->set_value('email')]); ?>
           <div class="error">
             <?php if(!empty($this->errors['email'])): ?>
              <?php echo $this->errors['email']; ?>
             <?php endif; ?>
           </div>
       </div><!-- close group -->
       <div class="group">
           <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Enter Password', 'value' => $this->set_value('password')]); ?>
          <div class="error">
             <?php if(!empty($this->errors['password'])): ?>
            <?php echo $this->errors['password']; ?>
           <?php endif; ?>
          </div>
       </div><!-- close group -->

       <div class="group m-20">
           <?php echo form_submit(['class' => 'btn', 'value' => 'Login &rarr;']); ?>
       </div><!-- close group -->
       <div class="group m-30">
         <?php echo anchor("accountController/index", "Create new account ?", ['class' => 'links']); ?>
       </div>
   <?php echo form_close(); ?>
   
  </div><!-- close container -->