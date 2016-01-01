<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/login.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Easy <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						
						<li><a><i class="lnr lnr-spell-check"></i> <span>Form</span></a>
							<ul class="sub-menu-list">
								<li><a href="forms_petugas.php">Petugas</a> </li>
								<li><a href="forms_penyewa.php">Penyewa</a> </li>
								<li><a href="forms_properti.php">Properti</a> </li>
								<li><a href="forms_transaksi.php">Penyewaan Lapangan</a></li>
								<li><a href="forms_lapangan.php">Lapangan</a> </li>
								<li><a href="forms_paket.php">Paket</a> </li>
							</ul>
						</li>
						<li><a><i class="lnr lnr-menu"></i> <span>Tables</span></a>
							<ul class="sub-menu-list">
								<li><a href="t_petugas.php">Petugas</a> </li>
								<li><a href="t_penyewa.php">Penyewa</a> </li>
								<li><a href="t_properti.php">Properti</a> </li>
								<li><a href="t_transaksi.php">Penyewaan Lapangan</a></li>
								<li><a href="t_lapangan.php">Lapangan</a> </li>
								<li><a href="t_paket.php">Paket</a> </li>
							</ul>
						</li>              
						<li><a href="search.php"><i class="lnr lnr-select"></i> <span>Search</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Log Out</span></a> </li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										
										 <div class="user-name">
											<p><span></span></p>
										 </div>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>	           	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			<div id="page-wrapper">
					<h3 class="blank1">Form Properti</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ID Properti</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Id">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Nama Properti</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="Nama">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Keterangan">
									</div>
								</div>
								  <div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-success btn">Insert</button>
											<button class="btn-default btn">Update</button>
											<button class="btn-inverse btn">Delete</button>
										</div>
							</form>
						</div>
					</div>
						<div class="clearfix"> </div>

			<!-- switches -->
		
		<!-- //switches -->
		
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>