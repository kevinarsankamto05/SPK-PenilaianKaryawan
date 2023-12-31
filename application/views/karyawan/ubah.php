<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__zoomIn">Peserta Seleksi Manager</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="contentku container-fluid animate__animated animate__bounce animate__zoomIn">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Ubah Peserta Seleksi Manager</h4>
                        <?= form_open_multipart('karyawan/ubah/' . $karyawan->id_karyawan, 'class="form-horizontal form-material"') ?>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-6">
                        <h4>Data Peserta Seleksi Manager</h4>
                        <div class="form-group">
                            <label class="col-md-12">Periode Penilaian</label>
                            <div class="col-md-12">
                                <select name="id_periode" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;">
                                    <option value="">Pilih...</option>
                                    <?php foreach ($periode as $row) : ?>
                                        <option value="<?= $row->id_periode ?>" <?= set_select('id_periode', $row->id_periode, $karyawan->id_periode == $row->id_periode ? TRUE : FALSE) ?>><?= $row->periode_penilaian ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="text-danger"><?= form_error('id_periode') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input type="text" name="nik" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('nik', $karyawan->nik) ?>">
                                <div class="text-danger"><?= form_error('nik') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama Karyawan</label>
                            <div class="col-md-12">
                                <input type="text" name="nama_karyawan" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('nama_karyawan', $karyawan->nama_karyawan) ?>">
                                <div class="text-danger"><?= form_error('nama_karyawan') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jenis Kelamin</label>
                            <div class="col-md-12">
                                <select name="jenis_kelamin" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;">
                                    <option value="">Pilih...</option>
                                    <option value="Laki-laki" <?= set_select('jenis_kelamin', 'Laki-laki', $karyawan->jenis_kelamin == 'Laki-laki' ? TRUE : FALSE) ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= set_select('jenis_kelamin', 'Perempuan', $karyawan->jenis_kelamin == 'Perempuan' ? TRUE : FALSE) ?>>Perempuan</option>
                                </select>
                                <div class="text-danger"><?= form_error('jenis_kelamin') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Bidang Pekerjaan</label>
                            <div class="col-md-12">
                                <select name="id_bidang" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;">
                                    <option value="">Pilih...</option>
                                    <?php foreach ($bidang as $row) : ?>
                                        <option value="<?= $row->id_bidang ?>" <?= set_select('id_bidang', $row->id_bidang, $karyawan->id_bidang == $row->id_bidang ? TRUE : FALSE) ?>><?= $row->bidang_pekerjaan ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="text-danger"><?= form_error('id_bidang') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Syarat Menjadi Manager</label>
                            <div class="col-md-12">
                                <?php if (empty($karyawan->syarat)) : ?>
                                    <p>Tidak ada file</p>
                                <?php else : ?>
                                    <?= anchor('public/file/' . $karyawan->syarat, 'Download', 'target=_blank'); ?>
                                <?php endif; ?>
                                <input type="file" name="userfile" class="form-control" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;">
                                <small>Ukuran maksimal 2MB</small>
                                <small>*Kosongkan jika file tidak diubah</small>
                                <div class="text-danger"><?= form_error('userfile') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Pernah Menjadi Pemimpin Project</label>
                            <div class="col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pemimpin_project" id="pemimpin_project1" value="Ya" <?= set_radio('pemimpin_project', 'Ya', $karyawan->pemimpin_project == 'Ya' ? TRUE : FALSE) ?>>
                                    <label class="form-check-label" for="pemimpin_project1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pemimpin_project" id="pemimpin_project2" value="Tidak" <?= set_radio('pemimpin_project', 'Tidak', $karyawan->pemimpin_project == 'Tidak' ? TRUE : FALSE) ?>>
                                    <label class="form-check-label" for="pemimpin_project2">Tidak</label>
                                </div>
                                <div class="text-danger"><?= form_error('pemimpin_project') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Pendidikan Minimal S1</label>
                            <div class="col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="minimal_s1" id="minimal_s11" value="Ya" <?= set_radio('minimal_s1', 'Ya', $karyawan->minimal_s1 == 'Ya' ? TRUE : FALSE) ?>>
                                    <label class="form-check-label" for="minimal_s11">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="minimal_s1" id="minimal_s12" value="Tidak" <?= set_radio('minimal_s1', 'Tidak', $karyawan->minimal_s1 == 'Tidak' ? TRUE : FALSE) ?>>
                                    <label class="form-check-label" for="minimal_s12">Tidak</label>
                                </div>
                                <div class="text-danger"><?= form_error('minimal_s1') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Pendidikan Terakhir</label>
                            <div class="col-md-12">
                                <input type="text" name="pendidikan_terakhir" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('pendidikan_terakhir', $karyawan->pendidikan_terakhir) ?>">
                                <div class="text-danger"><?= form_error('pendidikan_terakhir') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>Kriteria Penilaian</h4>
                        <?php foreach ($kriteria as $row) : ?>
                            <div class="form-group">
                                <label class="col-md-12"><?= $row->nama_kriteria ?></label>
                                <div class="col-md-12">
                                    <input type="text" name="kriteria<?= $row->id_kriteria ?>" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" value="<?= set_value('kriteria' . $row->id_kriteria, $nilai[$row->id_kriteria]) ?>">
                                    <div class="text-danger"><?= form_error('kriteria' . $row->id_kriteria) ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="save" class="simpan btn">Simpan</button>
                                <?= anchor('karyawan', 'Kembali', 'class="kembali btn"') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->load->view('template/copyright', '', TRUE) ?>
    </div>
</div>
<?= $this->load->view('template/js', '', TRUE) ?>
<?= $this->load->view('template/footer', '', TRUE) ?>