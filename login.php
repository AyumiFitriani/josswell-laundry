<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- header -->
    <nav class="navbar navbar-expand-lg fixed-top p-2" style="background-color: rgb(190, 204, 235);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-size: 23pt; font-weight: bold; color: rgb(68, 68, 68); ">Joss Well</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
                <a class="nav-link" style="font-weight: 600;" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: 600;" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: 600;" href="daftar_pesanan.php">Pesanan</a>
            </li>
        </ul>
    </nav>
    <!-- end header -->

    <!-- main -->
    <br><br><br>
    <br><br>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") { ?>
    <center color="red">Login gagal! Username dan password salah!</center>
    <?php
        } else if ($_GET['pesan'] == "logout") { ?>
    <center color="red">Anda telah berhasil logout!</center>
    <?php
        } else if ($_GET['pesan'] == "belum_login") { ?>
    <center color="red">Anda harus login untuk masuk ke sistem!</center>
    <?php
        }
    }
    ?>
    <div class="card mx-auto bg-light border-dark" style="width: 25rem;">
        <div class="card-header mx-auto text-white bg-secondary">
          LOGIN
        </div>
        <form action="cekLogin.php" method="POST" class="row g-2">
        <div class="card-body row g-2">
            <div class="col-7 mx-auto">
                <label for="id_pegawai" class="form-label">Username</label>
                <input type="text" class="form-control" name="id_pegawai">
            </div>
            <div class="col-7 mx-auto">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
        </div>
        <div class="col-2 mx-auto mb-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </form>



    <!-- main -->
</body>
</html>