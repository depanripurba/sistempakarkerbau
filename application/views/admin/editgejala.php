<div class="container-fluid">
    <div class="card col-lg-6">
        <form method="POST" action="<?= base_url('admin/postupdategejala') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_gejala">Kode Gejala</label>
                    <input disabled value="<?=$selected['kode_gejala']?>" type="text" name="kode_gejala" id="kode_gejala" class="form-control" placeholder="input kode gejala..">
                    <input type="hidden" name="kode_gejala" value="<?=$selected['kode_gejala']?>">
                </div>
                <div class="form-group">
                    <label for="nama_gejala">Nama Gejala</label>
                    <input value="<?=$selected['nama_gejala']?>" name="nama_gejala" type="text" class="form-control" id="nama_gejala" placeholder="Input nama gejala..">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Gejala</button>
                <a href="<?= base_url('datagejala') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>

<!-- /.content-wrapper -->