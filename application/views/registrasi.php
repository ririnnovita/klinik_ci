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
                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-secondary">Masuk</a>


                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->




        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

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
                                        <form method="post" action="<?= base_url('registrasi/index'); ?>" class="user">

                                            <div class="form-group">
                                                <input type="txt" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda" name="username">

                                                <?= form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                            </div>

                                            <div class="form-group">
                                                <input type="txt" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Lengkap Anda" name="nama_lengkap">

                                                <?= form_error('nama_lengkap', '<div class="text-danger small ml-2">', '</div>') ?>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">

                                                    <?= form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-secondary btn-user btn-block">Daftar</button>
                                        </form>
                                        <hr>
                                        <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
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