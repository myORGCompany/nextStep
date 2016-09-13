 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/jquery.min.js"></script>
 
  <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/moment.min.js"></script>
 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/jquery.validate.js"></script>
  <link rel="stylesheet" href="<?php echo ABSOLUTE_URL;?>/css/bootstrap-datetimepicker.min.css" />
<body>
	<div class="container well">
		<div class="row">
		<div class="clearfix"></div> 
		<div class="col-md-3 col-md-offset-5 margin-bottom-20"><h3 class="text-info" ><strong>Add New Product</strong></h3></div>
		<div class="clearfix"></div> 
		
			<div class="table-responsive border-2">
				<div class="">
					<form class="form-horizontal" action="javascript:SubmitAndGetAck();" id="productForm">
						<div class="form-group control-group controls">
							<label for="input1" class="col-sm-2 control-label margin-right-100">Name of product</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter the name of product" name="name" id="input1" placeholder="Email">
							</div>
						</div>
						<div class="form-group control-group controls " >
							<label for="input2" class="col-sm-2 control-label margin-right-100">Quantity</label>
							<div class="col-sm-2">
								<input type="number" class="form-control required col-sm-6" title="Please mention the quantity" name="quantity" id="input2"  >
							</div> 
							<label for="input13" class="control-label pull-left "><span class="glyphicon glyphicon-scale " >&nbsp;Packing</span></label>
							<div class="col-sm-2 ">
								<input type="number" class="form-control required col-sm-6" title="Please mention the packing" name="packing" id="input13"  >
							</div>
							<label for="input2" class="control-label pull-left padding-right-0 padding-left-0"><span class="glyphicon glyphicon-scale " >&nbsp;Unit</span></label>
							
							<div class="col-sm-2 pull-left padding-right-57">
								<select class="form-control required" title="Please select product packing unit" name="unit" id="input3">
									<option value='0'>Select Unit</option>
								    <option value='number'>Number</option>
								    <option value='kilogram'>Weight in Kilo Gram</option>
								    <option value='gram'>Weight in Gram</option>
								    <option value='liter'>Liters</option>
								</select>
							</div>
						</div>
					
						<div class="form-group control-group controls">
							<label for="input4" class="col-sm-2 control-label margin-right-100">Brand</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please mention the brand" name="brand" id="input4" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input5" class="col-sm-2 control-label margin-right-100">Category</label>
							<div class="col-sm-7">
								<select class="form-control required" title="Please select product category" name="master_category_id" id="input5">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								</select>
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input6" class="col-sm-2 control-label margin-right-100">Product Group</label>
							<div class="col-sm-7">
								<select class="form-control required" title="Please select product group" name="product_group_id" id="input6">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								</select>
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input7" class="col-sm-2 control-label margin-right-100">Price per peice</label>
							<div class="col-sm-7">
								<input type="number" class="form-control required" title="Please Enter the price of each unit" name="price" id="input7" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input8" class="col-sm-2 control-label margin-right-100">Perches Date</label>
			                <div class='input-group date col-sm-7' id='input8'>
			                    <input type='text' class="form-control required" name="perchese_date" title="Please select Perchesing date of product" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
						</div>
						<div class="form-group control-group controls">
							<label for="input9" class="col-sm-2 control-label margin-right-100">Bill number</label>
							<div class="col-sm-7">
								<input type="text" class="form-control required" title="Please Enter the Bll number" name="bill_number" id="input9" >
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input10" class="col-sm-2 control-label margin-right-100">Client</label>
							<div class="col-sm-7">
								<select class="form-control required" title="Please select a client" name="client_id" id="input10">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								</select>
							</div>
						</div>
						<div class="form-group control-group controls">
							<label for="input11" class="col-sm-2 control-label margin-right-100">Max Discount</label>
							<div class="col-sm-7">
								<input type="number" class="form-control digits" title="Please Enter the maximum discount" name="max_discount" id="input11" >
							</div>
						</div>
						
			            <div class="form-group control-group controls">
			            <label for="input12" class="col-sm-2 control-label margin-right-100">ExpairyDate</label>
			                <div class='input-group date col-sm-7' id='input12'>
			                    <input type='text' class="form-control required" name="expairy_date" title="Please select Expairy date of product" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
			            </div>
				       <div class="clearfix"></div> 
						<div class="form-group control-group controls col-sm-11">
							<div class="pull-right margin-right-70">
								<button type="submit" class="btn btn-default btn-lg ">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
    $(function () {
        $('#input8').datetimepicker({
            viewMode: 'years',
			format: 'DD/MM/YYYY'
        });
        $('#input12').datetimepicker({
            viewMode: 'years',
			format: 'DD/MM/YYYY'
        });
    });

$(document).ready(function () {
			$(document).on('change', 'input:radio', function (event) {
			    var redio = $( "input:checked" ).val();
			    if (redio == 'weight') {
			    	$('#quantity').addClass('hidden');
			    	$('#liter').addClass('hidden');
			    }else if (redio == 'quantity') {
			    	$('#weight').addClass('hidden');
			    	$('#liter').addClass('hidden');
			    }else if (redio == 'liter') {
			    	$('#weight').addClass('hidden');
			    	$('#quantity').addClass('hidden');
			    }
			    $('#'+redio).removeClass('hidden');
			   
			});
            $('#productForm').validate({
                rules: {
                     name: {
                        minlength: 2,
                        required: true
                    },
                    quantity: {
                        minlength: 2,
                        required: true,
                    },
                    packing: {
                        minlength: 2,
                        required: true,
                    },
                    unit: {
                        minlength: 2,
                        required: true,
                    },
                    brand: {
                        minlength: 2,
                        required: true,
                    },
                    prduct_category_id: {
                        required: true,
                        
                    },
                    prduct_group_id: {
                        required: true,
                        
                    },
                     price: {
                        required: true,
                    },
                    expaire_date: {
                        required: true,
                    }
                },
                highlight: function (element) {
                    $(element).closest('.controls').removeClass('success').addClass('text-danger');
                },
                success: function (element) {
                    element.addClass('valid')
                        .closest('.controls').removeClass('error').addClass('success');
                }
            });
        });
        /*
         * @Function : ajax post request to post the data to backend php code and get responce
         * @param : array Form data
         * @Return : successMessage as responce
         * @Author : Vikrant Agrawal
         * @creted on : 2016-08-27
         */
        function SubmitAndGetAck(){
            $.ajax({
                    type: "POST",
                    url: "<?php echo ABSOLUTE_URL;?>/desh_board/addProduct",
                    data: $('#productForm').serialize(true),
                    success: function(data){
                        if (typeof data !== 'undefined' && data !== null) {
                             //$('#productForm').reset();
                             $('#productForm')[0].reset();
                            // $("#responce").removeClass('hidden');
                            // $('#successMessage').html(data);
                            alert(data);
                        } else {
                            alert("Something went wrong");
                        }
                    }, error: function (request, status, error) {
                        alert("Something went wrong");
                    }
                });
        }
</script>