<section class="konten mt-2">
    <div class="container-fluid">


        <!-- pesan error -->
        <?php if (validation_errors()) : ?>
            <div class="alert alert-success" role="alert">
                <?php validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>


                <a href="<?= base_url('tb_user/tambah') ?>" class="btn btn-sm btn-light float-right">
                    <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">NO.</th>
                                <th>USERNAME</th>
                                <th>NAMA LENGKAP</th>
                                <th>AKSI</th>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tb_user as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['username'] ?></td>
                                    <td><?= $r['nama_lengkap'] ?></td>
                                    <td>

                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu">

                                            <a href="<?= base_url('tb_user/edit'); ?>" class="dropdown-item has-icon" data-toggle="modal" data-target="#examplemodalmenuedit<?= $r['id']; ?>"><span class="fas fa-fw fa-edit"></span>Edit</span></a>

                                            <!-- 
                                            <a href="<?= base_url() . 'tb_user/delete/' . $r['id']; ?>" class="dropdown-item has-icon" onClick="return confirm('yakin ingin menghapus?')"><span class="fas fa-fw fa-trash-alt"></span>hapus</span></a> -->

                                            <button onclick="hapusUser('<?= base_url('tb_user/delete/') . $r['id']; ?>')" class="dropdown-item has-icon"> <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
                                            </button>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

<!-- modal edit -->

<?php foreach ($tb_user as $r) : ?>

    <div class="modal fade" id="examplemodalmenuedit<?= $r['id']; ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" date-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('tb_user/edit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">username</label>
                            <input type="text" name="username" value="<?= $r['username']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">nama lengkap</label>
                            <input type="text" name="nama_lengkap" value="<?= $r['nama_lengkap']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" value="<?= $r['password']; ?>" class=" form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" placeholder="kosongi jika tidak ingin mengganti password ..." class=" form-control">
                        </div> -->
                        <div class="form-group">
                            <input type="hidden" readonly value="<?= $r['id']; ?>" class="form-control" name="id" id="id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="edit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;  ?>