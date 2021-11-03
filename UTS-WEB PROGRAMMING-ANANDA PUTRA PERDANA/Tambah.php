<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "db_barang");

$query = mysqli_query($con, 'SELECT * FROM tbl_barang ')

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <row>
            <div class="card">
            <h1 style="text-align:center"><b>TAMBAH BARANG</b></h1>
            <div class="card-body">
            <form class="row g-3" method="post" action="Tambah.php" name="tambahh">
            <input type="hidden" class="form-control" id="id_barang" name="id_barang" value="<?php echo $isi['id_barang'];?>">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Kode Barang</label>
    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" placeholder="ASP-01-01">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Kategori Barang</label>
    <select id="KategoriBarang" name="KategoriBarang" class="form-select">
      <option selected>Pilihan</option>
      <option value=1>Elektronik</option>
      <option value=2>Ekonomi</option>
      <option value=3>Pakai</option>
      <option value=4>Pendidikan</option>
      <option value=5>Musik</option>
      <option value=6>Bangunan</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Lokasi Barang</label>
    <input type="text" class="form-control" id="LokasiBarang" name="LokasiBarang">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Tanggal Beli</label>
    <input type="date" class="form-control" id="TanggalBeli" name="TanggalBeli">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Harga Beli</label>
    <input type="text" class="form-control" id="HargaBeli" name="HargaBeli">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Tempat Beli</label>
    <input type="text" class="form-control" id="TempatBeli" name="TempatBeli">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
    <button type="submit" class="btn btn-danger">Batal</button>
  </div>
</form>
    </div>        
</div>
</row>
</div>
    <?php

    if(isset($_POST['simpan'])) {
        $kd_barang = $_POST['KodeBarang'];
        $nama_barang = $_POST['NamaBarang'];
        $kategori_barang = $_POST['KategoriBarang'];
        $lokasi_barang = $_POST['LokasiBarang'];
        $tanggal_beli = $_POST['TanggalBeli'];
        $harga_beli = $_POST['HargaBeli'];
        $tempat_beli = $_POST['TempatBeli'];

        $result = mysqli_query($con, "INSERT INTO `tbl_barang` (`id_barang`, `kd_barang`, `kategori_barang`, `lokasi_barang`, `tanggal_beli`, `harga_beli`, `tempat_beli`) 
                  VALUES(null,'$kd_barang','$nama_barang','$kategori_barang','$lokasi_barang','$tanggal_beli','$harga_beli','$tempat_beli')");
        
        header("Location:Tampilan.php?pesan=success&frm=add");
    }
    ?>
    
</body>
<script src="..assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>