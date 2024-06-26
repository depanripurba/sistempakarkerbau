<!-- Sidebar -->
<?php
date_default_timezone_set('Asia/Jakarta');
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('konsultasi')?>">
        <div class="sidebar-brand-icon">
            <img width="50" src="<?= base_url('assets/img/kerbau.png') ?>" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Pakar Kerbau</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <li class="nav-item <?= $aktif === 'home' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?= $aktif === 'gejala' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('datagejala') ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Gejala</span></a>
    </li>
    <li class="nav-item <?= $aktif === 'penyakit' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('datapenyakit') ?>">
            <i class="fas fa-fw fa-medkit"></i>
            <span>Data Penyakit</span></a>
    </li>
    <li class="nav-item <?= $aktif === 'rule' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('basisaturan') ?>">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Basis Aturan </span></a>
    </li>
    <li class="nav-item <?= $aktif === 'riwayat' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('riwayat') ?>">
            <i class="fas fa-fw fa-stethoscope"></i>
            <span>Riwayat Konsultasi </span></a>
    </li>
    <li class="nav-item <?= $aktif === 'profil' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('profil') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout') ?>">
            <i class="fas fa-fw  fa-unlock"></i>
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
                    <span><?= date("F j, Y, H:i:s"); ?></span>
                    <span><a href="">Refresh</a></span>
                <?php else : ?>
                    <span><?= $judul ?></span>
                    <span></span>
                    <span><a href=""></a></span>
                <?php endif ?>
            </div>
        </nav>
        <!-- End of Topbar -->