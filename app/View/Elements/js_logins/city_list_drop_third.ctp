
  
  <input type="hidden" id="countryCode_value" value="<?php echo $countryCode['MasterCountry']['country_code'];?>" />  
<?php   
  echo $this->Form->input('HhFunctionData.City',array('type'=>'select',
  'empty'=>'-City-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'fieldlines',
  'style'=>"width:212px;",'id'=>'master_city_id','options'=>$MasterCityAll,'error'=>false )); 

?>
