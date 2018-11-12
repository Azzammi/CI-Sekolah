<!DOCTYPE html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<html lang="en-US">
<head>
	<title>SMK AL-MUHADJIRIN</title>
	<link href="<?php echo base_url().'assets/images/logojirin1.png' ?>" rel="shortcut icon" type="image/ico" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/font-awesome.css">

	<!-- DataTables CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <script src="<?php echo base_url().'assets/' ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url().'assets/' ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>js/twd-menu.js"></script>
	<?php $data = $this->db->query('SELECT * FROM gambar order by id asc')->row_array(); ?>
	<style type="text/css">
       
		.panel > .panel-heading{
			color:#fff;
			font-weight: bold;
		}
        
	</style>
    
    <style type="text/css">
        .navbar-nav > li > a{
            /*color: #FFFFFF;*/
        }
        .navbar-nav > li > a:hover{
            /*color: #3d537e;*/
        }
        .navbar-nav > .dropdown:hover > a{
            background-color: #eee;
            /*color: #3d537e;*/
        }
        .navbar-nav > .dropdown:hover > .dropdown-menu{
          display: block;
        }
        .navbar-nav > .dropdown > .dropdown-menu > li:hover > #submenu{
            display: block;
        }
        .dropdown-menu>li{
            position:relative;
            -webkit-user-select: none;       
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            cursor:pointer;
        }
        .dropdown-menu .sub-menu {
            left: 100%;
            position: absolute;
            top: 0;
            display:none;
            margin-top: -1px;
            border-top-left-radius:0;
            border-bottom-left-radius:0;
            border-left-color:#fff;
            box-shadow:none;
        }
        .right-caret:after,.left-caret:after{
            content:"";
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            display: inline-block;
            height: 0;
            vertical-align: middle;
            width: 0;
            margin-left:5px;
        }
        .right-caret:after{
            border-left: 5px solid #337ab7;
        }
        .left-caret:after{
            border-right: 5px solid #337ab7;
        }
    </style>
    
</head>
<body>

    <!--  turn on header
    <div class="header">       
        <?php $data=$this->db->query('SELECT * FROM gambar WHERE kategori = "header" GROUP BY id DESC LIMIT 1')->row_array(); ?>
        <img src="<?php echo base_url().'assets/images/'.$data['gambar'] ?>" class="img-responsive" style="border-radius: 5px 5px 0 0;">           
    </div>
    -->
	<!-- Header -->
    
    <div class="header-nav">
        <div class="container">
          
                <div class="container-fluid" style="padding-left:0px;">
                    <nav class="navbar navbar-default navbar-static-top" id="twd-menu">
                       
                        <div class="navbar-header">
                             <a class="navbar-brand" href="#">
                            <!--<img alt="Brand" src="<?php echo base_url().'assets/images/'.$data['gambar'] ?>" width=""/>-->
                                 <img alt="Brand" src="<?php echo base_url().'assets/images/logojirin1.png' ?>" width="48" height="64" ></img>
                                
                            </a>
                            <a class="navbar-brand text-logo" href="#">
                            <!--<img alt="Brand" src="" width=""/>-->
                                 <p style="font-family:Verdana;font-size:25px;">SMK AL-MUHADJIRIN</p>
                                
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" date-target="#bs-example-navbar-collpse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="collpse navbar-collapse navbar-right" id="bs-example-navbar-collpse-1">
                            <ul class="nav navbar-nav" style="padding-right:20px;">
                                <li class="dropdown" ><!-- HOME -->
                                    <a href="<?php echo base_url() ?>" style="padding-top:30px">Home <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">KOMPETENSI KEAHLIAN</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/profile-kepsek' ?>">Profil Kepsek</a></li>
                                        <li><a href="<?php echo base_url().'direktori/guru' ?>">Profil Guru</a></li>
                                        <li><a href="">Profil Karyawan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><!-- PROFIL -->
                                    <a href="#" style="padding-top:30px">Profil <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url().'direktori/halaman/profile' ?>">Profil Lengkap</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/struktur-organisasi' ?>">Struktur Organisasi</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/sejarah' ?>">Sejarah</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/visi-misi' ?>">VISI dan MISI</a></li>
                                        
                                        <!-- <li role="separator" class="divider"></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown"><!-- KURIKULUM -->
                                    <a href="#" style="padding-top:30px">Kurikulum<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Kurikulum 2013</a></li>
                                        <li><a href="<?php echo base_url().'gallery/ambil/UTS';?>">UTS</a></li>
                                        <li><a href="<?php echo base_url().'gallery/ambil/UAS';?>">UAS</a></li>
                                        <li><a href="<?php echo base_url().'gallery/ambil/US';?>">US</a></li>
                                        <li><a href="<?php echo base_url().'gallery/ambil/UN';?>">UN</a></li>
                                        <li><a href="<?php echo base_url().'gallery/ambil/UKK';?>">UKK</a></li>
                                        
                                        <!-- <li role="separator" class="divider"></li> -->
                                    </ul>
                                </li>
                                
                                <li class="dropdown"><!-- KESISWAAN -->
                                    <a href="#" style="padding-top:30px">Kesiswaan <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url().'direktori/halaman/osis' ?>">IPTM</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/extra-kurikuler' ?>">Ekstra Kurikuler</a></li>
                                        <li><a href="">LDKS</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a class="trigger right-caret">Prestasi</a>
                                            <ul id="submenu" class="dropdown-menu sub-menu">
                                                <li><a href="<?php echo base_url().'direktori/halaman/prestasi-sekolah' ?>">Prestasi Sekolah</a></li>
                                                <li><a href="<?php echo base_url().'direktori/halaman/prestasi-guru' ?>">Prestasi Guru</a></li>
                                                <li><a href="<?php echo base_url().'direktori/halaman/prestasi-siswa' ?>">Prestasi Siswa</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><!-- HUBIN -->
                                    <a href="#" style="padding-top:30px">Hubin<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Prakerin</a></li>
                                        <li><a href="<?php echo base_url().'direktori/alumni' ?>">Alumni</a></li>
                                        <li><a href="">BKK</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><!-- SARANA -->
                                    <a href="#" style="padding-top:30px">Sarana <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas' ?>">Fasilitas</a></li>
                                        <!--<li><a href="">Direktori Siswa</a></li>-->
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-titl' ?>">TITL</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-tkr' ?>">TKR</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-tp' ?>">TP</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-tsm' ?>">TSM</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-tkj' ?>">TKJ</a></li>
                                        <li><a href="<?php echo base_url().'direktori/halaman/fasilitas-rpl' ?>">RPL</a></li>                                       
                                        
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url().'Siswa' ?>" style="padding-top:30px">PPDB</a></li>
                                <!--<li><a href="<?php echo base_url().'gallery' ?>" style="padding-top:30px">Gallery</a></li>-->
                                <li><a href="<?php echo base_url().'forum' ?>" style="padding-top:30px">Forum Diskusi</a></li>
                                
                                <script type="text/javascript">
                                    $(function(){
                                        $(".dropdown-menu > li > a.trigger").on("click",function(e){
                                            var current=$(this).next();
                                            var grandparent=$(this).parent().parent();
                                            if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
                                                $(this).toggleClass('right-caret left-caret');
                                            grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
                                            grandparent.find(".sub-menu:visible").not(current).hide();
                                            current.toggle();
                                            e.stopPropagation();
                                        });
                                        $(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
                                            var root=$(this).closest('.dropdown');
                                            root.find('.left-caret').toggleClass('right-caret left-caret');
                                            root.find('.sub-menu:visible').hide();
                                        });
                                    });
                                </script>
                                
                            </ul>
                        </div>
                    </nav>
              
            </div>
        </div>    
        
    </div>
    <!-- nav -->
    
            			
            <div class="container" style="padding:0; margin: 0 auto;">
                <?php echo $contents ?>
            </div>
			                
			<div class="col-sm-12 footer-top">			

				<div class="col-sm-6 footer-right">
					<div class="panel panel-default">
					  	<div class="panel-heading"><i class="glyphicon glyphicon-map-marker"></i> Alamat Sekolah</div>
					  	<div class="panel-body">
					  		<div class="col-sm-6">
					  			<img src="<?php echo base_url().'assets/images/peta_lokasi.jpg' ?>" class="img-responsive">
					  		</div>
					  		<div class="col-sm-6">
					  			<p style="font-size:16px;margin-top:70px;">
					  			Jl. Pulau Jawa Raya Perumnas 3 Kota Bekasi</p>
					  		</div>
					  	</div>
					</div>
				</div><!-- footer right -->

			</div><!-- footer top -->

			<div class="col-sm-12 footer-button">
				<p>COPYRIGHT @ 2017 SMK AL-MUHADJIRIN</p>
			</div>

		<!-- container -->
	<!-- containers -->

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
            <script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/npm.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/bootstrap.js"></script>

	 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });        
    </script>    	
</body>
</html>