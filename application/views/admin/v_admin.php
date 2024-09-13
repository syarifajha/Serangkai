<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a>Admin</a>
        </li>
        <li class="breadcrumb-item active">Data Admin</li>
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
                            <th hidden >Id user</th>
                            <th>Username</th>
                            <th>Nama Admin</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($admin as $adm) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td hidden><?php echo $adm->id ?></td>
                            <td><?php echo $adm->username ?></td>
                            <td><?php echo $adm->nama_user ?></td>
                            <td><?php echo $adm->alamat?></td>
                            <td><?php echo $adm->no_telp ?></td>
                            <td>
                            <a href="#modalEditPelanggan<?php echo $adm->id?>" data-toggle="modal" tittle="Edit" class="btn btn-primary  btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                
                                <a href="#modalHapus<?php echo $adm->id?>" data-toggle="modal" tittle="Hapus" class="btn btn-danger btn-outline-secondary"
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
        <h3 class="modal-title" id="myModalLabel"> Tambah Admin</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Admin/tambah');?>">
                    <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3"></label>
                        <div class="col-xs-12">
                        <input hidden name="id_level"  value='1' class="form-control">
                        <input name="username" class="form-control" type="text" placeholder="Username......" style="100%" required>
                        <input name="password" class="form-control" type="text" placeholder="Password......" style="100%" required>
                        <input name="nama_user" class="form-control" type="text" placeholder="Nama user......" style="100%" required>
                        <input name="alamat" class="form-control" type="text" placeholder="Alamat......" style="100%" required>
                        <input name="no_telp" class="form-control" type="text" placeholder="Nomor Telfon....." style="100%" required>
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
<?php foreach ($admin as $adm) { ?>
<div class="modal fade" id="modalEditPelanggan<?php echo $adm->id?>" tabindex="-1" role="dialog" aria-labelledby="modalEditPelanggan" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Edit Admin</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Admin/edit');?>">
                    <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3"></label>
                        <div class="col-xs-12">
                        <input name="id" type="hidden" value="<?php echo $adm->id;?>">
                        <input name="username" class="form-control" value="<?php echo $adm->username;?>" type="text" style="100%" required>
                        <input name="password" class="form-control" value="<?php echo $adm->password;?>" type="password" style="100%" required>
                        <input name="nama_user" class="form-control" value="<?php echo $adm->nama_user;?>" type="text" style="100%" required>
                        <input name="alamat" class="form-control" value="<?php echo $adm->alamat;?>" type="text" style="100%" required>
                        <input name="no_telp" class="form-control" value="<?php echo $adm->no_telp;?>" type="number" style="100%" required>
                        <input hidden name="id_level"  value='1' class="form-control">
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
<?php foreach ($admin as $adm) { ?>
<div id="modalHapus<?php echo $adm->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalHapus" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Hapus Admin</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('Admin/hapus');?>">
                    <div class="modal-body">
                    <p> Yakin Akan Menghapus Data Ini...?</p>
                    <input name="kode" type="hidden" value="<?php echo $adm->id;?>">
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