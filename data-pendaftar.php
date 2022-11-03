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
                <a href="cetak-pendaftar.php" class = "btn-print">Print</a>
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $list_pendaftar = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                            while($row = mysqli_fetch_array($list_pendaftar)){
                        ?>
                        <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td>
                            <a href="detail-pendaftar.php?id=<?php echo $row['id_pendaftaran']?>">Detail</a> ||
                            <a href="hapus-pendaftar.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('apakah anda yakin menghapusnya?')" >Hapus</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    </section>

</body>
</html>