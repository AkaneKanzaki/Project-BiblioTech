<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card text-bg-info mb-6" style="max-width: 30rem;" align="center">
                <div class="card-header">
                    <h1>Detail Data Buku</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Buku : <?= $objekbuku['nama_buku'] ?></h5>
                    <p class="card-text">Penulis : <?= $objekbuku['penulis'] ?></p>
                    <p class="card-text">Tahun Terbit : <?= $objekbuku['tahun_terbit'] ?></p>
                    <p class="card-text">Harga : <?= $objekbuku['harga'] ?></p>
                    <p class="card-text">Stok : <?= $objekbuku['stok'] ?></p>
                    <a href="/Perpustakaan/editbuku/<?= $objekbuku['kode_buku'] ?>"class="btn btn-primary">Edit Data</a><br>
                    <a href="/Perpustakaan/hapusbuku/<?= $objekbuku['kode_buku'] ?>"class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?');">Hapus Data</a><br>
                    <a href="/Perpustakaan/databuku" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>