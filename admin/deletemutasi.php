<?php
include '../system/connect.php';

$id=$_GET['id'];
$query = $conn->query("delete from mutasi where id='$id'");


if ($query) {
    header("location: http://localhost/ead/admin/index.php?page=mutasi");
} else {
    echo "gagal menghapus".$conn->error;
}
?>