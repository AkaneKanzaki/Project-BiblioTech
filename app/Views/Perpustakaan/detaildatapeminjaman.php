<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card text-bg-info mb-6" style="max-width: 30rem;" align="center">
                <div class="card-header">
                    <h1>Detail Data Peminjaman</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Peminjam : <?= $objekpeminjaman['nama'] ?></h5>
                    <p class="card-text">Nama Buku : <?= $objekpeminjaman['nama_buku'] ?></p>
                    <p class="card-text">Tanggal Peminjaman : <?= $objekpeminjaman['tgl_peminjaman'] ?></p>
                    <p class="card-text">Tanggal Pengembalian : <?= $objekpeminjaman['tgl_pengembalian'] ?></p>
                    <a href="/Perpustakaan/editdatapeminjaman/<?= $objekpeminjaman['kode_peminjaman'] ?>"class="btn btn-primary">Edit Data</a><br>
                    <a href="/Perpustakaan/hapusdatapeminjaman/<?= $objekpeminjaman['kode_peminjaman'] ?>"class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?');">Hapus Data</a><br>
                    <a href="/Perpustakaan/datapeminjaman" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>