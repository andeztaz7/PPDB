<?php
require 'functions.php';
if(isset($_POST['masuk'])){
  if(tambah($_POST)){
    echo "berhasil";
  }else{
    echo "gagal";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INFORMATIKA PESAT</title>
</head>
<body>
    <img id="header-img" src="" alt="">
    <div class="nav">
        <a class="navbar" href="#">
            <img src="https://sekolahpesatbogor.com/wp-content/uploads/2021/08/Logo-SMK-Polos.png" alt="" width="70" height="24">
        </a>
        <a class="active" href="#home">Home</a>
        <a href="#reg">Profile School</a>
        <a href="#reg">PPDB</a>
    </div>
    <div class="depan">
        <h1>WELCOME TO INFORMATIKA PESAT</h1>
    </div>
    <div class="profil">
        <div class="kelas">
            <h3>RPL</h3>
                <p>Software Engineering atau SE adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas</p>
            
        </div>
        <div class="kelas">
            <h3>TKJ</h3>
                <p>TKJ (Teknik Komputer dan Jaringan) adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.</p>
        </div>
        <div class="kelas">
            <h3>MM</h3>
                <p>Multimedia adalah media yang menggabungkan dua unsur atau lebih media yang terdiri dari teks, grafik, gambar, foto, audio, dan animasi secara terintegrasi.</p>
        </div>
    </div>
    <div class="all">
        <div class="registrasi">
            <h1>REGISTRASI</h1>
        </div>
    <form method="post"action="">
        <div class="formulir">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Email will be keep by ourself.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tempat lahir</label>
          <input type="text" class="form-control"name="tempat_lahir" id="tempat_lahir">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tanggal lahir</label>
          <input type="date" class="form-control"name="tgl_lahir" id="tgl_lahir">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Warga Negara</label>
            <input type="text" class="form-control"name= "warga" id="warga">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control"name="alamat" id="alamat">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control"name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
            <input type="number" class="form-control"name="nohp"id="nohp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Asal SMP</label>
            <input type="text" class="form-control"name="asalsmp" id="asalsmp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control"name="ayah" id="ayah">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control"name="ibu" id="ibu">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Penghasilan Kedua Orang tua</label>
            <input type="text" class="form-control"name="penghasilanorangtua"id="penghasilanorangtua">
          </div>
          <button type="submit"name ="masuk" class="btn btn-primary">SUBMIT</button>
</form>
    
