<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="reg.css" rel="stylesheet" type="text/css">
    <script src="shop.js"></script>
</head>
<div class="Img">
<body class="reg">
    <div>
        <h2>GET A TICKET FOR YOUR WORLD!!</h2>
        <form action="db.php" method="post" class="container">
          <h1>REGISTER</h1>
          <label><b>FirstName</b></label>
          <input type="text" placeholder="Name" name="fname" required>
          <label><b>LastName</b></label>
          <input type="text" placeholder="Name" name="lname">
      
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Email" id="email" oninput="validateEmail(email.value)" name="email" required>
          <br><span id="emailError" style="color: rgb(10, 1, 1);"></span><br>
          <label><b>Password</b></label>
            <input type="password" id="Password" placeholder="Password" name="pwd1" oninput="validatePass(Password.value)" required>
            <br><span id="passErr" style="color: rgb(10, 1, 1);"></span><br>
            <label><b>Confirm Password</b></label>
            <input type="password" id="cnfrmpass" placeholder="Confirm Password" name="pwd2" oninput="validateCPass(cnfrmpass.value)" required>
          <label><b>PhoneNumber</b></label>
          <input type="tel" placeholder="PhoneNumber" id="phnnumber" name="Phno" maxlength="10" required>
          
      
          <button type="submit" class="btn" oninput="auth" name="register">REGISTER</button>
        </form>
      </div>
</body>
</div>
</html>
