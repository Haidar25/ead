<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Berita | Diknas Malang</title>
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
  			BERITA
  			</div>
  		</div>			
  </section>
	
  <div class="berita">
    <div class="container">
      <div class="news-feed">
        <div class="feed blog">
          <div class="newsg news4">
          </div>
          <div class="news-descg">
          <h1>Kelulusan Siswa SMA/ SMK sederajat untuk Daerah Malang2016</h1>
          <span><i class="fa fa-user"></i>&nbsp;&nbsp;admin</span>
          <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;14 March 2016</span>
          <span><i class="fa fa-comments"></i>&nbsp;&nbsp;2 Comments</span>
          <p> Siswa-siswi SMA/MA/SMK sederajat harus memeras otaknya lebih dalam pada Ujian Nasional (UN) 2015. Karena jika hasil UN-nya berada di bawah standar kompetensi minimal yakni 5,5 (lima koma lima), mereka tidak bisa mengikuti Seleksi Nasional Masuk Perguruan Tinggi Negeri (SNMPTN). </p>
          </div>
         
        </div>
         <div class="comment">
         <h1>Comments</h1>
          	<img src="img/idar.jpg"/>
          	<h2>IDAR</h2>
          	<p>Sebaiknya para siswa jangan terlalu bersenang senang setelah UN, karena jalan mereka masih panjang  semangatttt </p>
          </div>
      </div>
<section class="ac-container">
        <div>
          <input id="ac-1" name="accordion-1" type="radio" checked />
          <label for="ac-1">Berita Pilihan<i class="fa fa-chevron-right"></i></label>
          <article class="ac-medium">
            <div class="sd-berita"><img src="img/sd1.jpg"/><div><a href="#">Buku Ideal Siswa</a></div></div>
            <div class="sd-berita"><img src="img/sd-2.jpg"/><div><a href="#">Membaca Penting</a></div></div>
            <div class="sd-berita"><img src="img/sd3.jpg"/><div><a href="#">Pendidikan Tinggi</a></div></div>
            <div class="sd-berita"><img src="img/sd4.jpg"/><div><a href="#">Fasilitas Pendidikan</a></div></div>
            <div class="sd-berita"><img src="img/sd5.jpg"/><div><a href="#">Tips Kerja Sama Tim</a></div></div>
            <div class="sd-berita"><img src="img/sd6.jpg"/><div><a href="#">Refreshing Tiap Siswa</a></div></div>
            <div class="sd-berita"><img src="img/sd7.jpg"/><div><a href="#">Belajar Setiap Hari</a></div></div>
            <div class="sd-berita"><img src="img/sd8.jpg"/><div><a href="#">Bermain dan Belajar</a></div></div>
          </article>
        </div>
        <div>
          <input id="ac-3" name="accordion-1" type="radio" />
          <label for="ac-3">Tag<i class="fa fa-chevron-right"></i></label>
          <article class="ac-large">
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Pendidikan</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Buku</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Guru</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Siswa</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Kelas</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Jadwal</a></div>
            <div class="tag"><a href="#"><i class="fa fa-tag"></i>Event</a></div>
          </article>
        </div>
        <div>
          <input id="ac-4" name="accordion-1" type="radio" />
          <label for="ac-4">Categories<i class="fa fa-chevron-right"></i></label>
          <article class="ac-large">
          <ul class="categories">
            <li><a href="#"><i class="fa fa-bookmark"></i>Pendidikan</a></li>
            <li><a href="#"><i class="fa fa-bookmark"></i>Diknas</a></li>
            <li><a href="#"><i class="fa fa-bookmark"></i>Siswa</a></li>
          </ul>

          </article>
    </div>
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
