<?php
include '../system/connect.php';

$id=$_GET['id'];
$query = $conn->query("update ijin_operasional set status=1 where nosk='$id'");


if ($query) {
    header("location: http://localhost/ead/admin/index.php?page=ijin");
} else {
    echo "gagal menghapus".$conn->error;
}
?>