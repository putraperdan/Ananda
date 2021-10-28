<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "db_surat_ananda");

$tgl = date('d F Y');

$query = mysqli_query($con, 'SELECT * FROM tbl_surat ');

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $pesan = $_GET['pesan'];
    $frm = $_GET['frm'];

    if($pesan =='success' && $frm =='del') {

    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Selamat!!!</strong> Anda Selesai Menghapus data
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    } else if($pesan=='success' && $frm =='add') {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Selamat!!!</strong> Anda Selesai Menambahkan data
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    } else if($pesan=='success' && $frm =='edit') {
    ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Selamat!!!</strong> Anda Selesai mengubah data
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    }
    ?>
    
    
    <h1 style="text-align:center"><b>LIST SURAT</b></h1>
    <table class="table">
    <a href="ADD_SURAT_LANJUTAN.php">TAMBAH</a>
        <thead class="table-dark">
            <td><b>NO SURAT</b></td>
            <td><b>JENIS SURAT</b></td>
            <td><b>TANGGAL SURAT</b></td>
            <td><b>TANDA TANGAN SURAT</b></td>
            <td><b>TANDA TANGAN MENGETAHUI</b></td>
            <td><b>TANDA TANGAN MENYETUJUI</b></td>
            <td colspan="2"><b>ACTION</b></td>
        </thead>
    <tbody class="table-primary">
    <?php
	foreach ($query as $isi) {
		if($isi["jns_surat"]=='1'){
			$js = "Surat Keputusan";
		} else if($isi["jns_surat"]=='2'){
			$js = "Surat Pernyataan";
		} else if($isi["jns_surat"]=='3'){
			$js = "Surat Peminjaman";
		} else{
			$js = "Kode Bermasalah";
		}
		?>

	<tr>
		<td><?php echo $isi['no_surat'];?></td>
		<td><?php echo $js;?></td>
		<td><?php echo $isi['tanggal_surat'];?></td>
		<td><?php echo $isi['ttd_surat'];?></td>
        <td><?php echo $isi['ttd_mengetahui'];?></td>
        <td><?php echo $isi['ttd_menyetujui'];?></td>
        <td><a href="EDIT_SURAT_LANJUTAN.php?id=<?php echo $isi['id'];?>">EDIT</a></td>
        <td><a href="#" data-bs-toggle="modal" data-bs-target="#deletesurat<?php echo $isi['id'];?>">DELETE</a></td>
	</tr>

    <div class="example-modal">
        <div id="deletesurat<?php echo $isi['id'];?>" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="row g-3" method="post" action="DELETE.php" name="tambahh" name="form1">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Konfirmasi Delete data Surat</h3>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="<?php echo $isi['id'];?>">
                        <h4 class="text-center">Apakah Anda Yakin Ingin Menghapus No Surat <?php echo $isi['no_surat'];?><strong><span class="grt"></span></strong></h4>
                    </div>
                    <div class="modal-footer">
                        <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="delete" id="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    }
    ?>
    </tbody>
    </table>
    <?php

     if(isset($_POST['update'])) {
         $id = $_POST['id'];

         $result = mysqli_query($con, "DELETE FROM `tbl_surat` WHERE `tbl_surat`.`id` = $id");
        
      }
    ?>
</body>
<script src="..assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>