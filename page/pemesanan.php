<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Pemesanan</title>
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
                        <a class="nav-link" aria-current="page" href="/sertifikasi/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pemesanan.php">Pesan Sekarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat.php">Riwayat Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- form -->
    <div class="container mt-4 mb-5">
        <h5 class="mb-3">Form Pemesanan</h5>
        <form id="pesananEsTeh" enctype="multipart/form-data" method="POST">
            <div class="row">                                                       
                <div class="col-md-6">
                    <p>Nama Pemesan</p>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <p>No Telp.</p>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="notelp" name="notelp" required>
                    </div>
                    <p>Alamat</p>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Pilih Menu Teh</h6>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="radio" id="original" name="jenis_teh" class="form-check-input" value="3000" checked>
                            <label class="form-check-label" for="original">Es Teh Original (Rp. 3.000)</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="radio" id="lemon" name="jenis_teh" class="form-check-input" value="5000">
                            <label class="form-check-label" for="lemon">Es Teh Rasa Lemon (Rp. 5.000)</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="radio" id="leci" name="jenis_teh" class="form-check-input" value="5000">
                            <label class="form-check-label" for="leci">Es Teh Rasa Leci (Rp. 5.000)</label>
                        </div>
                    </div>
                    <div class="col-mt-4">
                        <div class="mb-3">
                            <p>Jumlah Pesanan</p>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="jumlah_teh" name="jumlah_teh" min="1" value="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Harga Teh</p>
                    <div class="mb-3">
                        <input type="text" disabled class="form-control" id="harga_teh" name="harga_teh">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Jumlah Tagihan</p>
                    <div class="mb-3">
                        <input type="text" disabled class="form-control" id="jumlahtagihan" name="jumlah_tagihan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-secondary" type="button" id="calculateTotalButton">Hitung Total</button>
                    <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#resumeModal">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Resume Modal -->
    <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resumeModalLabel">Resume Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama Pemesan:</strong> <span id="resumeNama"></span></p>
                    <p><strong>No Telp:</strong> <span id="resumeNotelp"></span></p>
                    <p><strong>Alamat:</strong> <span id="resumeAlamat"></span></p>
                    <p><strong>Paket Teh:</strong> <span id="resumeJenisTeh"></span></p>
                    <p><strong>Jumlah Pesanan:</strong> <span id="resumeJumlahTeh"></span> Pcs</p>
                    <p><strong>Harga Teh:</strong> <span id="resumeHargaTeh"></span></p>
                    <p><strong>Jumlah Tagihan:</strong> <span id="resumeJumlahTagihan"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="finalSubmit">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript using jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        function calculateTotal() {
            var priceTea = parseInt($("input[name='jenis_teh']:checked").val());
            var quantity = parseInt($("#jumlah_teh").val());
            var totalTeaPrice = priceTea * quantity;

            $("#harga_teh").val("Rp. " + priceTea.toLocaleString('id-ID'));
            $("#jumlahtagihan").val("Rp. " + totalTeaPrice.toLocaleString('id-ID'));
        }

        $("#calculateTotalButton").click(function() {
            calculateTotal();
        });

        $("button[data-bs-target='#resumeModal']").click(function() {
            $("#resumeNama").text($("#nama").val());
            $("#resumeNotelp").text($("#notelp").val());
            $("#resumeAlamat").text($("#alamat").val());

            var teaText = $("input[name='jenis_teh']:checked").next().text();
            $("#resumeJenisTeh").text(teaText);

            $("#resumeJumlahTeh").text($("#jumlah_teh").val() + " Pcs");
            $("#resumeHargaTeh").text($("#harga_teh").val());
            $("#resumeJumlahTagihan").text($("#jumlahtagihan").val());
        });

        $("#finalSubmit").click(function(event) {
            event.preventDefault(); // Prevent default form submission

            var data = {
                nama: $("#nama").val(),
                notelp: $("#notelp").val(),
                alamat: $("#alamat").val(),
                jenis_teh: $("input[name='jenis_teh']:checked").next().text().trim(),
                jumlah_teh: $("#jumlah_teh").val(),
                harga_teh: $("#harga_teh").val(),
                jumlah_tagihan: $("#jumlahtagihan").val()
            };

            localStorage.setItem("pesananEsTeh", JSON.stringify(data));

            // Kirim data menggunakan jQuery AJAX
            $.ajax({
                url: 'submit_pesan.php',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {
                    console.log('Success:', response);
                    // Reset form setelah berhasil
                    $("#pesananEsTeh")[0].reset();
                    // Tampilkan modal konfirmasi atau pesan sukses lainnya
                    alert('Pesanan berhasil dikirim!');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Tampilkan pesan error atau lakukan penanganan kesalahan lainnya
                    alert('Terjadi kesalahan saat mengirim pesanan.');
                }
            });
        });
    });
    </script>

    <!-- Scripts for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
