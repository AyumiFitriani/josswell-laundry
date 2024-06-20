<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
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
                    <a class="nav-link active" style="font-weight: 600;" href="daftar_pesanan.php">Pesanan</a>
                </li>
            </ul>
    </nav>
    <!-- end header -->

    <!-- main -->
    <br><br><br><br><br>
    <h2 align="center">Daftar Pesanan Joss Well</h2>
    <br><br>
    <table class="table table-primary table-striped mx-auto" style="width: 50rem;">
        <thead>
            <tr>
                <th scope="col">ID Pesanan</th>
                <th scope="col">Nama</th>
                <th scope="col">Kecepatan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php
            include 'koneksi.php';
            $query = mysqli_query($konek, "SELECT plg.nama, plg.id_pelanggan, psn.id_pesanan, psn.kecepatan
                    FROM nota psn, pelanggan plg
                    WHERE plg.id_pelanggan = psn.id_pelanggan");
            while ($data = mysqli_fetch_array($query)) {
            ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $data['id_pesanan']; ?></th>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kecepatan']; ?></td>
                <td>
                    <a class="btn btn-secondary btn-sm" style="font-size: bold;" href=hapus.php?id_pesanan=<?php echo $data['id_pesanan']; ?>>
                        Selesai
                    </a>
                </td>
            </tr>
        </tbody>
        <?php }
        ?>
    </table>
     


    <!-- end main -->
</body>
</html>