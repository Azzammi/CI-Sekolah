        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / Halaman</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Halaman
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php $this->load->view('admin/editor') ?>
                                <?php echo form_open_multipart('dashboard/halaman_edit') ?>
                                    <div class="form-group">
                                        <label>Judul Halaman</label>
                                        <input style="width: 50%;" name="judul" type="text" class="form-control" value="<?php echo $record['judul_halaman'] ?>">
                                        <input name="id" type="hidden" class="form-control" value="<?php echo $record['id'] ?>">
                                        <input name="url" type="hidden" class="form-control" value="<?php echo $record['url'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Halaman</label>
                                        <textarea name="isihalaman" class="form-control" rows="6"><?php echo $record['isi_halaman'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input name="gambar" type="file">
                                        <p class="help-block">jpg | png | gif</p>
                                    </div>
                                    <button name="update" type="submit" class="btn btn-primary">Update Halaman</button> | <a class="btn btn-danger" href="<?php echo base_url().'dashboard/halaman' ?>"> Batal </a>
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