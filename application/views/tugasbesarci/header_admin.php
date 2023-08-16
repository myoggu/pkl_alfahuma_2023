<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets_admin_page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets_admin_page/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets_admin_page/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets_admin_page/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  

                    
                 Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="<?=base_url()?>index.php/admin/c_admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/viewer"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/datatable_ajax"><i class="fa fa-fw fa-bar-chart-o"></i> Edit Berita</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/daftar_peserta"><i class="fa fa-fw fa-table"></i>Daftar Member</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/daftar_hot_topic"><i class="fa fa-fw fa-edit"></i> Ganti Status Hot Topic</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/create"><i class="fa fa-fw fa-desktop"></i> Add News</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/cetak/index_admin"><i class="fa fa-fw fa-wrench"></i> Persyaratan Pendaftaran</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/edit_persyaratan"><i class="fa fa-fw fa-file"></i>Edit Persyaratan</a>
                    </li>

                    <li>
                        <a href="<?=base_url()?>index.php/tugasbesarci_admin/tambah_persyaratan" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Tambah Persyaratan</a>
                        
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

tambah_persyaratan