<!-- Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('cetakriwayat') ?>" target="_blank" class="btn btn-primary">Cetak</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>Nama Penyakit</th>
                            <th>Nilai Probabilitas</th>
                            <th>Tanggal Konsultasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($riwayat as $item) : ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $item->nama ?></td>
                                <td><?= $item->no_hp ?></td>
                                <td><?= $item->alamat ?></td>
                                <td><?= $item->nama_penyakit ?></td>
                                <td><?= $item->hasil_konsultasi ?></td>
                                <td><?= $item->tanggal_konsultasi ?></td>
                                <td style="width: 100px;"><button data-url="<?= base_url('admin/deleteriwayat/' . $item->id) ?>" id="hapusdata" class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php $nomor++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->