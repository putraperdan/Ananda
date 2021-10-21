<?php
$con = new mysqli("localhost", "root", "", "db_surat_ananda");

$tgl = date('d F Y');

$query = mysqli_query($con, 'SELECT * FROM tbl_surat ')

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align:center"><b>LIST SURAT</b></h1>
    <table class="table">
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
        <td>EDIT</td>
        <td>DELETE</td>
	</tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</body>
<script src="..assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>