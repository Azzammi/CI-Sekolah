        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Halaman Berita</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-edit"></i>Edit Berita</a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php $this->load->view('admin/editor') ?>
                                <?php echo form_open_multipart('dashboard/info_add') ?>
                                    <!-- <div class="form-group">
                                        <label>Judul</label>
                                        <input name="judul" type="text" class="form-control" palaceholder="Judul Berita">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Isi Informasi</label>
                                        <textarea name="isiinfo" class="form-control" rows="6" palaceholder="Isi Berita"></textarea>
                                    </div><!-- 
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input name="gambar" type="file">
                                        <p class="help-block">JPG | PNG | GIF</p>
                                    </div> -->
                                    <button name="simpan" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok"></i> Post Info</button> | 
                                    <a href="<?php echo base_url().'dashboard/berita' ?>" class="btn btn-warning btn-sm">
                                    <i class="glyphicon glyphicon-remove"></i> Batal</a>
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>