<section class="content-header">
      <h1>
        Content
        <small>CRUD</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
</section>
<section class="content container-fluid">
<div class="panel-heading">
        <?php echo anchor('content1/formtambahdata','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
</div>
<table class="table table-hover">
        <thead>
            <tr>
                <th>No</th> 
                <th>Judul</th> 
                <th>Deskripsi</th>                    
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach ($content1 as $c1) { ?>
                <tr class="gradeU">
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $c1->id?></td>
                    <td><?php echo $c1->judul?></td>
                    <td><?php echo $c1->deskripsi?></td>
                    <td align="center"><img style="width:100px;" src="<?php echo base_url('gambar_content1/').$c1->foto?>"></td>
                    <td class="center">
                        <?php echo anchor('content1/edit/'.$c1->id,'Edit','class="btn btn-primary"'); ?>
                        <?php echo anchor('content1/delete/'.$c1->id,'Delete','class="btn btn-danger"'); ?>
                    </td>
                </tr>
        <?php } ?>
        </tbody>

        </table>
    </section>
    