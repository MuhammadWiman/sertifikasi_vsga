<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="/sertifikasi/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemesanan.php">Pesan Sekarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Riwayat Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Riwayat data -->
    <div class="container mt-4">
        <h2 class="mb-4">Riwayat Pemesanan</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">No Telp.</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Menu Teh</th>
                        <th scope="col">Jumlah Pesanan</th>
                        <th scope="col">Harga Teh</th>
                        <th scope="col">Jumlah Tagihan</th>
                    </tr>
                </thead>
                <tbody id="riwayatPemesanan">
                    <!-- Data akan dimasukkan di sini dengan JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // URL tempat file JSON disimpan
            var jsonFile = '../database/pemesanan.json';

            // Mengambil data dari file JSON
            $.getJSON(jsonFile, function(data) {
                // Membuat baris tabel untuk setiap data pemesanan
                $.each(data, function(key, order) {
                    var html = `
                        <tr>
                            <td>${order.nama}</td>
                            <td>${order.notelp}</td>
                            <td>${order.alamat}</td>
                            <td>${order.jenis_teh}</td>
                            <td>${order.jumlah_teh} Pcs</td>
                            <td>${order.harga_teh}</td>
                            <td>${order.jumlah_tagihan}</td>
                        </tr>
                    `;
                    $('#riwayatPemesanan').append(html);
                });
            }).fail(function() {
                // Menangani jika gagal mengambil file JSON
                alert('Gagal memuat data riwayat pemesanan.');
            });
        });
    </script>
</body>
</html>