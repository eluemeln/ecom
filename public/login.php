<?php

require_once("../resources/config.php");
?>

<?php   include("../resources/templates/front/header.php");


?>
<body>
    <h1> Login</h1>
    <h2 class="alert-danger"><?php display_message(); ?></h2>

    <div   class = "container">

        <form action="  <?php login_user()?>  "   method="POST">
            
           <b>Username</b>
            
            <input type ="text"  name= "username"   maxlength="70"  required /><br><br>
            
            <b>Password</b>

            <input type="password" name= "password"  maxlength="70"  required /><br><br>

            <input type="submit" class="glyp" name="submit">
        </form>
 </div>

    

<style>
    body{
        background-color:antiquewhite;
        border:3px solid blue;    
        
    }
    
    h1{
         
        text-align:center;
        
    }
    
    h2{
        
        text-align:center;
    
    }
    
    form{
        text-align: center;
        float: none;
        padding-bottom: 10px;
        padding-top: 30px;
        padding-right: 10px;
        padding-left: 20px;
        border: 1 px solid black;
            
        
        
    }
    input{
        width: 33%;
        height : 35px;
        font-size:15px;
        border: 1 px solid blue;
        
        
    }
    
    
    .glyp  {
        width:10%;
        height:15%;
        font-size:25px;
        background-color: whitesmoke;
    
    
    }
    
    #div1{
        
        width:100px;
        height: 20px;
        position :relative;
        animation: :animate 5s infinite;
        animation-timing-function: linear; 
        background: red;
        color: white;
    }
    
    @keframes animate{
        
        from{left:0px;}
        to{left:200px;}
    }
    
    #com{
        position:fixed;
        left:0;
        bottom:0;
        width:100%;
        background-color:white;
        text-align: center;
        border: 1px solid green; 
        height:15%;
    
    }
    
</style>



</body>
<div id="com"

<?php   include("../resources/templates/front/footer.php");?>
</div>
</html>