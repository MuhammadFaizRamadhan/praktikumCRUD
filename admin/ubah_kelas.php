<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body>
<?php
    include "koneksi.php";
    $query_get_kelas=mysqli_query($koneksi,"select * from kelas where id_kelas= '".$_GET['id_kelas']." ' ");
     $data_kelas=mysqli_fetch_array($query_get_kelas); 
        
    ?>
    <div class="container">
    <br>
    <h3>Ubah Kelas</h3>
    <form action= "proses_ubah_kelas.php" method="post">
        <input type="hidden" name="id_kelas" value= "<?=$data_kelas ['id_kelas']; ?>" class="form-control">
        <br>
        <h5>Nama Kelas:</h5>
        <input type="text" name="nama_kelas" value= "<?=$data_kelas ['nama_kelas']; ?>" class="form-control">
        <br>
        <h5>Kelompok:</h5>
        <input type="text" name="kelompok" value= "<?=$data_kelas ['kelompok']; ?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value= "Ubah Kelas" class="btn btn-primary">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>