<!DOCTYPE html>
<html>
<head>
	<title>Latihan Ajax</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

<link href="<?php echo base_url().'assets/css/material-dashboard.min40a0.css?v=2.0.2'; ?>" rel="stylesheet" />




</head>
<style type="text/css">
	th{
		padding: 20px;
	}
	td{
		padding: 20px;
	}

td {
	cursor: pointer;
}

.editor{
	display: none;
}

</style>

<body>


<button class="btn btn-info" id="tambah-data"><i class="glyphicon glyphicon-plus-sign"></i> Tambah </button>
<table border='2' style="border-collapse: collapse;">
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Aksi</th>
	</tr>
	<tbody id='table-body'>
	<?php $no = 1; foreach ($produk as $produks): ?>
		
		<tr data-id='<?php echo $produks['id'];?>' >
			<td><span class='span-no caption' data-id='<?php echo $produks['id'];?>'><?php echo $no++;?></span> </td>
			<td><span class='span-nama caption' data-id='<?php echo $produks['id'];?>'><?php echo $produks['nama_produk'];?></span> <input type='text' class='field-nama form-control editor' value='<?php echo $produks['nama_produk'];?>' data-id='<?php echo $produks['id'];?>' /></td>
			<td><span class='span-harga caption' data-id='<?php echo $produks['id'];?>'><?php echo $produks['harga'];?></span> <input type='text' class='field-harga form-control editor' value='<?php echo $produks['harga'];?>' data-id='<?php echo $produks['id'];?>' /></td>
			<td><span class='span-jumlah caption' data-id='<?php echo $produks['id'];?>'><?php echo $produks['jumlah'];?></span> <input type='text' class='field-jumlah form-control editor' value='<?php echo $produks['jumlah'];?>' data-id='<?php echo $produks['id'];?>' /></td>
		
			<td>
				<button class='btn btn-xs btn-danger hapus-produk' data-id='<?php echo $produks['id']; ?>'><i class='glyphicon glyphicon-remove'></i>Hapus</button>
			</td>

		</tr>
	<?php endforeach ?>
	</tbody>
</table>











<!--   Core JS Files   -->
<script src=" <?php echo base_url().'assets/js/core/jquery.min.js';?>" type="text/javascript"></script>
<script src=" <?php echo base_url().'assets/js/core/popper.min.js'?>" type="text/javascript"></script>
<script src=" <?php echo base_url().'assets/js/core/bootstrap-material-design.min.js'?>" type="text/javascript"></script>

<script src=" <?php echo base_url().'assets/js/plugins/perfect-scrollbar.jquery.min.js'?>" ></script>


<!-- Plugin for the momentJs  -->
<script src=" <?php echo base_url().'assets/js/plugins/moment.min.js'?>"></script>



<!-- Forms Validations Plugin -->
<script src=" <?php echo base_url().'assets/js/plugins/jquery.validate.min.js'?>"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src=" <?php echo base_url().'assets/js/plugins/jquery.bootstrap-wizard.js'?>"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src=" <?php echo base_url().'assets/js/plugins/bootstrap-selectpicker.js'?>" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src=" <?php echo base_url().'assets/js/plugins/bootstrap-datetimepicker.min.js'?>"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src=" <?php echo base_url().'assets/js/plugins/jquery.dataTables.min.js'?>"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src=" <?php echo base_url().'assets/js/plugins/bootstrap-tagsinput.js'?>"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src=" <?php echo base_url().'assets/js/plugins/jasny-bootstrap.min.js'?>"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src=" <?php echo base_url().'assets/js/plugins/fullcalendar.min.js'?>"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src=" <?php echo base_url().'assets/js/plugins/jquery-jvectormap.js'?>"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=" <?php echo base_url().'assets/js/plugins/nouislider.min.js'?>" ></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="   cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src=" <?php echo base_url().'assets/js/plugins/arrive.min.js'?>"></script>




<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="   buttons.github.io/buttons.js"></script>


<!-- Chartist JS -->
<script src=" <?php echo base_url().'assets/js/plugins/chartist.min.js'?>"></script>

<!--  Notifications Plugin    -->
<script src=" <?php echo base_url().'assets/js/plugins/bootstrap-notify.js'?>"></script>


<!-- Ajax Hapus Data -->

<script type="text/javascript">

    
    
    
$(function(){

  $.ajaxSetup({
  type:"post",
  cache:false,
  dataType: "json"
})



// CLick Edit

$(document).on("click","td",function(){
$(this).find("span[class~='caption']").hide();
$(this).find("input[class~='editor']").fadeIn(1000).focus();
});

    

    

// Add AJax

$("#tambah-data").click(function(){
$.ajax({
url:"<?php echo base_url('index.php/Crud_Ajax/create'); ?>",
success: function(a){
var ele="";
ele+="<tr data-id='"+a.id+"'>";
ele+="<td><span class='span-no caption' data-id='"+a.id+"'></span> <input type='text' class='field-no form-control editor'  data-id='"+a.id+"' /></td>";
ele+="<td><span class='span-nama caption' data-id='"+a.id+"'></span> <input type='text' class='field-nama form-control editor'  data-id='"+a.id+"' /></td>";
ele+="<td><span class='span-harga caption' data-id='"+a.id+"'></span> <input type='text' class='field-harga form-control editor' data-id='"+a.id+"' /></td>";
ele+="<td><span class='span-jumlah caption' data-id='"+a.id+"'></span> <input type='text' class='field-jumlah form-control editor'  data-id='"+a.id+"' /></td>";
ele+="<td><button class='btn btn-xs btn-danger hapus-produk' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
ele+="</tr>";

var element=$(ele);
element.hide();
element.prependTo("#table-body").fadeIn(1500);

}
});
});



// Enter Action
$(document).on("keydown",".editor",function(e){
if(e.keyCode==13){
var target=$(e.target);
var value=target.val();
var id=target.attr("data-id");
var data={id:id,value:value};
if(target.is(".field-nama")){
data.modul="nama_produk";
}else if(target.is(".field-harga")){
data.modul="harga";
}else if(target.is(".field-jumlah")){
data.modul="jumlah";
}
// target.hide();
// target.siblings("span[class~='caption']").html(value).fadeIn();

$.ajax({
	data:data,
	url:"<?php echo base_url('index.php/Crud_Ajax/update');?>",
	success: function(a){
	 target.hide();
	 target.siblings("span[class~='caption']").html(value).fadeIn();
	}

})

}

});





$(document).on("click",".hapus-produk",function(){
	var id=$(this).attr("data-id");

	
	swal({
		title:"Hapus Produk",
		text:"Yakin akan menghapus Produk Delete ?",
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "Delete",
		closeOnConfirm: true,
	},
		function(){
		$.ajax({
		data:{id:id},
		url:"<?php echo base_url('index.php/Crud_Ajax/delete');?>",
		success: function(){
		 $("tr[data-id='"+id+"']").fadeOut("fast",function(){
					$(this).remove();
				});
			}

		})

	});


});

});

    
    
    
</script>







</body>
</html>