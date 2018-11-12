			<?php $this->load->view('main/v_sidebar') ?>

        
        <div class="row">            
			<div class="col-sm-8" style="padding-top:20px;">
				<div class="well well-sm">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  	<!-- Indicators -->
					  	<ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						    <li data-target="#myCarousel" data-slide-to="3"></li>
					  	</ol>

					  	<!-- Wrapper for slides -->
					  	<div class="carousel-inner" role="listbox">
					    	<div class="item active">
					      		<img src="<?php echo base_url().'assets/' ?>images/5.jpg" alt="Chania">
					    	</div>

					    	<div class="item">
					      		<img src="<?php echo base_url().'assets/' ?>images/6.jpg" alt="Chania">
					    	</div>

					    	<div class="item">
					      		<img src="<?php echo base_url().'assets/' ?>images/8.jpg" alt="Flower">
					    	</div>
                            
                            <div class="item">
					      		<img src="<?php echo base_url().'assets/' ?>images/9.jpg" alt="Flower">
					    	</div>
					  	</div>

					  	<!-- Left and right controls -->
					  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
				</div> <!-- well well-sm -->

				<div class="panel panel-default welcome">
					<div class="panel-body">
					    <h2><?php echo $sambutan['judul_halaman'] ?></h2>
					    <?php echo $sambutan['isi_halaman'] ?>
					</div>
				</div><!-- welcome -->

				<div class="panel panel-default welcome">
				  	<div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Berita Terbaru</div>
				  	<div class="panel-body">
				  	<?php foreach($berita->result() as $row){ ?>
				    	<div class="media">
						  	<div class="media-left media-top">
						    	<a href="<?php echo base_url().'home/detail_berita/'.$row->id ?>">
						    	<img class="media-object" src="<?php $gambar = $row->gambar; 
						    		if ($gambar != ''){
						    				echo base_url().'upload/gambar/'.$row->gambar;
						    			}else{
						    				echo base_url().'assets/images/berita.png';
						    			} ?>" alt="..." width="64px" height="64px">
						    	</a>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">
						    	<a href="<?php echo base_url().'home/detail_berita/'.$row->id ?>"><?php $text = $row->judul_content; echo substr($text,0,30).' ...' ?></h4></a>
						    	<?php $text = $row->isi_content; echo substr($text,0,150).' ...' ?>
						 	</div>
						</div><!-- Media -->
					<?php } ?>
				  	</div>
				</div>

			</div><!-- content -->
</div>
   