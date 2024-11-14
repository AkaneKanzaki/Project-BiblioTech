<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data Buku</h1>
            <table class="table-custom">
                <thead>
                    <tr class="tabel-header">
                        <th scope="col">#</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($objekbuku as $row) :?>
                        <tr>
                            <th scope="row"><?=$no++;?></th>
                            <td><?=$row['kode_buku'];?></td>
                            <td><?=$row['nama_buku'];?></td>
                            <td><?=$row['tahun_terbit'];?></td>
                            <td><?=$row['penulis'];?></td>
                            <td><?=$row['harga'];?></td>
                            <td><?=$row['stok'];?></td> 
                            <th scope="col"><a href="/Perpustakaan/detailbuku/<?=$row['kode_buku'];?>" class="btn btn-primary">Detail</a></th>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>