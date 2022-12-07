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


                <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-sm btn-light float-right"> <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">NO.</th>
                                <th>NAMA DOKTER</th>
                                <th>AKSI</th>
                        <tbody>
                            <?php $no = 1;
                            foreach ($dokter as $d) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $d['nama_dokter'] ?></td>
                                    <td>
                                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu"> -->


                                        <a href="<?= base_url('dokter/edit'); ?>" class="btn btn-secondary" data-toggle="modal" data-target="#modaledit<?= $d['id_dokter']; ?>"><span class="fas fa-fw fa-edit"></span>Edit</span></a>

                                        <!-- <a href="<?= base_url() . 'dokter/delete/' . $d['id_dokter']; ?>" class="dropdown-item has-icon" onClick="return confirm('yakin ingin menghapus?')"><span class="fas fa-fw fa-trash-alt"></span>hapus</span></a> -->

                                        <!-- <button onclick="hapusDokter('<?= base_url('dokter/delete/') . $d['id_dokter']; ?>')" class="dropdown-item has-icon"> <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
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

<?php foreach ($dokter as $d) : ?>

    <div class="modal fade" id="modaledit<?= $d['id_dokter']; ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('dokter/edit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">nama dokter</label>
                            <input type="text" name="nama_dokter" value="<?= $d['nama_dokter']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" readonly value="<?= $d['id_dokter']; ?>" class="form-control" name="id_dokter" id="id_dokter">
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