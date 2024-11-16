<div class="form-container">
    <h2>Edit Data User</h2>
    <form action="/Perpustakaan/updatedatauser/<?= $objekuser['id'] ?>" method="POST" class="form-horizontal">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" autofocus value="<?= $objekuser['id'] ?>" placeholder="Masukkan kode buku" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= $objekuser['username'] ?>" placeholder="Masukkan nama buku" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= $objekuser['nama'] ?>" placeholder="Masukkan tahun terbit" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Edit Data User</button>
            <br>
            <a href="/Perpustakaan/datauser" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
