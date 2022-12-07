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


                <a href="<?= base_url('pasien/tambah') ?>" class="btn btn-sm btn-light float-right"> <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">NO.</th>
                                <th>NAMA PASIEN</th>
                                <th>JENIS KELAMIN</th>
                                <th>UMUR</th>
                                <th>AKSI</th>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pasien as $p) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $p['nama_pasien'] ?></td>
                                    <td><?= $p['jenis_kelamin'] ?></td>
                                    <td><?= $p['umur'] ?></td>
                                    <td>
                                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu"> -->

                                        <a href="<?= base_url('pasien/edit'); ?>" class="btn btn-secondary" data-toggle="modal" data-target="#modaledit<?= $p['id_pasien']; ?>"><span class="fas fa-fw fa-edit"></span>Edit</span></a>
                                        <!-- 
                                            <a href="<?= base_url() . 'pasien/delete/' . $p['id_pasien']; ?>" class="dropdown-item has-icon" onClick="return confirm('yakin ingin menghapus?')"><span class="fas fa-fw fa-trash-alt"></span>hapus</span></a> -->

                                        <!-- <button onclick="hapusPasien('<?= base_url('pasien/delete/') . $p['id_pasien']; ?>')" class="dropdown-item has-icon"> <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
                                            </button> -->
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

<?php foreach ($pasien as $p) : ?>

    <div class="modal fade" id="modaledit<?= $p['id_pasien']; ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit Pasien</h5>
                    <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('pasien/edit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">nama pasien</label>
                            <input type="text" name="nama_pasien" value="<?= $p['nama_pasien']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">jenis kelamin (L / P)</label>
                            <input type="text" name="jenis_kelamin" value="<?= $p['jenis_kelamin']; ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">umur</label>
                            <input type="text" name="umur" value="<?= $p['umur']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" readonly value="<?= $p['id_pasien']; ?>" class="form-control" name="id_pasien" id="id_pasien">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="edit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;  ?>