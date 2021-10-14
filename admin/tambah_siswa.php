<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
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
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page">Tambah Siswa</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tambah_kelas.php">Tambah Kelas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/admin/tambah_siswa.php">Tambah Siswa</a>
                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/praktikum2/admin/tambah_buku.php">Tambah Buku</a>
                    </li> -->
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    
    <!-- <ul class="nav nav-pills nav-justified">
    <h4 style="font-family:'Times New Roman'" class="navbar-brand" >Perpustakaan</h4>
        <li class="nav-item">
            <a class="nav-link " href="http://localhost/praktikum2/admin/tambah_kelas.php">Tambah Kelas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/praktikum2/admin/tambah_siswa.php">Tambah Siswa</a>
        </li>
    </ul> -->
    <div class="container">
    <br>
    <h3 >Tambah Siswa</h3>
    <br>
    <form action="proses_tambah_siswa.php" method="post">
        <h5>Nama Siswa :</h5>
        <input type="text" name="nama_siswa" value="" class="form-control" placeholder="Masukkan Nama">
        <br>
        <h5>Tanggal Lahir :</h5>
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        <br>
        <h5>Gender :</h5>
        <!-- <select name="gender" class="form-control">;
        <option></option>;
        <option value="L">Laki-laki</option>;
        <option value="P">Perempuan</option>;
        </select>
        <br> -->
        
        <input type="radio"  name="gender" value="L" >;
        <label value="L" >Laki Laki</label><br>
        <input type="radio"  name="gender" value="P" >;
        <label value="P" >Perempuan</label><br>
        
        <br>
        <h5>Alamat :</h5>
        <textarea name="alamat" class="form-control" rows="4" placeholder="Masukkan alamat"></textarea>
        <br>
        <h5>Kelas :</h5>
        <select name="id_kelas" class="form-control">;
            <option>Pilih Kelas</option>;
            <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
            }

            ?>
        
        </select>
        <br>
        <h5>Username :</h5>
        <input type="text" name="username" value="" class="form-control" placeholder="Masukkan Username">
        <br>
        <h5>Password :</h5>
        <input type="password" name="password" value="" class="form-control" placeholder="Masukkan Password">
        <br>
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
        <br>
        </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>