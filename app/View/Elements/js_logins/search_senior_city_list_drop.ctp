
  
  <input type="hidden" id="countryCode_value" value="<?php echo $countryCode['MasterCountry']['country_code'];?>" /> 
<?php 
if(isset($came) && $came=='ERCampaign'){

                  echo $this->Form->input('JsProfile.master_city_id',array('type'=>'select',
  'empty'=>'-City-','label'=>false ,'div'=>false,'style'=>"width:280px;",'class'=>'select-box',
  'style'=>"width:280px;",'id'=>'master_city_id','options'=>$MasterCityAll,'error'=>false,'onchange'=>'country_city_validation_reg();' ));
                  }
 else
  echo $this->Form->input('JsProfile.master_city_id',array('type'=>'select',
  'empty'=>'-City-','label'=>false ,'div'=>false,'style'=>"width:190px;",'class'=>'input',
  'style'=>"width:190px;",'id'=>'master_city_id','options'=>$MasterCityAll,'error'=>false,'onchange'=>'country_city_validation_reg();' )); 

?>
