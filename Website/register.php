

<?php
$server="mysql.cms.gre.ac.uk";
$dbName="mdb_an6827t";
$user="an6827t";
$pass="an6827t";


$conn = new mysqli($server, $user, $pass, $dbName);


if ($conn->connect_error) {
	die ("Connection error"  . $conn->connect_error); 
}

//echo "connection success"; 

// Grab the values from post 

$firstname=$_POST["register-first-name"];
$lastname=$_POST["register-last-name"];
$email=$_POST["register-email"];

$password= md5($_POST["register-password"]); // Ecrypt pass




$sql = "INSERT INTO Users (FirstName, LastName, Email, Password, Active, AccountType, Department) VALUES
('$firstname', '$lastname', '$email', '$password' ,'1', '1', '1');";

if ($conn->query($sql) === TRUE) {
    echo "Login Created";
} else {
    echo "User Exists ";
}

$conn->close();

header( "refresh:2;url=./index.php" );

?>