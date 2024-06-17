<div class="container-fluid">
    <div class="card col-lg-6">
        <!-- form start -->
        <form method="POST" action="<?= base_url("admin/updatepenyakit") ?>">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_penyakit">Kode Penyakit</label>
                    <input disabled value="<?=$dataedit[0]->kode_penyakit ?>" name="kode_penyakit" name="kode_penyakit" type="text" class="form-control" id="kodepenyakit" placeholder="Kode Penyakit">
                    <input type="hidden" name="kode_penyakit" value="<?=$dataedit[0]->kode_penyakit ?>">
                </div>
                <div class="form-group">
                    <label for="namagejala">Nama Penyakit</label>
                    <input value="<?=$dataedit[0]->nama_penyakit ?>" name="nama_penyakit" type="text" class="form-control" id="namapenyakit" placeholder="Nama Penyakit...">
                </div>
                <div class="form-group">
                    <label for="solusi">Solusi</label>
                    <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"><?=$dataedit[0]->solusi ?></textarea>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="<?= base_url("datapenyakit") ?>" class="btn btn-secondary">Batal/Kembali</a>
            </div>
        </form>
    </div>
</div>


<!-- /.content-wrapper -->