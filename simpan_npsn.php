<?php 
include 'system/connect.php'; 
if (isset($_POST['kirim'])) {
	# code...
}
$nosk=$_POST['nosk']; 
$nama_sekolah=$_POST['nama_sekolah']; 
$alamat=$_POST['alamat']; 
$kepala_sekolah=$_POST['kepala_sekolah'];
$email=$_POST['email'];
$telp=$_POST['telp'];
$query=$conn->query("insert into npsn (nosk,nama_sekolah,alamat,kepala_sekolah,email,telp,status) values ('$nosk','$nama_sekolah','$alamat','$kepala_sekolah','$email','$telp','0')"); 
if (!$query) {
echo "<script>alert('gagal di tambahkan!');	history.gi(-1);</script>";
}
else{
	echo "<script>alert('Data mantap!');history.go(-1);</script>";
}
if ($query)  
{ 
header ('location : form_npsn.php'); 
} 
else 
{ 
header ('location : form_npsn.php'); 
} 
include "form_npsn.php"; 
 
?>