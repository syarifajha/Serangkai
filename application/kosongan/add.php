<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Barang</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Barang</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Barang
                </div>
                <form action="<?= base_url('Barang/tambah');?>" method="post">
               <div class="card-body" >
                    <div class="form-group">
                        <label for="nama_jenis">Nama Jenis</label>
                    <input type="text" class="form-control" name="nama_jenis" required="">
                </div>
                <div class="form-group">
                        <label for="kode_jenis">Kode Jenis</label>
                     <input type="text" name="kode_jenis" class="form-control" required="">
                </div>
                <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                     <input type="text" name="keterangan" class="form-control" required="">
                </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" value="tambah" class="btn btn-primary" >
                        Submit
                    </button>
                    <a href="<?php echo site_url('Barang') ?>" class="btn btn-danger">Kembali</a>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>