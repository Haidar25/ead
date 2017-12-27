<section class="pengaduan-masyarakat imagefull2" id="one">
  <div class="container">
        <div class="caption1">
       <span class="bold">LIST IJIN OPERASIONAL</span>
        </div>
    <div class="form">
        <div class="table-responsive">
            <table class="table user-list">
                <thead>
                    <tr>
                    <th><span>ID</span></th>
                    <th><span>Nama Kepala Sekolah</span></th>
                        <th><span>Nama Sekolah</span></th>
                    <th><span>No SK</span></th>
                        <th><span>File</span></th>
                        <th><span>Action</span></th>
                    </tr>
                </thead>
                <tbody>
				
                    <?php
                        include '../system/connect.php';
                        $query="select * from ijin_operasional";
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
                                        $row[nama_kepsek]
                                    </td>
                                    <td>
                                        $row[nama_sekolah]
                                    </td>
                                    <td>
                                        $row[nosk]
                                    </td>
                                    <td>
                                        $row[upload_file]
                                    </td>
_END;
                            if($row['status']==0){
                                echo "<td>
                                        <a href=setujuiijinoperasional.php?id=$row[nosk]>Setujui</a>
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