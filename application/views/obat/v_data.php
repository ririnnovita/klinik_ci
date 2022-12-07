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


                <a href="<?= base_url('obat/tambah') ?>" class="btn btn-sm btn-light float-right"> <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">NO.</th>
                                <th>NAMA OBAT</th>
                                <th>AKSI</th>
                        <tbody>
                            <?php $no = 1;
                            foreach ($obat as $o) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $o['nama_obat'] ?></td>
                                    <td>
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu">


                                            <a href="<?= base_url('obat/edit'); ?>" class="dropdown-item has-icon" data-toggle="modal" data-target="#modaledit<?= $o['id_obat']; ?>"><span class="fas fa-fw fa-edit"></span>Edit</span></a>

                                            <!-- <a href="<?= base_url() . 'obat/delete/' . $o['id_obat']; ?>" class="dropdown-item has-icon" onClick="return confirm('yakin ingin menghapus?')"><span class="fas fa-fw fa-trash-alt"></span>hapus</span></a> -->

                                            <button onclick="hapusObat('<?= base_url('obat/delete/') . $o['id_obat']; ?>')" class="dropdown-item has-icon"> <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
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

<?php foreach ($obat as $o) : ?>

    <div class="modal fade" id="modaledit<?= $o['id_obat']; ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('obat/edit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">nama obat</label>
                            <input type="text" name="nama_obat" value="<?= $o['nama_obat']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" readonly value="<?= $o['id_obat']; ?>" class="form-control" name="id_obat" id="id_obat">
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