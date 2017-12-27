<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Pengajuan NPSN | Diknas Malang</title>
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
  			PENGAJUAN NPSN
  			</div>
  		</div>			
  </section>
	
<div class="ijin-operasional">
  <div class="container">
<h1>PROSEDUR PENGAJUAN NPSN</h1>
<div>
1. Pemohon mengunduh formulir pengajuan NPSN di <a href="http://referensi.data.kemdikbud.go.id">http://referensi.data.kemdikbud.go.id</a><br/>
2. Pemohon mengisi formulir pengajuan NPSN<br/>
3. Pemohon menyerahkan formulir pengajuan NPSN yang dilampiri dengan surat keputusan pendirian sekolah (dari yayasan) dan surat ijin operasional sekolah (dari Dinas Pendidikan) ke operator di Sub. Bag. Penyusunan Program <br/>
4. Operator melakukan verifikasi<br/> 
5. Operator mengunggah pengajuan melalui aplikasi yang terhubung dengan Kemdikbud <br/>
6. Operator menghubungi pemohon setelah NPSN diterbitkan oleh Kemdikbud <br/>
7. Operator menyerahkan NPSN ke pemohon<br/>
</div>
  </div> 
  <img class="mutasi" src="img/npsn.png"/>
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
