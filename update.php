<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.php');
    exit;
}

?>
<style>
    form {
        width: 200px;
    }
</style>

<link rel="stylesheet" href="main.css">
<a href="control.php">Back To Control Page</a>

<div class="insert">
    <form class="box" method="post">

        <div class="inputs">
            <input type="text" name="CameraType" placeholder="نوع الكاميرا">
            <input type="text" name="color" placeholder="اللون">
            <input type="number" name="price" placeholder="السعر">
            <input type="text" name="img" placeholder="الصورة">
            <input type="number" name="id" placeholder="id">
            <input type="submit" name="isSend" value="Update">
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
    $id = $_POST['id'];

    $falg = false; 
    if (!empty($CameraType)) {
        mysqli_query($conn, " UPDATE cameras SET `CameraType`='$CameraType' WHERE id = '$id' ");
        $falg = true; 
    }
    
    if (!empty($color)) {
        mysqli_query($conn, " UPDATE cameras SET `Color`='$color' WHERE id = '$id' ");
        $falg = true; 
    }
    
    if (!empty($price)) {
        mysqli_query($conn, " UPDATE cameras SET `Price`='$price' WHERE id = '$id' ");
        $falg = true; 
    }
    
    if (!empty($img)) {
        mysqli_query($conn, " UPDATE cameras SET `img`='$img' WHERE id = '$id' ");
        $falg = true; 
    }
    

    if ($falg) {
        echo " Data Updated";
    } else {
        echo "Erorr Try Agin Or [ Cell With Support  example@gmail.com ]";
    }

}


?>