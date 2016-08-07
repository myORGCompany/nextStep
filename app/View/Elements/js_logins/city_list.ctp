<script type="text/javascript" language="javascript">
 var city = [];
<?php  
 foreach($MasterCity1 as $key => $value){
?>
 city.push( [ '<?php echo trim(addslashes($value)); ?>', <?php echo $key; ?> ] );
<?php 
}
?>
 
$jq(document).ready(function($jq){
      $jq('#auto_city').blur(function(){	
			  if($jq("#is_submitted").val()==1) submit_validation("preview");
	   });
     /* set autosuggest option for designation */
	  $jq("#auto_city").autocomplete(city,{
            minChars: 2,
            autoFill: true,
            mustMatch:true,
            selectFirst: true,
            must_remove:true,
            matchContains: "word",
            scrollHeight: 220
          }).result(function (evt, city, formatted) {    
              if(city){ $jq("#master_city_id").val(city[1]);
                            $jq("#alert_country_city_id").slideUp();
              }
              else {
                  $jq("#master_city_id").val('');
                  $jq("#alert_country_city_id").slideDown();
              }   
       });    
  });	 
  
 </script>	  
<?php $cit='color:#9C9B9A';$citn = 'City';if(isset($this->data['JsProfile']['auto_city'])){$citn = $this->data['JsProfile']['auto_city'];$cit='color:#000';}?>
<?php echo $this->Form->input('JsProfile.auto_city',array('type'=>'text','id'=>'auto_city','maxlength' =>'60','style'=>"width:96px;$cit",'value'=>$citn,'class'=>'input','div'=>false,'label'=>false,'onFocus'=>'javascript:if(this.value=="City"){this.value="";this.style.color="#000"}','onBlur'=>'javascript:if(this.value==""){this.value="City";this.style.color="#9C9B9A"}'));?>
<?php echo $this->Form->input('JsProfile.master_city_id',array('type'=>'hidden','id'=>'master_city_id','error'=>false )); ?>