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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Panel</title>
    <link rel="stylesheet" href="main.css">
    <style>

   body{
         background-color : linear-gradient(269deg, rgb(0 46 255) 0%, rgb(0 194 255));
   }

    .con{
        display: flex;
        justify-content: center;
        position: relative;
        top: 110px;
    }
    li{
    list-style-type: none;
    padding-bottom: 50px;
    
    }
    p{
        width: 200px;
        background-color: darkgrey;
        border-radius: 10px;
        text-align: center ;
    }
    a{

        text-decoration: none;
        cursor: pointer;
        user-select: none;
        
        
    }

    </style>
</head>
<body>
    <div class="con">
        <ul>
            <li> <p> <a href="insert.php">Insert Camera</a> </p> </li>
            <li> <p> <a href="update.php">update Camera</a> </p> </li>
            <li> <p> <a href="delete.php">delete Camera</a> </p> </li>
            <li> <p> <a href="about.php">About</a> </p> </li>
            <li> <p> <a href="index.php">index</a> </p> </li>
        </ul>
    </div>
</body>
</html>