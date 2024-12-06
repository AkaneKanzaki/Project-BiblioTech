<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data Buku</h1>
            <form method="get" action="/Perpustakaan/databuku">
                <div class="search-bar">
                    <input type="text" name="search" placeholder="Cari buku..." value="<?= esc($search) ?>">
                    <button type="submit">Search</button>
                </div>
            </form>
            <a href="/Perpustakaan/tambahdatabuku" class="btn btn-primary">Tambah Data Buku</a>
            <br><br>
            <?php if(session()->getFlashdata('simpan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('simpan'); ?>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('hapus')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('hapus'); ?>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('ubah')): ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('ubah'); ?>
                </div>
            <?php endif; ?>
            <table class="table-custom">
                <thead>
                    <tr class="tabel-header">
                        <th scope="col">No</th>
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
                    <?php foreach ($objekbuku as $row) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= esc($row['kode_buku']); ?></td>
                            <td><?= esc($row['nama_buku']); ?></td>
                            <td><?= esc($row['tahun_terbit']); ?></td>
                            <td><?= esc($row['penulis']); ?></td>
                            <td><?= esc($row['harga']); ?></td>
                            <td><?= esc($row['stok']); ?></td>
                            <td>
                                <a href="/Perpustakaan/detaildatabuku/<?= esc($row['kode_buku']); ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links() ?>
        </div>
    </div>
</div>
