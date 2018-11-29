<h2 class="heading-thin">Change Password</h2>
              <?php echo form_open("", "POST", ['class' => 'm-20']); ?>
               <div class="group">
                 <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Current Password']); ?>
               </div><!-- close group -->
               <div class="group">
                 <?php echo form_input(['type' => 'password', 'name' => 'newPassword', 'class' => 'control', 'placeholder' => 'Choose New Password']); ?>
               </div><!-- close group -->
               <div class="group">
                 <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirm New Password']); ?>
               </div><!-- close group -->
               <div class="group m-20">
                 <?php echo form_submit(['value' => 'Update Password &rarr;', 'class' => 'btn-default']); ?>
                 <span class="ml-20">
                 <input type="reset" value="Reset &larr;" class="btn-white">
               </span>
               </div><!-- close group -->
             </form><!-- close form -->