<?php 
include 'koneksi.php'; 
if (isset($_POST['kirim'])) {
	# code...
}
$nama=$_POST['nama']; 
$email=$_POST['email'];
$telp=$_POST['telp'];
$judul=$_POST['judul']; 
$pesan=$_POST['pesan']; 
$query=mysql_query("insert into pengaduan (nama,email,telp,judul,pesan) value ('$nama','$email','$telp','$judul','$pesan')"); 
if (!$query) {
echo "<script>alert('gagal di tambahkan!');	history.gi(-1);</script>";
}
else{
	echo "<script>alert('Data mantap!');history.go(-1);</script>";
}
if ($query)  
{ 
header ('location : pengaduan_masyarakat.php'); 
} 
else 
{ 
header ('location : pengaduan_masyarakat.php'); 
} 
include "pengaduan_masyarakat.php"; 
 
?>