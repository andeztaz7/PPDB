<?php
require'functions.php';

$id=$_GET['id'];

$user=query("SELECT * FROM andestaz7 WHERE id=$id")[0];

if(isset($_POST['masuk'])){
    if(ubah($_POST)> 0){
        echo "berhasil";
        header("location:tampilandata.php");
    
    }else{
        echo "gagal";
    }
}

?>
<div class="all">
        <div class="registrasi">
            <h1>REGISTRASI</h1>
        </div>
    <form method="post"action="">
        <input type="hidden" name="id" value="<?=$user['id'] ?>">
        <div class="formulir">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" value= "<?=$user['nama'] ?>">
          <div id="emailHelp" class="form-text">Email will be keep by ourself.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tempat lahir</label>
          <input type="text" class="form-control"name="tempat_lahir" id="tempat_lahir" value= "<?=$user['tempat_lahir'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tanggal lahir</label>
          <input type="date" class="form-control"name="tgl_lahir" id="tgl_lahir" value= "<?=$user['tgl_lahir'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Warga Negara</label>
            <input type="text" class="form-control"name= "warga" id="warga"value= "<?=$user['warga'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control"name="alamat" id="alamat"value= "<?=$user['alamat'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control"name="email" id="email"value= "<?=$user['email'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
            <input type="number" class="form-control"name="nohp"id="nohp"value= "<?=$user['nohp'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Asal SMP</label>
            <input type="text" class="form-control"name="asalsmp" id="asalsmp"value= "<?=$user['asalsmp'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control"name="ayah" id="ayah"value= "<?=$user['ayah'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control"name="ibu" id="ibu"value= "<?=$user['ibu'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Penghasilan Kedua Orang tua</label>
            <input type="text" class="form-control"name="penghasilanorangtua"id="penghasilanorangtua"value= "<?=$user['penghasilanorangtua'] ?>">
          </div>
          <button type="submit"name ="masuk" class="btn btn-primary">SUBMIT</button>
</form>
    
