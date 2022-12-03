<?php
    require 'koneksi.php';

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password === $cpassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

            if (mysqli_fetch_assoc($result)) {
                echo "
                    <script>
                        alert('Username Telah Digunakan');
                        document.location.href = 'register.php';
                    </script>
                ";
            } else {
                $sql = "INSERT INTO user VALUES ('','$username','$password', 'user')";
                $result = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal');
                            document.location.href = 'register.php';
                        </script>
                    ";
                }
            }


        } else {
            echo "
                <script>
                    alert('Password Anda Tidak Sama !!!');
                    document.location.href = 'register.php';
                </script>
            ";
        }
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
        <title>Register</title>
    </head>

    <body>
        <div class="container">
            <h1 class="login-text"> Register </h1>
            <form action="" method="post" class="login-akun">
                <div class="input-group">
                    <input type="text"  placeholder="Username" name="username" required>
                </div>
                <div class="input-group">
                    <input type="password"  placeholder="password" name="password" required>
                </div>
                <div class="input-group">
                    <input type="password"  placeholder="Confirm Password" name="cpassword" required>
                </div>
                <div class="input-group">
                    <input type="submit" value="register" name="register" class="btn">
                </div>
                <div class="acc"> Sudah Punya Akun? <a href="login.php"> Login Here </a> </div>
            </form>
        </div>
    </body>
</html>