<h2 class="heading-thin">Change Name</h2>
              <?php echo form_open("profile/updateName", "post", ['class' => 'm-20']); ?>
               <div class="group">
                <?php echo form_input(['type' => 'text', 'name' => 'fullName', 'class' => 'control', 'placeholder' => 'Enter Name', 'value' => $this->get_session('name')]) ?>
                <div class="error">
                  <?php if(!empty($this->errors['fullName'])): ?>
                    <?php echo $this->errors['fullName']; ?>
                  <?php endif; ?>
                </div>
               </div><!-- close group -->
             
               <div class="group m-20">
                 <?php echo form_submit(['class' => 'btn-default', 'value' => 'Update Name &rarr;']); ?>
                 <span class="ml-20">
                 <input type="reset" value="Reset &larr;" class="btn-white">
               </span>
               </div><!-- close group -->
             </form><!-- close form -->