<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('assets/img/icon.png')?>" type="image/x-icon" />

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="">

                            <div class="p-3">
                                <div class="text-center">
                                    <img width="100px" src="<?= base_url('assets/img/admin.png') ?>" alt="">
                                    <h1 class="h5 text-gray-900 mb-4">Login Admin</h1>
                                    <?=$this->session->flashdata('message');?>
                                </div>
                                <form class="user" action="<?=base_url('auth')?>" method="post">
                                    <div class="form-group">
                                        <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button style="width: 100px;" type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        <button style="width: 100px;" type="reset"" class="btn btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

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