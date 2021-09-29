<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body>
    <?php
    include "koneksi.php";
    $query_get_buku=mysqli_query($koneksi,"select * from buku where id_buku= '".$_GET['id_buku']." ' ");
     $data_buku=mysqli_fetch_array($query_get_buku); 
    ?>
    <div class="container">
    <br>
    <h3>Ubah Buku</h3>
    <form action= "proses_ubah_buku.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_buku" value= "<?=$data_buku ['id_buku']; ?>" class="form-control">
        <br>
        <h5>Nama Buku:</h5>
        <input type="text" name="nama_buku" value= "<?=$data_buku ['nama_buku']; ?>" class="form-control">
        <br>
        <h5>Pengarang:</h5>
        <input type="text" name="pengarang" value= "<?=$data_buku ['pengarang']; ?>" class="form-control">
        <br>
        <h5>Deskripsi:</h5>
        <input type="text" name="deskripsi" value= "<?=$data_buku ['deskripsi']; ?>" class="form-control">
        <br>
        <h5>Foto:</h5>
        <img src="foto/<?php echo $data_buku['foto']; ?>" style="width: 120px;">
          <input type="file" name="foto" />
        
        <!-- <input type="text" name="foto" value= "<?=$data_buku ['foto']; ?>" class="form-control"> -->
        <br>
        <br>
        <input type="submit" name="simpan" value= "Ubah Buku" class="btn btn-primary">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>