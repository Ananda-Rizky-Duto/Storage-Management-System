<?php
    require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangku: Welcome</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	  <link href="css/login-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
    .btn {
    background-color: #f8f9fa;
    border: none;
    color: black;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
    }

  .button1{
    background-color: #f8f9fa; 
    color: black; 
    border: 1px solid rgb(0, 183, 255);
  }
  .button1:hover{
    background-color: rgb(0, 183, 255);
    color: white;
  }
  .button2{
    background-color: #f8f9fa; 
    color: rgb(133, 126, 126); 
  }
  .button2:hover{
    background-color: rgb(209, 200, 200);
    color: black;
  }
    </style>
  </head>
  <body>
 
    <!---->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <a class="navbar-brand" href="index.php" >Barangku</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!--Jadiin Judul Aja di atas halaman-->
          <!--li class="nav-item"> <a class="nav-link disabled" >Homepage</a> </li-->
        </ul>
      </div>
      
        <button class="btn button2" type="submit" onclick= "window.location.href= 'register.php'">Join Now</button>
        <button class="btn button1" type="submit" onclick= "window.location.href='login.php'">Log In</button>
      
      
    </nav>
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">Barangku</h1>
              <p class="text-center">Barangku is a platform to manage your stuff.</p>
              <p>&nbsp;</p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mt-2 text-center">
            <h2>ABOUT US</h2>
          </div>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/orang.jpg" data-holder-rendered="true">
            <h3>Ananda Rizky Duto P</h3>
            <p>Computer Engineering Student at Universitas Indonesia</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/orang.jpg" data-holder-rendered="true">
            <h3>Darrell Yonathan</h3>
            <p>Computer Engineering Student at Universitas Indonesia</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/orang.jpg" data-holder-rendered="true">
            <h3>Geraldy Christanto</h3>
            <p>Computer Engineering Student at Universitas Indonesia</p>
          </div>
        </div>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="text-center col-md-8 col-12 mx-auto">
              <p class="lead">What are you waiting for? Let's make an account</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-auto mx-auto"> <a class="btn btn-block btn-lg btn-success" href="register.html" title="">Sign up now!</a> </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 mb-2 text-center">
            <h2>OUR SERVICES</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <h3>Scan Item</h3>
            <p>This will help you to manage your stuff.</p>
            <p><a class="btn btn-link" >View details »</a></p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <h3>Generate Barcode</h3>
            <p> This will generate a barcode for your stuff, so you can add it to your database system.</p>
            <p><a class="btn btn-link" >View details »</a></p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <h3>Login</h3>
            <p> This will give you an access to database.</p>
            <p><a class="btn btn-link" >View details »</a></p>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 mx-auto">
          <div class="jumbotron">
            <div class="row text-center">
              <div class="text-center col-12">
                <h2>Send A Comment</h2>
              </div>
              <div class="text-center col-12">
                <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
                <form id="feedbackForm" class="text-center">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="nameHelp">
                    <span id="nameHelp" class="form-text text-muted" style="display: none;">Please enter your name.</span>
                  </div>
                  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" aria-describedby="emailHelp">
                    <span id="emailHelp" class="form-text text-muted" style="display: none;">Please enter a valid e-mail address.</span>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message" aria-describedby="messageHelp"></textarea>
                    <span id="messageHelp" class="form-text text-muted" style="display: none;">Please enter a message.</span>
                  </div>
                  <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg"> Send</button>
				
					
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Barangku RPL 01 2019. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>