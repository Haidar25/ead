<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
    <?php
    include 'system/connect.php';
    ?>
  <title>Dinas Pendidikan Malang</title>

  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/image-hover.css"/>
  
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/swiper.min.css">  
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/scroll.js"></script>
  <script src="js/wow.js"></script>
    <script src="js/jquery.leanModal.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
  <script type="text/javascript">
  
  //<![CDATA[
      $(window).load(function() { // makes sure the whole site is loaded
      $('#status').delay(350).fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(350).css({'overflow':'visible'});
    })
  //]]>
</script> 
</head>

<body>
<?php  include 'header.php'; ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <section class="imagefull" id="one">
  	<div class="container">
  		<div class="caption1">
  			MASA DEPAN <span class="bold">MALANG</span>
  			<div class="caption2">
  			ADA DI TANGAN <span class="bold">KITA</span>
  			</div>
  		</div>
      <div class="search-home">
          <i class="fa fa-search"></i>
          <form action="search.php" method="post">
          <input placeholder="search" type="text" name="search"/><br/>
        <input type="submit" name="submit" value="cari">
              </form>
               </div>
      <div class="arrow">
        <a href="#info" class="scroll"><img src="img/arrows.svg"/></a>
      </div>		
  	</div>		
  </section>

  <div class="information" id="info">
  	<div class="container">
	  <h1>Services</h1>
	  <ul class="services">
	  	<li class="serv">
      <section class="wow fadeInUp">
	  		<img src="img/chat.svg"/>
	  		<span>Pengaduan Masyarakat</span>
	  		<a href="pengaduan_masyarakat.php"><button>More Infomation</button></a>
      </section>
	  	</li>
	  	<li class="serv">
      <section class="wow fadeInUp">
	  		<img src="img/clipboard.svg"/>
	  		<span>Pengajuan NPSN</span>
	  		<a id=modal_triggerNpsn href=#modalLoginNpsn><button type="button" class="btn btn-primary">LOGIN</button></a>
        </section>
	  	</li>
	  	<li class="serv">
      <section class="wow fadeInUp">
	  		<img src="img/money.svg"/>
	  		<span>Ijin Operasional</span>
	  		<a id=modal_triggerIjin href=#modalLoginIjin><button type="button" class="btn btn-primary">LOGIN</button></a>
        </section>
	  	</li>
	  	<li class="serv">
      <section class="wow fadeInUp">
	  		<img src="img/people.svg"/>
	  		<span>Mutasi Siswa</span>
	  		<a id=modal_triggerMutasi href=#modalLoginMutasi><button type="button" class="btn btn-primary">LOGIN</button></a>
        </section>
	  	</li>
	  </ul>

	  </div>
	</div>	

<section class="visimisi three">
  <div class="container">
  <section class="wow fadeInRight">
    <img src="img/visimisi-home.png">
</section>
<section class="wow fadeInLeft">    
    <div class="visimisi-desc">
      <h2>Visi</h2>
      <span>“Terwujudnya Insan Kota Malang yang Cerdas. Bermartabat dan mampu bersaing di era global”</span>
      <h2>Misi</h2>
      <span>
      <ol>
     <li> “Mewujudkan Masyarakat yang terdidik berdasarkan nilai-nilai spritual yang agamis, toleran dan setara”</li>
<li>“Mewujudkan Pendidikan Kota Malang yang Berkualitas, dan Terjangkau bagi Masyarakat”</li>
<li>“Mewujudkan Kualitas Tata Kelola dan Pelayanan Pendidikan”</li>
</ol>
</span>
    </div>
    </section>
  </div>
</section>
    
  <div class="program">
    <div class="container">
      <h1>Program</h1>
      <ul>
        <li>
        <section class="wow fadeInLeft" data-wow-delay="0.3s">
          <div id="prog1" class="prog hover-fade">
            <div class="b1">
            <div class="b2">
              <p><img src="img/chain.png"></p>
            </div>
            
          </div>
          </div>
          <span>
            <h2>Festival Buku Malang</h2>
            Festival buku Malang adalah festival yang diselenggarakan setiap 6 bulan sekali
dalam rangka untuk menarik minat baca masyarakat kota Malang dan juga untuk mewujudkan
masyarakat Malang yang sadar akan pendidikan dan berpengetahuan tinggi.
          </span>
          </section>
        </li>
        <li>
        <section class="wow fadeInLeft">
          <div id="prog2" class="prog hover-fade">
            <div class="b1">
            <div class="b2">
              <p><img src="img/chain.png"></p>
            </div>
            
          </div>
          </div>
          <span>
            <h2>Rekruitmen Industri SMK</h2>
Rekruitmen Industri SMK adalah program dari pemerintah kota Malang
dengan tujuan agar lulusan siswa SMK bisa mendapatkan pekerjaan yang semestinya
dan juga untuk menyiapkan siswa SMK menjadi SDM yang handal
          </span>
          </section>          
        </li>
        <li>
        <section class="wow fadeInRight">
          <div id="prog3" class="prog hover-fade">
            <div class="b1">
            <div class="b2">
              <p><img src="img/chain.png"></p>
            </div>
            
          </div>
          </div>
          <span>
            <h2>Ektrakulikuler Bersama</h2>
            Ekstrakulikuler Bersama adalah program pemerintah kota Malang yang diselenggarakan
setiap sebulan sekali dengan peserta dari berbagai SMA SMK sederajat se-Kota Malang
dengan tujuan meningkatkan hubungan antara siswa-siswi
          </span>
          </section>
        </li>
        <li>
        <section class="wow fadeInRight" data-wow-delay="0.3s">
          <div id="prog4" class="prog hover-fade">
            <div class="b1">
            <div class="b2">
              <p><img src="img/chain.png"></p>
            </div>
            </div>
          </div>
          <span>
            <h2>Imunisasi Siswa</h2>
            Imunisasi siswa adalah program pemerintah kota Malang yang diselenggarakan dengan tujuan untuk 
mewujudkan siswa - siswi yang sehat, cerdas serta mampu menghadapi kuatnya laju arus informasi
yang begitu dasyat
          </span>
          </section>
        </li>
      </ul>
    </div>
  </div>
<!--
  <section class="tahukahanda" id="three">
    <div class="container">
      <section class="wow tada"><h1>Tahukah Anda?</h1></section>
      <span>Malang adalah salah satu kota pendidikan
terbesar di Indonesia</span>
    </div>
  </section>
-->
    <div class="home-berita">
    <div class="container">
      <h1>Berita <br/>
      </h1>
      <div class="wrap-content">
      <div class="wrapper">
      <section class="col7 wow fadeInLeft">
        <div class="news-highlight ">
          <div class="news-img news1">
            <div class="date-card"> 2 September 2015</div>
          </div>
          <h2>Festival Buku Malang</h2>
        </div>
      </section>
      <section class="col7 wow fadeInRight">
        <div class="news">
          <div class="news-img news2">
            <div class="date-card"> 13 Oktober 2015</div>
          </div>
          <h2>LKS Malang</h2>
        </div>
        <div class="news">
          <div class="news-img wow news3">
            <div class="date-card"> 15 April 2016</div>
          </div>
          <h2>Ekstrakulikuler</h2>
        </div>
        <div class="news">
          <div class="news-img wow news4">
            <div class="date-card"> 23 Maret 2016</div>
          </div>
          <h2>Festival Menulis Malang</h2>
        </div>
        <div class="news">
          <div class="news-img wow news5">
            <div class="date-card">1 April 2016</div>
          </div>
          <h2>Belajar Fun Malang</h2>
        </div>
      </section>
      </div>
      </div>
    </div>
  </div>




<section class="home-stat" id="two">
  	<div class="container">
		<ul class="statistik">
	  	<li class="stat">
	  		<img src="img/statistik1.svg"/>
	  		<h3>123000</h3>
	  		<span>Siswa</span>
	  	</li>
	  	<li class="stat">
	  		<img src="img/statistik2.svg"/>
	  		<h3>42</h3>
	  		<span>Program Pendidikan</span>
	  	</li>
	  	<li class="stat">
	  		<img src="img/statistik3.svg"/>
	  		<h3>321</h3>
	  		<span>Beasiswa</span>
	  	</li>
	  	<li class="stat">
	  		<img src="img/statistik4.svg"/>
	  		<h3>1923</h3>
	  		<span>Prestasi</span>
	  	</li>
	  </ul>  		
  	</div>
  </section>


<?php  include 'footer.php'; ?>
<?php include 'loginnpsn.php'; ?>
<?php include 'loginijin.php'; ?>
    <?php include 'loginmutasi.php'; ?>
    <script type="text/javascript">
        $("#modal_triggerNpsn").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

        $(function(){
            // Calling Login Form
            $("#modal_triggerNpsn").click(function(){
                $(".user_login").show();
                return false;
            });

            // Going back to Social Forms
            $(".back_btn").click(function(){
                $(".user_login").hide();
                return false;
            });

        });
    </script>
    <script type="text/javascript">
        $("#modal_triggerIjin").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

        $(function(){
            // Calling Login Form
            $("#modal_triggerIjin").click(function(){
                $(".user_login").show();
                return false;
            });

            // Going back to Social Forms
            $(".back_btn").click(function(){
                $(".user_login").hide();
                return false;
            });

        });
    </script>
    <script type="text/javascript">
        $("#modal_triggerMutasi").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

        $(function(){
            // Calling Login Form
            $("#modal_triggerMutasi").click(function(){
                $(".user_login").show();
                return false;
            });

            // Going back to Social Forms
            $(".back_btn").click(function(){
                $(".user_login").hide();
                return false;
            });

        });
    </script>
  <script src="js/parallax-plugin.js"></script>
  <script src="js/scrollSpeed.js"></script>
      <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script> 
  <script type="text/javascript">
    new WOW().init();
  </script>
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
