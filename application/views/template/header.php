<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="<?= base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/plugins/chartist-js/dist/chartist.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/plugins/chartist-js/dist/chartist-init.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/plugins/c3-master/c3.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/css/colors/blue.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
  <div class="row">
    <div class="orange container-fluid col-3"></div>
    <div class="ungu container-fluid col-3 offset-9 position-absolute bottom-0 end-0"></div>
    <div class="merah container-fluid col-3 offset-6"></div>
  </div>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand fst-italic fs-1 col-1" href="#">CALM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav nav-underline mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation ">
            <a href="<?= site_url('home') ?>">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                Home
              </button>
            </a>
          </li>

          <?php if ($this->session->userdata('role') == 'Admin') : ?>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('kriteria') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Kriteria
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('nilai') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Nilai
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('bidang') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Bidang
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('periode') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Periode
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('karyawan') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Karyawan
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('hasil') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Hasil
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('grafik') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Grafik
                </button>
              </a>
            </li>
            <li class="user nav-item col" role="presentation ">
              <a href="<?= site_url('pengguna') ?>">
                <button class="user-border" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  <i class="nm-user bx bxs-user">Users</i>
                </button>
              </a>
            </li>

          <?php elseif ($this->session->userdata('role') == 'Pimpinan') : ?>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('hasil') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Hasil
                </button>
              </a>
            </li>
            <li class="nav-item" role="presentation ">
              <a href="<?= site_url('grafik') ?>">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  Grafik
                </button>
              </a>
            </li>
            <li class="user nav-item col" role="presentation ">
              <a href="<?= site_url('login/logout') ?>">
                <button class="user-border" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  <i class="nm-user bx bxs-user">Users</i>
                </button>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>