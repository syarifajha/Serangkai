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
        <?php echo anchor('content2/formtambahdata','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
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
            foreach ($content2 as $c2) { ?>
                <tr class="gradeU">
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $c2->id?></td>
                    <td><?php echo $c2->judul?></td>
                    <td><?php echo $c2->deskripsi?></td>
                    <td align="center"><img style="width:200px;" src="<?php echo base_url('gambar_content2/').$c2->foto?>"></td>
                    <td class="center">
                        <?php echo anchor('content2/edit/'.$c2->id,'Edit','class="btn btn-primary"'); ?>
                        <?php echo anchor('content2/delete/'.$c2->id,'Delete','class="btn btn-danger"'); ?>
                    </td>
                </tr>
        <?php } ?>
        </tbody>

        </table>
    </section>
    