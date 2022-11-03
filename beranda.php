<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['status_login'] !=true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB | ADMINISTRATOR</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1><a href="beranda.php">ADMIN PSB</a></h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-pendaftar.php">Data Pendaftar</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
    </header>

    <section class="content">
        <h2>beranda</h2>
            <div class="box">
                <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di PSB Online</h3>
            </div>
    </section>

</body>
</html>