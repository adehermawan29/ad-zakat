
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator Zakat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?=base_url('assets/css/morris.css')?>" type="text/css"/>
<!-- Graph CSS -->
<link href="<?=base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?=base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?=base_url('assets/css/icon-font.min.css')?>" type='text/css' />
<!-- //lined-icons -->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/table-style.css')?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/basictable.css')?>" />
<script type="text/javascript" src="<?=base_url('assets/js/jquery.basictable.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
</head> 
<body>
   <!--/content-inner-->

<header class="agileits-box-header clearfix">
</header>

<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 

					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?=base_url('zakat/tampilmuzaki')?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a>
										
										</li>
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Data Master</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampilmuzaki')?>">Data Muzaki</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampilmustahiq')?>">Data Mustahiq</a></li>
											<li id="menu-academico-avaliacoes" ><a href="faq.html">Data Admin</a></li>
										  </ul>
										</li>
									  <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> Transaksi</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampiltransaksipenerimaan')?>">Belum Dikonfirmasi</a></li>
										   <li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampiltransaksipenerimaan')?>">Penerimaan Zakat</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampiltransaksipenyaluran')?>">Penyaluran Zakat</a></li>
										  </ul>
										</li>
									 <li><a href="tabels.html"><i class="fa fa-table"></i>  <span> Daftar Konfirmasi</span><div class="clearfix"></div></a></li>
							        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Laporan</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="<?=base_url('zakat/tampilmuzaki')?>">Transaksi Penerimaan</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?=base_url('zakat/tampilmustahiq')?>">Transaksi Penyaluran</a></li>
											
										  </ul>
									 </li>
									 <li><a href="<?=base_url('zakat/tampilmuzaki')?>"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>About</span><div class="clearfix"></div></a></li>
									<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Sign Up</span> 
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?=base_url('assets/js/jquery.nicescroll.js')?>"></script>
<script src="<?=base_url('assets/js/scripts.js')?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="<?=base_url('assets/js/raphael-min.js')?>"></script>
<script src="<?=base_url('assets/js/morris.js')?>"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>