<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?= base_url('biodata/tambah_data') ?>">input data</a>  
   <h1 align="center" <marquee direction="right"></marquee>Haii Selamat Datang</h1>
   <table border="1" width="50%" align="center">
       <tr>
           <td>Nama</td>
           <td>:</td>
           <td><?= $nm ?></td>
        </tr>
       <tr>
           <td>Alamat</td>
           <td>:</td>
           <td><?= $alt ?></td>
        </tr>
       <tr>
           <td>no_hp</td>
           <td>:</td>
           <td><?= $no_hp ?></td>
        </tr>
       <tr>
           <td>Email</td>
           <td>:</td>
           <td><?= $email ?></td>
        </tr>
       <tr>
           <td>Sekolah</td>
           <td>:</td>
           <td><?= $skl ?></td>
        </tr>
    </table> 
</body>
</html>