<?php
    $nama_kelas = $_POST["nama_kelas"];
    $kelompok = $_POST["kelompok"];

    // echo $nama_kelas;
    // echo $kelompok;
    include "koneksi.php";
    
    $input = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, kelompok) VALUES ('{$nama_kelas}', '{$kelompok}')");

    if ($input) {
        echo "<script>alert('Sukses tambah kelas');location.href='tambah_kelas.php';</script>";
    }
    else {
        echo "<script>alert('Gagal tambah kelas');location.href='tambah_kelas.php';</script>";
    }
?>