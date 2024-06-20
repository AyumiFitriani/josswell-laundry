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
                <a class="nav-link active" style="font-weight: 600;" href="daftar.php">Daftar</a>
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
    <div class="card mx-auto bg-light border-dark" style="width: 30rem;">
        <div class="card-header mx-auto text-white bg-secondary">
          Form Pendaftaran Pelanggan
        </div>
        <form action="input_plg.php" method="POST" class="row g-1">
        <div class="card-body row g-2">
            <div class="col-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control form-control-sm" name="id_pelanggan">
            </div>
            <div>
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pelanggan..">
            </div>
            <div class="">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP Pelanggan..">
            </div>
            </div>
        <div class="col-2 mx-auto mb-4">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </div>
    </form>



    <!-- main -->
</body>
</html>