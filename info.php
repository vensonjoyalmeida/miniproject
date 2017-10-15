<?php
$servername = "joybdinstance.czhwdnqh98tj.us-east-2.rds.amazonaws.com";
$username = "vensonjoy";
$password = "vensonjoy";
try 
{
    $conn = new PDO("mysql:host=joybdinstance.czhwdnqh98tj.us-east-2.rds.amazonaws.com;dbname=joydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
     $email = $_POST["email"];
$password = $_POST["password"];
$image = $_POST["image"]; 
    $sql = "INSERT INTO forms (email, password, image)
    VALUES (:email,:pass, :img)";
$query = $conn->prepare( $sql );
$query->execute( array( ':email'=>$email, ':pass'=>$password, ':img'=>$image) );

   
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
