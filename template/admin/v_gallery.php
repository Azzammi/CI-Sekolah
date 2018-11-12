        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h3 class="page-header">Dashboard / Gallery</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Gambar
                        </div>
                        <div class="panel-body">
                            <?php echo form_open_multipart('dashboard/gallery') ?>
                              <div class="form-group">
                                <label>Nama Gambar</label>
                                <input type="text" name="nama" class="form-control" required="">
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                              </div>
                            
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" style="width:60%;">
                                        <option>gallery</option>
                                        <option>UTS</option>
                                        <option>UAS</option>
                                        <option>UKK</option>
                                        <option>US</option>
                                        <option>UN</option>
                                    </select>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                              </div>
                            
                              <div class="form-group">
                                <label>Pilih Gambar</label>
                                <input type="file" name="gambar">
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                              </div>
                              <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <a href="<?php echo base_url().'dashboard/add_users' ?>" class="btn btn-warning btn-sm" style="margin:-5px 0;">
                            <i class="glyphicon glyphicon-plus"></i>Tambah Data Siswa</a>
                        </div> -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="75%">Nama Gambar</th>
                                            <th width="25%">Pilihan</th>
                                            <th width="70%">Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($gallery->result() as $row){ ?>
                                        <tr class="gradeU">
                                            <td><?php echo $row->nama ?></td>
                                            <td align = "center"><a href="<?php echo base_url().'dashboard/galleryhapus/'.$row->id ?>"> Hapus</a></td>
                                            <td><?php echo $row->gambar ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <!-- <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>