<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/bootstrap-theme2.css">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Tinymce JS -->
    <script src="<?php echo base_url().'assets/tinymce/'?>js/tinymce/tinymce.dev.js"></script>
    <script src="<?php echo base_url().'assets/tinymce/'?>js/tinymce/plugins/table/plugin.dev.js"></script>
    <script src="<?php echo base_url().'assets/tinymce/'?>js/tinymce/plugins/paste/plugin.dev.js"></script>
    <script src="<?php echo base_url().'assets/tinymce/'?>js/tinymce/plugins/spellchecker/plugin.dev.js"></script>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SMK AL-MUHADJIRIN</a>
            </div>
            <!-- /.navbar-header -->
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'dashboard/index' ?>"><i class="fa fa-dashboard fa-fw"></i> DASHBOARD</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-bookmark"></i> CONTENT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'dashboard/contentpost' ?>">Content Post</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/content/berita' ?>">Content Berita</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/content/informasi' ?>">Content Informasi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'dashboard/halaman' ?>"><i class="glyphicon glyphicon-lock"></i> HALAMAN</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-bookmark"></i> DIREKTORI<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="<?php echo base_url().'dashboard/direktori' ?>">Tambah Data</a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url().'dashboard/guru' ?>">Direktori Guru</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/siswa' ?>">Direktori Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/alumni' ?>">Direktori Alumni</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url().'dashboard/kesiswaan' ?>"><i class="glyphicon glyphicon-paperclip"></i> KESISWAAN</a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url().'dashboard/gallery' ?>"><i class="glyphicon glyphicon-film"></i> GALLERY</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'dashboard/forum' ?>"><i class="glyphicon glyphicon-comment"></i> FORUM DISKUSI</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'dashboard/external_link' ?>"><i class="glyphicon glyphicon-link"></i> EXTERNAL LINK</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'dashboard/banner' ?>">Banner</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/header' ?>">Header</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'dashboard/background' ?>">Background</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url().'home' ?>" target="_blank"><i class="glyphicon glyphicon-eye-open"></i> LIHAT WEBSITE</a>
                        </li>
                        <li>
                            <a href="<?=set_url('logout');?>"><i class="glyphicon glyphicon-off"></i> LOGOUT</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <?php echo $contents ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/dist/js/sb-admin-2.js"></script>

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
