<?php
$con = new mysqli("localhost", "root", "", "db_surat_ananda");

$tgl = date('d F Y');

$query = mysqli_query($con, 'SELECT * FROM tbl_surat ')

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Surat</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <row>
            <div class="card">
            <h1 style="text-align:center"><b>TAMBAH SURAT</b></h1>
            <div class="card-body">
            <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nomor Surat</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Jenis Surat</label>
    <select id="inputState" class="form-select">
      <option selected>Pilihan</option>
      <option value=1>Surat Keputusan</option>
      <option value=2>Surat Peminjaman</option>
      <option value=3>Surat Pernyataan</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Tanggal Surat</label>
    <input type="date" class="form-control" id="inputAddress" >
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pembuat Surat</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Menyetujui</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Mengetahui</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="submit" class="btn btn-danger">Cancel</button>
  </div>
</form>
    </div>        
</div>
</row>
</div>
    <?php

    if(isset($_POST['submit'])) {
        $no_surat = $_POST['noSurat'];
        $jns_surat = $_POST['jenisSurat'];
        $tanggal_surat = $_POST['tglSurat'];
        $ttd_surat = $_POST['ttdSurat'];
        $ttd_mengetahui = $_POST['ttdMengetahui'];
        $ttd_menyetujui = $_POST['ttdMenyetujui'];

        $result = mysqli_query($mysqli, "INSERT INTO tbl_surat(id,no_surat,jns_surat,ttd_surat,ttd_mengetahui,ttd_menyetujui) 
                                        VALUES('','$no_surat','jns_surat','$tanggal_surat','tanggal_surat','ttd_mengetahui','ttd_menyetujui')");
        
        echo "User addes succesfully. <a href='PERTEMUAN4.php'>List Surat</a>";
    }
    ?>
    
</body>
<script src="..assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>