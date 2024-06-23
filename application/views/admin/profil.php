<div class="container">
    <div class="card col-lg-6 mb-3">
        <div class="card-header">
            <h5><?=$admin['admin'][0]->nama?></h5>

        </div>
        <div class="d-flex flex-row align-items-center">
            <div>
                <img class="rounded m-2" width="100px" src="<?=base_url('assets/img/profile.jpg')?>" alt="">
                <!-- <?php var_dump($admin['admin'][0]->username) ?> -->
            </div>
            <div class="mb-2">
                <table class="mb-3">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$admin['admin'][0]->nama?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$admin['admin'][0]->username?></td>
                    </tr>
                </table>
                <a class="btn btn-primary" href="<?=base_url('tes')?>">Pengaturan Akun</a>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->