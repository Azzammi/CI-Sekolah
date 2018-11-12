			<?php $this->load->view('main/v_sidebar') ?>
			<style type="text/css">
				.breack{
					border-bottom: 1px dashed #000000;
					margin-bottom: 15px;
					padding-bottom: 10px;
				}
				.content a:hover{
					text-decoration: none;
				}
			</style>
			<div class="col-sm-8 content">
				  	<?php foreach($record->result() as $row){ ?>
				    	<div class="media">
						  	<div class="media-left media-middle">
							    <a href="<?php echo base_url().'home/detail_berita/'.$row->id ?>">
							      <img class="media-object img-thumbnail" src="<?php $gambar = $row->gambar; 
	                                    if ($gambar != ''){
	                                            echo base_url().'upload/gambar/'.$row->gambar;
	                                        }else{
	                                            echo base_url().'assets/images/no-photo.png';
	                                        } ?>"
							    alt="<?php echo base_url().'upload/gambar/'.$row->judul ?>" width="200px">
							    </a>
						  	</div>
						  	<div class="media-body">
						    <h4 class="media-heading"><a href="<?php echo base_url().'home/detail_berita/'.$row->id ?>">
						    <?php echo $row->judul ?></a></h4>
						    <?php $text = $row->isi_berita; echo substr($text,0,260) ?>
						  </div>
						<div class="breack"></div>
						</div>
					<?php } ?>

			</div><!-- content -->