<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>


                <a href="<?= base_url('pasien') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('pasien/insert') ?>">
                    <div class="form-group">
                        <input type="text" name="nama_pasien" class="form-control" placeholder=" Nama Pasien..." required>
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="" class="value">Jenis Kelamin</option>
                            <option value="L">L</option>
                            <option value="P">P</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="umur" class="form-control" placeholder=" Umur...">
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