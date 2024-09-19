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

<div class="insert">
    <form class="box" method="post">

        <div class="inputs">
            <input type="text" required name="id" placeholder="id">
            <input type="submit" name="isSend" value="Delete">
    </form>

</div>
</div>
<style>
form {
    width: 200px;
  }
</style>
<?php
if (isset($_POST['isSend'])) {

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cameras";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $id = $_POST['id'];


    $sql = "DELETE FROM cameras WHERE id = '$id';";

    if (mysqli_query($conn, $sql)) {
        echo "Data Deleted";
    } else {
        echo "Erorr Try Agin Or [ Cell With Support  example@gmail.com ]";
    }

}


?>