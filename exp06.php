<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "registration_form";
$conn = mysqli_connect($host, $username, $password, $db_name);

$n=$_POST["fname"];
$l=$_POST["lname"];
$e=$_POST["email"];
$p1=$_POST["pwd1"];
$p2=$_POST["pwd2"];
$ph=$_POST["Phno"];



    
    $sql = "INSERT INTO details (firstname,lastname,emailid,password,cpassword,phonenumber)
VALUES ('$n','$l','$e','$p1','$p2','$ph')";
    $result  = mysqli_query($conn, $sql);
    
    if($result) {
    header("Location: index.php");
    exit();
    }

$conn->close();
?>