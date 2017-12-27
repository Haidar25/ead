<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FORM PENGISIAN | PENGAJUAN MUTASI SISWA</title>
<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tampil.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/list.css">
  <link rel="stylesheet" href="../css/reset.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/modernizr.custom.29473.js"></script>
  <script type="text/javascript">
            var originalNavClasses;

            function toggleNav() {
                var elem = document.getElementById('menu');
                var classes = elem.className;
                if (originalNavClasses === undefined) {
                    originalNavClasses = classes;
                }
                elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
            }
  </script>
</head>

<body 
      <?php
            include '../system/connect.php';
            if(isset($_SESSION['username'])){
                if($_SESSION['username']=="user")
                    header("location:http://localhost/ead/");
            }else{
                header("location:http://localhost/ead/login_admin.php");
            }
        ?>
      class="landing">
<?php  include 'header.php';
    if(isset($_GET['page'])){
        switch($_GET['page']){
                case "pengaduan":include 'listpengaduanmasyarakat.php';break;
                case "pengajuan":include 'listpengajuannpsn.php';break;
                case "ijin":include 'listijinoperasional.php';break;
                case "mutasi":include 'listmutasimurid.php';break;
        }
    }else{
        include 'listpengaduanmasyarakat.php';
    }

include '../footer_admin.php'; ?>
  <script src="../js/parallax-plugin.js"></script>
  <script src="../js/scrollSpeed.js"></script>
  <script type="text/javascript">
  	jQuery.scrollSpeed(100, 800);
  	</script>
  	<script type="text/javascript">
	$('section').parallax({
speed : 0.2
});
	$('section #button1').parallax({
speed : 0.1
});
</script>
</body>
</html>
