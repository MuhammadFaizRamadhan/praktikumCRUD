<?php
include 'koneksi.php';

    $id_buku=$_POST['id_buku'];
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];

    $temp=$_FILES['foto']['tmp_name'];
    $type=$_FILES['foto']['type'];
    $size=$_FILES['foto']['size'];
    $name= rand(0,9999).$_FILES['foto']['name'];
    $folder = 'foto/';

    $sql = "select * from buku where id_buku = '$id_buku'";
    $query = mysqli_query($koneksi, $sql);
    $buku= mysqli_fetch_array($query);
    $path = $folder.$buku["foto"];

    if (file_exists($path)) {
        unlink($path);
    }

    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $update=mysqli_query($koneksi,"update buku set nama_buku='".$nama_buku."', pengarang='".$pengarang."', deskripsi='".$deskripsi."', foto='".$name."' where id_buku = '".$id_buku."'") or die(mysqli_error($koneksi));
        if ($update) {
            echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='ubah_buku.php';</script>";
        }
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='ubah_buku.php';</script>";
    }
    
?>