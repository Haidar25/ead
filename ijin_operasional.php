<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ijin Operasional | Diknas Malang </title>
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
<?php  include 'header.php'; ?>
  <section class="imagefull2" id="one">
  	<div class="container">
  		<div class="caption1">
  			IJIN OPERASIONAL
  			</div>
  		</div>			
  </section>
	
<div class="ijin-operasional">
  <div class="container">
<h1>PROSEDUR IJIN OPERASIONAL SEKOLAH SWASTA BARU</h1>
<div>
1. Pemohon mengajukan proposal pengajuan sekolah swasta baru yang dilampiri dengan Akta notaris, susunan organisasi, kompetensi ketenagaan dan pendukung lainnya.<br/>
2. Petugas melakukan seleksi administrasi<br/>
3. Petugas melakukan survey lapangan<br/>
4. Petugas memberikan evaluasi kepada pemohon<br/>
5. Petugas menerbitkan surat keterangan ijin operasional sekolah swasta baru<br/>
6. Petugas menyerahkan surat keterangan ijin operasional ke pemohon</div>
  </div>
</div>
<div class="ijin-operasional">
  <div class="container">
<h1>PROSEDUR PERPANJANGAN IJIN OPERASIONAL SEKOLAH SWASTA</h1>
<div>
1. Pemohon menyerahkan profil sekolah dilampiri fotocopy akreditasi sekolah dan fotocopy ijin operasional yang habis masa berlakunya <br/>
2. Petugas melakukan verifikasi<br/>
3. Petugas menerbitkan ijin operasional yang baru<br/>
4. Petugas menyerahkan ijin operasional yang baru ke pemohon<br/></div>
  </div>
  <img class="mutasi" src="img/ijin.png"/>
</div>

<?php  include 'footer.php'; ?>
  </div>
  <script src="js/parallax-plugin.js"></script>
  <script src="js/scrollSpeed.js"></script>
  <script type="text/javascript"> 
  	jQuery.scrollSpeed(100, 800);
  	</script>
  	<script type="text/javascript">
	$('section').parallax({
speed : 0.15
});
	$('section #button1').parallax({
speed : 0.1
});
</script>
</body>
</html>
