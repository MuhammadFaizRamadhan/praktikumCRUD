<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil_buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    nav {align: center;}
    </style>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container">    
    <br>
    <h3>Data Buku</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id Buku</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Foto</th>
            <th scope="col">Arep Nyapo ?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            if (isset($_POST["cari"])) {
                // jika ada keyword pencarian
                $cari = $_POST ['cari'];
                $query_buku=mysqli_query($koneksi, "select * from buku where id_buku='$cari' or nama_buku like '%$cari%' ");
            } else {
                // jika tidak ada keyword pencarian
                $query_buku=mysqli_query($koneksi, "select * from buku");
            }
                
            while($data_buku=mysqli_fetch_array($query_buku)){?>
            <tr>
                <td><?=$data_buku["id_buku"]?></td>
                <td><?=$data_buku["nama_buku"]?></td>
                <td><?=$data_buku["pengarang"]?></td>
                <td><img src="foto/<?php echo $data_buku['foto']; ?>" style="width: 120px;"></td>
                <!-- <td><?=$data_buku["foto"]?></td> -->
                <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a>
                <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>"
                onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>