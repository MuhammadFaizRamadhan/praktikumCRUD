<?php
include 'koneksi.php';

    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];
    // $foto=$_FILES['foto']['name'];

    $temp=$_FILES['foto']['tmp_name'];
    $type=$_FILES['foto']['type'];
    $size=$_FILES['foto']['size'];
    $name= rand(0,9999).$_FILES['foto']['name'];
    $folder = 'foto/';


    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $input = mysqli_query ($koneksi, "INSERT INTO buku (nama_buku, pengarang, deskripsi, foto) VALUES ('".$nama_buku."', '".$pengarang."', '".$deskripsi."', '".$name."')");
        if ($input) {
            echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='tambah_buku.php';</script>";
        }
        
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='tambah_buku.php';</script>";
    }
    
?>