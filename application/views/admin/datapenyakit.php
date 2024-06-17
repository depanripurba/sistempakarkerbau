<!-- Begin Page Content -->
<div class="container-fluid bg-red">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/tambahdatapenyakit') ?>" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <ul style="padding: 0 10px;line-height:0.7">
                                        <?php
                                        $solusi = $data->solusi;
                                        $solusiArr = explode("-", $solusi);

                                        for ($i = 1; $i < count($solusiArr); $i++) {
                                            echo "<li>" . $solusiArr[$i] . "</li></br>";
                                        }
                                        ?>
                                    </ul>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirm('Yakin Ingin Menghapus Data ini?')" href="<?= site_url('Master/hapuspenyakit/')?>">Delete</a> <a href="<?= base_url('editpenyakit/' . $data->kode_penyakit) ?>" class="btn btn-primary">Edit</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->