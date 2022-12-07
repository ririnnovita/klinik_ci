<section class="konten mt-2">

    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>
                <a href="<?= base_url('berobat'); ?>" class="btn btn-sm btn-warning float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('berobat/update') ?>">
                    <input type="hidden" readonly value="<?= $edit['id_berobat']; ?>" class="form-control" name="id_berobat" id="id_berobat">

                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <br>
                        <input type="date" name="tgl_berobat" value="<?= $edit['tgl_berobat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required>
                            <?php
                            foreach ($pasien as $p) : {
                                    if ($p['id_pasien'] == $edit['id_pasien']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }
                                }
                            ?>
                                <option value="<?= $p['id_pasien']; ?>" <?= $aktif ?>><?= $p['nama_pasien']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Dokter Tujuan</label>
                        <select name="dokter" id="dokter" class="form-control">
                            <?php
                            foreach ($dokter as $d) : {
                                    if ($d['id_dokter'] == $edit['id_dokter']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }
                                }
                            ?>
                                <option value="<?= $d['id_dokter']; ?>" <?= $aktif ?>><?= $d['nama_dokter']; ?></option>
                            <?php endforeach; ?>
                        </select>
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