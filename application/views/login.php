<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <a href="<?= base_url("auth") ?>">
                <img src="<?= base_url('assets/img/klinik.png') ?>" width="200" alt="">
                <a>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="<?= base_url('auth/login'); ?>" class="btn btn-secondary">Masuk</a>
                            <a href="<?= base_url('registrasi'); ?>" class="btn btn-secondary">Daftar</a>


                        </li>

                    </ul>

        </nav>
        <!-- End of Topbar -->



        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>SELAMAT DATANG DI KL.KLINIK</h1>
                        <p>"Semua orang ingin sehat, tapi tidak semua orang menjaga kesehatan."</p>
                    </div>
                </div>

            </div>
            <br><br>
            <img class="d-block w-100 " src="<?= base_url('assets/img/jn.jpg'); ?>" />
        </div>
        </header>
        </body>