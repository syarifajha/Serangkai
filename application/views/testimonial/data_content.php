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
        <?php echo anchor('testimonial/formtambahdata','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
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
            foreach ($testimonial as $st) { ?>
                <tr class="gradeU">
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $st->id?></td>
                    <td><?php echo $st->judul?></td>
                    <td><?php echo $st->deskripsi?></td>
                    <td align="center"><img style="width:300px;" src="<?php echo base_url('gambar_testimonial/').$st->foto?>"></td>
                    <td class="center">
                        <?php echo anchor('testimonial/edit/'.$st->id,'Edit','class="btn btn-primary"'); ?>
                        <?php echo anchor('testimonial/delete/'.$st->id,'Delete','class="btn btn-danger"'); ?>
                    </td>
                </tr>
        <?php } ?>
        </tbody>

        </table>
    </section>
    