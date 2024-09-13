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
        <?php echo anchor('about/formtambahdata','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
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
            foreach ($about as $abt) { ?>
                <tr class="gradeU">
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $abt->id?></td>
                    <td><?php echo $abt->judul?></td>
                    <td><?php echo $abt->deskripsi?></td>
                    <td class="center">
                        <?php echo anchor('about/edit/'.$abt->id,'Edit','class="btn btn-primary"'); ?>
                        <?php echo anchor('about/delete/'.$abt->id,'Delete','class="btn btn-danger"'); ?>
                    </td>
                </tr>
        <?php } ?>
        </tbody>

        </table>
    </section>
    