<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTSY_LENS</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
    <link href="reg2.css" rel="stylesheet" type="text/css">
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
<br><br>
    <div class="container1">
        <div class="tab">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "registration_form";
        $conn = mysqli_connect($host, $username, $password, $db_name);

        $sql = "SELECT * FROM slots";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="da" border="1px" cellspacing="0px" cellpadding="10px">';
            echo '<tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Timing</th>
                    <th>Date</th>
                </tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["S.No"] . '</td>';
                echo '<td>' . $row["Name"] . '</td>';
                echo '<td>' . $row["Timing"] . '</td>';
                echo '<td>' . $row["Date"] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No data found';
        }

        $conn->close();
        ?>
        </div>
    </div>
</body>

</html>
