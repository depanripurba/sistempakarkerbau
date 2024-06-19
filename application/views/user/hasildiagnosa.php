<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hasil Diagnosa</title>

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
        <h5 class="text-success mb-3">Hasil Diagnosa</h5>
    </center>
    <hr>
    <div class="container">
        <?php var_dump($hasil) ?>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Depanri Purba</td>
                </tr>
                <tr>
                    <td>Nomor Hape</td>
                    <td>:</td>
                    <td>081396486060</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>081396486060</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h5>Gejala yang dipilih</h5>
        <table>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($hasil['gejalacentang'] as $d) : ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$d->kode_gejala?></td>
                        <td><?=$d->nama_gejala?></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <hr>
        <h5>Hasil Konsultasi</h5>
        <table>
            <tbody>
                <tr>
                    <td>
                        Nama Penyakit
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?=$hasil['namapenyakit']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nilai Gejala
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?=$hasil['nilai']?>
                    </td>
                </tr>
            </tbody>
        </table>
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