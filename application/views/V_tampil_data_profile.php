<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align='center'>
        My Biodata Human
    </h1>
    <center><a href="<?= base_url('kelas/tambah_data') ?>">input data</a></center>

    <table border="1" align='center'>
    <table border="1" align= 'center'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th colspan = "2">Aksi</th>
            </tr>
        </thead>
<tbody>
            <?php $no = 1; foreach($kelas as $p) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $p->nama_depan ?></td>
                <td><?= $p->nama_belakang ?></td>
                <td><?= $p->tempat_lahir ?></td>
                <td><?= $p->tanggal_lahir ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->alamat ?></td>
                <td><?= $p->jenjang_pendidikan ?></td>
                <td><a href="<?= base_url("data/edit_data_profile")?>">edit</a></td>
                <td><a href="<?= base_url("data/delete_data_profile")?>">delete</a></td>
            </tr>
            <?php $no++; } ?>
</tbody>
    </table>
</body>
    </html>
