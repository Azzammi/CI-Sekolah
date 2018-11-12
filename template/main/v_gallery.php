				<?php $this->load->view('main/v_sidebar') ?>
				<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
				<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

                <!-- Optionally add helpers - button, thumbnail and/or media -->
                <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
                <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
                <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

                <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
                <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

                <!--<h3 class="breack"></h3>-->
				<div class="col-sm-8 content">                    

				<div class="panel panel-default welcome">
					<div class="panel-heading"><i class="glyphicon glyphicon-picture"></i> Photo <?php echo $param;?></div>
					<div class="panel-body">
					    <div class="row">
					    <?php foreach($record->result() as $row){ ?>
						  	<div class="col-xs-6 col-md-4">
							    <a href="<?php echo base_url().'upload/gallery/'.$row->gambar ?>" class="fancybox thumbnail" rel="ligthbox" title="<?php echo $row->nama ?>">
							      	<img src="<?php echo base_url().'upload/gallery/'.$row->gambar ?>">                                   
							    </a>
                                <h4><?php echo $row->nama ?></h4>
						  	</div>
						<?php } ?>
						</div>
					</div>

					<script type="text/javascript">
						$(document).ready(function(){
						    //FANCYBOX
						    //https://github.com/fancyapps/fancyBox
						    $(".fancybox").fancybox({
						        openEffect: "none",
						        closeEffect: "none"
						    });
						});
					</script>
				</div>
				<!-- welcome -->

			</div><!-- content -->