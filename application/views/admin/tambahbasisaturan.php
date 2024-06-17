<div class="container-fluid">
    <div class="card col-lg-6">
        <form method="POST" action="<?= base_url('admin/posttambahbasis') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodegejala">Nama Penyakit</label>
                    <select class="form-control" name="kode_penyakit" id="kodegejala">
                        <?php foreach ($penyakit as $pen) : ?>
                            <option value="<?= $pen->kode_penyakit ?>"><?= $pen->kode_penyakit ?> : <?= $pen->nama_penyakit ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namagejala">Nama Gejala</label>
                    <select class="form-control" name="kode_gejala" id="namagejala">
                        <?php foreach ($gejala as $gej) : ?>
                            <option value="<?= $gej->kode_gejala ?>">
                                <?= $gej->kode_gejala ?> : <?= $gej->nama_gejala ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilaigejala">Nilai Gejala</label>
                    <input type="text" name="nilai" class="form-control" id="nilaigejala">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="<?= base_url('basisaturan') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>