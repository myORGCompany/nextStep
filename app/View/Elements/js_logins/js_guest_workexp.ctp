<script type="text/javascript" language="javascript">
function validatefrm()
{
	if($('master_functional_area_id').value=='')
	{
	 document.getElementById('functional_area_message').innerHTML='Please select your current function';
	 return false;
	}
	else
	{
	 document.getElementById('functional_area_message').innerHTML='';
	}
	if($('master_industry_id').value=='')
	{
	 document.getElementById('industry_message').innerHTML='Please select your current industry';
	 return false;
	}
	else
	{
	 document.getElementById('industry_message').innerHTML='';
	
	}
	if($('master_year_id').value=='')
	{
	 document.getElementById('master_year_id_div_img_msg').innerHTML='Please select your current experience';
	 return false;
	}
	else
	{
	 document.getElementById('master_year_id_div_img_msg').innerHTML='';
	}
	
	
}
</script>
<div class="form-container wid455">
  <?php
     echo $this->Form->create('JsLogin',array('url' =>ABSOLUTE_URL.'/js_logins/js_guest_jobs_apply_confirmation/'.$jobId.'/'.$jsProfileID.'/'.$jsProfilescreenId,'id'=>'registration_form','method'=>'post','autocomplete'=>'on','onsubmit'=>'return validatefrm();','enctype'=>'multipart/form-data'));
        ?>
    <?php //==================================current function ==========================================================?>
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <div class="auto" id="master_functional_area_id_div">
          <div class="reg_firstname line_height18 ">Functional Area</div>
          <div class="reg_nm_rightarea">
            <div class="regi_funtion_input1">
              <?php 
                                   echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'select','empty'=>'-Functional Area-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_functional_area_id','options'=>$PloginRegister['MasterFunctionalArea'],'error'=>false,'value'=>$master_functional_area_id,'onchange'=>"handleFA();" )); 
                                //    echo $this->Form->input('JsProfile.auto_functional_area',array('type'=>'select','empty'=>'Functional-Area','id'=>'auto_functional_area','maxlength' =>'100','class'=>'input','style'=>"width:206px;",'div'=>false,'label'=>false));
                               //     echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'hidden','id'=>'master_functional_area_id','error'=>false ));
                                     echo $this->Form->input('JsLogin.is_submitted',array('type'=>'hidden','value'=>0,'id'=>'is_submitted'));
                                    ?>
            </div>
            <span class="bluebld line_height18" style="display:none;"> <a href="javascript:void(0);" onClick="handle_others('functional_area');" class="refresh">Other</a> &raquo; </span>
            <div class="auto"> </div>
            <div class="clear"></div>
            <div class="spacer7"></div>
            <div class="clear"></div>
            <div class="auto" id='span_show_functional_area' style="display:<?php if(empty($this->data['JsProfile']['other_functional_area'])) echo "none";?>" > <?php echo $this->Form->input('JsProfile.other_functional_area',array( 'label'=>false ,'type'=>'text','div'=>false,'maxlength' => '100','style'=>"width:206px;",'class'=>'input','id'=>'other_functional_area','error'=>false )); ?> </div>
          </div>
          <div class="clear"></div>
        <div class=" password_txt" id="master_functional_area_id_div_img_msg" style="display:block; padding-left:156px">
          <span id="functional_area_message"></span> </div>
          </div>
        <!--Added By : Avesh-->
        <div class="clear"></div>
        <div id="alert_functional_area" style="display:none;"> <span class="information_msg pad154">
          No matches found. Please click on Other.
          </span> </div>
        <div class="clear"></div>
        <!--Added By : ends here-->
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <?php //=================================================Current industry================================================================?>
        <div class="auto" id='master_industry_id_div'>
          <div class="reg_firstname line_height18 ">Current industry </div>
          <div class="reg_nm_rightarea">
            <div class="regi_funtion_input1">
              <?php 
             echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'select','empty'=>'-Industry-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_industry_id','options'=>$PloginRegister['MasterIndustry'],'error'=>false,'onchange'=>'handleIR();','value'=>$master_industry_id )); 
                              //      echo $this->Form->input('JsProfile.auto_industry',array('type'=>'text','id'=>'auto_industry','style'=>'width:206px','maxlength' =>'100','class'=>'input','div'=>false,'label'=>false));
                               //     echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'hidden','id'=>'master_industry_id','error'=>false ));  
                                    ?>
            </div>
            <span class="bluebld line_height18" style="display:none;"><a href="javascript:void(0);" onClick="handle_others('industry');" class="refresh">Other</a> &raquo;</span>
            <div class="auto" id='span_show_industry' style="display:<?php if(empty($this->data['JsProfile']['other_industry'])) echo "none";?>" >
              <div class="clear"></div>
              <div class="spacer7"></div>
              <div class="clear"></div>
              <?php 

                                    echo $this->Form->input('JsProfile.other_industry',array( 'label'=>false ,'type'=>'text','div'=>false,'maxlength' => '100','style'=>"width:206px;",'class'=>'input','id'=>'other_industry','error'=>false ));

                                    ?>
            </div>
          </div>
          <div class="clear"></div>
        <div class=" password_txt" id="master_industry_id_div_img_msg" style="display:block; padding-left:156px" >
          <span id="industry_message" ></span> </div>
          <div class="spacer7"></div>
        </div>
        <!--Added By : Avesh-->
        <div class="clear"></div>
        <div id="alert_industry" style="display:none;"> <span class="information_msg pad154">
          No matches found. Please click on Other.
          </span> </div>
        <div class="clear"></div>
        <!--Added By : ends here-->
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
        <?php //==============================================Experience ========================================================?>
        <div class="auto" id="master_year_id_div" >
          <div class="reg_firstname line_height18 ">Experience</div>
          <div class="reg_nm_rightarea">
            <div class="regist_input">
              <?php 

                    echo $this->Form->input('JsProfile.master_year_id',array('type'=>'select','empty'=>'-Years-','id'=>'master_year_id','style'=>"width:147px;",'class'=> 'input','options'=>$PloginRegister['MasterYear'], 'label'=>false ,'div'=>false,'error'=>false,'value'=>$work_experience_max)); 

                ?>
            </div>
          </div>
          <div class="clear"></div>
          <div id="master_year_id_div_img_msg" style="display:block; padding-left:156px"></div>
          
          <div class="spacer7"></div>
          <!--pop up-->
          <div class="wid25 floatright">
            <div id="lock_help2" style="display:none;" class="helpIcon_popUp">
              <div class="information_pup">
                <div class="information_pup_topbg">&nbsp;</div>
                <div class="information_pup_mid">
                  <div class="auto">HeadHonchos is an exclusive platform with hand-screened jobs that pay 15 L or more. If you currently earn less than 10 Lakh, we will probably bring more value to you at a later stage of your career.</div>
                </div>
                <div class="information_pup_btm">&nbsp;</div>
              </div>
            </div>
            
            <div id="lock_help3" style="display:none;" class="helpIcon_popUp">
              <div class="information_pup">
                <div class="information_pup_topbg">&nbsp;</div>
                <div class="information_pup_mid">
                  <div class="auto">The CTC equivalent to join HeadHonchos if you earn in a different currency is USD 60,000.</div>
                </div>
                <div class="information_pup_btm">&nbsp;</div>
              </div>
            </div>
            
          </div>
          <!--pop up-->
        </div>
        <div class="clear"></div>
        <div class="spacer100"></div>
        <div class="clear"></div>
     <?php 
	 echo $this->Form->input('Jobsid',array('id'=>'Jobsid','type'=>'hidden','value'=>$jobId)); 
	  echo $this->Form->input('jsloginid',array('id'=>'jsloginid','type'=>'hidden','value'=>$loginid)); 
	 echo $this->Form->input('jsProfileId',array('id'=>'jsProfileId','type'=>'hidden','value'=>$jsProfileID)); 
	 echo $this->Form->submit('submit',array('class'=>'floatleft'));?>&nbsp; 
	 <input type="button" onclick="return skipInfromation('<?php echo $jobId ; ?>','<?php echo $loginid ; ?>');" name="Skip" value="Skip" />
	 <?php echo $this->Form->end(); ?>
</div>