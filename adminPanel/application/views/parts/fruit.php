<h3 class="heading-thin">Add Fruit</h3>
<div class="group">
  <div class="result">
    
  </div>
</div>
<div class="group">
<?php echo form_open("","", ['id' => 'myForm']); ?>
<div class="group">
  <?php echo form_input(['type' => 'text', 'id' => 'fruitName', 'class' => 'control', 'placeholder' => 'Enter Fruit Name']); ?>
</div><!-- close group -->
<div class="group">
  <input type="number" id="price" class="control" placeholder="Enter KG Price">
</div><!-- close group -->
<input type="hidden" id="fruitId" value="">
<div class="group">
  <?php echo form_button(['class' => 'btn-default', 'id' => 'addFruit', 'value' => 'Add Fruit']); ?>
</div><!-- close group -->
<?php echo form_close(); ?>
  <div id="table">
    
  </div>
             
            
