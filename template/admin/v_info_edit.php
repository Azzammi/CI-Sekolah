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
                                <?php echo form_open('dashboard/info_edit') ?>
                                    <div class="form-group">
                                        <label>Isi Informasi</label>
                                        <input name="id" type="hidden" class="form-control" value="<?php echo $record['id'] ?>">
                                        <textarea name="isiinfo" class="form-control" rows="6"><?php echo $record['isi_informasi'] ?></textarea>
                                    </div>
                                    <button name="update" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok"></i> Update Info</button> | 
                                    <a href="<?php echo base_url().'dashboard/informasi' ?>" class="btn btn-warning btn-sm">
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