<?php
if($_GET['id_buku']){
    include "koneksi.php";
    $query_hapus= mysqli_query($koneksi, "delete from buku where id_buku='".$_GET['id_buku']."'");
    if ($query_hapus) {
        echo "<script>alert('Sukses hapus buku'); location.href='tampil_buku.php';</script>";
    }
    else {
        echo "<script>alert('Gagal hapus buku'); location.href='tampil_buku.php';</script>";
    }
}
?>