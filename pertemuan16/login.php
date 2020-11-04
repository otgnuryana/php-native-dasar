<?php
session_start();
require 'functions.php';
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
    <style>
    label {
        display: block;
    }
    button {
        margin: 10px 0 0 50px;
    }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
<?php if(isset($error)) : ?>
    <p style="color: red;">username atau password salah</p>
<?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </li>
            
                <button type="submit" name="login">Login</button>
            <li>Belum punya akun? <br> <a href="registrasi.php">Sign In</a> 
            </li>
        </ul>
    </form>
</body>
</html>