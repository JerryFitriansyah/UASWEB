<?php
    session_start();
    require 'koneksi.php';

    if (isset($_SESSION['login'])) {
        header("location: index.php");
        exit;
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['login'] = $row["username"];
                $_SESSION['priv'] = $row["priv"];
                if($_SESSION['priv'] == "admin"){
                    header("location: index.php");
                }
                else{
                    header("location: user.php");
                }
                exit;
            }
        }
        $error = true;
    }
?>

<script> 
    if (window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="account.css">
        <link href="image/loginbg.png" rel="shortcut icon">
        <link rel="icon" href="image/ikon.ico">
        <title>LOGIN</title>
    </head>

    <body>
        <div class="container">
            <h1 class="login-text"> Login Here </h1>
            <?php 
                if (isset($error)) {
                    echo "
                        <script>
                            alert('Password anda salah!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                }
            ?>
            <form action="" method="post" class="login-akun">
            <div class="acc"> Masukan Akun Anda!!! </div>
                <div class="input-group">
                    <input type="text" placeholder="username" name="username" required>
                    <span></span>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="pasword" name="password" required>
                </div>
                <div class="input-group">
                    <button name="login" class = "btn">login</button>
                </div>
                <div class="acc2"> Belum Punya Akun? <a href="register.php"> Register Here </a> </div>
            </form>
        </div>
    </body>
</html>