
 <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
            </ol>
		<!--grid-->
<div class="grid-form">
<!---->
  <div class="grid-form1">
  	       <h3>Form Transaksi Penyaluran</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form  class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>zakat/insertpenyaluran">
>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Id Penyaluran</label>
									<div class="col-sm-8">
										<input type="text" name="txtid" class="form-control1" id="focusedinput" placeholder="Masukan Id Penyaluran">	
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Id Mustahiq</label>
									<div class="col-sm-8">
										<input type="text" name="txtidmustahiq" class="form-control1" id="focusedinput" placeholder="Masukan Id Mustahiq">
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">TgL Penyaluran</label>
									<div class="col-sm-8">
										<input type="text" name="txttgl" class="form-control1" id="focusedinput" placeholder="Masukan Tanggal">
									</div>
								</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nominal</label>
									<div class="col-sm-8">
										<input type="text" name="txtnominal" class="form-control1" id="focusedinput" placeholder="Masukan Nominal">
									</div>
									</div>
									<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">IdUser</label>
									<div class="col-sm-8"><select name="suser" id="selector1" class="form-control1">
										<option>001</option>
										<option>002</option>
										</option>
									</select></div>
									</div>
									
								
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" type="submit" name="simpan">Submit</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
