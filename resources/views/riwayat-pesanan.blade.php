<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pesanan</title>
  <!-- Bootsrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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
      <!-- Sidebar Mobile -->
      <nav class="navbar navbar-dark bg-dark d-md-none" style="background-color: #1f2a44 !important;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="../index.php">
            <img src="../asset/easyride.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            Easyride
          </a>
        </div>
      </nav>

      <!-- Sidebar offcanvas -->
      <div class="offcanvas offcanvas-start text-bg-dark" style="background-color: #1f2a44 !important;" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menu Profil</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="text-center mt-4">
            <p class="fw-bold mt-4"></p>
          </div>
          <nav class="nav flex-column text-center mt-4">
            <a href="index.php?user_name=" class="nav-link text-white">Profil</a>
            <a href="riwayat.php?user_name=" class="nav-link active text-white">Riwayat Pesanan</a>
            <a href="pengaturan.php?user_name=" class="nav-link text-white">Pengaturan</a>
            <a href="../logout.php" class="nav-link text-white mt-5">Ganti Akun</a>
          </nav>
        </div>
      </div>

      <!-- Sidebar untuk desktop -->
      <nav class="col-md-3 col-lg-2 d-none d-md-block text-white sidebar py-3" id="sidebar">
        <div class="d-flex align-items-center mt-3">
          <a class="navbar-brand" href="../index.php"><i class="fa-solid fa-house"></i></a>
            <h4>Easyride</h4>
        </div>
        <div class="text-center mt-4">
          <p class="fw-bold mt-4">@</p>
        </div>
        <nav class="nav flex-column mt-4">
          <a href="index.php?user_name=" class="nav-link text-white">Profil</a>
          <a href="riwayat.php?user_name=" class="nav-link active text-white">Riwayat Pesanan</a>
          <a href="pengaturan.php?user_name=" class="nav-link text-white">Pengaturan</a>
          <a href="../logout.php" class="nav-link text-white mt-5">Ganti Akun</a>
        </nav>
      </nav>

    <!-- Main Content -->
    <main class="col-md-12 col-lg-10 px-md-5 py-4">
        <h3 class="mb-4 fw-bold">Riwayat Pesanan</h3>
        <div class="card p-4">
          <h5 class="mb-3">Seluruh Pesanan</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center"> 
              <thead> 
                  <tr> 
                      <th scope="col">KODE PESANAN</th> 
                      <th scope="col">NAMA KENDARAAN</th> 
                      <th scope="col">TGL. MULAI</th> 
                      <th scope="col">TGL. SELESAI</th> 
                      <th scope="col">DURASI</th> 
                      <th scope="col">BIAYA KENDARAAAN</th> 
                      <th scope="col">TOTAL BIAYA</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">AKSI</th> 
                  </tr> 
              </thead> 
              <tbody>         
              <tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>     
                        <td></td> 
                        <td></td> 
                        <td></td> 
                        <td></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="11" align="center">Belum ada riwayat sewa.</td>
                    </tr>
            </tbody> 
            </table>
          </div>
        </div> 
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
