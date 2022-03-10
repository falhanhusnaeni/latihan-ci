<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        FORM TAMBAH DATA
    </h1>
 <form action="<?= base_url('biodata/action_tambah_data')?>"method="post">
 <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
    <br><br> 
    <button name="simpan">simpan</button> 
</body>
</html>