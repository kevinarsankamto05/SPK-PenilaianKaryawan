<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__fadeInBottomRight">Peserta Seleksi Manager</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="contentku container-fluid animate__animated animate__bounce animate__fadeInBottomRight">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Data Hasil Penilaian</h4>
                        <?php if (empty($id_periode)) : ?>
                            <?= form_open('hasil', 'method=get') ?>
                    </div>
                    <div class=" row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="col-md-12">Periode Penilaian</label>
                                <div class="col-md-12">
                                    <select name="id_periode" class="form-control form-control-line" style="background: transparent; border-color: transparent; border-bottom: 1px solid black; border-radius: 0px;" required>
                                        <option value="">Pilih...</option>
                                        <?php foreach ($periode as $row) : ?>
                                            <option value="<?= $row->id_periode ?>" <?= set_select('id_periode', $row->id_periode) ?>><?= $row->periode_penilaian ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="proses" class="tambah btn" value="1">Proses</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                <?php else : ?>
                    <section class="col-12">
                        <div class="table-responsive">
                            <h4>Data Karyawan</h4>
                            <table class="container-fluid col-12">
                                <thead>
                                    <tr>
                                        <th class="tb text-center">No</th>
                                        <th class="tb text-center">Nama</th>
                                        <?php foreach ($kriteria as $row) : ?>
                                            <th class="tb text-center"><?= $row->nama_kriteria ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($karyawan as $row_karyawan) : ?>
                                        <tr>
                                            <td class="tb-dalam text-center"><?= ++$no ?></td>
                                            <td class="tb-dalam"><?= $row_karyawan->nama_karyawan ?></td>
                                            <?php foreach ($kriteria as $row_kriteria) : ?>
                                                <td class="tb-dalam text-center"><?= $nilai[$row_karyawan->id_karyawan][$row_kriteria->id_kriteria] ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <hr>

                        <div class="table-responsive">
                            <table class="container-fluid col-12">
                                <thead>
                                    <tr>
                                        <th class="tb text-center">No</th>
                                        <th class="tb text-center">Nama</th>
                                        <?php foreach ($kriteria as $row) : ?>
                                            <th class="tb text-center"><?= $row->nama_kriteria ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($karyawan as $row_karyawan) : ?>
                                        <tr>
                                            <td class="tb-dalam text-center"><?= ++$no ?></td>
                                            <td class="tb-dalam"><?= $row_karyawan->nama_karyawan ?></td>
                                            <?php foreach ($kriteria as $row_kriteria) : ?>
                                                <td class="tb-dalam text-center"><?= $nilai_ahp[$row_karyawan->id_karyawan][$row_kriteria->id_kriteria] ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Data Kriteria</h4>
                                <div class="table-responsive">
                                    <table class="container-fluid col-12">
                                        <thead>
                                            <tr>
                                                <th class="tb text-center">No</th>
                                                <th class="tb text-center">Kode</th>
                                                <th class="tb text-center">Kriteria</th>
                                                <th class="tb text-center">Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($kriteria as $row) : ?>
                                                <tr>
                                                    <td class="tb-dalam text-center"><?= ++$no ?></td>
                                                    <td class="tb-dalam"><?= $row->kode_kriteria ?></td>
                                                    <td class="tb-dalam"><?= $row->nama_kriteria ?></td>
                                                    <td class="tb-dalam text-center"><?= $row->prioritas ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Data Nilai (Subkriteria)</h4>
                                <div class="table-responsive">
                                    <table class="container-fluid col-12">
                                        <thead>
                                            <tr>
                                                <th class="tb text-center">No</th>
                                                <th class="tb text-center">Rentang Nilai</th>
                                                <th class="tb text-center">Nama</th>
                                                <th class="tb text-center">Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_nilai as $row) : ?>
                                                <tr>
                                                    <td class="tb-dalam text-center"><?= ++$no ?></td>
                                                    <td class="tb-dalam text-center"><?= $row->batas_1 . ' - ' . $row->batas_2 ?></td>
                                                    <td class="tb-dalam"><?= $row->nama ?></td>
                                                    <td class="tb-dalam text-center"><?= $row->prioritas ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="table-responsive">
                            <h4>Hasil Prioritas</h4>
                            <table class="container-fluid col-12">
                                <thead>
                                    <tr>
                                        <th class="tb text-center">No</th>
                                        <th class="tb text-center">Nama</th>
                                        <?php foreach ($kriteria as $row) : ?>
                                            <th class="tb text-center"><?= $row->kode_kriteria ?></th>
                                        <?php endforeach; ?>
                                        <th class="tb text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($karyawan as $row_karyawan) :
                                        $total = 0;
                                    ?>
                                        <tr>
                                            <td class="tb-dalam text-center"><?= ++$no ?></td>
                                            <td class="tb-dalam"><?= $row_karyawan->nama_karyawan ?></td>
                                            <?php foreach ($kriteria as $row_kriteria) :
                                                $total += $nilai_prioritas[$row_karyawan->id_karyawan][$row_kriteria->id_kriteria];
                                            ?>
                                                <td class="tb-dalam text-center"><?= $nilai_prioritas[$row_karyawan->id_karyawan][$row_kriteria->id_kriteria] ?></td>
                                            <?php endforeach; ?>
                                            <td class="tb-dalam text-center font-weight-bold"><?= $total ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <hr>
                        <div class="table-responsive">
                            <h4>Hasil Rekomendasi</h4>
                            <?= anchor('hasil/cetak/' . $id_periode, 'Cetak PDF', 'class="btn btn-info" target="_blank"') ?>
                            <table class="container-fluid col-12 mt-2">
                                <thead>
                                    <tr>
                                        <th class="tb text-center">No</th>
                                        <th class="tb text-center">NIK</th>
                                        <th class="tb text-center">Nama</th>
                                        <th class="tb text-center">Nilai AHP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($hasil as $row) :
                                    ?>
                                        <tr>
                                            <td class="tb-dalam text-center"><?= ++$no ?></td>
                                            <td class="tb-dalam text-center"><?= $row['nik'] ?></td>
                                            <td class="tb-dalam"><?= $row['nama_karyawan'] ?></td>
                                            <td class="tb-dalam text-center font-weight-bold"><?= $row['nilai_hasil'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <h4>Kesimpulan</h4>
                        <p>Berdasarkan hasil penilaian, maka peserta seleksi dengan NIK <strong><?= $hasil[0]['nik'] ?></strong> dan nama <strong><?= $hasil[0]['nama_karyawan'] ?></strong> direkomendasikan sebagai kandidat yang terpilih.</p>
                    <?php endif; ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?= $this->load->view('template/copyright', '', TRUE) ?>
</div>

<?= $this->load->view('template/js', '', TRUE) ?>
<?= $this->load->view('template/footer', '', TRUE) ?>