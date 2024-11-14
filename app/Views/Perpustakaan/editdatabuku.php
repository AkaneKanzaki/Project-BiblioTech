<div class="form-container">
    <h2>Edit Data Buku</h2>
    <form action="/Perpustakaan/updatedatabuku/<?= $objekbuku['kode_buku'] ?>" method="POST" class="form-horizontal">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="nama_buku">Kode Buku</label>
            <input type="text" id="kode_buku" name="kode_buku" autofocus value="<?= $objekbuku['kode_buku'] ?>" placeholder="Masukkan kode buku" required>
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" id="nama_buku" name="nama_buku" value="<?= $objekbuku['nama_buku'] ?>" placeholder="Masukkan nama buku" required>
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= $objekbuku['tahun_terbit'] ?>" placeholder="Masukkan tahun terbit" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="<?= $objekbuku['penulis'] ?>" placeholder="Masukkan nama penulis" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" value="<?= $objekbuku['harga'] ?>" placeholder="Masukkan harga buku" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok" value="<?= $objekbuku['stok'] ?>" placeholder="Masukkan jumlah stok" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Edit Data Buku</button>
            <br>
            <a href="/Perpustakaan/datadatabuku" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
