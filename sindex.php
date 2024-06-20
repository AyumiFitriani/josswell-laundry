<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_index.css">
</head>
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
                <a class="nav-link active" style="font-weight: 600;" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: 600;" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: 600;" href="daftar_pesanan.php">Pesanan</a>
            </li>
        </ul>
        </div>
        <a type="button" class="btn btn-outline-secondary btn-sm" style="font-weight: bold;" href="logout.php">Logout</a>
    </div>
    </nav>
    <!-- end header -->

    <!-- main -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/p1.jpg" class="d-block w-100" style="height: 590px;" alt="...">
            <div class="carousel-caption d-none d-md-block p-2" style="color: black">
                <h5>Joss Well Laundry</h5>
                <p>Siap Memberikan Pelayanan Terbaik kepada Pelanggan.</p>
                <form class="d-flex" role="search">
                    <input class="form-control ms-auto me-2" style="width: 350px;" type="search" placeholder="Cari Nama Pelanggan" aria-label="Search">
                    <button class="btn btn-secondary me-auto" type="submit">Search</button>
                </form>
            </div>
        </div>
          <div class="carousel-item">
            <img src="img/p2.png" style="height: 590px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block p-2" style="color: black;">
                <h5>Joss Well Laundry</h5>
                <p>Siap Memberikan Pelayanan Terbaik kepada Pelanggan.</p>
                <form class="d-flex" role="search">
                    <input class="form-control ms-auto me-2" style="width: 350px;" type="search" placeholder="Cari Nama Pelanggan" aria-label="Search">
                    <button class="btn btn-secondary me-auto" type="submit">Search</button>
                </form>
            </div>
        </div>
          <div class="carousel-item">
            <img src="img/p1.jpg" class="d-block w-100" style="height: 590px;" alt="...">
            <div class="carousel-caption d-none d-md-block p-2" style="color: black;">
                <h5>Joss Well Laundry</h5>
                <p>Siap Memberikan Pelayanan Terbaik kepada Pelanggan.</p>
                <form class="d-flex" role="search">
                    <input class="form-control ms-auto me-2" style="width: 350px;" type="search" placeholder="Cari Nama Pelanggan" aria-label="Search">
                    <button class="btn btn-secondary me-auto" type="submit">Search</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <br><br><br>
    <!-- end main -->

    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>