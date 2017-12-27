<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FORM PENGISIAN | PENGAJUAN MUTASI SISWA</title>
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
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

<body class="landing">
<?php  include 'header_ijin.php'; ?>
	
<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
        FORM PENGISIAN IJIN OPERASIONAL
        </div>
    <div class="pLeft">
      <img src="img/ijin.png">
    </div>
    <div class="form">
      <form action="simpan_ijin.php" method="post" enctype="multipart/form-data">
        <input name ="id" type="text" id="id" placeholder="ID"><br/>
        <input name ="nama_kepsek" type="text" id="nama_kepsel" placeholder="Nama Kepala Sekolah"><br/>
        <input name ="nama_sekolah" type="text" id="nama_sekolah" placeholder="Nama Sekolah"><br/>
        <input name ="nosk" type="text" id="nosk" placeholder="No SK"><br/>
        <input type="file" name="upload_file" placeholder="UPLOAD"><br/>
        <button type="submit" name="btnUpload" value="Upload">Submit</button><button><a href="tampil_ijin.php">Tampilkan Data</a></button>
      </form>
    </div>
  </div> 
</section>

<?php  include 'footer.php'; ?>
  <script src="js/parallax-plugin.js"></script>
  <script src="js/scrollSpeed.js"></script>
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
