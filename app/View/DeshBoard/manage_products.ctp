<style type="text/css">
	.cards{
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 7px !important;
    display: block;
    margin-bottom: 0.75rem;
    position: relative;
}
.c-table{
    max-width: 97%;
    padding: 10px!important;
    margin-left: 4px!important;
}
</style>
<body>	
<div class="container">
<div class="row well">
<div class="col-md-6 pull-left">
	<div class=" cards ">
		<div class=" padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Add Product Category</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr class="form-group control-group controls">
						<td class="">
							Name
						</td>
						<td>
							<input type="text" class="form-control required" class="form-control required" id="category" name="category">
						</td>
					</tr>
				</table>
			</div>
			<button class="btn btn-primary" onclick="submitData('category')">Submit</button>
		</div>
	</div>
	<div class="clearfix margin-bottom-10"></div>
	<div class=" cards ">
		<div class="padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Add Product Group</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr class="form-group control-group controls">
						<td class="">
							Name
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" id="group" name="group">
						</td>
					</tr>
				</table>
			</div>
			<button class="btn btn-primary" onclick="submitData('group')">Submit</button>
		</div>
	</div>
</div>

<div class="col-sm-6 pull-right">
	<div class=" cards ">
		<div class="padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Add Product Brand</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr class="form-group control-group controls">
						<td class="">
							Name
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" id="brand" name="brand">
						</td>
					</tr>
				</table>
			</div>
			<button class="btn btn-primary" onclick="submitData('brand')">Submit</button>
		</div>
	</div>
	<div class="clearfix margin-bottom-10"></div>
	<div class="cards ">
		<div class=" padding-left-10 card card-block margin-bottom-10">
			<h3 class="card-title">Add New Client</h3>
			<div class="row">
				<table class="table table-bordered c-table">
					<tr class="form-group control-group controls">
						<td class="">
							Name
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" onchange="getFields();" id="clientName" name="clientName">
						</td>
					</tr>
					<tr class="hidden cntclass form-group control-group controls">
						<td class="">
							Address
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" id="clientAdd" name="clientAdd">
						</td>
					</tr>
					<tr class="hidden cntclass form-group control-group controls">
						<td class="">
							Phone No
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" id="clientPh" name="clientPh">
						</td>
					</tr>
					<tr class="hidden cntclass form-group control-group controls">
						<td class="">
							Email
						</td>
						<td class="card-text">
							<input type="text" class="form-control required" id="clientEmail" name="clientEmail">
						</td>
					</tr>
				</table>
			</div>
			<button class="btn btn-primary" onclick="submitData('client')">Submit</button>
		</div>
	</div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$('.cntclass').addClass('hidden');
	
});
function getFields() {
	$('.cntclass').removeClass('hidden');
}
function submitData(id){
	manageData = [];
	if(id === 'client') {
	var	Name = $("#clientName").val();
	var	clientAdd = $("#clientAdd").val();
	var	clientPh = $("#clientPh").val();
	var	clientEmail = $("#clientEmail").val();
	} else {
	var	Name = $("#" + id).val();
	}
	$.ajax({
		type: "POST",
		url: "<?php echo ABSOLUTE_URL;?>/desh_board/addManageData",
		data: {id:id,name:Name,add:clientAdd,phone:clientPh,email:clientEmail},
		success: function( data ){
			alert(data);
			$('.cntclass').addClass('hidden');
		}, error: function (request, status, error) {
            alert("Something went wrong");
        }
	});
}
</script>