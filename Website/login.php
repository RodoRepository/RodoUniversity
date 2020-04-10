<?php
session_start();
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
   
        echo "Login Success";
    }
 else {
    echo "Username or password does NOT EXIST!";
}
$conn->close();

?>


