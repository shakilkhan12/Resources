<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <?php include "parts/header.php"; ?>
</head>
<body>
    
    
     <?php include "parts/nav.php"; ?>

    <div class="layout">
        <?php include "parts/sidebar.php"; ?>

        <div class="contents">
            <div class="content">
                <?php $this->view($data['layout']); ?>
            </div><!-- close content -->
        </div><!-- close contents -->
    </div><!-- close layout -->
<?php if($this->get_session("loader")): ?>

    <div class="loader">
     <div class="loader-section">
       <div class="loader-circle">
         <div class="element">
           
         </div><!-- close element -->
       </div><!-- close loader-circle -->
     </div><!-- close loader-section -->
   </div><!-- close loader -->
    <?php endif; ?>
    <?php $this->unset_session('loader'); ?>
    <?php include "parts/footer.php"; ?>

    <script type="text/javascript">
        
        setTimeout(function(){
       
       document.querySelector(".loader").style.display = "none";

        },3000);

    </script>
    <script type="text/javascript">
        
        $(document).ready(function(){
          
          $("#addFruit").click(function(){
            
            let fruitName = $("#fruitName").val();
            let price     = $("#price").val();
            let btnValue  = $("#addFruit").val();
            let fruitId   = $("#fruitId").val();
            if(fruitName.length == "" || price.length == ""){
               
               $(".result").html(`<div class="alert alert-danger">Please fill form and try again!</div>`);
               endMesage();

            } else {
                if(btnValue === "Add Fruit"){

                     $.ajax({

                    type : 'POST',
                    url  : "<?= Base_URL; ?>/ajaxController/addFruit",
                    data : {'fruitName' : fruitName, 'fruitPrice': price},
                    dataType : 'JSON',
                    beforeSend: function(){
                    $("#addFruit").attr("value", "Loading...");
                    },
                    success : function(response) {
                        setTimeout(function(){
                        if(response.status === "success"){
                            $(".result").html(`<div class="alert alert-success">Fruit has been added successfully!</div>`);
                            fetchFruits();
                            endMesage();
                            $("#myForm").trigger("reset");
                            $("#addFruit").attr("value", "Add Fruit");

                        }
                        },1500);
                        
                    }

                });//close ajax request

                } else if(btnValue === "Update Fruit"){

                    $.ajax({
                        type : "POST",
                        url  : "<?= Base_URL; ?>/ajaxController/updateFruit",
                        data : {'updateId': fruitId, "updateName": fruitName, "udpatePrice": price},
                        dataType : "JSON",
                        beforeSend : function(){

                            $("#addFruit").attr("value" ,"Updating...");

                        },
                        success : function(response){

                            setTimeout(function(){
                        if(response.status === "success"){
                            $(".result").html(`<div class="alert alert-success">Fruit has been updated successfully!</div>`);
                            fetchFruits();
                            endMesage();
                            document.getElementById("fruitName").value = "";
                            document.getElementById("price").value = "";
                            $("#addFruit").attr("value", "Add Fruit");

                        }
                        },1500);

                        }
                    })

                }
               
            }
        
          })

        })


        function endMesage(){
         
         setTimeout(function(){
         $(".alert").hide();
         }, 3000);

        }

        function fetchFruits(){

            $.ajax({

                type     : 'POST',
                url      : "<?= Base_URL; ?>/ajaxController/fetchFruits",
                dataType : 'JSON',
                success  : function(response){
                    $("#table").html('');
                 if(response.status === "success"){
                    let table = "";
                    
                    response.data.forEach( function(element) {
                        table += `<tbody><tr>
                   <td>${element.name}</td>
                   <td>$${element.price}.00</td>
                   <td><a href="javascript:void(0);" class="linkss" onclick="deleteFruit(${element.id});">Delete &#10005;</a></td>
                   <td><a href="javascript:void(0);" class="linkss-warning" onclick="edit_data(${element.id}, '${element.name}', ${element.price});">Update &#9888;</a></td>
                 </tr></tbody>`;
                    });

                    $("#table").html(`<table class="table m-20">
               <thead>
                 <tr>
                   <th>Name</th>
                   <th>KG Price</th>
                   <th>Delete</th>
                   <th>Update</th>
                 </tr>
               </thead>${table}</table>`);

                 } else if(response.status === "noRecords"){

                    $("#table").html(`<div class="noRecords">You have not any records</div>`);

                 }
                }
            })
        }

        fetchFruits();

        function edit_data(id, name, price){

            $("#fruitName").attr("value", name);
            $("#price").attr("value", price);
            $("#addFruit").attr("value", "Update Fruit");
            $("#fruitId").attr("value", id);

        }

        function deleteFruit(id){
            let confirmBox = confirm("Are you really want to delete this record?");
            if(confirmBox){
                $.ajax({
                    type : "POST",
                    url  : "<?= Base_URL; ?>/ajaxController/deleteFruit",
                    data : {'id': id},
                    dataType : "JSON",
                    success : function(response){
                        if(response.status === "success"){
                            $(".result").html(`<div class="alert alert-success">Fruit has been Deleted successfully!</div>`);
                            fetchFruits();
                            endMesage();
                        }
                    }
                })
            }
        }

    </script>
</body>
</html>