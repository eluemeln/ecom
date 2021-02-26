
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php   include("../resources/templates/front/header.php");?>


     <!--Navigation -->



         <!-- Contact Section -->

<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage"  id="contactForm"  method="post">
                        <?php send_message() ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Your Suject *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                    <textarea   maxlength="1000" name="message" class="Mes" placeholder=" Type Your Message Here" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<style>
    .Mes{
        width: 100%;
        height:200px;
       
    } 
    .mydiv{
        position:fixed;
        left:0;
        bottom:0;
        width:100%;
        background-color:white;
        text-align: center;
        border: 1px solid green; 
        height:15%;
        
    }
    input{
        width: 33%;
        height : 35px;
        font-size:15px;
        border: 1 px solid blue;
        
        
    }
    body{
        
        background-color: aquamarine;
    }
    


    
</style>
    <!-- /.container -->
</body>
<div class="mydiv">
<?php   include("../resources/templates/front/footer.php");?>
</div>