<?php
	require('config.php');
	if (isset($_POST['login'])){	  
		$email = $_POST['email'];
		$userpass = $_POST['password'];

		$login = pg_query($db, "SELECT * FROM login WHERE email = '$email'");
		list($email, $password) = pg_fetch_array($login);
		if(pg_num_rows($login)>0){
			if(password_verify($userpass, $password)){
				session_start();
				$_SESSION['username'] = $username;
				header("location: index.html");
				//die();
			}
			else{
				echo '<script language="javascript">
					window.alert("LOGIN GAGAL! Silakan coba lagi");
					window.location.href="./login.php";
			  		</script>';
			}
		}
		else {
			echo '<script language="javascript">
					 window.alert("LOGIN GAGAL! Silakan coba lagi");
					 window.location.href="./login.php";
				  </script>';
			header("location: login.php");
		 }
		
	}
		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangku: Login</title>
    <!--Style-->
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
     
    </nav>
 <head>
  <title>Login</title>
  <body>
	<div id="card"> 
	<div id="card-content">
  	<div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
  	</div>
  <form method="post" class="form">
<label for="user-email" style="padding-top:13px">&nbsp;Email</label>
  <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  <input id="user-password" class="form-content" type="password" name="password" required/>
  <div class="form-border"></div>
<a href="reset-password.php"><legend id="forgot-pass">Forgot password?</legend></a>
<input id="submit-btn" type="submit" name="submit" value="Login" />
<div id="signup">Don't have account yet? <a id="signup2" href="register.php">Join Now</a></div>
	</form>
	</div>
  </div>
</body>
   
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