
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
  	       <h3>Form Muzaki</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form  class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>zakat/updatemuzaki">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Id Muzaki</label>
									<div class="col-sm-8">
										<input type="text" name="txtid" value="<?= $data->IdMuzaki ?>" class="form-control1" id="focusedinput" placeholder="Default Input">	
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Nama Muzaki</label>
									<div class="col-sm-8">
										<input type="text" name="txtnama" value="<?= $data->NamaMuzaki ?>" class="form-control1" id="focusedinput" placeholder="Masukan Nama Muzaki">
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Tanggal Lahir</label>
									<div class="col-sm-8">
										<input type="text" name="txttgl" value="<?= $data->TglLahir ?>" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									</div>
									<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Jenis Kelamin</label>
									<div class="col-sm-8"><select name="sjeniskelamin" value="<?= $data->JenisKelamin ?>" id="selector1" class="form-control1">
										<option>Laki-laki</option>
										<option>Perempuan</option>
										</option>
									</select></div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" name="txtalamat" value="<?= $data->AlamatMuzaki ?>" class="form-control1" id="focusedinput" placeholder="Masukan Nama Muzaki">
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">No Telp</label>
									<div class="col-sm-8">
										<input type="text" name="txtnotelp" value="<?= $data->No_Telp ?>" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
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
	