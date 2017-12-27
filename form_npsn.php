<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FORM PENGISIAN | PENGAJUAN NPSN</title>
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
<?php  include 'header_npsn.php'; ?>
	
<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
        FORM PENGISIAN NPSN
        </div>
    <div class="pLeft">
      <img src="img/npsn.png">
    </div>
    <div class="form">
      <form action="simpan_npsn.php" method="post">
        <input name ="nosk" type="text" id="nosk" placeholder="NO SK"><br/>
        <input name ="nama_sekolah" type="text" id="nama_sekolah" placeholder="Nama Sekolah"><br/>
        <input name ="alamat" type="text" id="alamat" placeholder="Alamat Sekolah"><br/>
        <input name ="kepala_sekolah" type="text" id="kepala_sekolah" placeholder="Kepala Sekolah"><br/>
          <input name ="email" type="text" id="email" placeholder="Email"><br/>
          <input name ="telp" type="text" id="telp" placeholder="Telepon"><br/>
        <button>Submit</button><button><a href="tampil_npsn.php">Tampilkan Data</a></button>
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
