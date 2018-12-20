 <?php echo link_js("assets/js/jquery.min.js"); ?>
 <script type="text/javascript">
   
   $(document).ready(function(){
    $(".hember").click(function(){
      $(".sidebar").toggle();
    })
   })

 </script>

  <script type="text/javascript">
   
   let image = document.getElementById("myImage");
   let label = document.getElementById("mylabel");
       image.addEventListener("change", function(){
        let imageName = image.value;
        let onlyName = imageName.split("\\");
            label.innerText = onlyName[2];
        
       });
 </script>