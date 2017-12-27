<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Pengaduan Masyarakat | Diknas Malang</title>
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
	
<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
        PENGADUAN MASYARAKAT
        </div>
    <div class="pLeft">
      <img src="img/pengaduan.png">
    </div>
    <div class="form">
      <form action="simpan.php" method="post">
        <input name ="nama" type="text" id="nama" placeholder="Nama"><br/>
        <input name ="email" type="text" id="email" placeholder="E-mail"><br/>
          <input name ="telp" type="text" id="telp" placeholder="Telepon"><br/>
        <input name ="judul" type="text" id="judul" placeholder="Judul"><br/>
        <input name ="pesan" type="textarea" id="pesan" placeholder="Pesan"><br/>
        <button>Submit</button><button><a href="tampil_pengaduan.php">Tampilkan Data</a></button>
      </form>
    </div>
  </div>
</section>

<?php  include 'footer.php'; ?>
  </div>
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
