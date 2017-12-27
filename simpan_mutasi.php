<?php 
include 'system/connect.php'; 
if (isset($_POST['kirim'])) {
	# code...
}
$nisn=$_POST['nisn']; 
$nomutasi=$_POST['nomutasi']; 
$npsn=$_POST['npsn']; 
$tujuan=$_POST['tujuan'];
$query=$conn->query("insert into mutasi (nisn,nomutasi,npsn,tujuan) value ('$nisn','$nomutasi','$npsn','$tujuan')"); 
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
?>