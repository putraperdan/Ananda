<?php 
    $kota = "Tasikmalaya";
    $nomor = "202002051";
    $barang = array('kulkas', 'TV', 'Buku', 'Radio', 'Laptop');

?>
<!DOCTYPE html>
<html>
<head>
    <title>SURAT PEMINJAMAN</title>
</head>
<body>
    <?php
        // Surat Peminjaman
        echo "Surat Peminjaman";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $kota;
        echo date(', d-M-Y');
        echo "<br>";
        echo "<br>";
        echo "Nomor : ".$nomor;
        echo "<br>";
        echo "Perihal : Peminjaman ";
        echo "<br>";
        echo "Kepada : PT Pinjol";

        // Array
        echo "<br>";
        echo "<br>";
        echo "Yth Bapak/ibu/saudara";
        echo "<br>";
        echo "PT Pinjol";
        echo "<br>";
        echo "<br>";
        echo "Saya ucapkan terimakasih kepada bapak atau ibu yang sudah memberikan waktunya untuk membaca sebuah surat yang saya tulis.";
        echo "<br>";
        echo "Pada hari kemarin saya telah meminjam beberapa barang dari PT pinjol. saya meminjam tanpa memberikan izin resmi terlebih dahulu.";
        echo "<br>";
        echo "Saya mengucapkan mohon maaf atas perlakuan saya yang tidak menyenangkan ini";
        echo "<br>";
        echo "Saya meminjam beberapa barang di tempat anda berikut beberapa barang yang saya pinjam :";
        echo "<br>";
        echo "<br>";

        $a = 1;
        for($x=0;$x<count($barang);$x++){
        
        echo $a." ".$barang[$x]."<br/>";
        $a++;
        }

        echo "<br>";
        echo "Saya ucapkan terimakasih banyak sekali lagi, semoga kita selalu sehat selalu dan dilindungi oleh yang maha esa.";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $kota;
        echo date(', d-M-Y');
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Ananda"
    ?>
</body>
</html>