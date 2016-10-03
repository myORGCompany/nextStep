<style type="text/css">
	.margin-left-50{margin-left: 5% !important;}
  .margin-top-30{margin-top: 30px !important;}
  .margin-top-20{margin-top: 20px !important;}
	.form-group{margin-bottom: 5px !important;}
	.control-label{text-align: left !important;}
</style>
<?php if($this->action == 'clientOutstanding') {  
      $action = 'clientOutstanding';
     } else if($this->action == 'shoperOutstanding'){ 
         $action = 'shoperOutstanding';
     } ?>
<body>
	<div class="container margin-top-30">
		<div class="row col-lg-12 well">
       <button class="btn btn-default pull-left" style="margin-left:-20px; margin-top:-20px;" onclick="refreshPage();">Refresh</button>
			 <div class="padding-left-15">
<nav>
  <ul class="pagination col-md-10 margin-left-50">
    <?php $alphas = range('A', 'Z');
    foreach ($alphas as $key => $value) {?>
    <li><a href="<?php echo ABSOLUTE_URL.'/home_pages/'.$action;?>?page=<?php echo $value;?>"><?php echo $value;?></a></li><?php }
    ?>
    <div class="clearfix"></div>
    <ul class="pager">
    <li><a href="#" id ="prevRes" >Previous</a></li>
    <li><a href="#" id="nextRes">Next</a></li>
  </ul>
  </ul>
</nav>
</div>

<div class="col-md-12">
<table class="table table-striped table-responsive">
	<tr>
		<td><strong>#</strong></td>
    <?php if($this->action == 'clientOutstanding') { $type = 1; ?>
      <td><strong>Client Name</strong></td>
      <?php } else if($this->action == 'shoperOutstanding'){ $type = 2; ?>
        <td><strong>Shoper Name</strong></td>
        <?php } ?>
   		<td><strong>Perticular</strong></td>
        <td><strong>Bill Date</strong></td>
   		<td><strong>Total Panding</strong></td>
        <td><strong>Ammount Paid</strong></td>
   		<td><strong>Pay Ammount</strong></td>
   		<td><strong>Remaining</strong></td>
   		<td><strong>Submit</strong></td>
   </tr>
	<?php foreach ( $NameArray as $key => $value) {
       ?>
           <tr id="<?php echo 'list'.$key;?>" class='hidden'>
           		<td><strong><?php echo $key;?></strong></td>
              <td><?php echo $value['name'];?></td>
              <td><?php echo $value['product'];?></td>
              <td><?php echo $value['date'];?></td>
           		<td><?php echo $value['total'];?></td>
                <td class="hidden" id="ammount<?php echo $value['SId'];?>" value="<?php echo $value['ammount'];?>"></td>
                <td id="prepaid<?php echo $value['SId'];?>" value="<?php echo $value['paid'];?>"><?php echo $value['paid'];?></td>
           		<td><input type="text" name="paid" id="<?php echo $value['SId'];?>" onchange="adjestPaid(this.id)"></td>
              <td id="remain<?php echo $value['SId'];?>"><?php echo $value['ammount'];?></td>
           		<td><a onclick="editPerticular(<?php echo $value['SId'];?>,<?php echo $key;?>);" href="javascript:void(0);" > Go </a> </td>
           </tr>
        <?php $nbr = $key+1;
         }
          $cnt = count($NameArray);
          $intpage = 25;
          ?>
</table>
<ul class="pager">
    <li><a href="<?php echo ABSOLUTE_URL.'/home_pages/'.$action; ?>" id ="prevRes" >View All</a></li>
  </ul>
</div>
<?php echo $this->element('edit_popup'); ?>


<script type="text/javascript">
$(document).ready(function() {
var cnt = <?php echo $cnt;?>;
 for (var i = 0; i < 25; i++) {
    $("#list"+i).show();
  $("#list"+i).removeClass('hidden');
}

var intpage = <?php echo $intpage;?>;
$("#nextRes").click(function() { 
if(intpage < cnt) {
var res = intpage +25;
for (var i = intpage; i < res; i++) {
    $("#list"+i).show();
  $("#list"+i).removeClass('hidden');
}
 for (var i = intpage; i >= 0; i--) {
            $("#list"+i).hide();
             $("#list"+i).addClass('hidden');
           }
           intpage = intpage +25;
}
else{
    alert("End of list please go to previous page");
}
});
$("#prevRes").click(function() { 
if(intpage >49) {
var res = intpage -25;
preres = res -25;
for (var i = res; i < intpage; i++) {
  $("#list"+i).hide();
  $("#list"+i).addClass('hidden');
}
var temp =res;
 for (var i = 0; i <= 25; i++) {
    if(temp>=0){
  temp--;
  $("#list"+temp).show();
  $("#list"+temp).removeClass('hidden');
  }
  else{
    break;
  }       
}
}
else{
    alert("End of list please go to next page");
}
intpage = intpage -25;
});
});
$(document).ready(function() {
    $("td").addClass('text-center');
});
function adjestPaid( id ){
    var val = $("#" + id).val();
    var val2 = $("#ammount" + id).attr('value');
    if((val2-val) >= 0){
        $("#remain" + id).html(val2-val);
    } else{
        alert("payment can not greater than actual ammount");
        $("#" + id).val(null);
    }
}
function editPerticular(id,key){
    $.ajax({
        url: "<?php echo ABSOLUTE_URL;?>/home_pages/submitAmmount/<?php echo $type;?>",
        data : {Id : id,paid: $("#" + id).val(),total:$("#ammount" + id).attr('value'),prepaid : $("#prepaid" +id).attr('value')},
        type: 'post',
        success: function(data){
            if(!data){
                alert("Something went wrong");
            } else {
                alert("saved successfully");
                $("#list"+key).addClass('hidden');
            } 
        }
    });
}
function refreshPage(){
  location.reload(true); 
}
</script>
		</div>
	</div>
</body>