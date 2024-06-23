<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dashbord Menu</h6>
        </div>

        <div class="row container mt-3 d-flex flex-column">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-2">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Data Gejala</div>
                                <div class="h5 mb-1 font-weight-bold text-gray-800"><?=$tgejala?> Gejala</div>
                                <a href="<?=base_url('datagejala')?>">Detail</a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-2">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Data Penyakit</div>
                                <div class="h5 mb-1 font-weight-bold text-gray-800"><?=$tpenyakit?>  Penyakit</div>
                                <a href="<?=base_url('datapenyakit')?>">Detail</a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-2">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Basis Aturan
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-1 mr-3 font-weight-bold text-gray-800"><?=$tbaturan?> Rules</div>
                                        <a href="<?=base_url('basisaturan')?>">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Data Riwayat Konsultasi</div>
                                <div class="h5 mb-1 font-weight-bold text-gray-800"><?=$triwayat?> Konsultasi</div>
                                <a href="<?=base_url('riwayat')?>">Detail</a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img style="position:absolute;left: 500px; top:100px;" src="<?= base_url('assets/img/kabo.png') ?>" alt="">


    </div>
</div>
<!-- /.container-fluid -->