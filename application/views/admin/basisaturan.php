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
                            <th>Kode Penyakit</th>
                            <th>Nama Penyakit</th>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Nilai Probabilitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($basis as $bas) : ?>
                        <tr>
                            <td><?= $bas->kode_penyakit ?></td>
                            <td><?= $bas->nama_penyakit ?></td>
                            <td><?= $bas->kode_gejala ?></td>
                            <td><?= $bas->nama_gejala ?></td>
                            <td><?= $bas->nilai ?></td>
                            <td><button data-url="<?= base_url('deletebasis/' . $bas->id) ?>" id="hapusdata" class="btn btn-danger">Hapus</button> <a href="<?=base_url('editbasisaturan/'.$bas->id)?>" class="btn btn-primary">Edit</a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->