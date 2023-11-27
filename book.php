
<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTSY_LENS</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
    <link href="reg1.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: black;">
    <div class="bg-img">
    <div class="navbar">
        <a href="gallery.html">OUR GALLERY</a>
        <a href="aboutus.html">ABOUT US</a>
        <div class="dropdown">
            <button class="mybutton">KNOW MORE</button>

            <div class="dropdown-content">
                <A href="news.html">NEWS</A>
            </div>
        </div>
    </div>
        <h2>YOU DON'T TAKE A PHOTOGRAPH, YOU MAKE IT!!</h2>
        <form method="post" action="slot.php" class="container">
          <h1>Book Slot</h1>
          <?php
        $na = $_POST['per'];
        echo "<label><b>Name</b></label>";
        echo '<input type="text" placeholder="Name" value="' . $na . '" readonly name="name">';
?>

          <label><b>Slot Timing</b></label>
          <br>
          <input type="text" class="time" placeholder="Slot Time" name="time">
          <br>
          <label><b>Date</b></label>
          <br>
          <input type="text" class="time" placeholder="Date" name="date">
          <br>
          <br>
          <button type="submit" class="btn" name='login'>Book Slot</button>
        </form>
      </div>
    
    
</body>
</html>