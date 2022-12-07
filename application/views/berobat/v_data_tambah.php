<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>


                <a href="<?= base_url('berobat') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('berobat/insert') ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <br>
                        <input type="date" name="tgl_berobat" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control">
                            <option value="" class="value">- Pilih Pasien -</option>
                            <?php foreach ($pasien as $p) : ?>
                                <option value="<?= $p['id_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter Tujuan</label>
                        <select name="dokter" id="dokter" class="form-control">
                            <option value="" class="value">- Pilih Dokter -</option>
                            <?php foreach ($dokter as $d) : ?>
                                <option value="<?= $d['id_dokter']; ?>"><?= $d['nama_dokter']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-sm">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>