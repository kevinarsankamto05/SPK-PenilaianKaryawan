<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__zoomIn">Peserta Seleksi Manager</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="contentku container-fluid animate__animated animate__bounce animate__zoomIn">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title text-black" style="margin-top: 0.5rem;">Detail Peserta Seleksi Manager</h4>
                        <div class="card-subtitle">
                            <?= anchor('karyawan', 'Kembali', 'class="kembali btn"') ?>
                        </div>
                        <h4 class="text-black">Data Peserta Seleksi Manager</h4>
                        <div class="table-responsive">
                            <table class="container-fluid col-12">
                                <tr>
                                    <td class="tb-data" width="30%">Periode Penilaian</td>
                                    <td class="tb-data-dalam"><?= $karyawan->periode_penilaian ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">NIK</td>
                                    <td class="tb-data-dalam"><?= $karyawan->nik ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Nama</td>
                                    <td class="tb-data-dalam"><?= $karyawan->nama_karyawan ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Jenis Kelamin</td>
                                    <td class="tb-data-dalam"><?= $karyawan->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Bidang Pekerjaan</td>
                                    <td class="tb-data-dalam"><?= $karyawan->bidang_pekerjaan ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Syarat Menjadi Manager</td>
                                    <td class="tb-data-dalam"><?= empty($karyawan->syarat) ? '' : anchor('public/file/' . $karyawan->syarat, 'Download', 'target=_blank') ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Pernah Menjadi Pemimpin Project</td>
                                    <td class="tb-data-dalam"><?= $karyawan->pemimpin_project ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Pendidikan Minimal S1</td>
                                    <td class="tb-data-dalam"><?= $karyawan->minimal_s1 ?></td>
                                </tr>
                                <tr>
                                    <td class="tb-data" width="30%">Pendidikan Terakhir</td>
                                    <td class="tb-data-dalam"><?= $karyawan->pendidikan_terakhir ?></td>
                                </tr>
                            </table>
                        </div>
                        <h4 class="text-black">Kriteria Penilaian</h4>
                        <div class="table-responsive">
                            <table class="container-fluid col-12">
                                <?php foreach ($kriteria as $row) : ?>
                                    <tr>
                                        <td class="tb-data" width="30%"><?= $row->nama_kriteria ?></td>
                                        <td class="tb-data-dalam"><?= $nilai[$row->id_kriteria] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
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