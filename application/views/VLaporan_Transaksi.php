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
				<div class="tables">
					<h2 class="title1">Data Servis</h2>
						<div class="table-responsive bs-example widget-shadow" data-example-id="hoverable-table">
							<div class="form-group">
                        		<label class="control-label col-xs-1" >Bulan :</label>
                        		<div class="col-xs-4">
                            	<input type="month" name="sortBy" id="sortBy" style="height:20px;">
                        		</div>
                    		</div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Kode Servis</th>
										<th>Nama</th>
										<th>Tipe Barang</th>
										<th>Tgl. Selesai</th>
										<th>Kerusakan</th>
										<th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody id="LapTran">
                                	
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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
	<!-- //Bootstrap Core JavaScript -->

	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>admassets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>admassets/vendor/datatables-responsive/dataTables.responsive.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        var table = $('#dataTables-example').DataTable({
            responsive: true,
            "searching": false,
            "lengthChange": false,
            /*"footerCallback": function( row, data, start, end, display){
            	var api = this.api();

            	var intVal = function(i){
            		return typeof i === 'string' ?
            		i.replace(/[\$,]/g,'')*1 :
            			typeof i === 'number' ?
            			i : 0;
            	};

            	var total = api
            		.column(5)
            		.data()
            		.reduce(function(a,b){
            			return intVal(a) + intVal(b);
            		});

            		$(api.column(5).footer()).html('$'+total+'total');
            }*/
        });

        //tampilkan menurut bulan
        
        $('#sortBy').on('input',function(){
			var bulan = $('#sortBy').val();
        	$.ajax({
        		type: "POST",
        		url: "<?php echo base_url('Laporan_Transaksi/tampilSort'); ?>",
        		dataType: "JSON",
        		data: {tamBer: bulan},
        		success: function(query){
        			var HTML = '';
        			var i;
        			var sum = 0;
        			for (i = 0; i < query.length; i++) {
        				sum += parseInt(query[i].biaya);
        				HTML += '<tr>'+
        						'<td>'+query[i].idService+'</td>'+
        						'<td>'+query[i].namaPelanggan+'</td>'+
        						'<td>'+query[i].modelBarang+'</td>'+
        						'<td>'+query[i].tanggalSelesai+'</td>'+
        						'<td>'+query[i].kerusakan+'</td>'+
        						'<td style="text-align:right">'+Intl.NumberFormat().format(query[i].biaya)+'</td>'+
        						'</tr>'
        			}
        			HTML += '<tr>'+
        					'<td colspan="5" style="text-align:right">TOTAL</td>'+
        					'<td style="text-align:right">'+Intl.NumberFormat().format(sum)+'</td>'+
        					'<tr>'
        			$('#LapTran').html(HTML);
        			table.reload();
        		}
        	});
        	return false;
        });
    });
    </script>
	
</body>
</html>