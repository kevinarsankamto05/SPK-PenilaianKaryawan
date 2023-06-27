<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
  <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
    <h1 class="judul container animate__animated animate__bounce animate__bounceInUp">Home</h1>
    <div class="offset-1 col-5 position-absolute top-50 start-0 translate-middle-y">
      <strong class="fs-2 animate__animated animate__bounce animate__bounceInUp">Selamat Datang</strong><br>
      <i class="home-content fs-4 animate__animated animate__bounce animate__bounceInUp">Aplikasi Pemilihan Calon Manager Di PT CALM</i><br>
      <p class="home-deskripsi animate__animated animate__bounce animate__bounceInUp">Calm, merupakan suatu perusahaan di Kota Yogyakarta yang bergerak dibidang <span>Jasa Pembuatan Aplikasi & Design UI/UX.</span><br>
        Semangat bekerja untuk para karyawan di <span>PT CALM </span>& Selamat berlomba-lomba dalam bekerja agar menjadi yang terbaik.</p>
    </div>
    <div class="imgku col-5 offset-6">
      <img class="col-12 animate__animated animate__bounce animate__fadeInBottomRight" src="<?php echo base_url() . 'public/assets/images/l-logo.png' ?>" height="70%" alt="">
    </div>
    <?= $this->load->view('template/copyright', '', TRUE) ?>
  </div>
</div>

<?= $this->load->view('template/js', '', TRUE) ?>
<?= $this->load->view('template/footer', '', TRUE) ?>