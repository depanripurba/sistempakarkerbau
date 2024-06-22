<!-- Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/tambahdatagejala') ?>" class="btn btn-primary">Tambah</a>
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
                                <td style="width: 200px;"><button data-url="<?= base_url('deletegejala/' . $item->id) ?>" id="hapusdata" class="btn btn-danger">Delete</button> <a href="<?= base_url('editdatagejala/' . $item->id) ?>" class="btn btn-primary">Edit</a></td>
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