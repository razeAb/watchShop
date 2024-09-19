<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>
<link rel="stylesheet" href="main.css">
<a href="control.php">Back To Control Page</a>
<style>
form {
    width: 200px;
  }
</style>
<div class="insert">
    <form class="box" method="post">

        <div class="inputs">
            <input type="text" required name="CameraType" placeholder="نوع الكاميرا">
            <input type="text" required name="color" placeholder="اللون">
            <input type="number" name="price" placeholder="السعر">
            <input type="text" name="img" placeholder="الصورة">
            <input type="submit" name="isSend" value="Get Started">
    </form>

</div>
</div>

<?php
if (isset($_POST['isSend'])) {

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cameras";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $CameraType = $_POST['CameraType'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $sql = "INSERT INTO `cameras` (`CameraType`, `Color`, `Price`, `img`) VALUES ('$CameraType', '$color', '$price','$img');";

    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted";
    } else {
        echo "Erorr Try Agin Or [ Cell With Support  example@gmail.com ]";
    }
}
?>
