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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <style>

    body{
        display : flex ;
        flex-direction: column;
        align-items: center;
    }

    </style>
</head>
<body>
    
   <h1 > <a href="control.php">Back To Control Page</a></h1>
    <h1>Disgin By :</h1>
    <h1>_____________________</h1>
    <h1>marj</h1>
    <h2>marj@gmail.com</h2>
    <h1>_____________________</h1>
</body>
</html>





