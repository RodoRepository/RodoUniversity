<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rodo University</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
        <!-- Header -->
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Idea's</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-4 text text-center">
						
						<?php
						$server="mysql.cms.gre.ac.uk";
						$dbName="mdb_an6827t";
						$user="an6827t";
						$pass="an6827t";


						$conn = new mysqli($server, $user, $pass, $dbName);


						if ($conn->connect_error) {
							die ("Connection error"  . $conn->connect_error); 
						}



						// Grab the values from post 

						$username=$_POST["login-username"];
						$password= md5($_POST["login-password"]);   // encrypt MD5


						$sql="SELECT * FROM Users WHERE Email='$username' AND Password='$password'";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						   
								echo "<h2><strong><a href='/~lj4136j/staff/staff_dashboard.php' class='link'>Login Success.  Please click here if you are not redirected...</a></strong></h2>";
								session_start();
								$_SESSION['user'] = $username; 
								$_SESSION['status'] = 1;
								
								
								$sql="SELECT FirstName, LastName, UserID  FROM Users WHERE Email='$username'";

						$result = $conn->query($sql);
						
						 while($row = $result->fetch_assoc()) {
								$_SESSION['fname'] = $row['FirstName'];
								$_SESSION['lname'] = $row['LastName'];
								$_SESSION['UserID']= $row['UserID'];
								header( "refresh:2;url=/~lj4136j/staff/staff_dashboard.php" );
							}
								
							}
						 else {
							echo "<h2><strong><a href='index.php' class='link'>Username or password does NOT EXIST!  Please click here if you are not redirected!</h2>";
							header( "refresh:3;url=/~lj4136j/index.php" );
						}
						$conn->close();

						?>
												<!--
                            <h1><strong><a href="admin/admin_dashboard.html" class="link">Admin Dashboard</a></strong></h1>
                        </div>
                        <div class="col-sm-4 text text-center">
                            <h1><strong><a href="qa/qa_dashboard.html" class="link">QA Dashboard</a></strong></h1>
                        </div>
                        <div class="col-sm-4 text text-center">
                            <h1><strong><a href="staff/staff_dashboard.html" class="link">STAFF Dashboard</a></strong></h1>
							-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<?
		sleep(3);
								header("Location: /~lj4136j/staff/staff_dashboard.php");
								?>
    </body>

</html>