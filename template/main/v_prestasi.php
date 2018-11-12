			<?php $this->load->view('main/v_sidebar') ?>
			
			<div class="col-sm-8 content">
                <style type="text/css">
                    .breack{
                        border-bottom: 1px dashed #000000;
                        padding-bottom: 10px;
                        margin-top: -5px;
                        margin-bottom: 15px;
                    }
                    /*.content a:hover{
                        text-decoration: none;
                    }
                    .panel{
                        margin-right: -15px;*/
                    }
                </style>
				<div class="panel panel-default welcome">
                    <div class="panel-body">
                        <h3 class="breack"><?php echo $record['judul_halaman'] ?></h3>
                        <?php if($record['gambar'] != ''){
                                echo "<img src='".base_url()."upload/gambar/".$record['gambar']."' class='img-responsive img-thumbnail' style='margin-bottom: 15px;'>";
                            } ?>
                        <?php echo $record['isi_halaman'] ?>
                    </div>
                </div>
			</div><!-- content -->