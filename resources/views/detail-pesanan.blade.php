<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Easyride | Detail Pesanan</title>
        <!-- Boostrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Manual CSS -->
        <link rel="stylesheet" href="styles.css" />
        <!-- Heroes Component -->
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-1/assets/css/hero-1.css">
        <!-- Font awesome icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
        />
        <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card-img-top {
            max-height: 150px;
            object-fit: cover;
        }
        .produk-terkait {
            height: 75%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
        

        </style>
    </head>
    <body id="home">
        <!-- Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top mb-5 bg-body-tertiary shadow-lg">
        <div class="container-fluid fw-bold">
            <a class="navbar-brand" href="#">
            easyRide
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="#">
                easyRide
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php #hubungiKami">Hubungi Kami</a>
                </li>
                </ul>
                <ul class="nav align-items-center">
                    <li class="nav-item">
                    <a href="login.php"><button class="btn btn-primary" type="submit">Masuk</button></a>
                    </li>
                </ul>
                    <ul class="nav align-items-center">
                    <li class="nav-item">
                        <a href="user/index.php"><button class="btn btn-primary" type="submit">Profil</button></a>
                    </li>
                    </ul>
            </div>
            </div>
        </div>
        </nav>
        <!-- Navbar End -->

        <!-- Detail Produk -->
        <div class="container-fluid py-5 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                <h2 class="text-center fw-bold mb-4">Detail Sewa</h2>
                    <div class="col-lg-10">
                        <div class="card shadow-lg border-0">
                            <div class="row g-0">
                                <!-- Product Image -->
                                <div class="col-md-6">
                                </div>
                                <!-- Product Details -->
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h2 class="card-title">
                                        <h4 class="card-subtitle text-muted mb-4">Rp. / hari</h4>
                                        <div class="d-flex align-items-center mb-4">
                                            <span class="badge bg-primary me-3 fs-6">Stok: </span>
                                        </div>
                                        <form method="POST" name="sewa" onsubmit="return valid();">
                                            <fieldset disabled>
                                            <input type="hidden" class="form-control" name="idKendaraan"  value=""required>
                                            <input type="hidden" class="form-control" name="userName"  value=""required>
                                                <div class="mb-3">
                                                    <label for="tanggalSewa" class="form-label">Tanggal Sewa</label>
                                                    <input type="date" name="tanggalSewa" class="form-control" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="tanggalKembali" class="form-label">Tanggal Kembali</label>
                                                    <input type="date" name="tanggalKembali" class="form-control" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="durasi" class="form-label">Durasi</label>
                                                    <input type="text" name="durasi" class="form-control" value=" Hari">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="pickup">Metode Pickup</label>
                                                    <input type="text" class="form-control" name="pickup" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="biayaMobil">Biaya Mobil ( Hari)</label>
                                                    <input type="text" class="form-control" name="biayaMobil" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="total" class="form-label">Total Biaya</label>
                                                    <input type="text" name="total" class="form-control" value="">
                                                </div>
                                            </fieldset>
                                                <div class="d-flex">
                                                    <button type="submit" name="buatPesanan" class="btn btn-primary w-100">Buat Pesanan</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootsrap JS -->
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>