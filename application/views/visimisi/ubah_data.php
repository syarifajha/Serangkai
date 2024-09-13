<section class="content-header">
      <h1>
       Ubah Data
        <small>Ubah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
</section>

<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php echo form_open_multipart('visimisi/edit'); ?>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input id="judul" class="form-control" name="judul" placeholder="Judul Depan" value="<?php echo $visimisi->judul?>">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input id="deskripsi" class="form-control" name="deskripsi" value="<?php echo $visimisi->deskripsi?>" placeholder="Deskripsi">
                                </div>
                                <div hidden>
                                <input class="form-control" name="id" value="<?php echo $visimisi->id?>">
                                </div>

                                <button type="submit" id="save" name="submit" class="btn btn-primary btn-sm" >Simpan</button> | 
                                <?php echo anchor ('visimisi','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                           </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>

