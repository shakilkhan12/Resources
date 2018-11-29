<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <?php include "parts/header.php"; ?> 
</head>
<body>
  
  <?php $this->view($data['layout']); ?>

  <div class="bg">
    
  </div><!-- close container -->
</body>
</html>