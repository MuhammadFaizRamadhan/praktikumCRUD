<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
body {
  background-image: url('background_login.jpg');
  
}
</style> 
</head>
<body>
    <?php 
        include "header.php";
    ?>
    <br>
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Daftar Buku</h1>
            <p class="lead text-muted">Silakan cari buku yang akan dipinjam</p>
            <form method="POST" action="buku.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </section>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        include "koneksi.php";
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $query_buku = mysqli_query($koneksi, "select * from buku where id_buku = '$cari' or nama_buku like '%$cari%' or pengarang like '%$cari%'");
        }
        else{
            $query_buku = mysqli_query($koneksi, "select * from buku");
        }
        while($data_buku=mysqli_fetch_array($query_buku)){
            ?>
            <!-- <div class="col-md-3">
                <div class="card" >
                <img src="admin/foto/<?php echo $data_buku['foto']; ?>" class="card-img-top">
                
                <div class="card-body">
                    <h5 class="card-title"><?=$data_buku['nama_buku']?></h5>
                    <p class="card-text"><?=substr($data_buku['deskripsi'], 0,20)?></p>
                    <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
                </div>
                </div>
            </div> -->
            <div class="col">
            <div class="card shadow-sm">
                <img src="../admin/foto/<?=$data_buku['foto']?>" class="bd-placeholder-img card-img-top" width="100px" height="600px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/></img>

                <div class="card-body">
                <h5 class="card-title"><?=$data_buku['nama_buku']?></h5>
                <p class="card-text"><?=$data_buku['deskripsi']?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-dark ">Pinjam</a>
                    </div>
                    <small class="text-muted"><?=$data_buku['pengarang']?></small>
                </div>
                </div>
            </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php 
        include "footer.php";
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>