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
                                Daftar Topik
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>URL</th>
                                                <th>Isi Halaman</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($record->result() as $row){ ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row->judul_halaman ?></td>
                                                <td><?php echo $row->url ?></td>
                                                <td><?php $text = $row->isi_halaman; echo strip_tags(substr($text,0,100)) ?></td>
                                                <td align="center"><a href="<?php echo base_url().'dashboard/halaman_edit/'.$row->id ?>"> <i class="glyphicon glyphicon-edit"></i></a>
                                                 </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>