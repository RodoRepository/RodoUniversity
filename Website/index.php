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
        <link href="assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                        <div class="col-sm-12 col-sm-offset-3 text text-center">
                            <h1>Welcome To <strong>Rodo University</strong></h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="gateway.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="login-username">Username</label>
				                        	<input type="text" name="login-username" placeholder="Username..." class="form-control" id="login-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="login-password">Password</label>
				                        	<input type="password" name="login-password" placeholder="Password..." class="form-control" id="login-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-12 middle-border">
                            <p>or</p>
                        </div>
                        	
                        <div class="col-md-5 col-sm-12">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Register now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
								
								<script>
								
								function validateform() {
								var x = 
								document.forms["form-bottom"]
								["register-password"].value;
								var y =
								document.forms["form-bottom"]
								["register-confirm-password"].value;
								if ( x !== y) {
								alert ("Passwords do not match!");
								return false;
									}
								
								}
								
								</script>
	                            <div class="form-bottom">
				                     <form name="form-bottom" role="form" action="register.php" onsubmit="return validateform()" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="register-first-name">First name</label>
				                        	<input type="text" name="register-first-name" placeholder="First name..." class=" form-control" id="register-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="register-user-name">Last name</label>
				                        	<input type="text" name="register-last-name" placeholder="Last name..." class="form-control" id="register-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="register-email">Email</label>
				                        	<input type="text" name="register-email" placeholder="Email..." class="form-email form-control" id="register-email">
				                        </div>
				                        <div class="form-group">
                                            <label class="sr-only" for="register-password">Password</label>
                                            <input type="password" name="register-password" placeholder="Password..." class="form-control" id="register-password">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="register-confirm-password">Confirm Password</label>
                                            <input type="password" name="register-confirm-password" placeholder="Confirm Password..." class="form-control" id="register-confirm-password">
                                        </div>
										<div class="form-group">
										 <label class="sr-only" for="department">Department</label>
                                            <select id="department">
											
											<?php // grab list of available departments from DB
											/*
											$server="mysql.cms.gre.ac.uk";
											$dbName="mdb_an6827t";
											$user="an6827t";
											$pass="an6827t";


											$conn = mysqli_connect($server, $user, $pass, $dbName);
											$qry = mysqli_query($conn, "SELECT * FROM Department");

											

											while($result = mysqli_fetch_array($qry))
											{
												echo $result;
												$depid = $result["DepartmentId"];
												$depname = $result["DepartmentName"];
												echo $fetched;
												
												echo "<option value='" + $depid +  
												 "'>" + $depname + "</option";
											}
											
												
											mysqli_close($conn);

											*/
											?>
											Department: <option value="1">Accounting</option">
										</select>

				                        <button type="submit" class="btn">Register!</button>
				                    </form>
			                    </div>
                        	</div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Idea Title</th>
                                                    <th>Idea Description</th>
                                                    <th>View Count</th>
                                                    <th>Thumbs Up</th>
                                                    <th>Thumbs Down</th>
                                                    <th>Category</th>
                                                    <th>Most Popular</th>
                                                    <th>Most Viewed</th>
                                                    <th>Latest</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td><a href="#">+1</a></td>
                                                    <td><a href="#">-1</a></td>
                                                    <td>Edinburgh</td>
                                                    <td>Down</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td><a href="#">+1</a></td>
                                                    <td><a href="#">-1</a></td>
                                                    <td>Edinburgh</td>
                                                    <td>Down</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td><a href="#">+1</a></td>
                                                    <td><a href="#">-1</a></td>
                                                    <td>Edinburgh</td>
                                                    <td>Down</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td><a href="#">+1</a></td>
                                                    <td><a href="#">-1</a></td>
                                                    <td>Edinburgh</td>
                                                    <td>Down</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Latest Comments</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row comment-row mt-3">
                                        <div class="p-2"><img src="assets/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-medium">James Anderson</h6>
                                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                            <div class="comment-footer">
                                                <span class="text-muted">April 14, 2016</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row comment-row mt-3">
                                        <div class="p-2"><img src="assets/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-medium">James Anderson</h6>
                                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                            <div class="comment-footer">
                                                <span class="text-muted">April 14, 2016</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12 col-sm-offset-3">
        				<div class="footer-border"></div>
        				<p>&copy; Copyright with<a href="#" target="_blank"> <strong>Rodo University</strong></a></p>
        			</div>
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
        <script src="assets/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
        <script src="assets/assets/extra-libs/DataTables/datatables.min.js"></script>
        <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
        </script>
    </body>

</html>