<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="mb-0">KLINIK</h3>
        <small>JL. RAYA SEMBORO DESA SEMBORO JEMBER</small>
        <hr>
        <h4 class="text-center">LAPORAN DATA PASIEN</h4>

        <table class="table table-bordered table-sm">
            <tr>
                <th width="80px">NO.</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
            </tr>
            <?php $no = 1;
            foreach ($pasien as $p) : ?>

                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $p['nama_pasien']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['umur']; ?></td>
                </tr>

            <?php $no++;
            endforeach; ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>JEMBER, <?= DATE('d-m-Y'); ?>
                        <br>
                        Administrator,
                        <br><br><br><br>
                        <b>_______________________________</b>
                    </p>
                </td>
            </tr>

        </table>
    </div>

</body>

</html>