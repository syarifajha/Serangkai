<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a>Jenis Barang</a>
        </li>
        <li class="breadcrumb-item active">Data Barang</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Barang
            <?php echo anchor('Barang/tambah','Tambah Barang',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive" onload="window.print()">
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jenis</th>
                            <th>Kode Jenis</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($jenis as $jns) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $jns->nama_jenis ?></td>
                            <td><?php echo $jns->kode_jenis ?></td>
                            <td><?php echo $jns->keterangan ?></td>
                            <td>
                                <a href="<?php echo site_url('Barang/edit/'.$jns->kode_jenis) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                               
                                <a href="<?php echo site_url('Barang/hapus/'.$jns->kode_jenis) ?>" class="btn btn-sm btn-outline-secondary"
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
