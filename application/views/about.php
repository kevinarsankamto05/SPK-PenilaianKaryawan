<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link href="<?= base_url() . 'public/css/style.css' ?>" rel="stylesheet">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="row">
    <div class="orange container-fluid col-3"></div>
    <div class="ungu container-fluid col-3 offset-9 position-absolute bottom-0 end-0"></div>
    <div class="merah container-fluid col-3 offset-6"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="about col-4 offset-1">
        <p class="animate__animated animate__bounce animate__heartBeat">About Us</p>
      </div>
      <div class="deskripsi col-5 offset-1 animate__animated animate__bounce animate__flipInX">
        <p>
          Calm adalah perusahaan yang bergerak dibidang jasa pembuatan
          Website.
        </p>
        <b>Aplikasi Sistem Pendukung Keputusan Pemilihan Calon Manager Di
          Perusahaan Calm.</b>
        <br /><br />
        <div class="about-btn">
          <a class="btn animate__animated animate__bounce animate__bounceInDown" href="<?= site_url('login') ?>" role="button">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="about-img container">
    <img class="col-6 offset-5 animate__animated animate__bounce animate__fadeInDown" src="<?php echo base_url() . 'public/assets/images/about.png' ?>" alt="" />
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>