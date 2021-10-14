<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body>
    
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
                <a class="nav-link" href="http://localhost/praktikum2/admin/tampil_siswa.php">Data Siswa</a>
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
                <li class="nav-item"> -->
                <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/admin/tambah_buku.php">Tambah Buku</a>
                </li>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <br>
    <h3 >Tambah Buku</h3>
    <br>
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
    <h5>Nama Buku :</h5>
        <input type="text" name="nama_buku" value="" class="form-control" placeholder="Masukkan Nama Buku">
        <br>
    <h5>Pengarang :</h5>
        <input type="text" name="pengarang" value="" class="form-control" placeholder="Masukkan Nama Pengarang">
        <br>
    <h5>Deskripsi :</h5>
        <input type="text" name="deskripsi" value="" class="form-control" placeholder="Masukkan Deskripsi">
        <br>
    <h5>Foto :</h5>
        <input type="file" name="foto" >
        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
        <br>
        <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary">
        <br>
    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>