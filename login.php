<?php
    include 'koneksi.php';
    session_start();
    if(isset($_POST['login'])){


        $check = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".htmlspecialchars($_POST['username'])."' AND password = '".MD5(htmlspecialchars($_POST['password']))."' ");
        if(mysqli_num_rows($check) > 0) {
            $admin = mysqli_fetch_object($check);

            $_SESSION['status_login'] = true;
            $_SESSION['id_admin'] = $admin ->id_admin;
            $_SESSION['nama'] = $admin->nm_admin;
            echo '<script>window.location="beranda.php"</script>';

        }else {
            echo '<script>alert("Gagal, username atau password salah")</script>';
        }
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
<section class="main-login">

<div class="box">
        <h2><center>LOGIN ADMIN</center></h2>

        <form action="" method="post">
            <div class="box">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="password" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="login" value="login" class="btn-login">&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="index.php" class="btn-kembali">Kembali</a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
</div>
</section>

</body>
</html>