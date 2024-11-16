<div class="form-container">
    <h2>Tambah Data Buku</h2>
    <form action="/Perpustakaan/simpandatabuku" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input type="text" id="kode_buku" name="kode_buku" placeholder="Masukkan kode buku" required>
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" id="nama_buku" name="nama_buku" placeholder="Masukkan nama buku" required>
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" placeholder="Masukkan nama penulis" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" placeholder="Masukkan harga buku" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok" placeholder="Masukkan jumlah stok" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Tambah Buku</button>
            <br>
            <a href="/Perpustakaan/databuku" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
