<section class="konten mt-2">

    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>
                <a href="<?= base_url('tb_user'); ?>" class="btn btn-sm btn-warning float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('tb_user/update') ?>">
                    <input type="hidden" readonly value="<?= $edit['id']; ?>" class="form-control" name="id" id="id">

                    <div class="form-group">
                        <label for="">Username</label>
                        <br>
                        <input type="text" name="username" class=" form-control" value="<?= $edit['username']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <br>
                        <input type="text" name="nama_lengkap" class=" form-control" value="<?= $edit['nama_lengkap']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" placeholder="kosongi jika tidak ingin mengganti password ..." class=" form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-sm">simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</section>