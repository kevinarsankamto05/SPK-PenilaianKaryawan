<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>


<div class="bground container-fluid">
  <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
    <h1 class="judul container animate__animated animate__bounce animate__fadeInBottomRight">Kriteria</h1>
    <div class="dalam animate__animated animate__bounce animate__backInUp">
      <div class="container-fluid animate__animated animate__bounce animate__fadeInBottomRight">
        <div class="row">
          <div class="judul-dalam col-12">
            <h4 class="card-title" style="margin-top: 0.5rem;">Tambah Kriteria</h4>
            <?= form_open('kriteria/tambah', 'class="form-horizontal form-material"') ?>
          </div>
        </div><br>
        <div class="formku container-fluid">
          <div class="row ms-10">
            <label class="col-md-12 text-black fs-5">Kode Kriteria</label>
            <div class="form-data col-10">
              <input type="text" name="kode_kriteria" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('kode_kriteria') ?>">
              <div class="text-danger"><?= form_error('kode_kriteria') ?></div>
            </div>
          </div>
          <div class="row">
            <label class="col-md-12 text-black fs-5">Kode Kriteria</label>
            <div class="form-data col-10">
              <input type="text" name="nama_kriteria" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('nama_kriteria') ?>">
              <div class="text-danger"><?= form_error('nama_kriteria') ?></div>
            </div>
          </div>
          <div class="tombol">
            <div class="col-sm-12">
              <button type="submit" name="save" class="simpan btn">Simpan</button>
              <?= anchor('kriteria', 'Kembali', 'class="kembali btn"') ?>
            </div>
          </div>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
    <?= $this->load->view('template/copyright', '', TRUE) ?>
  </div>
</div>

<?= $this->load->view('template/js', '', TRUE) ?>
<?= $this->load->view('template/footer', '', TRUE) ?>