<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaki</title>
    <link rel="stylesheet" href="stylesheet/addpendaki.css">
</head>
<body>
    <img src="img/hiking.png" alt="" class="hiking">
    <div class="form_pendakian">
        <h1>FORMULIR PENDAKIAN</h1>
        <form action="" method="POST" role="form">
            <input type="text" name="namaPendaki" class="form_data" placeholder="Nama Lengkap" autocomplete="off" required></input><br>
            <input type="text" name="ttlPendaki" class="form_data" placeholder="Tempat, Tanggal Lahir" autocomplete="off" required></input><br>
            <input type="text" name="daerah" class="form_data" placeholder="Asal Daerah" autocomplete="off" required></input><br>
            <input type="text" name="ortu" class="form_data" placeholder="Nama Orang Tua" autocomplete="off" required></input><br>
            <input type="text" name="grup" class="form_data" placeholder="Nama Grup/Rombongan" autocomplete="off" required></input><br>
            <input type="text" name="Notelepon" class="form_data" placeholder="Nomor Telepon" autocomplete="off" required></input><br>
            <input type="text" name="gunung" class="form_data" placeholder="Nama Gunung" autocomplete="off" required></input><br>
            <input type="text" name="status" class="form_data" placeholder="Status Pendakian (On Track)" autocomplete="off" required></input><br>
            <button type="submit" name="kirim" class="tombol_kirim" value="kirim">KIRIM</button>
        </form>
    </div>
</body>
</html>


<?php
    include 'koneksi.php';

    //CREATE
    if (isset($_POST['kirim'])){
        $namaPendaki = $_POST['namaPendaki'];
        $ttl = $_POST['ttlPendaki'];
        $daerah = $_POST['daerah'];
        $ortu = $_POST['ortu'];
        $grup = $_POST['grup'];
        $telepon = $_POST['Notelepon'];
        $gunung = $_POST['gunung'];
        $status = $_POST['status'];

        $kirim = mysqli_query($koneksi, "INSERT INTO `datapendaki` VALUES ('','$namaPendaki','$ttl','$daerah','$ortu','$grup','$telepon','$gunung','$status')");
        if($kirim){
            echo "<script> alert('Data Berhasil Dikirim');
            window.location = 'index.php';
            </script>";
            // header("Location:index.php");
        }else {
            echo "gagal mengirim";
        }
    }
?>
