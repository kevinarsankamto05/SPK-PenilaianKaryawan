<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__zoomIn">Nilai</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="container-fluid animate__animated animate__bounce animate__zoomIn">
                <div class="row">
                    <div class="judul-dalam col-10">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Ubah Nilai</h4>
                        <?= form_open('nilai/ubah/' . $nilai->id_nilai, 'class="form-horizontal form-material"') ?>
                    </div>
                </div>
                <div class="formku container-fluid">
                    <div class="row ms-10">
                        <label class="col-md-10 text-black fs-5">Rentang Nilai</label>
                        <div class="form-data col-9">
                            <div class="input-group col-8">
                                <input type="text" name="batas_1" placeholder="Nilai batas 1" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('batas_1', $nilai->batas_1) ?>">
                                <input type="text" name="batas_2" placeholder="Nilai batas 2" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('batas_2', $nilai->batas_2) ?>">
                            </div>
                            <div class="text-danger"><?= form_error('batas_1') ?></div>
                            <div class="text-danger"><?= form_error('batas_2') ?></div>
                        </div>
                    </div> <br>
                    <div class="row">
                        <label class="col-md-10 text-black fs-5">Nama</label>
                        <div class="form-data col-10">
                            <input type="text" name="nama" class="form-control" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('nama', $nilai->nama) ?>">
                            <div class="text-danger"><?= form_error('nama') ?></div>
                        </div>
                    </div>
                    <div class="tombol">
                        <div class="col-sm-8">
                            <button type="submit" name="save" class="simpan btn">Simpan</button>
                            <?= anchor('nilai', 'Kembali', 'class="kembali btn"') ?>
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