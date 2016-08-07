
  
  <input type="hidden" id="countryCode_value" value="<?php echo $countryCode['MasterCountry']['country_code'];?>" /> 
<?php   
  echo $this->Form->input('JsProfile.master_city_id',array('type'=>'select',
  'empty'=>'-City-','label'=>false ,'div'=>false,'class'=>'form-control','id'=>'master_city_id','options'=>$MasterCityAll,'error'=>false,'onchange'=>'','onBlur'=>"" )); 

?>
