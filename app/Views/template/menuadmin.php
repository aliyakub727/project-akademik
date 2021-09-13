<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Akademik</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>
        <?php
        if (session()->get('role') == "Admin") {
        ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/siswa/">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Siswa</span></a>
            </li>
        <?php
        } ?>
        <?php
        if (session()->get('role') == 'Siswa') {
        ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/siswa/">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>user</span></a>
            </li>
        <?php
        }
        ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Siswa</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Ditambahkan:</h6>
                    <a class="collapse-item" href="<?= base_url(); ?>/makanan/">Biodata Siswa</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/sayuran/">Sayuran Dll</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/minuman/">Minuman</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Kelola Akun</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kriteria Akun:</h6>
                    <a class="collapse-item" href="#">Admin</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/KelolaAkun/">Users</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            internal
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Menu Pegawai</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Pegawai:</h6>
                    <a class="collapse-item" href="login.html">Daftar Pegawai</a>
                    <a class="collapse-item" href="register.html">Penggajian</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Stoks</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->