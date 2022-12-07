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


                <a href="<?= base_url('berobat/tambah') ?>" class="btn btn-sm btn-light float-right"> <i class="fas fa-plus fa-sm"></i> Kunjungan Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">NO.</th>
                                <th>TANGGAL</th>
                                <th>NAMA PASIEN</th>
                                <th>UMUR</th>
                                <th>NAMA DOKTER</th>
                                <th>REKAM MEDIS</th>
                                <th>AKSI</th>
                        <tbody>
                            <?php $no = 1;
                            foreach ($berobat as $b) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $b['tgl_berobat'] ?></td>
                                    <td><?= $b['nama_pasien'] ?></td>
                                    <td><?= $b['umur'] ?></td>
                                    <td><?= $b['nama_dokter'] ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>berobat/rekam/<?= $b['id_berobat']; ?>" class="btn btn-primary btn-sm">Rekam medis</a>
                                    </td>
                                    <td>
                                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expended="false"><i class="fas fa-cog"></i></button>
                                        <div class="dropdown-menu"> -->


                                        <a href="<?= base_url() . 'berobat/edit/' . $b['id_berobat']; ?>" class="btn btn-secondary"><span class="fas fa-fw fa-edit"></span>Edit</span></a>
                                        <!-- 
                                            <a href="<?= base_url() . 'berobat/delete/' . $b['id_berobat']; ?>" class="dropdown-item has-icon" onClick="return confirm('yakin ingin menghapus?')"><span class="fas fa-fw fa-trash-alt"></span>hapus</span></a> -->

                                        <!-- <button onclick="hapusBerobat('<?= base_url('berobat/delete/') .  $b['id_berobat']; ?>')" class="dropdown-item has-icon"> <span class="fas fa-fw fa-trash-alt"></span>Delete</span></button>
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