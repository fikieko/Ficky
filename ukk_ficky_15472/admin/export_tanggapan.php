<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Data Pengaduan dan Tanggapan.xls");
?>
<center>
    <h3>Laporan Pengaduan Dan Tanggapan <br> UKK RPL</h3>
</center>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIK</th>
            <th>Judul Laporan</th>
            <th>Isi Laporan</th>
            <th>Tanggapan</th>
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
                <td><?php echo $data['isi_laporan']; ?></td>
                <td><?php echo $data['tanggapan']; ?></td>
                <td><?php echo $data['status']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>