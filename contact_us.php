<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | Weeb-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
      
        <link href="css/style.css" rel="stylesheet">
  
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
               <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>SECTOR 34 NOIDA</p>
				    <p>AMALTASH MARKET,</p>
				    <p>INDIA</p>
				    <p>Phone:+123 456 21</p>
				    <p>Email: Weeb@store.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href=""><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href=""><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0; padding-left:10px;"></a>
                   <a href=""><img src="./img/insta.jpg" alt="fb logo" style="width:30px; height:30px; border:0"></a>
               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>
