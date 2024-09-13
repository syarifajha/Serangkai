<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a>Supplier</a>
        </li>
        <li class="breadcrumb-item active">Data Supplier</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <a class="btn btn-xs btn-primary" href="#modalTambah" data-toggle="modal" title="Add">Tambah Data</span></a>
        </div>
        <div class="card-body table-responsive" onload="window.print()">
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th hidden >Id Supplier</th>
                            <th>Username</th>
                            <th>Nama User</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($supplier as $supp) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td hidden><?php echo $supp->id_user ?></td>
                            <td><?php echo $supp->username ?></td>
                            <td><?php echo $supp->nama_user ?></td>
                            <td><?php echo $supp->alamat ?></td>
                            <td><?php echo $supp->no_telp ?></td>
                            <td>
                                <a href="#modalEditPelanggan<?php echo $supp->id_user?>" data-toggle="modal" tittle="Edit" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                
                                <a href="#modalHapus<?php echo $supp->id_user?>" data-toggle="modal" tittle="Hapus" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Delete
                                    <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                                </a>
                            </td>
                            
                        </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ========= MODAL ADD ======== ---->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Tambah Supplier</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Supplier/tambah');?>">
                    <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3"></label>
                        <div class="col-xs-9">
                        <input hidden name="id_level"  value='3' class="form-control">
                        <input name="username" class="form-control" type="text" placeholder="Username......" style="width:400px;" required>
                        <input name="password" class="form-control" type="text" placeholder="Password......" style="width:400px;" required>
                        <input name="nama_user" class="form-control" type="text" placeholder="Nama user......" style="width:400px;" required>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
<!-- ========= MODAL EDIT ======== -->
<?php foreach ($supplier as $supp) { ?>
<div class="modal fade" id="modalEditPelanggan<?php echo $supp->id_user?>" tabindex="-1" role="dialog" aria-labelledby="modalEditPelanggan" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Edit Supplier</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Supplier/edit');?>">
                    <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3"></label>
                        <div class="col-xs-9">
                        <input name="id_user" type="hidden" value="<?php echo $supp->id_user;?>">
                        <input name="username" class="form-control" value="<?php echo $supp->username;?>" type="text" style="width:400px;" required>
                        <input name="password" class="form-control" value="<?php echo $supp->password;?>" type="password" style="width:400px;" required>
                        <input name="nama_user" class="form-control" value="<?php echo $supp->nama_user;?>" type="text" style="width:400px;" required>
                        <input hidden name="id_level"  value='3' class="form-control">
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                    </forms>
                    </div>
                    </div>
                    </div>
<!-- ========= MODAL DELETE======== ---->
<?php foreach ($supplier as $supp) { ?>
<div id="modalHapus<?php echo $supp->id_user?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalHapus" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Hapus Supplier</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Supplier/hapus');?>">
                    <div class="modal-body">
                    <p> Yakin Akan Menghapus Data Ini...?</p>
                    <input name="kode" type="hidden" value="<?php echo $supp->id_user;?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    <?php
                    }}