<div class="form-container">
    <h2>Tambah Data Buku</h2>
    <form action="/Perpustakaan/simpandatapeminjaman" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="kode_peminjaman">Kode Peminjaman</label>
            <input type="text" id="kode_peminjaman" name="kode_peminjaman" placeholder="Masukkan kode peminjaman" required>
        </div>
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input type="text" id="kode_buku" name="kode_buku" placeholder="Masukkan kode buku" required>
        </div>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="Masukkan id peminjam" required>
        </div>
        <div class="form-group">
            <label for="tgl_peminjaman">Tanggal Peminjaman</label>
            <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" placeholder="Masukkan tanggal peminjaman" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" placeholder="Masukkan tanggal pengembalian" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Tambah Buku</button>
            <br>
            <a href="/Perpustakaan/datapeminjaman" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
