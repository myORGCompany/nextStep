<script>
$(function() {
    $('.selector').autocomplete({
        source: '<?php echo ABSOLUTE_URL;?>/desh_board/seachAutoComplete',
        select: function (event, ui) {
          var id = this.id;
            $("#" + id).val(ui.item.label); // display the selected text
            SubmitAndDetails(ui.item.id, id);
        }
    });
});
</script>
<div class="form-group control-group controls col-sm-12 col-md-12 " id="productRow">
    <div class="col-sm-2" id="div<?php echo $newRow;?>name">
        <input  type="text" class="form-control selector required padding-right-0" title="Please Enter the name of product" value="" name="name<?php echo $newRow;?>" id="<?php echo $newRow;?>">
    </div>
    <div class="col-sm-2" id="div<?php echo $newRow;?>quanity">
        <input name="quanity<?php echo $newRow;?>"  class="form-control  padding-right-0" id="quanity<?php echo $newRow;?>" onchange="quantity(this.value,$('#<?php echo $newRow;?>').attr('id'));">
    </div>
    <div class="col-sm-2" id="div<?php echo $newRow;?>brand">
        <input name="brand<?php echo $newRow;?>" readonly class=" form-control input-group-addon padding-right-0" id="brand<?php echo $newRow;?>">
    </div>
    
    <div class="col-sm-2" id="div<?php echo $newRow;?>price">
        <input name="price<?php echo $newRow;?>" readonly class=" form-control input-group-addon padding-right-0" id="price<?php echo $newRow;?>">
    </div>
    <div class="col-sm-2" id="div<?php echo $newRow;?>discount">
        <input name="discount<?php echo $newRow;?>" class=" form-control  padding-right-0" id="discount<?php echo $newRow;?>" onchange="getDiscount(this.value,$('#<?php echo $newRow;?>').attr('id'));">
    </div>
     <div class="col-sm-2" id="div<?php echo $newRow;?>productGroup">
        <input name="totel<?php echo $newRow;?>" readonly class=" form-control input-group-addon padding-right-0" id="totel<?php echo $newRow;?>">
    </div>
</div>
<div class="clearfix"></div> 