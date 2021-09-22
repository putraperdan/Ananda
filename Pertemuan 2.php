<?php 
    $nama = "Ananda Putra Perdana";
    $kelas = "MI20B";
    $alamat = "Sindangkasih";
    $matkul = array(
        'hard' => "programming",
        'medium' => "SDA",
        'easy' => "ESP",
    );
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 1 - Ananda Putra Perdana</title>
</head>
<body>
    <?php
        // Biodata
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

        // Array
        echo "DAFTAR MATA KULIAH";
        echo "<br>";
        echo "<br>";
        echo "Sulit : ".$matkul['hard'];
        echo "<br>";
        echo "Lumayan : ".$matkul['medium'];
        echo "<br>";
        echo "Mudah : ".$matkul['easy'];
    ?>
</body>
</html>