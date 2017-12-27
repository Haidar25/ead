<?php
include '../system/connect.php';

$id=$_GET['id'];
$query = $conn->query("delete from pengaduan where id='$id'");


if ($query) {
    header("location: http://localhost/ead/admin/index.php?page=pengaduan");
} else {
    echo "gagal menghapus".$conn->error;
}
?>