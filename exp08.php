
<?php
session_start();
$host =  "localhost";
$usrname = "root";
$passw = "";
$db_name = "registration_form";
$conn =  mysqli_connect($host, $usrname, $passw, $db_name);

$name = $_POST["name"];
$p = $_POST["psw"];


if (isset($_POST['login'])) {
    if ($name != '' && $p !='') {
        $sql = "SELECT * FROM details";
        $result = $conn->query($sql);
if ($result->num_rows > 0)
{

while($row = $result->fetch_assoc())
{
if($result) {
    if((!strcmp($row["password"],$_POST["psw"])))        
    {
                header("location: mentor.php");
            }
            else {
                echo "<script>alert('Incorrect Details!!!'); window.location='reg.php';</script>";

            }
            
        }

    }
}
}              
}
$conn->close();
?>

