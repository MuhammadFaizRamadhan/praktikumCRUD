<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-5 mb-3">
                <img src="20944201.jpg" class="image-fluid" width="300px" height="300px"/>
            </div>
            <div class="col-md-6">
            <h3 class="mb-2 text-center">Login</h3>
                <form method="POST" action="proses_login.php">
                    <div class="mb-4">
                        <!-- username -->
                        <div class="mb-2">
                            <label for="nama_kelas" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <!-- password -->
                        <div class="mb-2">
                            <label for="kelompok" class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>