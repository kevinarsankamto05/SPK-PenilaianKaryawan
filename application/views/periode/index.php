<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class="bground container-fluid">
    <div class="luar col-11 animate__animated animate__bounce animate__backInDown">
        <h1 class="judul container animate__animated animate__bounce animate__fadeInBottomRight">Periode Penilaian</h1>
        <div class="dalam animate__animated animate__bounce animate__backInUp">
            <div class="contentku container-fluid animate__animated animate__bounce animate__fadeInBottomRight">
                <div class="row">
                    <div class="judul-dalam col-12">
                        <h4 class="card-title" style="margin-top: 0.5rem;">Data Periode Penilaian</h4>
                        <div class="card-subtitle" style="margin-top: 0.5rem;">
                            <?= anchor('periode/tambah', 'Tambah Data', 'class="tambah btn"') ?>
                        </div>
                        <div class="table-responsive col-12">
                            <table class="container-fluid col-12" id="dataTables1">
                                <thead>
                                    <tr>
                                        <th class="tb">No</th>
                                        <th class="tb">Periode Penilaian</th>
                                        <th class="tb" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($periode as $row) : ?>
                                        <tr>
                                            <td class="tb-dalam"></td>
                                            <td class="tb-dalam"><?= $row->periode_penilaian ?></td>
                                            <td class="tb-dalam">
                                                <a href="<?= site_url('periode/ubah/' . $row->id_periode) ?>" class="ubah btn" title="Ubah">Ubah</a>
                                                <a href="#" data-href="<?php echo site_url('periode/hapus/' . $row->id_periode); ?>" data-toggle="modal" data-target="#confirm-delete" class="hapus btn" title="Hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
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
<script src="<?= base_url('public/assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        var t = $('#dataTables1').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "responsive": true,
            "bLengthChange": true,
            "bInfo": true,
            "oLanguage": {
                "sSearch": "<i class='fa fa-search fa-fw'></i> Cari : ",
                "sLengthMenu": "_MENU_ &nbsp;&nbsp;data per halaman",
                "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
                "sInfoEmpty": "",
                "sInfoFiltered": "(difilter dari _MAX_ total data)",
                "sZeroRecords": "Pencarian tidak ditemukan",
                "sEmptyTable": "Tidak ada data"
            }
        });

        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Anda yakin akan menghapus data ini ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a class="hapus btn btn-ok">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?= $this->load->view('template/footer', '', TRUE) ?>