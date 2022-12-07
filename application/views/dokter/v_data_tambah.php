<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>


                <a href="<?= base_url('dokter') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('dokter/insert') ?>">
                    <div class="form-group">
                        <label for="">nama dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" required>
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