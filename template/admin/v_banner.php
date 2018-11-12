        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard / Banner</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <a style="margin-bottom: 15px;" class="btn btn-default" href="<?php echo base_url().'dashboard/banner_add' ?>">Tambah Banner</a>
                </div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel banner
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Posisi</th>
                                            <th>Judul</th>
                                            <th>URL</th>
                                            <th>Target</th>
                                            <th>Gambar</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($record as $row){ ?>
                                        <tr class="odd gradeX">
                                            <td>Left</td>
                                            <td><?php echo $row->judul ?></td>
                                            <td><?php echo $row->link ?></td>
                                            <td>_blank</a></td>
                                            <td><img src="<?php echo base_url().'assets/images/'.$row->gambar ?>" width="337" class="img-responsive"></td>
                                            <td align="center">
                                            <a href="<?php echo base_url().'dashboard/banner_edit/'.$row->id ?>" title="Edit"> <i class="glyphicon glyphicon-edit"></i></a> |  
                                            <a href="<?php echo base_url().'dashboard/banner_hapus/'.$row->id ?>" title="Hapus"> <i class="glyphicon glyphicon-trash"></i> </a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /.row -->
        </div>