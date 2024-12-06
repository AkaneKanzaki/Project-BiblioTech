<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data User</h1>
            <form method="get" action="/Perpustakaan/datauser">
                <div class="search-bar">
                    <input type="text" name="search" placeholder="Cari user..." value="<?= esc($search) ?>">
                    <button type="submit">Search</button>
                </div>
            </form>
            <a href="/Perpustakaan/tambahdatauser" class="btn btn-primary mb-3">Tambah Data User</a>
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
            <?php if (session()->getFlashdata('ubah')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('ubah'); ?>
                </div>
            <?php endif; ?>
            <table class="table-custom">
                <thead>
                    <tr class="tabel-header">
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + ($pager->getCurrentPage() - 1) * $pager->getPerPage(); ?>
                    <?php foreach ($objekuser as $row) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= esc($row['id']); ?></td>
                            <td><?= esc($row['username']); ?></td>
                            <td><?= esc($row['nama']); ?></td>
                            <td>
                                <a href="/Perpustakaan/detaildatauser/<?= esc($row['id']); ?>" class="btn btn-primary">Detail</a>
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
