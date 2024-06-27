<?php
// ambil data video
$jsonFilePath = __DIR__ . '/asset/listVideo.json';
$jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : false;
// validasi data video
if ($jsonContent === false) {
    $videos = [];
    // File json tidak terbaca
    echo "<p>Error: Unable to read JSON file.</p>";
} else {
    $videos = json_decode($jsonContent, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        $videos = [];
        // terjadi error pada format json
        echo "<p>Error: Invalid JSON format.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Es Teh Warman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .carousel-item img {
        object-fit: fill;
        width: 100%;
        height: 100%;
        max-height: 450px;
      }
      .carousel-inner {
        height: 450px;
      }
      .border-rounded-shadow {
        border: 2px solid #6c757d;
        border-radius: 25px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin: 20px;
      }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Warung Es Teh Warman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/pemesanan.php">Pesan Sekarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=admin">Riwayat Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./image/es_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./images/4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Card -->
    <div id ="destinations" class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <h4 class="text-center"> List Menu Es Teh</h4>
        <br></br>
      </div>
      <div class="col-md-4">
      <h4>Video</h4>
        <br></br>
      </div>
    </div>
      <div class="row">
        <div class="col-md-8 col-md-4" >
          <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <div class="card h-100">
                    <img src="./image/es_1.jpeg" class="card-img-top" alt="..." style="height: 180px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                      <p class="card-title"><strong>Es Teh Original</strong></p>
                      <h5 class="text-primary">Rp.3.000</h5>
                      <br></br>
                      <a href="?page=pemesanan" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card h-100">
                  <img src="./image/es_1.jpeg" class="card-img-top" alt="..." style="height: 180px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                      <p class="card-title"><strong>Es Teh rasa Lemon</strong></p>
                      <h5 class="text-primary">Rp.5.000</h5>
                      <br></br>
                      <a href="?page=pemesanan" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card h-100">
                    <img src="./image/es_1.jpeg" class="card-img-top" alt="..." style="height: 180px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                      <p class="card-title"><strong>Es Teh rasa Leci</strong></p>
                      <h5 class="text-primary">Rp.5.000</h5>
                      <br></br>
                      <a href="?page=pemesanan" class="btn btn-primary">pesan Sekarang</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- menampilkan video menggunakan looping foreach -->
        <div class="col-md-4">
          <?php foreach ($videos as $video) : ?>
              <div class="ratio ratio-16x9 mb-3">
                  <iframe src="<?= $video['url'] ?>" title="<?= $video['title'] ?>"></iframe>
              </div>
              <br>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Warung Es Teh Warman. All Rights Reserved.</p>
    </footer>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>