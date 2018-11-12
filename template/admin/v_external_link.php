        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Dashboard / External Link</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insert external link
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('dashboard/external_link') ?>
                              <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" type="text" class="form-control" placeholder="Judul" required="">
                              </div>
                              <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" value="http://">
                              </div>
                              <div class="form-group">
                                <label>Target</label>
                                <input name="target" type="text" class="form-control" placeholder="_blank">
                              </div>
                              <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel external link
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>URL</th>
                                            <th>Target</th>
                                            <th width="10%" align="conter">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($record->result() as $row){ ?>
                                        <tr class="gradeU">
                                            <td><?php echo $row->judul ?></td>
                                            <td><?php echo $row->url ?></td>
                                            <td><?php echo $row->target ?></td>
                                            <td align="center">
                                            <a href="<?php echo base_url().'dashboard/external_link_hapus/'.$row->id ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>