<?php
    include 'koneksi.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
    <section class ="box-formulir">

    <h2>PENDAFTARAN BERHASIL!</h2>
    <div class="box">
        <h4>Kode Pendaftaran anda adalah <?php echo $_GET['id'] ?></h4>
        <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" class="btn-cetak" target="_blank">Cetak Bukti Daftar</a>
    </div>
    </section>

</body>
</html>