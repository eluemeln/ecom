<?php

require_once("../resources/config.php");
?>

<?php   include("../resources/templates/front/header.php");


?>
<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
           
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            
        </div>
        

        <!-- Page Features -->
        <div class="row text-center">

            <?php  echo get_products_in_shop_page();  ?>

            
        </div>
        

    </div>
    
    
   <style>
       
       body{
           
           background-color: azure;
           
           
           
       }
       .md 
       {
           
           left:0;
           bottom:0;
           width:100%;
           background-color:white;
           text-align: center;
           height: 5px;
           position:sticky;
           
           
        
       }
   </style>


</body>

<p class="md">
<?php   include("../resources/templates/front/footer.php");?>
</p>
</html>
