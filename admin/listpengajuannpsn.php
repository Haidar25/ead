<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
       <span class="bold">LIST PENGAJUAN NPSN</span>
        </div>
    <div class="form">
        <div class="table-responsive">
            <table class="table user-list">
                <thead>
                    <tr>
                    <th><span>No SK</span></th>
                    <th><span>Nama Sekolah</span></th>
                        <th><span>Alamat</span></th>
                    <th><span>Kepala Sekolah</span></th>
                        <th><span>Email</span></th>
                        <th><span>Telepon</span></th>
                        <th><span>Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../system/connect.php';
                        $query="select * from npsn";
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
                                        $row[nosk]
                                    </td>
                                    <td>
                                        $row[nama_sekolah]
                                    </td>
                                    <td>
                                        $row[alamat]
                                    </td>
                                    <td>
                                        $row[kepala_sekolah]
                                    </td>
                                    <td>
                                        $row[email]
                                    </td>
                                    <td>
                                        $row[telp]
                                    </td>
_END;
                            if($row['status']==0){
                                echo "<td>
                                        <a href=setujuipengajuannpsn.php?id=$row[nosk]>Setujui</a>
                                    </td>
                                </tr>";
                            }else{
                                echo "<td>
                                        Tersetujui
                                    </td>
                                </tr>";
                            }
                        }
                    ?>
					
                </tbody>
            </table>
        </div>
    </div>
  </div>
</section>