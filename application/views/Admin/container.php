<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Container</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/boots/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/boots/css/jquery.dataTables.css'?>">
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome Back, <?php echo $this->session->userdata('ses_nama');?>! As <?php echo $this->session->userdata('akses');?></a>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/admincontrol/user'?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard User of PT.TBS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/admincontrol/cont' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard No. Container</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/admincontrol/agen' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard Agent Name</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/admincontrol/ship' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard Ship Name</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper">
<div class="container">
    <div class="row">
    <div class="col-lg-10">
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Container</small>
                <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Container</a></div>
            </h1>
        </div>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>No. Container</th>
                    <th>Size</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody id="show_data">
                
            </tbody>
        </table>
        </div>
    </div>
    </div>
    <!-- </div> -->
    </div>
</div>

        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Container</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No. Container</label>
                        <div class="col-xs-9">
                            <input name="nocon" id="no_con" class="form-control" type="text" placeholder="No Container" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Size</label>
                        <div class="col-xs-9">
                            <input name="sizecon" id="size_con" class="form-control" type="text" placeholder="Size Container" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Container</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                       <label class="control-label col-xs-3" >No. Container</label>
                        <div class="col-xs-9">
                            <input name="nocon_edit" id="no_con2" class="form-control" type="text" placeholder="No Container" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Size</label>
                        <div class="col-xs-9">
                            <input name="sizecon_edit" id="size_con2" class="form-control" type="text" placeholder="Size" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Container</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus container ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
</div>

</div>

<script type="text/javascript" src="<?php echo base_url().'assets/boots/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/boots/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/boots/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_container();   //pemanggilan fungsi tampil barang.
        
        $('#mydata').dataTable();
         
        //fungsi tampil barang
        function tampil_data_container(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/admincontrol/data_cont',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].no_container+'</td>'+
                                '<td>'+data[i].size+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].no_container+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].no_container+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/admincontrol/get_cont')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(no_container, size){
                        $('#ModalaEdit').modal('show');
                        $('[name="nocon_edit"]').val(data.no_container);
                        $('[name="sizecon_edit "]').val(data.size);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var nocon=$('#no_con').val();
            var sizecon=$('#size_con').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/admincontrol/simpan_cont')?>",
                dataType : "JSON",
                data : {nocon:nocon , sizecon:sizecon},
                success: function(data){
                    $('[name="nocon"]').val("");
                    $('[name="sizecon"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_container();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var nocon=$('#no_con2').val();
            var sizecon=$('#size_con2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/admincontrol/update_cont')?>",
                dataType : "JSON",
                data : {nocon:nocon, sizecon:sizecon},
                success: function(data){
                    $('[name="nocon_edit"]').val("");
                    $('[name="sizecon_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_container();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/admincontrol/hapus_cont')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_container();
                    }
                });
                return false;
            });

    });

</script>
</body>
</html>