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
<?php  include 'header_mutasi.php'; ?>
	
<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
        FORM PENGISIAN MUTASI MURID
        </div>
    <div class="pLeft">
      <img src="img/mutasi.png">
    </div>
    <div class="form">
      <form action="simpan_mutasi.php" method="post">
        <input name ="nisn" type="text" id="nisn" placeholder="NISN"><br/>
        <input name ="nomutasi" type="text" id="nomutasi" placeholder="Nomor Surat Mutasi Sekolah"><br/>
        <input name ="npsn" type="text" id="npsn" placeholder="NPSN Asal"><br/>
        <input name ="tujuan" type="text" id="tujuan" placeholder="Nama Tujuan Sekolah"><br/>
        <button>Submit</button><button><a href="tampil_mutasi.php">Tampilkan Data</a></button>
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
