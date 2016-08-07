<?php
$styCurrTxt = "float:left;padding-right:7px; padding-top:2px;";
              $styDropTxt = "width:107px;";
              $styDropClass = "input";
              $styCurrClass="flt";
              if(isset($came) && $came=='confirmdetails'){

                  $styCurrClass = "padright12 flt";
                  $styDropTxt = "width:200px;";
                   $styDropClass = "fieldlines";

              }

?>


             
              <?php 
                   echo $this->Form->input('JsLogin.master_lakh_id',array('selected'=>$selectedId,'type'=>'select','empty'=>'-Thousand-','id'=>'master_thousand_id','style'=>$styDropTxt,'class'=> $styDropClass,'options'=>$PloginRegister['MasterThousand'], 'label'=>false ,'div'=>false,'error'=>false, 'onChange'=>'checkSelection(this.id)'));
                ?>

<script type="text/javascript">
    function checkSelection(elementId){
        if($jq('#'+elementId).val() == ''){
            $jq('#master_lakh_id_div_img_msg').show();
        }else {
            $jq('#master_lakh_id_div_img_msg').hide();
        }
    }
</script>    