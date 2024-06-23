<div class="container-fluid">
    <div class="card col-lg-6">
        <form method="POST" action="<?= base_url('admin/postchangepass') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_gejala">New Password</label>
                    <input class="form-control" type="text" name="password" id="username" >
                </div>
               
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Change password</button>
                <a href="<?= base_url('profil') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>

<!-- /.content-wrapper -->