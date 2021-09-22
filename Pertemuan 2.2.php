<?php 
    $nama = "Ananda Putra Perdana";
    $kelas = "MI20B";
    $alamat = "Sindangkasih";
    $nohp = "08213456547";
    $matkul = array('Web Programming 1', 'Web Design', 'Web Development Project');

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
        echo "No HP : ".$nohp;

        // Array
        echo "<br>";
        echo "Saya mengambil mata kuliah sebagai berikut :";
        echo "<br>";

        $a = 1;
        for($x=0;$x<count($matkul);$x++){
        
        echo $a." ".$matkul[$x]."<br/>";
        $a++;
        }
    ?>
</body>
</html>