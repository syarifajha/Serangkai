<section class="content-header">
      <h1>
       Tambah Data
        <small>Tambah Data</small>
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
                            <?php echo form_open_multipart('slide/tambahdata'); ?>   
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input accept="image/x-png,image/gif,image/jpeg" type="file" id="foto" class="form-control" name="foto" placeholder="Foto" required>
                                </div>
                                
                                <button type="submit" id="save" name="submit" class="btn btn-primary btn-sm" >Simpan</button> | 
                                <?php echo anchor('slide','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                           </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>