<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Profil | Diknas Malang</title>
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/swiper.min.css">  
  <link rel="stylesheet" type="text/css" href="css/profile.css" />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>  
  <script src="js/jquery.min.js"></script>
  <script src="js/scroll.js"></script>
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

        
        <div class="container2 demo-1">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2 class="sl-img pg-hidden"><img src="img/zubaidah.jpg"></h2>
              <h2 class="pr-1">Dra. ZUBAIDAH ,MM.</h2>
              <blockquote class="pr-2"><p>KEPALA DINAS PENDIDIKAN</p></blockquote>
            </div>
          </div>
          
          <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="deco pg-hidden"><img src="img/business.svg"></div>
              <h2>VISI</h2>
              <blockquote><p>Terwujudnya Insan Kota Malang yang Cerdas. Bermartabat dan mampu bersaing di era global</blockquote>
            </div>
          </div>
          
          <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco pg-hidden"><img src="img/business2.svg"></div>
              <h2>MISI</h2>
              <blockquote><p>“Mewujudkan Masyarakat yang terdidik berdasarkan nilai-nilai spritual yang agamis, toleran dan setara” <br/>
“Mewujudkan Pendidikan Kota Malang yang Berkualitas, dan Terjangkau bagi Masyarakat” <br/>
“Mewujudkan Kualitas Tata Kelola dan Pelayanan Pendidikan” <br/> </p>
 </blockquote>
            </div>
          </div>
          
          <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco pg-hidden"><img src="img/technology.svg"></div>
              <h2>TUGAS POKOK</h2>
              <blockquote><p>Dinas Pendidikan Kota Malang mempunyai tugas pokok menyusun dan melaksanakan kebijakan daerah di bidang pendidikan sesuai dengan kebijakan Kepala Daerah Kota Malang.</p></blockquote>
            </div>
          </div>
        
        <nav id="nav-arrows" class="nav-arrows">
          <span class="nav-arrow-prev">Previous</span>
          <span class="nav-arrow-next">Next</span>
        </nav>

        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->

        </div>

<?php  include 'footer.php'; ?>
  </div>
    <script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="js/jquery.slitslider.js"></script>
    <script type="text/javascript"> 
      $(function() {
      
        var Page = (function() {

          var $navArrows = $( '#nav-arrows' ),
            $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':last' ).on( 'click', function() {

                slitslider.next();
                return false;

              } );

              $navArrows.children( ':first' ).on( 'click', function() {
                
                slitslider.previous();
                return false;

              } );

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();

        /**
         * Notes: 
         *  
         * example how to add items:
         */

        /*
        
        var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
        
        // call the plugin's add method
        ss.add($items);

        */
      
      });
    </script>

  <script src="js/scrollSpeed.js"></script>
</body>
</html>
