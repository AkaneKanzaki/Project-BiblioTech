<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data Peminjaman</h1>
            <table class="table-custom">
                <thead>
                    <tr class="tabel-header">
                        <th scope="col">No</th>
                        <th scope="col">Kode Peminjaman</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Tanggal Pengembalian</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <a href="/Perpustakaan/tambahdatapeminjaman" class="btn btn-primary">Tambah Data Peminjaman</a>
                    <?php if (session()->getFlashdata('simpan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('simpan'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('hapus')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('hapus'); ?>
                        </div>
                    <?php endif; ?>
                    <?php $no = 1; ?>
                    <?php foreach ($objekpeminjaman as $row) :?>
                        <tr>
                            <th scope="row"><?=$no++;?></th>
                            <td><?=$row['kode_peminjaman'];?></td>
                            <td><?=$row['nama_buku'];?></td>
                            <td><?=$row['nama'];?></td>
                            <td><?=$row['tgl_peminjaman'];?></td>
                            <td><?=$row['tgl_pengembalian'];?></td>
                            <td><?=$row['status'];?></td>
                            <th scope="col"><a href="/Perpustakaan/detaildatapeminjaman/<?= $row['kode_peminjaman']; ?>/<?= urlencode($row['nama_buku']); ?>" class="btn btn-primary">Detail</a></th>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>