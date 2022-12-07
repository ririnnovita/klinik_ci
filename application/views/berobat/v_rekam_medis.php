<section class="konten mt-2">
    <div class="container-fluid">

        <!-- pesan error -->
        <?php if (validation_errors()) : ?>
            <div class="alert alert-success" role="alert">
                <?php validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">
                        BIODATA PASIEN
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td><?= $tampil['nama_pasien']; ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $tampil['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td><?= $tampil['umur']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card border-primary mt-4">
                    <div class="card-header bg-primary text-white">
                        RIWAYAT BEROBAT
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl. Berobat</th>
                                    <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Penatalaksanaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($riwayat as $r) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $r['tgl_berobat']; ?></td>
                                        <td><?= $r['keluhan_pasien']; ?></td>
                                        <td><?= $r['hasil_diagnosa']; ?></td>
                                        <td><?= $r['penatalaksanaan']; ?></td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">
                        CATATAN (Rekam Medis)
                        <a href="<?= base_url('berobat') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>berobat/insert_rekam" method="POST">
                            <input type="hidden" name="id" value="<?= $tampil['id_berobat']; ?>">
                            <div class="form-group">
                                <label for="">Keluhan</label>
                                <textarea name="keluhan" class="form-control" required><?= $tampil['keluhan_pasien']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Diagnosa</label>
                                <textarea name="diagnosa" class="form-control" required><?= $tampil['hasil_diagnosa']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Penatalaksanaan</label>
                                <select name="penatalaksanaan" id="" class="form-control" required>
                                    <option value="<?= $tampil['penatalaksanaan']; ?>" selected><?= $tampil['penatalaksanaan']; ?></option>
                                    <option value="Rawat Jalan">rawat jalan</option>
                                    <option value="Rawat Inap">rawat inap</option>
                                    <option value="Rujuk">rujuk</option>
                                    <option value="Lainnya">lainnya</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-sm">Simpan Data</button>

                        </form>
                    </div>
                </div>
                <div class="card border-success mt-4">
                    <div class="card-header bg-success text-white">
                        RESEP OBAT
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('berobat/insert_resep'); ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $tampil['id_berobat']; ?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="obat" id="" class="form-control">
                                            <?php foreach ($obat as $o) : ?>
                                                <option value="<?= $o['id_obat']; ?>"><?= $o['nama_obat']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-secondary">+</button>
                                </div>
                            </div>
                        </form>

                        <hr>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Obat</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($resep as $r) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r['nama_obat']; ?></td>
                                        <td>
                                            <!-- <a href="<?= base_url() . 'berobat/hapus_resep/' . $r['id_resep'] . '/' . $r['id_berobat']; ?>" class="text-danger">x</a> -->


                                            <a onclick="hapusResep('<?= base_url('berobat/hapus_resep/') .  $r['id_resep'] . '/' . $r['id_berobat']; ?>')" class="text-danger">x</a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>