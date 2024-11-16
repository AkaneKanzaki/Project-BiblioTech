<div class="form-container">
    <h2>Tambah Data User</h2>
    <form action="/Perpustakaan/simpandatauser" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="Masukkan id" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username buku" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Tambah Data User</button>
            <br>
            <a href="/Perpustakaan/datauser" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
