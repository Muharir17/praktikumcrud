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
  <h2>Detail Data Mahasiswa</h2>
  <hr>
  <table class="table table-bordered">
    <tr>
      <td>Halo</td>
    </tr>
    <tr>
      <?php
        include 'db/koneksi.php';
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $query = mysqli_query($link, "SELECT*FROM mahasiswa WHERE id='$id'");
        $data = mysqli_fetch_array($query);
        echo $data[1];
      ?>
    </tr>
  </table>
</div>

<script src="assets/js/jquery-2.2.3.min.js"></script>
<script src="assest/js/bootstrap.min.js"></script>
</body>
</html>