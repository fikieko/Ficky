<div class="container">
    <div class="card">
        <div class="card-header">
            Data Tanggapan
        </div>
        <div class="card-body">
            <a href="export_tanggapan.php" class="btn btn-success" target="_blank">Export Excel</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Judul</th>
                        <th>Tanggapan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM tanggapan a INNER JOIN pengaduan b ON a.id_pengaduan=b.id_pengaduan");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['tgl_tanggapan']; ?></td>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['judul_laporan']; ?></td>
                            <td><?php echo $data['tanggapan']; ?></td>
                            <td>
                                <?php
                                if ($data['status'] == 'proses') {
                                    echo "<span class='badge bg-primary'>Proses</span>";
                                } elseif ($data['status'] == 'selesai') {
                                    echo "<span class='badge bg-success'>Selesai</span>";
                                } else {
                                    echo "<span class='badge bg-danger'>Menunggu</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_tanggapan'] ?>">Hapus</a>
                                <div class="modal fade" id="hapus<?php echo $data['id_tanggapan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_data.php" method="POST">
                                                    <input type="hidden" name="id_tanggapan" class="form-control" value="<?php echo $data['id_tanggapan'] ?>">
                                                    <p>Apakah anda yakin akan menghapus tanggapan <br> <?php echo $data['judul_laporan'] ?> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="hapus_tanggapan" class="btn btn-danger">Hapus</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>