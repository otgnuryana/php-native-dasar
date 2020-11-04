<?php
session_start();
require 'functions.php';
// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }

}


if( isset($_SESSION["login"])){
    header("Location: index.php");
}
if( isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");


    // cek username
    if( mysqli_num_rows($result) === 1){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;

            //cek remember me
            if( isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']),time()+60 );
            }

            header("Location: index.php");
            exit;
        }


    }
    $error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
    
        <form action="" class="box" method="post">
            <h1>Login</h1>
            <?php if(isset($error)) : ?>
        <p style="color: red;">username atau password salah !</p>
        <?php endif; ?>
            <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                
                <p><label for="remember">Remember me</label></p>
                <input type="checkbox" name="remember" id="remember">
                <input type="submit" name="login" value="Login">
            <p>OR</p> 
            <a href="registrasi.php"><input type="button" name="sign in" value="Sign in">
            </a>
        
    </form>

</body>
</html>