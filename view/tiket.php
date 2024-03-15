<!-- tiket tersedia -->
<div class="col-10">
    <table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Id Pemesanan</th>
        <th>No Kursi</th>
        <th>Kelas</th>
        <th>Keberangkatan</th>
    </tr>
    <?php
        $no = 1 ;
        $data = mysqli_query($connect, "SELECT * FROM tb_tiket");
        while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_pesan']; ?></td>
        <td><?php echo $d['no_kursi']; ?></td>
        <td><?php echo $d['kelas']; ?></td>
        <td><?php echo $d['jadwal']; ?></td>
    </tr>
    <?php
        }
    ?>
    </table>
</div>
<!-- tiket tersedia -->

<!-- Pesan sekarang -->
<div class="col-2">
    <button type="button" class="btn btn-primary">Primary</button>
</div>
<!-- Pesan sekarang -->