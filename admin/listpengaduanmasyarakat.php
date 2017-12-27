<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
       <span class="bold">LIST PENGADUAN MASYARAKAT</span>
        </div>
    <div class="form">
        <div class="table-responsive">
            <table class="table user-list">
                <thead>
                    <tr>
                    <th><span>Nama</span></th>
                    <th><span>E-mail</span></th>
                        <th><span>Telepon</span></th>
                        <th><span>Judul</span></th>
                    <th><span>Pesan</span></th>
                     <th><span>Action</span></th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../system/connect.php';
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
                                    <td>
                                        <a href="deletepengaduan.php?id=$row[id]">Hapus</a>
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