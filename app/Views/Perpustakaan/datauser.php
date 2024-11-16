<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data User</h1>
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
                    <a href="/Perpustakaan/tambahdatauser" class="btn btn-primary">Tambah Data User</a>
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
                    <?php $no = 1; ?>
                    <?php foreach ($objekuser as $row) :?>
                        <tr>
                            <th scope="row"><?=$no++;?></th>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['username'];?></td>
                            <td><?=$row['nama'];?></td>
                            <th scope="col"><a href="/Perpustakaan/detaildatauser/<?= $row['id']; ?>" class="btn btn-primary">Detail</a></th>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>