<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Masukkan Data Buku</h2>
                </div>
                <div class="card-body">
                    <form action="/Perpustakaan/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="mb-3 row">
                            <label for="kode_buku" class="col-sm-3 col-form-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_buku" class="col-sm-3 col-form-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_buku" name="nama_buku" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tahun_terbit" class="col-sm-3 col-form-label">Tahun Terbit Buku</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="penulis" class="col-sm-3 col-form-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="penulis" name="penulis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga Buku</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="harga" name="harga" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="stok" class="col-sm-3 col-form-label">Jumlah Stok</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="stok" name="stok" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
