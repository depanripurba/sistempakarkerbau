<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img width="50" src="<?=base_url('assets/img/kerbau.png')?>" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Pakar Kerbau</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('datagejala') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Gejala</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('datapenyakit') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Penyakit</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('basisaturan') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Basis Aturan </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('riwayat') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Riwayat Konsultasi </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Navbar -->
            <div style="width: 100%;" class="d-flex justify-content-between">
                <?php if ($judul === "dashboard") : ?>
                    <span>Welcome Back</span>
                    <span>Tanggal</span>
                    <span><a href="">Refresh</a></span>
                <?php else : ?>
                    <span>Tes</span>
                    <span></span>
                    <span><a href=""></a></span>
                <?php endif ?>
            </div>
        </nav>
        <!-- End of Topbar -->