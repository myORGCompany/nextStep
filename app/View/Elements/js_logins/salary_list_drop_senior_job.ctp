<?php
$styCurrTxt = "float:left;padding-right:7px; padding-top:2px;";
              $styDropTxt = "width:183px;";
              $styDropClass = "input";
              $styCurrClass="flt";
              if(isset($came) && $came=='confirmdetails'){

                  $styCurrClass = "padright12 flt";
                  $styDropTxt = "width:183px;";
                   $styDropClass = "fieldlines";

              }
              else if(isset($came) && $came=='ERCampaign'){

                  $styDropClass = "input";
                  $styDropTxt = "width:272px;";
                  $styCurrClass="flt";
                  }

?>
<!-- <input type="text" id="countryCode_value" value="<?php //echo $PloginRegister;?>" />             -->         

              <div class="<?php echo $styCurrClass;?>" id="dollar_id"> <strong>$</strong> </div>
              <?php 
                   echo $this->Form->input('master_lakh_id',array('type'=>'select','empty'=>'-Thousand-','id'=>'master_thousand_id','style'=>$styDropTxt,'class'=> $styDropClass,'options'=>$PloginRegister['MasterThousand'],'onchange'=>"change_salary();", 'label'=>false ,'div'=>false,'error'=>false));
                ?>
            
            
