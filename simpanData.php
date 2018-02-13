<?php
include 'db/koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$tmplahir = $_POST['tmplahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto'];

if ($_POST['simpan']) {
	$extensi_diperbolehkan = array('png','jpg','jpeg');
	$namafoto = $_FILES['foto']['name'];
	$x = explode('.', $namafoto);
	$extensi = strtolower(end($x));
	$ukuran = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];


	if(in_array($extensi, $extensi_diperbolehkan) === true){
		if ($ukuran < 5000000000) {
			move_uploaded_file($file_tmp, 'assets/foto/'.$namafoto);
			$query = mysqli_query($link, "INSERT INTO mahasiswa(npm,nama,tmp_lahir,tgl_lahir,alamat,foto)VALUES('$npm','$nama','$tmplahir','$tgllahir','$alamat','$namafoto')");

			if (!$query) {
				echo "<script> alert('Gagal Menambahkan Data') </script>";
				echo "<meta http-equiv='refresh' content='0; url=tambahData.php'>";
			}else{
				$query = mysqli_query($link, "SELECT id FROM mahasiswa WHERE npm='$npm'");
				$data = mysqli_fetch_array($query);
				$id = $data[0];
				echo "<script> alert('Data Berhasil Ditambahkan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=detailMahasiswa.php?id=$id'>";
			}
		}else{
			echo "<script> alert('Gagal Menambahkan Data, File Terlalu Besar') </script>";
			echo "<meta http-equiv='refresh' content='0; url=tambahData.php'>";
		}
	}else{ 
		echo "<script> alert('Gagal Menambahkan Data, Ekstensi File Tidak Diperbolehkan') </script>";
		echo "<meta http-equiv='refresh' content='0; url=tambahData.php'>";
	}
}


?>