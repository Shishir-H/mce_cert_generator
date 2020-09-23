<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/style.css" />
    
    <!--css only-->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
  </head>

  <body>
	<!-- <script src="../script.js"></script> -->
    <div class="header">
            <img src="../assets/header.jpg" alt="header">
        </div>
        <div class="sub-header">
            <h1>WELCOME TO DOCUMENT CENTRE LOGIN PORTAL</h1>
        </div>

        <div class="container">
            <form action="login.php" method="POST">
                <div class="form">
                  <label for="InputEmail1">Username</label>
                  <input type="email" class="form-control" placeholder="Username" name="email" required>
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                  <button type="submit" class="btn btn-primary" id="Login-btn">Login!</button>
                </div>
            </form>
        </div>

	<?php

		// require_once 'db_connect.php';
		include './dbOps.php';


		session_start();


		if(isset($_POST['email']) && isset($_POST['password'])){

			$email = $_POST['email'];
			$password = $_POST['password'];


			$sql = new Mysql();
			$conn = $sql->dbConnect();
			


			$query = "SELECT * FROM admin_login WHERE username = '$email' AND password = '$password'";
			$res = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($res);
      $count = mysqli_num_rows($res); 
			if($count == 1){
				$_SESSION['email'] = $row['username'];
				header("Location: admin.php");
			}else{
				echo("<div class='alert alert-danger mt-3 text-center'>Invalid Email/Password</div>");
			}

		}

	?>

  </body>

</html>
