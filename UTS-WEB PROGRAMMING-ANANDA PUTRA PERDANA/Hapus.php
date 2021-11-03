<?php
$con = new mysqli("localhost", "root", "", "db_barang");
        if (isset($_POST['delete'])){
            $id_barang = $_POST['id_barang'];
 
            $result = mysqli_query($con, "DELETE FROM `tbl_barang` WHERE `tbl_barang`.`id_barang` = $id_barang");
            header("Location:Tampilan.php?pesan=success&frm=delete");
        }
?>