<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Form Data Mahasiswa</h2>
  <hr>
  <form action="simpanData.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
      <label for="npm">NPM</label>
      <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" name="npm">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="ttl">Tempat Tanggal Lahir</label> <br>
      <div class="col-md-8">
        <input type="text" class="form-control " id="tmplahir" placeholder="Masukkan Tempat Lahir" name="tmplahir">
      </div>
      <div class="col-md-4">
      <input type="date" class="form-control col-md-4" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir">
      </div>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" class="form-control" id="foto" placeholder="Enter password" name="foto">
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
  </form>
</div>

<script src="assets/js/jquery-2.2.3.min.js"></script>
<script src="assest/js/bootstrap.min.js"></script>
</body>
</html>