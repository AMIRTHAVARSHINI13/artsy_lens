<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.but{
  background-color: black;
  color: white;
  padding: 5px;
  width: 150px;
  border: 2px solid grey;
  border-radius: 15px;
}
.but1{
  background-color: black;
  color: white;
  padding: 5px;
  width: 150px;
  border: 2px solid grey;
  margin-left: 50px;
}
.but1:hover{
  border-radius: 15px;
}
</style>
</head>
<body>

<h1>Photographers WorldWide</h1>
<h2>TRAVEL PHOTOGRAPHERS</h2>
<a href="view.php"><button class="but1">View Booked Slots</button></a>
<br><br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="chris.jpeg">
      <img src="chris.jpeg" alt="Cinque Terre" width="600" height="400">
    </a>
    <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="CHRIS" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="alex.jpeg">
      <img src="alex.jpeg" alt="Forest" width="600" height="400">
    </a>
    <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="ALEX" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="elia.jpg">
      <img src="elia.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="ELIA" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bob.jpeg">
      <img src="bob.jpeg" alt="Mountains" width="600" height="400">
    </a>
    <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="BOB KRIST" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
  </div>
</div>

<div class="clearfix"></div>
<h2>WILDLIFE PHOTOGRAPHERS</h2>
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="varun.jpeg">
        <img src="varun.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="VARUN ADITHYA" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="rathika.jpeg">
        <img src="rathika.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="RATHIKA RAMASAMY" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="k.jpeg">
        <img src="k.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="KALYANA VARMA" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="aish.webp">
        <img src="aish.webp" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="AISHWARYA SRIDHAR" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
<div class="clearfix"></div>
<h2>NATURE PHOTOGRAPHERS</h2>
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="fra.jpeg">
        <img src="fra.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="FRANS LANTING" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="suzi.jpeg">
        <img src="suzi.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="SUZI ESTERHAS" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="ja.jpeg">
        <img src="ja.jpeg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="JAYANTH SHARMA" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="ju.webp">
        <img src="ju.webp" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="SHAAZ JUNG" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
<div class="clearfix"></div>
<h2>FEMALE PHOTOGRAPHERS</h2>
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="homai.jpg">
        <img src="homai.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="HOMAI" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
   <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="par.jpg">
        <img src="par.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="PRARTHANA SINGH" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="pur.jpg">
        <img src="pur.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="NISHA PURUSHOTHAMAN" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="neel.jpg">
        <img src="neel.jpg" alt="Cinque Terre" width="600" height="400">
      </a>

      <form method="post" action="book.php">
    <div class="desc">
        <input type="text" name="per" value="NEELIMA VALLANGI" readonly>
        <br>
        <br>
        <input type="submit" class="but" value="Book Slot">
    </div>
</form>

  </div>
  <div class="clearfix"></div>


</body>
</html>