<?php
    error_reporting(0);
    $con = new mysqli("localhost", "root", "", "db_barang");

        $isi = "SELECT * FROM tbl_barang";
        $result = $con->query($isi);

    $query = mysqli_query($con, "SELECT * FROM tbl_barang");
    $isi = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Barang</title>
        <link rel="stylesheet" href="assets/css/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            #judul {
                text-align: center;
            }
            body {
            font-family: 'Inter', sans-serif;
            color: #343a40;
            line-height: 1;
            display: flex;
            justify-content: center;
            }
            table {
            width: 1000px;
            border-right-color: #ffffff;
            margin-top: 100px;
            font-size: 18px;
            border-collapse: collapse; 
            }
            th, td {
            padding: 16px 24px;
            text-align: left;
            }
            th {
            background-color: #087f5b;
            color: #fff;
            width: 25%;
            }
            tbody tr:nth-child(odd){
            background-color: #f8f9fa;
            }
            tbody tr:nth-child(even){
            background-color: #e9ecef;
            }
            #teng{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div>
            
        <?php
            $pesan = $_GET['pesan'];
            $frm = $_GET['frm'];

            if ($pesan == 'success' && $frm=='add'){
        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Menambahkan Data.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
            } else if ($pesan == 'success' && $frm=='edit'){
        ?>
        
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Mengubah Data.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php
            } else if ($pesan == 'success' && $frm=='delete'){
        ?>
        
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Menghapus Data.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php
           }
        ?>

    <table>
      <thead>
        <tr>
          <th colspan="9"><a class="btn btn-light" href="Tambah.php">Tambah</a></th>
        </tr> 
        <tr>
          <th colspan="9" id="teng">List Data Barang</th>
        </tr> 
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Kategori Barang</th>
          <th>Lokasi Barang</th>
          <th>Tanggal Beli</th>
          <th>Harga Beli</th>
          <th>Tempat Beli</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <tbody>
      <?php 
        foreach ($result as $isi) {
            if($isi['kategori_barang']=='1') {
              $kbr = "Elektronik";
            } else if($isi['kategori_barang']=='2') {
              $kbr = "Ekonomi";
            } else if($isi['kategori_barang']=='3') {
              $kbr = "Pakai";
            } else if($isi['kategori_barang']=='4') {
              $kbr = "Pendidikan";
            } else if($isi['kategori_barang']=='5') {
              $kbr = "Musik";
            } else if($isi['kategori_barang']=='6') {
              $kbr = "Bangunan";
            } else {echo "Kode Barang Bermasalah";}
            ?>
            <tr>   
                <td><?php echo $isi['kd_barang']; ?></td>
                <td><?php echo $isi['nama_barang']; ?></td>
                <td><?php echo $kbr; ?></td>
                <td><?php echo $isi['lokasi_barang']; ?></td>
                <td><?php echo $isi['tanggal_beli']; ?></td>
                <td><?php echo $isi['harga_beli']; ?></td>
                <td><?php echo $isi['tempat_beli']; ?></td>
                <td><a href="Edit.php?id_barang=<?php echo $isi['id_barang']; ?>"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></td>
                <td><a href="#" data-bs-toggle="modal" data-bs-target="#deletebarang<?php echo $isi['id_barang']; ?>" ><button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></a></td>
            </tr>
            <div class="example-modal">
                <div id="deletebarang<?php echo $isi['id_barang']; ?>" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="row g-3" method="post" action="Hapus.php" name="form1">
                                <div class="modal-header">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center">Konfirmasi Hapus Data Barang</h4>
                                </div>
                                <div class="modal-body">                                   
                                    <input type="hidden" class="form-control" name="id_barang" id="id_barang" value="<?php echo $isi['id_barang']; ?>">
                                    <h5 class="text-center">Apakah Anda yakin ingin menghapus Data Barang ini ? <?php echo $isi['kd_barang']; ?><strong><span class="grt"></span></strong>?</h5>            
                                </div>
                                <div class="modal-footer">
                                    <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="delete" id="delete">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        $sql = "DELETE FROM tbl_barang WHERE id_barang ='id_barang'";
        }
        ?>
      </tbody>      
    </table>
    </div>
    </body>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>