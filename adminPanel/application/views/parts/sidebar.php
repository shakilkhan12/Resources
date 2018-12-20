<div class="sidebar">
           <ul>
               <li><?php echo anchor_void("javascript:void(0)", "<span class='profile'><img src='". Base_URL ."/assets/images/". $this->get_session('image') ."' class='profile-img'></span>"); ?></li>
               <li><?php echo anchor_void("javascript:void(0)", '<span class="icon">&#9775;</span> '. ucwords($this->get_session('name'))); ?></li>
               <li><?php echo anchor("profile/changePictureView", '<span class="icon">&#9851;</span> Change Picture'); ?></li>
               <li><?php echo anchor("profile/changePasswordView", '<span class="icon">&#9852;</span> Change Password'); ?></li>
               <li><?php echo anchor("profile/index", '<span class="icon">&#9728;</span> Change Name'); ?></li>
               <li><?php echo anchor("ajaxController/index", '<span class="icon">&#8281;</span> Add Fruit'); ?></li>
           </ul>
       </div><!-- close sidebar -->