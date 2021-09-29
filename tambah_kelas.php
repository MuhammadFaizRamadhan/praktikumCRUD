<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                    <a class="nav-link "  href="http://localhost/praktikum2/tampil_kelas.php">Data Kelas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/tampil_siswa.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/tampil_buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tambah Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/tambah_kelas.php">Tambah Kelas</a></li>
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/tambah_siswa.php">Tambah Siswa</a></li>
                        <li><a class="dropdown-item" href="http://localhost/praktikum2/tambah_buku.php">Tambah Buku</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page">Tambah Kelas</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/tambah_kelas.php">Tambah Kelas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link "  href="http://localhost/praktikum2/tambah_siswa.php">Tambah Siswa</a>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/tambah_buku.php">Tambah Buku</a>
                    </li> -->
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    <!-- <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/tambah_kelas.php">Tambah Kelas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/praktikum2/tambah_siswa.php">Tambah Siswa</a>
        </li>
    </ul> -->
    <div class="container">
    <form method= "POST" action= "proses_tambah_kelas.php">
    <div class="mb-3">
        <br>
        <h3> Tambah Kelas </h3>
        <br>
        <h5 for="nama_kelas" class="form-label">Nama Kelas</h5>
        <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama" required>
    </div>
    <br>
    <div class="mb-3">
        <h5 for="kelompok" class="form-label">Kelompok</h5>
        <input type="text" class="form-control" name="kelompok" placeholder="Masukkan Kelompok" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Kelas</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>