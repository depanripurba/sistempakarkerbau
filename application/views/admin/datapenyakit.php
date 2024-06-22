<!-- Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/tambahdatapenyakit') ?>" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Penyakit</th>
                            <th>Solusi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penyakit['penyakit'] as $data) : ?>
                            <tr>
                                <td><?= $data->kode_penyakit ?></td>
                                <td><?= $data->nama_penyakit ?></td>
                                <td>
                                    <ul style="padding: 0 10px;line-height:1.6">
                                        <?php
                                        $solusi = $data->solusi;
                                        $solusiArr = explode("-", $solusi);

                                        for ($i = 1; $i < count($solusiArr); $i++) {
                                            echo "<li>" . $solusiArr[$i] . "</li>";
                                        }
                                        ?>
                                    </ul>
                                </td>
                                <td style="width: 200px;">
                                    <button data-url="<?= base_url('deletepenyakit/' . $data->kode_penyakit) ?>" id="hapusdata" class="btn btn-danger">Delete</button> <a href="<?= base_url('editpenyakit/' . $data->kode_penyakit) ?>" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->