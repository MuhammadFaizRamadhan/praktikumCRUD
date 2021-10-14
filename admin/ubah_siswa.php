<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    h3 {text-align: center;}
    </style>
</head>
<body>
    <?php
    include "koneksi.php";
    $query_get_siswa=mysqli_query($koneksi,"select * from siswa where id_siswa= '".$_GET['id_siswa']." ' ");
     $data_siswa=mysqli_fetch_array($query_get_siswa); 
    
    ?>
    <div class="container">
    <br>
    <h3>Ubah Siswa </h3>
    <form action= "proses_ubah_siswa.php" method="post">
        <input type="hidden" name="id_siswa" value= "<?=$data_siswa ['id_siswa']; ?>" class="form-control">
        <br>
        <h5>nama siswa:</h5>
        <input type="text" name="nama_siswa" value= "<?=$data_siswa ['nama_siswa']; ?>" class="form-control">
        <br>
        <h5>tanggal lahir:</h5>
        <input type="date" name="tanggal_lahir" value= "<?=$data_siswa ['tanggal_lahir']; ?>" class="form-control">
        <br>
        <h5>gender:</h5>
        <?php
        $array_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>

        <select name="gender" class="form-control">
            <option></option>
                <?php foreach ($array_gender as $key_gender => $val_gender):
                if($key_gender==$data_siswa['gender']){
                $select="selected";
                } else {
                $select="";
                }
                ?>
            <option value="<?=$key_gender?>"
            <?=$select?>><?=$val_gender?></option>

            <?php endforeach ?>
        </select>
        <br>
        <h5>Alamat:</h5>
        <textarea name="alamat" value= "<?=$data_siswa ['alamat']; ?>" class="form-control" rows="4"><?=$data_siswa ['alamat']; ?></textarea>
        <br>
        <h5>Kelas:</h5>
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $query_kelas=mysqli_query($koneksi, "select * from kelas");
            while ($data_kelas=mysqli_fetch_array($query_kelas)) {
                if($data_kelas['id_kelas']==$data_siswa['id_kelas'] ) {
                $select="selected";
            } else {
            $select="";
            }
            echo '<option value="'.$data_kelas['id_kelas'].'"
            '.$select.'>'.$data_kelas['nama_kelas'].'</option>';
            }
            ?>
        </select>
        <br>
        <h5>Username</h5>
        <input type="text" name="username" value= "<?=$data_siswa ['username']; ?>" class="form-control">
        <br>
        <h5>Password</h5>
        <input type="password" name="password" value= "" class="form-control">
        <br>
        <input type="submit" name="simpan" value= "Ubah Siswa" class="btn btn-primary">

        
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>