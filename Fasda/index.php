<?php
    require 'koneksi.php';

    if(isset($_POST['regis'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result) || $username == "admin"){
            $error = true;
        } 
        else {
            // 92
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', '$email')");
                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'regis.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'regis.php';
                    </script>
                ";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="styles1.css">
    
</head>
<body>
    <div class="container">
        <h1>Registrasi</h1>
        <p style="color: red;">
            <?php
                if(isset($error)) {
                    echo "Nama Tersebut Telah Digunakan";
                }
                else {
                    echo "";
                }
            ?>
        </p>
    </div>
    <div class="container">
        <form action="" method="post">
            <label for="">Username</label> <br>
            <input type="text" name="username" id=""> <br>
            <label for="">Password</label> <br>
            <input type="password" name="password" id=""> <br>
            <label for="">Konfirmasi Password</label> <br>
            <input type="password" name="cpassword" id=""> <br>
            <label for="">Email : </label><br>
            <input type="email" name="email" id=""> <br>
            <button type="submit" name="regis">Registrasi</button>
            <button class="nav-item"><a href="login.php">Sudah Punya Akun?</a></button>
        </form>
     </div>
</body>
</html>
