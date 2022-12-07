<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <a href="<?= base_url("auth") ?>">
                <img src="<?= base_url('assets/img/klinik.png') ?>" width="200" alt="">
            </a>
            <marquee>
                <h1>SELAMAT DATANG DI KL.KLINIK</h1>
            </marquee>
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a href="<?= base_url('registrasi'); ?>" class="btn btn-secondary">Daftar</a>


                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->


        <div class="container">



            <!-- Outer Row -->
            <div class="row justify-content-center ">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">

                                            <img src="<?= base_url("assets/img/klinik.png") ?>" width="200" class="h4 text-gray-900 mb-4">
                                        </div>
                                        <?= $this->session->flashdata('pesan') ?>
                                        <form method="post" action="<?= base_url('auth/login') ?>" class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                                                <?= form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password Anda" name="password">
                                                <?= form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                                            </div>
                                            <button type="submit" class="btn btn-secondary form-control">Login</button>
                                        </form>
                                        <hr>

                                        <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('registrasi/index'); ?>">Belum Punya Akun? Daftar!</a>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

        </body>

        </html>