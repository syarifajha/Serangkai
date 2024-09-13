<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a>Slide</a>
        </li>
        <li class="breadcrumb-item active">Data Slide</li>
    </ol>
    <?php if ($this->session->userdata('id_level')== 1){?>
    <div class="card mb-3">
        <div class="card-header">
            <span class="btn btn-sm btn-outline-secondary" href="#modalTambah" data-toggle="modal" title="Add">Tambah Data</span></a>
        </div>
        <?php }?>
        <?php if ($this->session->userdata('id_level')== 3){?>
    <div class="card mb-3">
        <div class="card-header">
            <a class="btn btn-xs btn-primary" href="#modalTambah" data-toggle="modal" title="Add">Tambah Data</span></a>
        </div>
        <?php }?>
        <div class="card-body table-responsive" onload="window.print()">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th hidden> Id </th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php 
                    if (is_array($slide) || is_object($slide)) foreach ($slide as $sld) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td hidden><?php echo $sld->id?></td>
                            <td align="center"><img style="width:100px;" src="<?php echo base_url('gambar_slide/').$sld->foto?>"></td>
                            <td>
                            <a href="#modalEditPelanggan<?php echo $sld->id?>" data-toggle="modal" tittle="edit" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                
                                <a href="#modalHapus<?php echo $sld->id?>" data-toggle="modal" tittle="delete" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Del
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
        <h3 class="modal-title" id="myModalLabel"> Tambah slide</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <?php echo form_open_multipart('slide/tambahdata'); ?>
                    <form class="form-horizontal" method="post" >
                    <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3"></label>
                        <div class="col-xs-9">
                        <input hidden name="id_level"  value='1' class="form-control">
                        <div class="form-group">
                        <label>Foto</label>
                        <input accept="image/x-png,image/gif,image/jpeg" type="file" id="foto" class="form-control" name="foto" placeholder="Foto" required>
                         </div>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" id="save" class="btn btn-info">Simpan</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
<!-- ========= MODAL EDIT ======== -->
<?php foreach ($slide as $sld) { ?>
<div class="modal fade" id="modalEditPelanggan<?php echo $sld->id?>" tabindex="-1" role="dialog" aria-labelledby="modalEditPelanggan" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Edit slide</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <?php echo form_open_multipart('slide/edit'); ?>
                    <form class="form-horizontal" method="post">
                    <div class="modal-body">
                    <div class="form-group">
                                    <label>Foto</label>
                                    <img style="width:200px;" src="<?php echo base_url('gambar_slide/').$sld->foto?>">
                                    <input accept="image/x-png,image/gif,image/jpeg" type="file" id="foto" class="form-control" name="foto" placeholder="Foto" value="<?php echo $sld->foto?>" >
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" id="save" class="btn btn-info">Simpan</button>
                    </div>
                    </forms>
                    </div>
                    </div>
                    </div>
<!-- ========= MODAL DELETE======== ---->
<?php foreach ($slide as $sld) { ?>
<div id="modalHapus<?php echo $sld->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalHapus" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"> Hapus slide</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('slide/hapus');?>" enctype="multipart/form-data">
                    <div class="modal-body">
                    <p> Yakin Akan Menghapus Data Ini...?</p>
                    <input name="kode" type="hidden" value="<?php echo $sld->id;?>">
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