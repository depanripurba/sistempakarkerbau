<div class="container-fluid">
    <div class="card col-lg-6">
        <form method="POST" action="<?= base_url('admin/postupdateprofil') ?>" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_gejala">Profil</label>
                    <input type="file" name="gambar" id="username" >
                </div>
                <div class="form-group">
                    <label for="kode_gejala">Username</label>
                    <input type="text" name="username" value="<?=$admin['admin'][0]->username?>" id="username" class="form-control" placeholder="input username..">
                </div>
                <div class="form-group">
                    <label for="nama_gejala">Nama</label>
                    <input name="nama" type="text" value="<?=$admin['admin'][0]->nama?>" class="form-control" id="nama" placeholder="input nama..">
                </div>
                <input type="hidden" name="id" value="<?=$admin['admin'][0]->id?>">
                <input type="hidden" name="url" value="<?=$admin['admin'][0]->url?>">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('profil') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>

<!-- /.content-wrapper -->