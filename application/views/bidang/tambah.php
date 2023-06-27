<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__zoomIn">Daftar Bidang Pekerjaan</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="container-fluid animate__animated animate__bounce animate__zoomIn">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Tambah Bidang Pekerjaan</h4>
                        <?= form_open('bidang/tambah', 'class="form-horizontal form-material"') ?>
                    </div>
                </div><br>
                <?= $this->session->flashdata('success') ?>
                <div class="formku container-fluid">
                    <div class="row ms-10">
                        <label class="col-md-12 text-black fs-5">Bidang Pekerjaan</label>
                        <div class="form-data col-10">
                            <input type="text" name="bidang_pekerjaan" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('bidang_pekerjaan') ?>">
                            <div class="text-danger"><?= form_error('bidang_pekerjaan') ?></div>
                        </div>
                    </div>
                    <div class="tombol">
                        <div class="col-sm-12">
                            <button type="submit" name="save" class="simpan btn">Simpan</button>
                            <?= anchor('bidang', 'Kembali', 'class="kembali btn"') ?>
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