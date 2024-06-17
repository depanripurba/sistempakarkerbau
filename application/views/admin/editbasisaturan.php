<div class="container-fluid">
    <div class="card col-lg-6">
        <form method="POST" action="<?= base_url('admin/postupdatebasis') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodegejala">Nama Penyakit</label>
                    <input class="form-control" type="text" disabled value="<?= $basis['kode_penyakit'] . " :" . $basis['nama_penyakit'] ?>">
                </div>
                <div class="form-group">
                    <label for="namagejala">Nama Gejala</label>
                    <input class="form-control" type="text" disabled value="<?= $basis['kode_gejala'] . " :" . $basis['nama_gejala'] ?>">
                    <input type="hidden" name="id" value="<?= $id ?>">
                </div>
                <div class="form-group">
                    <label for="nilaigejala">Nilai Gejala</label>
                    <input type="text" name="nilai" class="form-control" value="<?= $basis['nilai'] ?>" id="nilaigejala">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('basisaturan') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>