<?php
  require 'functions.php'; //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di require
  
  $user= query("SELECT * FROM andestaz7");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>SISWA BARU</h1><center>
    <center><a href="tambah_produk.php">+ &nbsp; DATABASE</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tempat lahir</th>
          <th>Tanggal lahir</th>
          <th>Warga Negara</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Nomor HP</th>
          <th>Asal SMP</th>
          <th>Nama Ayah</th>
          <th>Nama Ibu</th>
          <th>Penghasilan Kedua Orang Tua</th>
          <th>action</th>
        </tr>
    </thead>

    <?php $i = 1; ?>
    <?php foreach ($user as $u) : ?>

    <tbody>
      
       <tr>
          <td><?= $u['id'] ?></td>
          <td><?= $u['nama'] ?></td>
          <td><?= $u['tempat_lahir'] ?></td>
          <td><?= $u['tgl_lahir'] ?></td>
          <td><?= $u['warga'] ?></td>
          <td><?= $u['alamat'] ?></td>
          <td><?= $u['email'] ?></td>
          <td><?= $u['nohp'] ?></td>
          <td><?= $u['asalsmp'] ?></td>
          <td><?= $u['ayah'] ?></td>
          <td><?= $u['ibu'] ?></td>
          <td><?= $u['penghasilanorangtua'] ?></td>
          <td>
            <a href="ubah.php?id=<?= $u['id'] ?>">Ubah</a>
            <br>
            <a href="hapus.php?id=<?= $u['id'] ?>">Hapus</a>
          </td>
         
      
    </tbody>
    <?php $i++ ?>
    <?php endforeach ?>
    </table>
  </body>
</html>