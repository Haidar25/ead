<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FORM PENGISIAN | PENGAJUAN MUTASI SISWA</title>
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tampil.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/list.css">
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
       LIST PENGADUAN MASYARAKAT
        </div>
    <div class="form">
        <div style="margin-bottom:15px;" align="right">
        <div class="table-responsive">
            <table class="table user-list">
                <thead>
                    <button class="submit"><a href="export_pengaduan.php">Export Data</a></button>
                    <tr>
                    <th><span>No</span></th>
                    <th><span>Nama</span></th>
                    <th><span>E-mail</span></th>
                        <th><span>Telepon</span></th>
                        <th><span>Judul</span></th>
                    <th><span>Pesan</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'system/connect.php';
                        $query="select * from pengaduan";
                        $result = $conn->query($query);
                        if (!$result) die ("Database access failed: " . $conn->error);

                        $rows = $result->num_rows;
                        for ($j = 0 ; $j < $rows ; ++$j)
                        {
                            $result->data_seek($j);
                            $row = mysqli_fetch_array($result);
                            echo <<<_END
                                <tr>
                                <td>
                                        $row[id]
                                    </td>
                                    <td>
                                        $row[nama]
                                    </td>
                                    <td>
                                        $row[email]
                                    </td>
                                    <td>
                                        $row[telp]
                                    </td>
                                    <td>
                                        $row[judul]
                                    </td>
                                    <td>
                                        $row[pesan]
                                    </td>
                                </tr>
_END;
                        }
                    ?>
                </tbody>
            </table>
        </div>
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