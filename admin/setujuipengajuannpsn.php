<?php
include '../system/connect.php';

$id=$_GET['id'];
$query = $conn->query("update npsn set status=1 where nosk='$id'");


if ($query) {
    header("location: http://localhost/ead/admin/index.php?page=pengajuan");
} else {
    echo "gagal menghapus".$conn->error;
}
?>