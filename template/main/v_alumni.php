			<?php $this->load->view('main/v_sidebar') ?>
			
			<div class="col-sm-8 content">
                <style type="text/css">
                    .breack{
                        border-bottom: 1px dashed #000000;
                        margin-bottom: 15px;
                        padding-bottom: 10px;
                        margin-right: -15px;
                    }
                    .content a:hover{
                        text-decoration: none;
                    }
                </style>
                <h3 class="breack">Data Alumni</h3>
				<div class="dataTable_wrapper" style="margin-right:-15px;">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>JK</th>
                                <th>Agama</th>
                                <th>TTL</th>
                                <th>Tahun Lulus</th>
                                <!-- <th>Pilihan</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($record->result() as $row){ ?>
                            <tr class="gradeU">
                                <td><?php echo $row->nis ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->jk ?></td>
                                <td><?php echo $row->agama ?></td>
                                <td><?php echo $row->ttl ?></td>
                                <td><?php echo $row->angkatan ?></td>
                                <!-- <td><a href="<?php echo base_url().'dashboard/siswa_edit/'.$row->id ?>"> Edit</a> | 
                                <a href="<?php echo base_url().'dashboard/siswa_hapus/'.$row->id ?>"> Hapus</a></td> -->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

			</div><!-- content -->