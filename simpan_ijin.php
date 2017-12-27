<?php
    include 'system/connect.php';
    
    //mengambil data inputan
    $id=$_POST['id']; 
    $nama_kepsek=$_POST['nama_kepsek']; 
    $nama_sekolah=$_POST['nama_sekolah']; 
    $nosk=$_POST['nosk'];
    
    $folder = "upload";
    //mengambil ekstensi file
    $filename = $_FILES["upload_file"]["name"];
    $file_ekstensi = substr($filename, strripos($filename, '.'));
    $tmp_name = $_FILES['upload_file']['tmp_name'];
    //rename file
    $name=$filename;
  
    $des = $folder."/".$name; 
    //upload file
    $allowed_file_types = array('.jpg','.png','.jpeg','.bmp','.JPG','.PNG','.pdf','.PDF');
    if (in_array($file_ekstensi,$allowed_file_types)){
        //kode untuk upload ke folder gambar
        
        if(!move_uploaded_file($tmp_name, $des))
            echo "<script>alert('gagal di tambahkan!');	history.gi(-1);</script>";
            
    }

 $query=$conn->query("insert into ijin_operasional (id,nama_kepsek,nama_sekolah,nosk,upload_file) values ('$id','$nama_kepsek','$nama_sekolah','$nosk','$name')"); 
    if (!$query) {
    echo "<script>alert('gagal di tambahkan!');	history.gi(-1);</script>";
    }
    else{
        echo "<script>alert('Data mantap!');history.go(-1);</script>";
    }