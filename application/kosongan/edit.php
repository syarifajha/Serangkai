<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Barang</a>
        </li>
        <li class="breadcrumb-item active">Edit Data Barang</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Barang
                </div>
                <form action="<?= base_url('Barang/edit');?>" method="post">
               <div class="card-body">
                    <div class="form-group">
                        <label for="nama_jenis">Nama Jenis</label>
                    <input type="text" value="<?php echo $jenis['nama_jenis'] ?>" class="form-control" name="nama_jenis" required="">
                </div>
                <div class="form-group">
                        <label for="kode_jenis">Kode Jenis</label>
                     <input type="text" value="<?php echo $jenis['kode_jenis'] ?>"  name="kode_jenis" class="form-control" requred="">
                </div>
                <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                     <input type="text" value="<?php echo $jenis['keterangan'] ?>"  name="keterangan" class="form-control" requred="">
                </div>
            </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Barang') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>