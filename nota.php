

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
    <br><br><br><br>
    <div class="card mx-auto bg-light border-dark" style="width: 18rem;">
        <div class="card-header mx-auto text-white bg-secondary">
          NOTA
        </div>
        <?php
        include 'koneksi.php';

        $query = mysqli_query($konek, "SELECT * FROM nota");
        while ($data = mysqli_fetch_array($query)) {
        ?>

        <div class="card-body row g-2">
            <div class="col-4">
                <label for="id_pesanan" class="form-label">ID Pesanan</label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control form-control-sm" name="id_pesanan" value="<?php echo $data['id_pesanan']; ?>" readonly>
            </div>
            <div>
                <label for="tgl" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl']; ?>" readonly>
            </div>
            <div>
                <label for="tgl" class="form-label">Kecepatan</label>
                <input type="text" class="form-control" name="tgl" value="<?php echo $data['kecepatan']; ?>" readonly>
            </div>
            <div>
                <label for="tgl" class="form-label">Harga</label>
                <input type="text" class="form-control" name="tgl" value="<?php echo $data['harga']; ?>" readonly>
            </div>
            <div>
                <label for="berat" class="form-label">Berat (Kg)</label>
                <input type="text" class="form-control" name="berat" value="<?php echo $data['berat']; ?>" readonly>
            </div>
            <div>
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="text" class="form-control" name="total_harga" 
                value="<?php
                            if($data['harga'] == "5000")
                            {
                                $total_harga = $data['berat'] * 5000;
                            } 
                            else
                            {
                                $total_harga = $data['berat'] * 6000;
                            }
                                    echo $total_harga;
                        
                        ?>">
            </div>
        </div>
        <?php }
        ?>
        <div class="col-1 mx-auto mb-4">
            <button class="btn btn-primary">Cetak</button>
        </div>
      </div>
      <br>
    <!-- end main -->
</body>
</html>