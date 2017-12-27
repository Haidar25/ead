  <link rel="stylesheet" href="css/header.css"/>
  <div class="menu2">
  	<div class="container">
  		<div class="logo">
  			<img src="img/logo.png"/>
  			<div>DINAS <span class="bold">PENDIDIKAN</span>
			<div id="logosub">KOTA <span class="bold">MALANG</span></div>
  			</div>

  		</div>
  		<a href="#footer_nav" onclick="toggleNav(); return false;"><div class="menu_button"></div></a>
      
    		<ul>
                <li><a href="form_mutasi.php">ISI FORMULIR</a></li>
    			<li><a href="system/logout.php">LOGOUT</a></li>
    		</ul>
      

  	</div>

  		<ul class="mobile-res" id="menu">
  			<li><a href="index.php">HOME</a></li>
        <li><a href="berita.php">BERITA</a></li>
        <li><a href="#footer_nav" onclick="toggleNav2(); return false;">LAYANAN</a>
               <ul id="submenu">
                 <li><a href="pengaduan_masyarakat.php">Pengaduan Masyarakat</a> 
                 </br>
                 <a href="pengajuan_npsn.php">Pengajuan NPSP</a>
                 </br>
                 <a href="ijin_operasional.php">Ijin Operasional</a>
                 </br>
                 <a href="mutasi_siswa.php">Mutasi Siswa</a>
                  </li>
              </ul>
        </li>
        <li><a href="profil.php">PROFIL</a></li>
  		</ul>
  </div>
    <script type="text/javascript">
            var originalNavClasses;

            function toggleNav2() {
                var elem = document.getElementById('submenu');
                var classes = elem.className;
                if (originalNavClasses === undefined) {
                    originalNavClasses = classes;
                }
                elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
            } 
  </script>
    <script type="text/javascript">
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 110) {
                    $(".menu2").css('background', 'url("img/header2.png")'); 
                    $(".menu2").css('background-size', 'cover'); 
                    $(".menu2").css('background-position-x', '0px'); 
                    $(".menu2").css('background-position-y', '-400px'); 
                    $(".menu2").css('box-shadow', '0 1px 4px 0 rgba(69, 90, 100, 0.16)'); 
                } else {
                    $(".menu2").css('background', 'transparent');                             
                    $(".menu2").css('box-shadow', 'none'); 
                }
            });
  </script>