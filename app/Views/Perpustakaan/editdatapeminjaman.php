<div class="form-container">
    <h2>Edit Data Peminjaman</h2>
    <form action="/Perpustakaan/updatedatapeminjaman/<?= $objekpeminjaman['kode_peminjaman'] ?>" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="kode_peminjaman">Kode Peminjaman</label>
            <input type="text" id="kode_peminjaman" name="kode_peminjaman" value="<?= $objekpeminjaman['kode_peminjaman'] ?>" placeholder="Masukkan kode peminjaman" required>
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <select id="nama_buku" name="nama_buku" class="custom-select" required>
                <option value="<?= $objekpeminjaman['nama_buku'] ?>" selected><?= $objekpeminjaman['nama_buku'] ?></option>
                <?php foreach ($objekbuku as $buku): ?>
                    <option value="<?= $buku['nama_buku'] ?>"><?= $buku['nama_buku'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Nama Peminjam</label>
            <select id="nama" name="nama" class="custom-select" required>
                <option value="<?= $objekpeminjaman['nama'] ?>" selected><?= $objekpeminjaman['nama'] ?></option>
                <?php foreach ($objekuser as $user): ?>
                    <option value="<?= $user['nama'] ?>"><?= $user['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_peminjaman">Tanggal Peminjaman</label>
            <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" value="<?= $objekpeminjaman['tgl_peminjaman'] ?>" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" value="<?= $objekpeminjaman['tgl_pengembalian'] ?>">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="custom-select" required>
                <option value="<?= $objekpeminjaman['status'] ?>" selected><?= $objekpeminjaman['status'] ?></option>
                <option value="Dipinjam">Buku Sedang Dipinjam</option>
                <option value="Dikembalikan">Buku Sudah Dikembalikan</option>
            </select>
        </div>
        <div class="form-group form-submit">
            <button type="submit" class="btn-submit">Edit Data Peminjaman</button>
            <br>
            <a href="/Perpustakaan/datapeminjaman" class="btn-back">Kembali</a>
        </div>
    </form>
</div>
