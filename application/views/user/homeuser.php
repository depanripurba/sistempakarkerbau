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
    <link rel="icon" href="<?=base_url('assets/img/icon.png')?>" type="image/x-icon" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container d-flex justify-content-between">
        <div class="p-3">
            <!-- <a class="text-white m-2" href="">Beranda</a>
            <a class="text-white" href="">Tentang</a> -->
        </div>
        <div class="p-3">
            <!-- <a href="<?=base_url('konsultasi')?>" class="btn btn-success">Mulai Konsultasi</a> -->
            <a href="<?=base_url('login')?>" class="btn btn-info">Admin Login</a>
        </div>
    </div>
    <div class="container d-flex">
        <div>
            <p style="font-size: 25px;font-weight:bold" class="text-white">SISTEM PAKAR - BAYES </p>
            <br>
            <p style="font-size: 20px;font-weight:bold;margin-top:-40px" class="text-white">SELAMAT DATANG</p>
            <br>
            <p style="width:50vw;font-weight:bold" class="text-white">SISTEM PAKAR MENDIAGNOSA PENYAKIT SEPTICEMIA EPIZOOTICA PADA KERBAU MENGGUNAKAN METODE TEOREMA BAYES</p>
            <div>
                <p style="width:50vw;font-weight:bold" class="text-white">Pengertian Septicemia Epizootica pada Kerbau</p>
                <p style="width:50vw;" class="text-white">Kerbau adalah salah satu ternak yang potensial untuk dikembangkan, karena kerbau memiliki keunggulan tersendiri dibandingkan dengan sapi, yaitu mampu bertahan hidup di kawasan yang relatif sulit terutama bila pakan yang tersedia berkualitas rendah</p>
            </div>
        </div>
        <div style="margin-top:100px">
            <p style="font-weight:bold" class="text-white">Apa yang dimaksud dengan Septicemia Epizootica pada Kerbau </p>
            <img width="400px" src="<?= base_url('assets/img/kerbau.jpg') ?>" class="rounded" alt="kerbau">
        </div>
        


    </div>
    <center style="margin-top: 50px;">
        <a class="btn btn-success text-white" href="<?=base_url('konsultasi')?>">Konsultasi</a>
    </center>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>