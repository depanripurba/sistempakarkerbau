<!-- Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
    <div class="card-header">
            <a href="<?=base_url('tambahbasisaturan')?>" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Penyakit</th>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Nilai Probabilitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($basis as $bas) : ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $bas->nama_penyakit ?></td>
                            <td><?= $bas->kode_gejala ?></td>
                            <td><?= $bas->nama_gejala ?></td>
                            <td><?= $bas->nilai ?></td>
                            <td style="width: 200px;"><button data-url="<?= base_url('deletebasis/' . $bas->id) ?>" id="hapusdata" class="btn btn-danger">Hapus</button> <a href="<?=base_url('editbasisaturan/'.$bas->id)?>" class="btn btn-primary">Edit</a></td>
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