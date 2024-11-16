<div class="form-container">
    <h2><?= $title; ?></h2>
    <form action="/Perpustakaan/simpandatapeminjaman" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="kode_peminjaman">Kode Peminjaman</label>
            <input type="text" id="kode_peminjaman" name="kode_peminjaman" placeholder="Masukkan kode peminjaman" required>
        </div>
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <select id="kode_buku" name="kode_buku" required>
                <option value="">Pilih Buku</option>
                <?php foreach ($objekbuku as $buku): ?>
                    <option value="<?= $buku['kode_buku']; ?>"><?= $buku['kode_buku']; ?> - <?= $buku['nama_buku']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id">ID Peminjam</label>
            <select id="id" name="id" required>
                <option value="">Pilih Peminjam</option>
                <?php foreach ($objekuser as $user): ?>
                    <option value="<?= $user['id']; ?>"><?= $user['id']; ?> - <?= $user['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_peminjaman">Tanggal Peminjaman</label>
            <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" required>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Tambah Peminjaman</button>
            <br>
            <a href="/Perpustakaan/datapeminjaman" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
