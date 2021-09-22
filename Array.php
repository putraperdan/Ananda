<?php 
    $nama = "Ananda Putra Perdana";
    $kelas = "MI20B";
    $alamat = "Sindangkasih";
    $BIO = array(
        'kota' => "Bandung",
        'Provinsi' => "Jawa Barat",
        'Negara' => "Indonesia",
    );
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 1 - Ananda Putra Perdana</title>
</head>
<body>
    <?php
        echo "BIODATA";
        echo "<br>";
        echo "<br>";
        echo "Nama : ".$nama;
        echo "<br>";
        echo "Kelas : ".$kelas;
        echo "<br>";
        echo "Alamat : ".$alamat;
        echo "<br>";
        echo "<br>";
        echo $BIO['kota'];
        echo "<br>";
        echo $BIO['Provinsi'];
        echo "<br>";
        echo $BIO['Negara'];
    ?>
</body>
</html>