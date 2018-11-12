			<?php echo $sidebar ?>

			<div class="col-sm-8 content">

				<div class="alert alert-info welcome" role="alert">
					<strong>Forum Diskusi</strong>
					<a href="<?php echo base_url().'forum/add_topik' ?>" class="btn btn-danger btn-sm" style="float:right;margin-top:-5px;"><i class="glyphicon glyphicon-plus"></i> Tambah Topik</a>
				</div>

				<?php echo $this->session->userdata('warning') ?>
				
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
                                            <th>Judul / Topik</th>
                                            <th>Oleh</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($record->result() as $row){ ?>
                                        <tr class="gradeU">
                                            <td><?php echo date('m/d/Y',strtotime($row->tanggal)) ?> - <?php echo $row->judul ?></td>
                                            <td><?php echo $row->oleh ?></td>
                                            <td><a href="<?php echo base_url().'forum/komen/'.$row->id ?>" class="btn btn-primary btn-sm btn-xs">
				    						<i class="glyphicon glyphicon-comment"></i> Ikuti</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->		

				</div><!-- content -->