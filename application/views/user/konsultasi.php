<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Utama</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/img/icon.png') ?>" type="image/x-icon" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <h4 class="m-0 font-weight-bold text-primary">Halaman Konsultasi Pengunjung</h4>
    </nav>
    <center>
        <h5 class="text-success mb-3">Lengkapi Data Berikut</h5>
    </center>
    <hr>
    <div class="container">
        <form action="<?= base_url('prosesdiagnosa') ?>" method="post">
            <div class="row d-flex justify-content-between">
                <div class="card shadow mb-4 col-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_gejala">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama...">
                        </div>
                        <div class="form-group">
                            <label for="nama_gejala">No Hp</label>
                            <input name="hp" type="text" class="form-control" id="nama_gejala" placeholder="Nomor Hp...">
                        </div>
                        <div class="form-group">
                            <label for="nama_gejala">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="Alamat" placeholder="alamat">
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 col-7">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Ceklis Gejala yang dialami</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <?php foreach ($gejala as $g) : ?>
                                    <tr>
                                        <td style="width: 40px;">
                                            <input name="gejala[<?= $g['kode_gejala'] ?>]" value="1" style="cursor:pointer" type="checkbox">
                                        </td>
                                        <td>
                                            <?= $g['nama_gejala'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mb-4 flex-row justify-content-between">
                        <button class="btn btn-primary" type="submit">Mulai Diagnosa</button><button class="btn btn-danger" type="reset">Ulang</button>
                    </div>

                </div>

            </div>

            <hr>

        </form>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>