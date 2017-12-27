<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
       LIST MUTASI MURID
        </div>
      <div class="pLeft">
      <img src="../img/npsn.png">
    </div>
    <div class="form">
        <div class="table-responsive">
            <table class="table user-list">
                <thead>
                    <tr>
                    <th><span>ID</span></th>
                    <th><span>NISN</span></th>
                        <th><span>No Mutasi</span></th>
                    <th><span>NPSN</span></th>
                        <th><span>Tujuan</span></th>
                        <th><span>Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../system/connect.php';
                        $query="select * from mutasi";
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
                                        $row[nisn]
                                    </td>
                                    <td>
                                        $row[nomutasi]
                                    </td>
                                    <td>
                                        $row[npsn]
                                    </td>
                                    <td>
                                        $row[tujuan]
                                    </td>
                                    <td>
                                        <a href="deletemutasi.php?id=$row[id]">Hapus</a>
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