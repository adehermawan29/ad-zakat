       <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/themes/jquery.ui.all.css" type="text/css" />
  	<script>
	$(document).ready(function() {
			$( ".datepicker" ).datepicker();
	});

	function save(){
		$.ajax({
			url:'<?php echo base_url(); ?>index.php/zakat/hitfitrah/',		 
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){ 
			  		 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false,modal: true});	
			 }
		});		
	}
	function confirmdlg(){
					$("#confirm").dialog({
					 resizable: false,
					 modal: true,
					 title:"Info...",
					 draggable: false,
					 width: 'auto',
					 height: 'auto',
					 buttons: {
					 "Ya": function(){
						 save();   
						  $(this).dialog("close");
					  },
					  "Tutup": function(){
						   $(this).dialog("close");
						}
					 }
				  });
 
			}
			
	</script>
<h1 style="margin-left:10px;"> Hitung Zakat Fitrah</h1>
<div class='well' style="margin:10px;background-color:#fff">	
<form method="post" class="form1" id="form_barang" name="form_barang"/>
 <table style="width:100%">
    <tr>
      <td>Kisaran Harga Beras / Liter <br> <br></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="text" name="penghasilan"  class="form-control"  style="width:300px"  value="7500" /></td>
	  <td>&nbsp;</td>
	  
      <td>&nbsp;</td>
    </tr>
    <tr>
		<td colspan="3"><hr></td>
	</td>
       <tr>
      <td><a style="margin-bottom:5px;" onclick="return confirmdlg()" href="#" class="btn-success btn">Simpan</a> 
      <a style="margin-bottom:5px;" href="<?php echo base_url() ?>home" class="btn-danger btn">Kembali</a></td>
    </tr>
</table>
</form>
</div>
<div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>     