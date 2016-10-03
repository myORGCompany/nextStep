
 
  <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/moment.min.js"></script>
 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo ABSOLUTE_URL;?>/js/jquery.validate.js"></script>
  <link rel="stylesheet" href="<?php echo ABSOLUTE_URL;?>/css/bootstrap-datetimepicker.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.26/jquery.autocomplete.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
$(function() {
    $('.selector').autocomplete({
        autoFocus: true,
        source: '<?php echo ABSOLUTE_URL;?>/desh_board/seachAutoComplete',
        change: function(event, ui) {
            arrengeData(ui.item,this.id);
        }
    });
    $('.shoper').autocomplete({
        autoFocus: true,
        source: '<?php echo ABSOLUTE_URL;?>/home_pages/seachAutoComplete',
        select: function (event, ui) {
            var id = this.id;
            $("#" + id).val(ui.item.label); // display the selected text
            $("#shoperId").val(ui.item.shoperId);
        }
    });
});
</script>
<body>
	<div class="container col-lg-12 well">
		<div class="row">
		<div class="clearfix"></div> 
		<div class="col-md-3 col-md-offset-5 margin-bottom-20"><h3 class="text-info" ><strong>sales</strong></h3></div>
		<div class="clearfix"></div>
			<div class=" border-2">
				<div class="">
					<form class="form-inline" method="post" action="<?php echo ABSOLUTE_URL;?>/desh_board/saleList" id="productForm">
					<div class="row" id="formDiv"> 
						<div class="form-group control-group  col-sm-12 col-md-12 " id="productRow<?php echo $newRow;?>">
						    <div class="col-sm-2 controls" id="div<?php echo $newRow;?>name">
						        <input  type="text" placeholder="Product Name" class="form-control  selector required padding-right-0" title="Please Enter the name of product"  name="name<?php echo $newRow;?>" id="<?php echo $newRow;?>" >
                                <input  type="text" class="form-control hidden padding-right-0" value="" name="id<?php echo $newRow;?>" id="id<?php echo $newRow;?>" >
                                <input  type="text" class="form-control hidden padding-right-0" value="" name="stok_id<?php echo $newRow;?>" id="stok_id<?php echo $newRow;?>" >

						    </div>
						    <div class="col-sm-2 controls" id="div<?php echo $newRow;?>quantity">
						        <input placeholder="Quantity" name="quantity<?php echo $newRow;?>"   class="form-control quantity   padding-right-0" id="quantity<?php echo $newRow;?>" onchange="quantity(this.value,$('#<?php echo $newRow;?>').attr('id'));">
						    </div>
						    <div class="col-sm-2" id="div<?php echo $newRow;?>brand">
						        <input type="text" readonly placeholder="Brand" name="brand<?php echo $newRow;?>"  class=" form-control  padding-right-0" id="brand<?php echo $newRow;?>">
						    </div>
						    
						    <div class="col-sm-2" id="div<?php echo $newRow;?>price">
						        <input type="text" readonly placeholder="Price" name="price<?php echo $newRow;?>"  class=" form-control  padding-right-0" id="price<?php echo $newRow;?>">
						    </div>
						    <div class="col-sm-2" id="div<?php echo $newRow;?>discount">
						        <input type="text"  placeholder="Discount" name="discount<?php echo $newRow;?>" class=" form-control  padding-right-0" id="discount<?php echo $newRow;?>" onchange="getDiscount(this.value,$('#<?php echo $newRow;?>').attr('id'));">
						    </div>
						    <div class="col-sm-2" id="div<?php echo $newRow;?>totel">
						        <input type="text" readonly placeholder="Total" name="totel<?php echo $newRow;?>"  class=" form-control  padding-right-0" id="totel<?php echo $newRow;?>">
						    </div>
						</div>
					    <div class="clearfix"></div> 
					</div>
				       <div class="clearfix"></div> 
				       <br />
						<div class="form-group control-group controls col-sm-12">
						</div>
					
                    <div class="clearfix"></div>
                    <?php if(isset($bulkSalse) && $bulkSalse ==1){ ?>
                    <div class="row">
                        
                        <form class="form-inline " id="shoperForm" action="javascript: saleList();">
                        <div class="control-group  col-sm-12 col-md-12 ">
                            <div class="col-md-2 controls ">
                                <input type="text" placeholder="shoper Name" class="form-control shoperName required padding-right-0" name="shoperName" id="shoperName">
                                <input type="text" class="form-control hidden required padding-right-0" name="shoperId" id="shoperId">
                            </div>
                            <div class="col-md-2 controls ">
                                <input type="text" placeholder="Ammount Paid" class="form-control required padding-right-0" onchange="calAmm(this.value);" name="paidAmmount" id="paidAmmount">
                            </div>
                            <div class="col-md-2 controls ">
                                <input type="text" placeholder="Ammount Remaining" class="form-control required padding-right-0" name="creaditAmmount" id="creaditAmmount">
                            </div>
                            <div class="col-md-2 controls">
                                <input type="text" placeholder="Bill Number" class="form-control" name="billNo" id="billNo">
                            </div>
                            <div class="clearfix"></div>
                        <div class="col-md-2 col-xs-6 text-center pull-left">
                            <button type="submit" class="btn btn-default btn-lg margin-right-40" onclick="javascript:resetForm();" >Reset</button>
                        </div>
                        <div class="col-md-2 col-xs-6 text-center pull-right ">
                                <button type="submit" class="btn btn-default btn-lg " style="margin-left:25px;" >Submit</button>
                        </div>
                        </div>
                        </form> 
                    </div>
                    
                <?php } else {?>
                    <div class="row">
                        <div class="pull-left team_hr_right">
                            <button type="submit" class="btn btn-default btn-lg" onclick="javascript:resetForm();" >Reset</button>
                        </div>
                        <div class="pull-right margin-right-40">
                                <button type="submit" class="btn btn-default btn-lg" >Submit</button>
                        </div>
                    </div>
                    </form>
                <?php } ?>
				</div>
			</div>
			
		</div>
	</div>
</body>
<script type="text/javascript">
var row =0;
$(document).ready(function () {
    totalAm = [];
	product = [];
	discount = [];
	quant = [];
});
        function saleList(){
        	$.ajax({
                    type: "POST",
                    url: "<?php echo ABSOLUTE_URL;?>/desh_board/saleList",
                    data: $('#productForm,#shoperForm').serialize(true),
                    success: function(data){
                        if($.trim(data) === 'Nothing saled'){
                            alert("Transaction failed please try again");
                        } else if($.trim(data) === 'Successfully'){
                            alert("Transaction successful");
                            resetForm();
                        } else {
                            return false;
                        }
                    }, error: function (request, status, error) {
                        alert("Something went wrong");
                    }
                });
        }
        function getDiscount(dis,id){
            var newVal = 0;
        	if(!$.trim(quant[id])){
        		quant[id] = 1;
        	}
        	var verifie = dis/quant[id];
        	if(verifie <=  product[id]['max_discount']) {
        		newVal = (product[id]['price']*quant[id]) - dis;
        		discount[id] = dis;
        	} else {
            $( "#discount" + id).val(0);
        		alert("Discount not possible maximum discount per piece is =" + product[id]['max_discount']);
                newVal = product[id]['price']*quant[id];
        	}
            $( "#totel" + id).val(newVal);
            totalAm[id] = newVal;
            calAmm($("#paidAmmount").val());
        }
        function quantity(val,id){
            if( 0 >= Number(val)){
                console.log(product[id]);
                    delete product[id];
                    delete quant[id];
                    delete discount[id];
                    delete totalAm[id];
                    calAmm($("#paidAmmount").val());  
                $('#productRow' + id).remove();
                return true;
            }
            if(Number(val) > Number(product[id].quantity)){
                alert(val+' Product Units are not available in stock '+'Maximum ' + product[id].quantity + ' units could be sold');
                $("#quantity" + id).val(1);
                val = 1;
            }
        	if(!$.trim(discount[id])){
        		discount[id] = 0;
        	}
        	if(val){
				var totle = (val*product[id]['price'])-discount[id];
				$( "#totel" + id).val(totle);
				quant[id] = val;
                totalAm[id] = totle;
                calAmm($("#paidAmmount").val());
			}
        }
        function resetForm(){
            $(".quantity").val('');
            $('#productForm').trigger("reset");
            $('input[readonly]').val("");
            $('div').removeClass('has-success');
        }
function arrengeData(data1,id){
    if (data1 == null) {
        alert("Please select product name");
        $("#" + id).val(null).removeClass('input-group-addon');
        $( "#brand" + id).val(null);
        $( "#price" + id).val(null);
        $( "#totel" + id).val(null);
        $( "#id" + id).val(null);
        $( "#stok_id" + id).val(null);
        $( "#div" + id +'brand').removeClass('has-success').addClass('has-error');
        $( "#div" + id +'price').removeClass('has-success').addClass('has-error');
        $( "#div" + id +'name').removeClass('has-success').addClass('has-error');
        $( "#div" + id +'totel').removeClass('has-success').addClass('has-error');
        return false;
    }
    for (var index in product) {
        if (Number(product[index].id) === Number(data1.id)) {
            alert("You can not select same product again");
            $("#" +id).val(null);
            return false;
        }
    }
    product[id] = data1;
    $("#" + id).val(data1.label); 
    $( "#brand" + id).val(data1.brand);
    $( "#price" + id).val(data1.price);
    $( "#totel" + id).val(data1.price);
    totalAm[id] = data1.price;
    $( "#quantity" + id).val(1);
    $( "#id" + id).val(data1.id);
    $( "#stok_id" + id).val(data1.stok_id);
    $( "#div" + id +'brand').removeClass('has-error').addClass('has-success');
    $( "#div" + id +'price').removeClass('has-error').addClass('has-success');
    $( "#div" + id +'name').removeClass('has-error').addClass('has-success');
    $( "#div" + id +'totel').removeClass('has-error').addClass('has-success');
    if($("#div"+id+"quantity").val()){
        var totle = ($("#div"+id+"quantity").val())*data1.price;
        $( "#totel" + id).val(totle);
    } else {
        $( "#totel" + id).val(data1.price);
    }  
    calAmm(  0 ); 
    $.ajax({
        type: "POST",
        url: "<?php echo ABSOLUTE_URL;?>/desh_board/createRowM",
        data: {newrow : id},
        success: function(data){
            $('#formDiv').append(data);
        }, error: function (request, status, error) {
            alert("Something went wrong");
        }
    });
    
}
$(document).ready(function () {
            $('#shoperForm').validate({
                rules: {
                     shoperName: {
                        minlength: 2,
                        required: true
                    },
                    paidAmmount: {
                        minlength: 2,
                        required: true,
                        number:true
                    },
                    creaditAmmount: {
                        minlength: 2,
                        required: true,
                        number:true
                    },
                    billNo: {
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

            $('#productForm').validate({
                highlight: function (element) {
                    $(element).closest('.controls').removeClass('success').addClass('text-danger');
                },
                success: function (element) {
                    element.addClass('valid')
                        .closest('.controls').removeClass('error').addClass('success');
                }
            });
        });
function calAmm( val ){
    var tot = 0;
    for (var index in totalAm) {
        tot = tot + totalAm[index];
    }
    newam = tot - val;
    if(0 > newam){
        $("#creaditAmmount").val(null);
        $("#paidAmmount").val(null);
    } else {
        $("#creaditAmmount").val(newam);
    }
}
</script>
