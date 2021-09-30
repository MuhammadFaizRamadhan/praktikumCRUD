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
                    </li>
                </ul>
                <form class="d-flex" action="tampil_buku.php" method="post">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
    </nav>