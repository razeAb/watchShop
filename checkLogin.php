
    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cameras";

    $con = mysqli_connect($host, $user, $pass, $dbname);
    

    session_start();
    $username = $_POST['username'];  
    $password = $_POST['password'];

    
    if ($username == "marj" && $password == "123") {  
        // User exists
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; 
        header("Location: control.php");
        exit;
    } else {
        // Invalid username or password   
        session_destroy();      
        header("Location: login.php");
    } 
    
    ?>
    
    