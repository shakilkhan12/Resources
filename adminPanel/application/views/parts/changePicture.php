<h2 class="heading-thin">Change Picture</h2>
              <?php echo form_multipart("", "POST", ['class' => 'm-20']); ?>
               <div class="group">
                <label for="myImage" id="mylabel"></label>
                 <?php echo form_input(['type' => 'file', 'name' => 'changePicture', 'id' => 'myImage']); ?>
               </div><!-- close group -->
             
               <div class="group m-20">
                 <?php echo form_submit(['value' => 'Update Picture &rarr;', 'class' => 'btn-default']); ?>
                 <span class="ml-20">
               </span>
               </div><!-- close group -->
             <?php echo form_close(); ?>