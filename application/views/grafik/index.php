<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__fadeInBottomRight">Grafik Penilaian</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="contentku container-fluid animate__animated animate__bounce animate__fadeInBottomRight">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Grafik Hasil Penilaian</h4>
                        <hr>
                        <?php if (empty($id_periode)) : ?>
                            <?= form_open('grafik', 'method=get') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-md-12 text-black fs-5">Periode Penilaian</label>
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
            </div>
            <?= form_close() ?>
            <div class="row">
            <?php else : ?>
                <div class="grafik" style="height: 40rem; width:150rem;"></div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->load->view('template/copyright', '', TRUE) ?>

<style>
    .ct-series-a .ct-bar {
        stroke: purple;
    }
</style>
<?= $this->load->view('template/js', '', TRUE) ?>
<script>
    new Chartist.Bar('.grafik', {
        labels: [
            <?php foreach ($hasil as $row) : ?>
                <?= "'" . str_replace("'", "", $row->nama_karyawan) . "'" ?>,
            <?php endforeach; ?>
        ],
        series: [
            [
                <?php foreach ($hasil as $row) : ?>
                    <?= $row->nilai_hasil ?>,
                <?php endforeach; ?>
            ]
        ]
    }, {
        seriesBarDistance: 10,
        reverseData: true,
        horizontalBars: true,
        axisY: {
            offset: 70
        }
    });
</script>
<?= $this->load->view('template/footer', '', TRUE) ?>