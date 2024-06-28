Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
        <div class="card-header">
            <a href="<?=base_url('admin/tambahdatagejala')?>" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Gejala</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($gejala as $item): ?>
                        <tr>
                        <td><?=$item['kode_gejala']?></td>
                        <td><?=$item['nama_gejala']?></td>
                        <td style="width: 100px;">
                            <!-- <button data-url="<?= base_url('deletegejala/' . $item['kode_gejala']) ?>" id="hapusdata" class="btn btn-danger">Delete</button>  -->
                            <a href="<?=base_url('editdatagejala/'.$item['kode_gejala'])?>" class="btn btn-primary">Edit</a></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid