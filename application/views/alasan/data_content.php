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
        <?php echo anchor('alasan/formtambahdata','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
</div>
<table class="table table-hover">
        <thead>
            <tr>
                <th>No</th> 
                <th>Judul</th> 
                <th>Deskripsi</th>                    
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach ($alasan as $als) { ?>
                <tr class="gradeU">
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $als->id?></td>
                    <td><?php echo $als->judul?></td>
                    <td><?php echo $als->deskripsi?></td>
                    <td class="center">
                        <?php echo anchor('alasan/edit/'.$als->id,'Edit','class="btn btn-primary"'); ?>
                        <?php echo anchor('alasan/delete/'.$als->id,'Delete','class="btn btn-danger"'); ?>
                    </td>
                </tr>
        <?php } ?>
        </tbody>

        </table>
    </section>
    