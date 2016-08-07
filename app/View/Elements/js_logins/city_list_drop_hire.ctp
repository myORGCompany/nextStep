
  
  <input type="hidden" id="countryCode_value" value="<?php echo $countryCode['MasterCountry']['country_code'];?>" /> 
<?php   
  echo $this->Form->input('JsProfile.master_city_id',array('type'=>'select',
  'empty'=>'-City-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'fieldlines',
  'style'=>"width:212px;",'id'=>'master_city_id','value'=>$cityid,'options'=>$MasterCityAll,'error'=>false,'onchange'=>'country_city_validation_reg();' )); 

?>
