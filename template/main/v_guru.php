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
                <h3 class="breack">Data Guru</h3>
				<div class="dataTable_wrapper" style="margin-right:-15px;">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>JK</th>
                                <!-- <th>Agama</th> -->
                                <th>Gol</th>
                                <th>Bidang Studi</th>
                                <th>Kelas</th>
                                <!-- <th>Ijazah</th> -->
                                <!-- <th>Pilihan</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($record->result() as $row){ ?>
                            <tr class="gradeU">
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->jk ?></td>
                                <!-- <td><?php echo $row->agama ?></td> -->
                                <td><?php echo $row->golongan ?></td>
                                <td><?php echo $row->bidang_studi ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <!-- <td><?php echo $row->ijazah_trakhir ?></td> -->
                                <!-- <td><a href="<?php echo base_url().'dashboard/guru_edit/'.$row->id ?>"> Edit</a> |  -->
                                <!-- <a href="<?php echo base_url().'dashboard/guru_hapus/'.$row->id ?>"> Hapus</a></td> -->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
			</div><!-- content -->