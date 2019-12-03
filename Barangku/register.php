<?php
	require('config.php');
	if (isset($_POST['register'])){	  
		$email = $_POST['email'];
    $password = $_POST['password'];
    $namadepan = $_POST['nama_depan'];
    $namabelakang = $_POST['nama_belakang'];
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO account VALUES ($1, $2,$3,$4)";
		$result = pg_query_params($db, $query, array($email, $namadepan,$namabelakang,$hash));
		$result2 = pg_query($db, "SELECT email FROM account where email = '$email'");
		list($username) = pg_fetch_array($result2);
		// if(pg_num_rows($result2)>0){
		// 	if(!$username){
		// 	echo '<script language="javascript">
		// 	window.alert("Register Berhasil! Silakan login");
		// 	window.location.href="./login.php";
		// 	</script>';
		// 	}
		// 	else{
		// 		echo '<script language="javascript">
		// 			 window.alert("REGISTER GAGAL!");
		// 			 window.location.href="./login.php";
		// 		  </script>';
		// 	header("location: login.php");
		// 	}
		// }
		// else {
		// 	echo '<script language="javascript">
		// 			 window.alert("REGISTER GAGAL!");
		// 			 window.location.href="./login.php";
		// 		  </script>';
		// 	header("location: login.php");
		//  }
		
	}
		
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Barangku: Login</title>
        <!--Style-->
        <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
        <link href="css/register-style.css" rel="stylesheet">
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
  .button3{
    border: 1px solid #17a2b8;
    color: white;
    background-color: #17a2b8;
  }
  .button3:hover{
    color: #f8f9fa;
    background-color: #17a2b8;
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
      
      <button class="btn button1" type="submit" onclick= "window.location.href='login.php'">Log In</button>  
    </nav>

    <!-- Default form register -->

<div id="card">
<form class="text-center border-light p-5" action="register.php" method="post">

    <div id="card-title">
        <h2>REGISTER</h2>
    <div class="underline-title"></div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="nama_depan" placeholder="First name" required>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name = "nama_belakang" placeholder="Last name">
        </div>
    </div>
            
    <input id="user-email" class="form-control mb-4" type="email" name="email" placeholder="Email" autocomplete="on" required />
            
    <input id="user-password" class="form-control" type="password" placeholder="Password" name="password" required aria-describedby="defaultRegisterFormPasswordHelpBlock"/>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters
    </small>
            
    <!-- Sign up button -->
    <button class="btn button3 btn-info btn-block" type="submit" name="register" >Sign up</button>
    
    <div id="agree" class ="form-text text-muted mb-4">
        By clicking sign up you agree to our terms of service
    </div>
</form>

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
    </footer>
</html>