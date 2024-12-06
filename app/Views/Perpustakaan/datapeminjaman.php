<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data Peminjaman</h1>
            <form method="get" action="/Perpustakaan/datapeminjaman">
                <div class="search-bar">
                    <input type="text" name="search" placeholder="Cari peminjaman..." value="<?= esc($search) ?>">
                    <button type="submit">Search</button>
                </div>
            </form>
            <a href="/Perpustakaan/tambahdatapeminjaman" class="btn btn-primary mb-3">Tambah Data Peminjaman</a>
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
                    <?php $no = 1 + ($pager->getCurrentPage() - 1) * $pager->getPerPage(); ?>
                    <?php foreach ($objekpeminjaman as $row) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= esc($row['kode_peminjaman']); ?></td>
                            <td><?= esc($row['nama_buku']); ?></td>
                            <td><?= esc($row['nama']); ?></td>
                            <td><?= esc($row['tgl_peminjaman']); ?></td>
                            <td><?= esc($row['tgl_pengembalian']); ?></td>
                            <td><?= esc($row['status']); ?></td>
                            <td>
                                <a href="/Perpustakaan/detaildatapeminjaman/<?= esc($row['kode_peminjaman']); ?>/<?= urlencode($row['nama_buku']); ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pagination justify-content-center">
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</div>