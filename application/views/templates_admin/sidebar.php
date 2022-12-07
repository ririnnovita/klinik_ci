<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- bg-gradient-danger -->
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="<?= base_url("assets/img/logo1.png") ?>" width="50" alt="logo">
                <div class="sidebar-brand-text mx-3">KL.KLINIK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('admin/dashboard_admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navMaster" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-database"></i>Master Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navMaster">
                    <a class="dropdown-item" href="<?= base_url('tb_user'); ?>">Data Users</a>
                    <a class="dropdown-item" href="<?= base_url('dokter'); ?>">Data Dokter</a>
                    <a class="dropdown-item" href="<?= base_url('pasien'); ?>">Data Pasien</a>
                    <a class="dropdown-item" href="<?= base_url('obat'); ?>">Data Obat</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('berobat'); ?>">
                    <i class="fas fa-fw fa-prescription-bottle"></i>Kunjungan/Berobat
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navLaporan" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>Laporan
                </a>
                <div class="dropdown-menu" aria-labelledby="navLaporan">
                    <a class="dropdown-item" href="<?= base_url('laporan/data_dokter'); ?>">Data Dokter</a>
                    <a class="dropdown-item" href="<?= base_url('laporan/data_pasien'); ?>">Data Pasien</a>
                    <a class="dropdown-item" href="<?= base_url('laporan/data_berobat'); ?>">Data Kunjungan</a>
                </div>
            </li>


            <hr class="sidebar-divider my-0">

            <!-- Nav Item -logout -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>Logout
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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


                    <!-- topbar search -->
                    <!-- <div class="row-mt-3 navbar-search">
                        <div class="col-mr-6">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari data..." class="form-control">
                                    <button type="submit" class="btn btn-dark">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>selamat datang <?= $this->session->userdata('username') ?> </div>
                                </li>
                                <div class="topbar-divider d-none d-sm-block"></div>

                                <li class="ml-2"><?= anchor('auth/logout', 'Logout'); ?></li>
                            <?php } else { ?>
                                <li class="ml-2"><?= anchor('auth/login', 'Login'); ?></li>
                            <?php } ?>

                        </ul>

                    </ul>
                </nav>