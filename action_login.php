<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $dbpass = '';
    $dbname = 'akmi_db';

     $conn = mysqli_connect($host, $user, $dbpass, $dbname);
    $sql = "SELECT * FROM users WHERE email = '$email' AND pwd = '$password';";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        
        $_SESSION['user'] = $row['email'];
        header('Location: profile.php');
    
    }
    else{
        header('Location: index.php?msg=login error');
    }
?>