<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      background-color: #f5f5f5;
      font-family: "Poppins", sans-serif;
    }
    #sidebar {
      background-color: #1f2a44 !important;
      height: 100vh;
      color: #fff;
    }
    .sidebar a {
      color: #c4c9d7;
      text-decoration: none;
      padding: 10px 15px;
      text-align: center;
      display: block;
    }
    .sidebar a:hover {
      background-color: #394764;
      color: #fff;
    }
    .sidebar .active {
      background-color: #2a3a5c;
    }
    .card {
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
    }

    .profile-picture {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
    }

  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Navbar Mobile -->
      <nav class="navbar navbar-dark bg-dark d-md-none" style="background-color: #1f2a44 !important;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="../index.php">
            <img src="../asset/easyride.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            easyride
          </a>
        </div>
      </nav>

      <!-- Sidebar offcanvas -->
      <div class="offcanvas offcanvas-start text-bg-dark" style="background-color: #1f2a44 !important;" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasSidebarLabel"><a href="../index.php" class="navbar-brand"><i class="fa-solid fa-house me-2"></i></a> Menu Profil</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="text-center mt-4">
          <img src="../dashboard/uploads/profil/" class="profile-picture img-fluid mb-2" alt="Profile Picture" />
            <p class="fw-bold mt-4">@</p>
          </div>
          <nav class="nav flex-column text-center mt-4">
            <a href="index.php?user_name=" class="nav-link active text-white">Profil</a>
            <a href="riwayat.php?user_name=" class="nav-link text-white">Riwayat Pesanan</a>
            <a href="pengaturan.php?user_name=" class="nav-link text-white">Pengaturan</a>
            <a href="../logout.php" class="nav-link text-white mt-5">Ganti Akun</a>
          </nav>
        </div>
      </div>

      <!-- Sidebar untuk desktop -->
      <nav class="col-md-3 col-lg-2 d-none d-md-block bg-dark text-white sidebar py-3" id="sidebar">
        <div class="d-flex align-items-center mt-3">
          <a class="navbar-brand" href="../index.php"><i class="fa-solid fa-house "></i></a>
            <img src="../asset/easyride.png" alt="Logo" width="50" class="d-inline-block align-text-center" />
            <h4>Easyride</h4>
        </div>
        <div class="text-center mt-4">
        <img src="../dashboard/uploads/profil/" class="profile-picture img-fluid mb-2" alt="Profile Picture" />
          <p class="fw-bold mt-4">@</p>
        </div>
        <nav class="nav flex-column mt-4">
          <a href="index.php?user_name=" class="nav-link active text-white">Profil</a>
          <a href="riwayat.php?user_name=" class="nav-link text-white">Riwayat Pesanan</a>
          <a href="pengaturan.php?user_name=" class="nav-link text-white">Pengaturan</a>
          <a href="../logout.php" class="nav-link text-white mt-5">Ganti Akun</a>
        </nav>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 px-md-5 py-4">
        <h3 class="mb-4 fw-bold">Profil Saya</h3>
        <div class="card p-4">
          <h5 class="mb-3">Ubah Biodata</h5>
          <form method="POST" enctype="multipart/form-data" class="fw-bold">
            <div class="text-center mb-3">
              <img src="../dashboard/uploads/profil/" class= "profile-picture img-fluid mb-2" alt="Profile Picture" />
              <br>
              <input type="file" name="foto" class="btn btn-primary mt-2 w-25">
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label">Nama Lengkap</label>
                <input type="text" id="firstName" name="namaLengkap" class="form-control" value="" required>
              </div>
              <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat Tinggal</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3" required></textarea>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Nomor HP</label>
                <input type="text" id="phone" name="noTelepon" class="form-control" value="" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="" required>
              </div>
              <div class="col-md-6">
                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" id="tglLahir" name="tglLahir" class="form-control" value="" required>
              </div>
              <div class="col-md-6">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select id="gender" name="gender" class="form-select">
                  <option value="laki-laki" >Laki-laki</option>
                  <option value="perempuan" >Perempuan</option>
                </select>
              </div>
            </div>
            <div class="mt-4 text-center">
              <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
