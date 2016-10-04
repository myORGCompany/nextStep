<style type="text/css">
  .margin-left-100{margin-left: 10% !important;}
  .form-group{margin-bottom: 5px !important;}
  .control-label{text-align: left !important;}
</style>

<body>
  <div class="container">
    <div class="row col-lg-12 well">
       <div class="padding-left-15">
<nav>
  <ul class="pagination col-md-10 margin-left-100">
    <?php $alphas = range('A', 'Z');
    foreach ($alphas as $key => $value) {?>
    <li><a href="<?php echo ABSOLUTE_URL;?>/home_pages/viewParchese?page=<?php echo $value;?>"><?php echo $value;?></a></li><?php }
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
<table class="table table-striped">
  <tr class="text-center">
    <td><strong>#</strong></td>
      <td><strong>Perticular</strong></td>
      <td><strong>Unit</strong></td>
      <td><strong>Brand</strong></td>
      <td><strong>Catagory</strong></td>
      <td><strong>Group</strong></td>
      <td><strong>Quantity</strong></td>
      <td><strong>Parchase Price</strong></td>
      <td><strong>Parchase Date</strong></td>
     
   </tr>
  <?php foreach ( $NameArray as $key => $value) {
        if(!empty($value['Product']['name'])) { ?>
           <tr id="<?php echo 'list'.$key;?>" class='hidden text-center'>
              <td><strong><?php echo $key;?></strong></td>
              <td><?php echo $value['Product']['name'];?></td>
              <td><?php echo $value['Product']['packing'].' - '.$value['Product']['unit'];?></td>
              <td><?php echo $value['MasterBrand']['name'];?></td>
              <td><?php echo $value['MasterCategory']['name'];?></td>
              <td><?php echo $value['ProductGroup']['name'];?></td>
              <td><?php echo $value['Stok']['quantity_added'];?></td>
              <td><?php echo $value['Stok']['parchese_price'];?></td>
              <td><?php echo $value['0']['date(`Stok`.`created`)'];?></td>
           </tr>
        <?php $nbr = $key+1;
        } }
          $cnt = count($NameArray);
          $intpage = 5;
          ?>
</table>
<ul class="pager">
    <li><a href="<?php echo ABSOLUTE_URL;?>/home_pages/viewParchese">View All</a></li>
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
if(intpage >25) {
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

</script>
    </div>
  </div>
</body>