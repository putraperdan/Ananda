<?php 
$koneksi = mysqli_connect("localhost","root","","db_surat_ananda");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>TABEL SURAT</title>
</head>
<body>
 
	<h2>TABEL SURAT</h2>
	<br/>
	<br/>
	<table border="1">
		<tr>
            <th>NO</th>
			<th>NO SURAT</th>
			<th>Jenis Surat</th>
			<th>TANGGAL SURAT</th>
			<th>TANDA TANGAN SURAT</th>
			<th>TANDA TANGAN MENGETAHUI</th>
			<th>TANDA TANGAN MENYETUJUI</th>
		</tr>
		<?php
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_surat");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['no_surat']; ?></td>
				<td><?php echo $d['jns_surat']; ?></td>
				<td><?php echo $d['tanggal_surat']; ?></td>
                <td><?php echo $d['ttd_surat']; ?></td>
				<td><?php echo $d['ttd_mengetahui']; ?></td>
				<td><?php echo $d['ttd_menyetujui']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>