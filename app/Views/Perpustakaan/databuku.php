<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h1>Daftar Data Buku</h1>
            <table class="table-custom">
                <thead>
                    <tr class="tabel-header">
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <a href="/Perpustakaan/tambahdatabuku" class="btn btn-primary">Tambah Data Buku</a>
                    <?php if(session()->getFlashdata('simpan')):?>
                        <div class="alert alert-success" role="alert">
                            <?=session()->getFlashdata('simpan');?>
                        </div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('hapus')):?>
                        <div class="alert alert-danger" role="alert">
                            <?=session()->getFlashdata('hapus');?>
                        </div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('ubah')):?>
                        <div class="alert alert-warning" role="alert">
                            <?=session()->getFlashdata('ubah');?>
                        </div>
                    <?php endif;?>
                    <?php $no = 1; ?>
                    <?php foreach ($objekbuku as $row) :?>
                        <tr>
                            <th scope="row"><?=$no++;?></th>
                            <td><?=$row['kode_buku'];?></td>
                            <td><?=$row['nama_buku'];?></td>
                            <td><?=$row['tahun_terbit'];?></td>
                            <td><?=$row['penulis'];?></td>
                            <td><?=$row['harga'];?></td>
                            <td><?=$row['stok'];?></td> 
                            <th scope="col"><a href="/Perpustakaan/detaildatabuku/<?=$row['kode_buku'];?>" class="btn btn-primary">Detail</a></th>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>