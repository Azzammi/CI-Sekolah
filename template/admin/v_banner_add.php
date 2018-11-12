        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard / Banner</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah banner
                        </div>
                        <div class="panel-body">
                            <?php echo form_open_multipart('dashboard/banner') ?>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <input name="posisi" type="text" class="form-control" value="Left" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input name="judul" type="text" class="form-control" placeholder="Judul" id="nis" required="">
                                    <!-- <input name="id" type="hidden" class="form-control" value="<?php echo $record['id'] ?>"> -->
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input name="url" type="text" class="form-control" value="http://" id="nis" required="">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input id="file" type="file" name="userfile" required=""></input>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button name="simpan" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-ok"></i> Simpan</button> | 
                                <a href="<?php echo base_url().'dashboard/banner' ?>"> Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /.row -->
        </div>