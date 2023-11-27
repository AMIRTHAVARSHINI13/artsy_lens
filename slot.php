<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "registration_form";
$conn = mysqli_connect($host, $username, $password, $db_name);

$name=$_POST['name'];
$time=$_POST['time'];
$date=$_POST['date'];



    
    $sql = "INSERT INTO slots (Name,Timing,Date)
VALUES ('$name','$time','$date')";
    $result  = mysqli_query($conn, $sql);
    
    if($result) {
    header("Location: mentor.php");
    exit();
    }
    else{
        echo "Error";
    }

$conn->close();
?>