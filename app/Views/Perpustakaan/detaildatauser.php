<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card text-bg-info mb-6" style="max-width: 30rem;" align="center">
                <div class="card-header">
                    <h1>Detail Data User</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">ID : <?= $objekuser['id'] ?></h5>
                    <p class="card-text">Username : <?= $objekuser['username'] ?></p>
                    <p class="card-text">Nama : <?= $objekuser['nama'] ?></p>
                    <a href="/Perpustakaan/editdatauser/<?= $objekuser['id'] ?>"class="btn btn-primary">Edit Data</a><br>
                    <a href="/Perpustakaan/hapusdatauser/<?= $objekuser['id'] ?>"class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?');">Hapus Data</a><br>
                    <a href="/Perpustakaan/datauser" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>