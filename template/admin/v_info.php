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
                                <a href="<?php echo base_url().'dashboard/info_add' ?>" class="btn btn-warning btn-sm" style="margin:-5px 0;">
                                <i class="glyphicon glyphicon-plus"></i>Tambah Informasi</a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th width="80%">ISI INFORMASI</th>
                                                <th width="20%">AKSI</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($record->result() as $row){ ?>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?php $text = $row->isi_informasi; echo substr($text,0,90); ?></td>
                                                <!-- <td><?php echo $row->author ?></td> -->
                                                <!-- <td><?php echo $row->tanggal ?></td> -->
                                                <td><a href="<?php echo base_url().'dashboard/info_edit/'.$row->id ?>">Edit</a> | 
                                                <a href="<?php echo base_url().'dashboard/info_hapus/'.$row->id ?>">Hapus</a></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
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
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>