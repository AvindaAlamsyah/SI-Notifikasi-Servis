<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>admassets/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url()?>admassets/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url()?>admassets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- DataTables CSS -->
<link href="<?php echo base_url()?>admassets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url()?>admassets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<!-- side nav css file -->
<link href='<?php echo base_url()?>admassets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="<?php echo base_url()?>admassets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>admassets/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="<?php echo base_url()?>admassets/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url()?>admassets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>admassets/js/custom.js"></script>
<link href="<?php echo base_url()?>admassets/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php echo base_url('Dashboard') ?>">SITUS ADMIN</a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">NAVIGASI</li>
              <li class="treeview">
                <a href="<?php echo base_url('Dashboard') ?>">
                <i class="fa fa-tasks"></i> <span>Data Servis</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('Daftar_Servis') ?>">
                <i class="fa fa-edit"></i>
                <span>Daftar Servis</span>
                </a>
              </li>
			  <li>
                <a href="<?php echo base_url('Laporan_Transaksi');?>">
                <i class="fa fa-book"></i> <span>Laporan Transaksi</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
                <!--notifications of menu start
				<div class="profile_details_left">
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="coba"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>		
					</ul>
					<div class="clearfix"> </div>
				</div>
				notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
                                    <span class="prfil-img"><i class="fa fa-user lnr" style="top: 34%; right: 100%;"></i></span>
									<div class="user-name">
										<p><?php
										echo $this->session->userdata('user');
										?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> -->
								<li> <a href="<?php echo base_url('Login/logout') ; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Data Servis</h2>
						<div class="table-responsive bs-example widget-shadow" data-example-id="hoverable-table">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Kode Servis</th>
										<th>Nama</th>
										<th>No.Telp</th>
										<th>Tipe Barang</th>
										<th>Keluhan</th>
										<th>Tgl. Masuk</th>
										<th>Kerusakan</th>
										<th>Status</th>
										<th>Perkiraan Harga</th>
										<th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody id="tampilData">
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                </div>

        <!-- Modal Update -->
    	<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                	<div class="modal-header">
                		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                		<h3 class="modal-title" id="myModalLabel">Update Data Servis</h3>
                	</div>
                	<form class="form-horizontal">
                		<div class="modal-body">
                			<div class="form-group">
                        		<label class="control-label col-xs-3" >Kode Servis</label>
                        		<div class="col-xs-9">
                            	<input name="idEdit" id="idService2" class="form-control" type="text" placeholder="Kode servis" style="width:335px;" readonly>
                        		</div>
                    		</div>
                    		<div class="form-group">
                        		<label class="control-label col-xs-3" >Tipe Barang</label>
                        		<div class="col-xs-9">
                            	<input name="modelEdit" id="modelBarang2" class="form-control" type="text" placeholder="Model Barang" style="width:335px;" readonly>
                        		</div>
                    		</div>
                    		<div class="form-group">
                        		<label class="control-label col-xs-3" >Kerusakan</label>
                        		<div class="col-xs-9">
                            	<input name="kerusakanEdit" id="kerusakan2" class="form-control" type="text" placeholder="Input Kerusakan Barang" style="width:335px;" required>
                        		</div>
                    		</div>
                    		<div class="form-group">
                        		<label class="control-label col-xs-3" >Status</label>
                        		<div class="col-xs-9">
                            	<select name="statusEdit" id="statusServis2" class="form-control" type="text" style="width:335px;">
                                    <option>default</option>
                            		
                            	</select>
                        		</div>
                    		</div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Biaya</label>
                                <div class="col-xs-9">
                                <input name="biayaEdit" id="biayaServis2" class="form-control" type="text" placeholder="Input Biaya Servis" style="width:335px;" required>
                                </div>
                            </div>
                		</div>
                		<div class="modal-footer">
                			<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                			<button class="btn btn-info" id="btnUpdate">Update</button>
                		</div>
                	</form>
                </div>
            </div>
        </div>
        <!-- END Modal Update -->

        <!-- Modal Selesai -->
        <div class="modal fade" id="ModalSelesai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        				<h4 class="modal-title" id="myModalLabel">Selesai Servis</h4>
        			</div>
        			<form class="form-horizontal">
        				<div class="modal-body">
                            <div class="form-group alert alert-warning">
                                <label class="control-label col-xs-3" >Biaya Servis</label>
                                <div class="col-xs-9">
                                <input name="biaya" id="idbiaya" class="form-control" type="text" style="width:335px;" readonly="readonly">
                                <input type="hidden" id="idServ" name="id">
                            </div><br><br>
        					<p>Apakah anda yakin barang berikut telah selesai diservis?</p>
        				</div>
        				<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        					<button class="btn_selesai btn btn-danger" name="btn-done" id="btn_selesai">Selesai</button>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
        <!-- END Modal Selesai -->

            </div>
        </div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
	<!-- side nav js -->
	<script src='<?php echo base_url()?>admassets/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url()?>admassets/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="<?php echo base_url()?>admassets/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url()?>admassets/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url()?>admassets/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>admassets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-responsive/dataTables.responsive.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script type="text/javascript">
    $(document).ready(function() {
    	dataServis();

        //cek field biaya sudah terisi dengan benar atau belum
        $('[name="btn-done"]').attr('disabled','disabled');
        $(document).mousemove(function(){
            if ($('[name="biaya"]').val() == "0" || $('[name="biaya"]').val() == "") {
                $('[name="btn-done"]').attr('disabled','disabled');
            }else{
                $('[name="btn-done"]').removeAttr('disabled');
            }
        });

    	$('#dataTables-example').DataTable();

    	//tampilkan data service
    	function dataServis(){
        	
        	$.ajax({
        		type : "ajax",
        		url : "<?php echo base_url('Dashboard/tampil'); ?>",
        		async : false,
        		dataType : "JSON",
        		success : function(query){
        			var html = '';
        			var i;
        			for (i = 0; i < query.length; i++) {
        				html += '<tr>'+
        						'<td>'+query[i].idService+'</td>'+
        						'<td>'+query[i].namaPelanggan+'</td>'+
        						'<td>'+query[i].noTelp+'</td>'+
        						'<td>'+query[i].modelBarang+'</td>'+
        						'<td>'+query[i].keluhan+'</td>'+
        						'<td>'+query[i].tanggalMasuk+'</td>'+
        						'<td>'+query[i].kerusakan+'</td>'+
        						'<td>'+query[i].statusService+'</td>'+
        						'<td>'+Intl.NumberFormat().format(query[i].estimasiHarga)+'</td>'+
        						'<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+query[i].idService+'">Edit</a>'+
                                    '<a href="javascript:;" class="btn btn-success btn-xs item_selesai" data="'+query[i].idService+'">Selesai</a>'+
                                '</td>'+
        						'</tr>';
        			}
        			$('#tampilData').html(html);
        		}
        	});
        }

        //tampilkan data yang dipilih
        $('#tampilData').on('click','.item_edit',function(){
        	var id = $(this).attr('data');
        	//var id =  values.push($(this).text());
        	$.ajax({
        		type : "GET",
        		url : "<?php echo base_url('Dashboard/tampilMen'); ?>",
        		dataType : "JSON",
        		data : {id: id},
        		async : false,
        		success : function(query){
        			var statusData = query.statusService;
        				$('#ModalUpdate').modal('show');
        				$('[name="idEdit"]').val(query.idService);
        				$('[name="modelEdit"]').val(query.modelBarang);
        				$('[name="kerusakanEdit"]').val(query.kerusakan);
        				$('[name="biayaEdit"]').val(Intl.NumberFormat().format(query.biaya));
                        var opt = '';
                        if (statusData == "Belum") {
                            opt += '<option value="Belum" selected>Belum</option>'+
                                '<option value="Dikerjakan">Dikerjakan</option>'+
                                '<option value="Batal">Batal</option>';
                        }else if(statusData == "Dikerjakan"){
                            opt += '<option value="Belum">Belum</option>'+
                                '<option value="Dikerjakan" selected>Dikerjakan</option>'+
                                '<option value="Batal">Batal</option>';
                        }
                        $('#statusServis2').html(opt);
        		}
        	});
        	return false;
        	//$('#ModalUpdate').modal('show');
        	//alert(values.push($(this).text()));
        });

        //Update Barang
        $('#btnUpdate').on('click',function(){
        	var id = $('#idService2').val();
        	var kerusakan = $('#kerusakan2').val();
            var status = $('#statusServis2').val();
        	var biaya = $('#biayaServis2').val();
        	$.ajax({
        		type : "POST",
        		url : "<?php echo base_url('Dashboard/updateSer') ?>",
        		dataType : "JSON",
        		data :{id: id, kerusakan: kerusakan, status: status, biaya: biaya},
        		success : function(query){
        			$('[name="idEdit"]').val("");
        			$('[name="kerusakanEdit"]').val("");
                    $('[name="statusEdit"]').val("");
        			$('[name="biayaEdit"]').val("");
        			$('#ModalUpdate').modal('hide');
        			dataServis();
        		}
        	});
        	return false;
        });

        //tampil data yang update SELESAI
        $('#tampilData').on('click','.item_selesai',function(){
        	var id = $(this).attr('data');
        	
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('Dashboard/tampilMen'); ?>",
                dataType: "JSON",
                data: {id: id},
                success: function(query){
                   $('#ModalSelesai').modal('show');
                   $('[name = "biaya"]').val(Intl.NumberFormat().format(query.biaya));
                   $('[name = "id"]').val(query.idService);
                }
            });
            return false;
        });

        //update data barang dengan status selesai
        $('#btn_selesai').on('click',function(){
        	var id = $('#idServ').val();
        	$.ajax({
        		type : "POST",
        		url : "<?php echo base_url('Dashboard/selesai'); ?>",
        		dataType : "JSON",
        		data : {id: id},
        		success : function(query){
        			$('#ModalSelesai').modal('hide');
        			dataServis();
        		},
                error(query){
                    $('#ModalSelesai').modal('hide');
                    alert('Gagal Update');
                }
        	});
        	return false;
        });
    });
    </script>
	
</body>
</html>