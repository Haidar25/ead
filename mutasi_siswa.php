<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Mutasi Siswa | Diknas Malang</title>
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
  			MUTASI SISWA
  			</div>
  		</div>			
  </section>
	
<div class="ijin-operasional">
  <div class="container">
<h1>PROSEDUR MUTASI SISWA</h1>
<div>
1. Wali murid / pemohon membawa surat permohonan ke sekolah asal<br/>
2. Sekolah asal melakukan verifikasi dan menyetujui<br/>
3. Sekolah asal menerbitkan surat mutasi<br/>
4. Sekolah asal menyerahkan surat mutasi dan rapor ke pemohon<br/>
5. Pemohon membawa surat mutasi dan rapor ke sekolah tujuan<br/>
6. Sekolah tujuan melakukan verifikasi dan menyetujui<br/>
7. Sekolah tujuan menerbitkan surat keterangan diterima<br/>
8. Pemohon membawa surat mutasi, keterangan diterima dan fotocopy rapor ke petugas Dinas Pendidikan<br/>
9. Petugas melakukan verifikasi<br/>
10. Petugas menerbitkan surat rekomendasi<br/>
11. Petugas menyerahkan surat rekomendasi ke pemohon<br/>
12. Pemohon membawa surat rekomendasi ke sekolah tujuan<br/>
</div> 
  </div>
  <img class="mutasi" src="img/mutasi.png">
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
