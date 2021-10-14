<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body>
    
        <!-- <form action="tampil_siswa.php" method="post">
            <input type="text" name="cari" class= "form-control" placeholder="maskukkan keyword pencarian"/>
        </form> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <h4 style="font-family:'Times New Roman'" class="navbar-brand" >Perpustakaan</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link "  href="http://localhost/praktikum2/admin/tampil_kelas.php">Data Kelas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/admin/tampil_siswa.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tampil_buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tambah Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/admin/tambah_kelas.php">Tambah Kelas</a></li>
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/admin/tambah_siswa.php">Tambah Siswa</a></li>
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/admin/tambah_buku.php">Tambah Buku</a></li>
                    </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tambah_kelas.php">Tambah Kelas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tambah_siswa.php">Tambah Siswa</a>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tambah_buku.php">Tambah Buku</a>
                    </li> -->
                    </li>
                </ul>
                <form class="d-flex" action="tampil_siswa.php" method="post">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div class="container">
        <br>
        <h3>Data Siswa</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id Siswa</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Gender</th>
                <th scope="col">Alamat</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Arep Nyapo ?</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    // jika ada keyword pencarian
                    $cari = $_POST ['cari'];
                    $query_siswa=mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where siswa.id_siswa= '$cari' or siswa.nama_siswa like '%$cari%' ");
                } else {
                    // jika tidak ada keyword pencarian
                    $query_siswa=mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
                }
                
                while($data_siswa=mysqli_fetch_array($query_siswa)){?>
                <tr>
                    <td><?=$data_siswa["id_siswa"]?></td>
                    <td><?=$data_siswa["nama_siswa"]?></td>
                    <td><?=$data_siswa["tanggal_lahir"]?></td>
                    <td><?=$data_siswa["gender"]?></td>
                    <td><?=$data_siswa["alamat"]?></td> 
                    <td><?=$data_siswa["username"]?></td>
                    <td><?=$data_siswa["nama_kelas"]?></td>
                    <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a>
                    <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>"
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