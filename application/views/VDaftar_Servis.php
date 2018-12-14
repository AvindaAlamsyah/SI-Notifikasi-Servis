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

<!-- DataTables CSS -->
<link href="<?php echo base_url()?>admassets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url()?>admassets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url()?>admassets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

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
            <h1><a class="navbar-brand" href="<?php echo base_url('Dashboard')?>">SITUS ADMIN</a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">NAVIGASI</li>
              <li class="treeview">
                <a href="<?php echo base_url('Dashboard')?>">
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
                <a href="<?php echo base_url('Laporan_Transaksi') ?>">
                <i class="fa fa-book"></i> <span>Laporan Transaksi</span>
                </a>
              </li>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
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
									<span class="prfil-img"><img src="<?php echo base_url()?>admassets/images/2.jpg" alt=""> </span> 
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
								<li> <a href="<?php echo base_url('Login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
				<div class="forms">
					<div class="row">
						<h3 class="title1">Input Data Servis</h3>
						<div class="form-body widget-shadow col-md-7" data-example-id="basic-forms">
							<?php echo $this->session->flashdata('errors'); ?>
							<form class="form-horizontal" data-toggle="validator" action="<?php echo base_url('Daftar_Servis/daftar'); ?>" method="POST">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-9">
										<input class="form-control" name="nama" id="nama" placeholder="Tulis Nama Pelanggan" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">No. Telp</label>
									<div class="col-sm-9">
										<input class="form-control" type="number" name="noTelp" id="notelp" placeholder="Tulis Nomor Telepon Pelanggan" required>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kategori Barang</label>
									<div class="col-sm-9">
										<select name="kategori" id="selector1" class="form-control1" required>
											<option value="Laptop">Laptop</option>
											<option value="Mobile">Handphone</option>
											<option value="komputer">Komputer</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Model Barang</label>
									<div class="col-sm-9">
										<input class="form-control" name="model" placeholder="Tulis Model Barang Yang Diservis" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Kelengkapan</label>
									<div class="col-sm-9">
										<input class="form-control" name="kelengkapan" placeholder="Tulis Kelengkapan Dari Barang" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Keluhan</label>
									<div class="col-sm-9">
										<input class="form-control" name="keluhan" placeholder="Tulis Keluhan Dari Pelanggan Terhadap Barang" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Perkiraan Harga</label>
									<div class="col-sm-9">
										<input class="form-control" name="perkiraan" type="number" placeholder="Tulis Perkiraan Harga" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-2"></div>
									<button type="submit" class="col-sm-9 btn btn-primary disabled">Daftar</button>
								</div>
							</form>
						</div>
						<div class="form-group">
						</div>
						<div class="form-body widget-shadow col-md-5" data-example-id="basic-forms">
							<h4 class="title1">Riwayat Servis</h4>
							<div class="table-responsive bs-example widget-shadow" data-example-id="hoverable-table">
						<table class="table table-bordered table-hover" id="dataTabelku">
							<thead>
								<tr>
									<th>Kode Servis</th>
									<th>Nama</th>
									<th>No.Telp</th>
									<th>Tipe Barang</th>
									<th>Tanggal</th>
									<th>Kerusakan</th>
								</tr>
							</thead>
							<tbody id="tampilRiw">
							</tbody>
						</table> 
					</div>
						</div>
					</div>
				</div>
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

   <!--validator js-->
	<script src="<?php echo base_url()?>admassets/js/validator.min.js"></script>
	<!--//validator js-->

	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>admassets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-responsive/dataTables.responsive.js"></script>

	<!-- Tampilkan riwayat -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#notelp').on('input',function(){
				var nama = $('#nama').val();
				var notelp = $('#notelp').val();
				$.ajax({
					type : "POST",
					url : "<?php echo base_url('Daftar_Servis/riwayat'); ?>",
					dataType : "JSON",
					data : {nama: nama, noTelp: notelp},
					async : false,
					success : function(queryRiw){
						var html = '';
						var i;
						for (i = 0; i < queryRiw.length; i++){
							html += '<tr>'+
									'<td>'+queryRiw[i].idService+'</td>'+
									'<td>'+queryRiw[i].namaPelanggan+'</td>'+
									'<td>'+queryRiw[i].noTelp+'</td>'+
									'<td>'+queryRiw[i].modelBarang+'</td>'+
									'<td>'+queryRiw[i].tanggalSelesai+'</td>'+
									'<td>'+queryRiw[i].kerusakan+'</td>'+
									'</tr>'
						}
						$('#tampilRiw').html(html);
					}
				});
				return false;
			});
			$('#dataTabelku').DataTable({
				"searching": false,
				"lengthChange": false
			});
		});
	</script>
   
</body>
</html>