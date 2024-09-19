<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {

        echo "<button><a class='cPanelLink' href='control.php'>C Panel</a></button>";
        
        echo "<form method='post'>";
        echo "<input type='submit' name='logout' value='Logout'>";
        echo "</form>";
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="index.css">
<?php
if (!isset($_SESSION['loggedin'])){?>
<a href="login.php" class="login-btn" >login</a></a>
<?php } ?>
<div class="containerX">
    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cameras";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $result = mysqli_query($conn, "SELECT * FROM cameras;");

    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="card">
            <div class="lines"></div>
            <div class="imgBx">
                <?php echo "<img src=" . $row['img'] . " />" ?>
            </div>
            <div class="content">
                <div class="details">
                    <?php
                    echo "<h2> Camera Type : " . $row['watchtype'] . "</h2>";
                    echo "<p> Color : " . $row['Color'] . "</p>";
                    echo "<p> Price : " . $row['Price'] . "</p>";
                    echo "<p> id  : " . $row['id'] . "</p>";
                    ?>

                </div>
            </div>
        </div>
    <?php } ?>