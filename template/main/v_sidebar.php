			

        <div class="col-sm-3 sidebar" style="padding-left:30px;">
				<div class="panel panel-default">
				  	<div class="panel-heading">
				  		<i class="glyphicon glyphicon-picture"></i> Banner
				  	</div>
				  	<div class="panel-body">
				  	<?php foreach($banner->result() as $row){ ?>
				    	<a href="<?php echo $row->link ?>" target="_blank">
				    	<img src="<?php echo base_url().'assets/images/'.$row->gambar ?>" class="img-responsive"></a>
				    <?php } ?>
				  	</div>
				</div><!-- //default -->
				

				<div class="panel panel-default">
				  	<div class="panel-heading">
				  		<i class="glyphicon glyphicon-film"></i> Gallery Photo
				  	</div>
				  	<div class="panel-body">
				    	<a href="<?php echo base_url().'gallery/ambil/gallery' ?>">
				    	<img src="<?php echo base_url().'upload/gallery/'.$gallery['gambar'] ?>" class="img-responsive img-thumbnail"></a>
				  	</div>
				</div><!-- //default -->

				<div class="panel panel-default">
				  	<div class="panel-heading">
				  		<i class="glyphicon glyphicon-info-sign"></i> Informasi
				  	</div>
				  	<div class="panel-body">
				  		<?php foreach($informasi->result() as $row){ ?>
				  		<!-- <a href="<?php echo base_url().'informasi/detail/'.$row->id ?>"> -->
				    	<div class="alert alert-info">
						  	<?php echo $row->isi_informasi ?>
						</div>
						<!-- </a> -->
						<?php } ?>
				  	</div>
				</div><!-- //default -->

			</div><!-- //sidebar -->