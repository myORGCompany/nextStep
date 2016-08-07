<!-- ***********************  left panel start here-->

<div class="reg_leftpanel460 margin10">
  <!-- grey panel start here-->
  <!-- grey panel start here-->
  <!-- content area start here-->
  <div class="reg_leftpanel_content">
    <div class="clear"></div>
    <div class="spacer15"></div>
    <div class="clear"></div>
    <div class="auto">
      <div class="reg_firstname line_height18 information_msg " style="width:auto;">*All fields are compulsory.</div>
    </div>

    <?php //=============================================Name===style="display:none;"=========================================================?>
    <?php   
	 echo $this->Form->input('JsLogin.registered_from',array('type'=>'hidden','value'=>"register_alternative",'error'=>false));

                        $error_msg1 = $this->Form->error('JsLogin.first_name');

                        $error_msg2 = $this->Form->error('JsLogin.last_name');

                        $error_msg = $error_msg1.$error_msg2;

                        if(!empty($error_msg)){

                        $css_formfield_n = "error_formfield1";

                        $visibility_n = "block";

                        } else{
                        $visibility_n = "none";

                        $css_formfield_n = "auto";

                        }
                        ?>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <div id="first_name_div"  class="<?php echo $css_formfield_n; ?>">
      <div class="auto">
        <div class="reg_firstname line_height18 ">First Name</div>
        <div class="reg_nm_rightarea">
          <div class="regist_input">
            <?php

             $cf='color:#9C9B9A';$fn = 'First Name';if(isset($this->data['JsLogin']['first_name'])){$fn = $this->data['JsLogin']['first_name'];$cf='color:#000';}
echo $this->Form->text('JsLogin.first_name',array( 'label'=>false ,'div'=>false,'maxlength' => '40','class'=>'input','style'=>"width:206px;$cf" ,'value'=>$fn,'id'=>'first_name','error'=>false,'onFocus'=>'javascript:if(this.value=="First Name"){this.value="";this.style.color="#000"}','onBlur'=>'javascript:if(this.value==""){this.value="First Name";this.style.color="#9C9B9A"}')); 

                                    ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="spacer7"></div>
      <div class="clear"></div>
      <div class="spacer100"></div>
      <div class="clear"></div>
      <div class="auto">
        <div class="reg_firstname line_height18 ">Last Name </div>
        <div class="reg_nm_rightarea">
          <div class="regist_input">
            <?php

                                        $cl='color:#9C9B9A';$ln = 'Last Name';if(isset($this->data['JsLogin']['last_name'])){$ln = $this->data['JsLogin']['last_name'];$cl='color:#000';}

                                        echo $this->Form->text('JsLogin.last_name',array( 'label'=>false ,'div'=>false,'maxlength' => '40','class'=>'input','style'=>"width:206px;$cl" ,'value'=>$ln,'id'=>'last_name','error'=>false,'onFocus'=>'javascript:if(this.value=="Last Name"){this.value="";this.style.color="#000";this.select()}','onBlur'=>'javascript:if(this.value==""){this.value="Last Name";this.style.color="#9C9B9A"}')); 

                                        ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail" id="first_name_div_img_msg" style="display:<?php echo $visibility_n; ?>">
        <span id="first_name_msg">Please enter your complete name</span> </div>
      <div class="spacer7"></div>
    </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //=============================================Email Id ============================================================?>
    <?php   $error_msg = $this->Form->error('JsLogin.emailid');
                       
                        if(!empty($error_msg)){

                        $css_formfield_em="error_formfield1";

                        $m_email = $error_msg;

                        $visibility_em="none";

                        } else {

                        $visibility_em="none";

                        $css_formfield_em="auto";
                        }
                        ?>
    <div id="emailid_div" class="<?php echo $css_formfield_em; ?>">
      <div class="reg_firstname line_height18 ">Email ID</div>
      <div class="reg_nm_rightarea">
        <div class="regist_input">
          <?php if(isset($PloginRegister['emailid'])){

                                    echo $this->Form->input('JsLogin.emailid',array( 'onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'label'=>false ,'value'=>$PloginRegister['emailid'],'div'=>false,'maxlength' => '80','style'=>"width:206px;",'class'=>'input','id'=>'emailid','error'=>false,'onblur'=>'regTracks(this.id);'));

                                    } else {

                                    echo $this->Form->input('JsLogin.emailid',array( 'onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'label'=>false ,'div'=>false,'maxlength' => '80','style'=>"width:206px;",'class'=>'input','id'=>'emailid','error'=>false,'onblur'=>'regTracks(this.id);'));

                                    }
                                    ?>
            <div id="emailid_ajax_div">
          <?php //echo $ajax->div('emailid_ajax_div');

                                    if($response ){ ?> <span class="information_msg"> <?php echo $response;
                                    echo $this->Form->input('email_id_flag',array('type'=>'hidden','value'=>1,'id'=>'email_id_flag'));  ?> </span>
          <?php } else if($m_email ){ ?>
          <span class="information_msg"> <?php echo $m_email;?> </span>
          <?php }else{echo $this->Form->input('email_id_flag',array('type'=>'hidden','value'=>0,'id'=>'email_id_flag'));  } ?>
          <?php    //echo $ajax->divEnd('emailid_ajax_div');?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail line_height18" id="emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>;">
             	Please enter a valid e-mail ID.
                </div>
      <div class="spacer7"></div>
    </div>
    <div class="auto"> <?php //echo $ajax->observeField('emailid',array('url' => '/js_logins/unique_ajax_validation/emailid','update' =>'emailid_ajax_div'));  ?> 
    <script type="text/javascript">
        new Form.Element.Observer('emailid', 2,
            function(element, value) {
               new Ajax.Updater('emailid_ajax_div','/js_logins/unique_ajax_validation/emailid', {
                   asynchronous:true, evalScripts:true,
                   parameters:Form.Element.serialize('emailid'),
                   requestHeaders:['X-Update', 'emailid_ajax_div']}
               )
            }
        )
    </script>
    </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //=============================================Reenter Email Id ============================================================?>
    <div id="confirm_emailid_div" class="<?php echo $css_formfield_em; ?>">
      <div class="reg_firstname line_height18 ">Confirm Email ID</div>
      <div class="reg_nm_rightarea">
        <div class="regist_input">
          <?php if(isset($PloginRegister['emailid'])){

                                    echo $this->Form->input('JsLogin.confirm_emailid',array('onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'onPaste'=> 'return false', 'label'=>false ,'value'=>$PloginRegister['emailid'],'div'=>false,'maxlength' => '80','style'=>"width:206px;",'class'=>'input','id'=>'confirm_emailid','error'=>false ));

                                    }else{

                                    echo $this->Form->input('JsLogin.confirm_emailid',array('onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'onPaste'=> 'return false',
                                     'label'=>false ,'div'=>false,'maxlength' => '80','style'=>"width:206px;",'class'=>'input','id'=>'confirm_emailid','error'=>false ));

                                    }
                                    ?>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail line_height18" id="confirm_emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>;">
             	Please enter a valid e-mail ID.
                </div>
      <div class="spacer7"></div>
    </div>
    <?php // =========================password=================================================================   ?>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <div class="auto" id="password_div" >
      <div class="reg_firstname line_height18 ">Password</div>
      <div class="reg_nm_rightarea">
        <div >
          <?php 

                                    echo $this->Form->text('JsLogin.password',array( 'label'=>false ,'value'=>'','type'=>'password','autocomplete' => 'off','div'=>false,'maxlength' => '15','style'=>"width:206px;",'class'=>'input','id'=>'password')); 
                                          
                                    ?>
          <span style="color:green;font-weight:bold;padding-left:10px; display:none;" id='strength_result'></span> </div>
        <div class="clear"></div>
        <span class="password_txt line_height18">Password to be 7-15 characters</span> </div>
         <div class="clear"></div>
      <div class="error_msg_detail line_height18" id="password_div_img_msg" style="display:none;">
             	Please enter your password.
                </div>
      <div class="spacer7"></div>
    </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //===================================Re-confirm password====================================================?>
    <div class="auto" id="confirm_pass_div" style="display:none;">
      <div class="reg_firstname line_height18 ">Confirm password</div>
      <div class="reg_nm_rightarea">
        <div class="regist_input">
          <?php 

                                    echo $this->Form->input('JsLogin.re_enter_password',array( 'label'=>false ,'value'=>'','type'=>'password','autocomplete' => 'off','div'=>false,'maxlength' => '15','style'=>"width:206px;",'class'=>'input','id'=>'confirm_pass','error'=>false )); 

                                    ?>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail" id="confirm_pass_div_img_msg" style="display:none">
        <span id = "reconfirm_message">Please re-confirm your password.</span> </div>
      <div class="spacer7"></div>
    </div>
    <?php //============================================== Current location =================================================?>
    <div class="auto" id="master_country_city_id_div">
      <div class="reg_firstname line_height18 ">Current location</div>
      <div class="reg_nm_rightarea">
        <div class="regi_country_input">
          <?php 

$CountryDropDown[11]='India';
$CountryDropDown[40]='UAE'; 
$CountryDropDown[41]='US';
$CountryDropDown[39]='UK';

$FirstCountries=array(11,41,40,39,44); 
asort($PloginRegister['MasterCountry']); 
foreach($PloginRegister['MasterCountry'] as $k=>$v){
     
    if(!in_array($k,$FirstCountries)){
       
           $CountryDropDown[$k]=$v;
     }
}
$CountryDropDown[44]='Other International';                   
echo $this->Form->input('JsProfile.master_country_id',array('type'=>'select','empty'=>'-Country-',
'label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",
'id'=>'master_country_id','options'=>$CountryDropDown,'error'=>false,'onchange'=>"fetch_Salary(this.value);handleCountry(this.value);country_city_validation_reg();" )); 



                                    ?>
          <div class="clear"></div>
          <div class="spacer10"></div>
          <div class="clear"></div>
          <div id='div_city'>
            <?php                 
                                            
echo $this->Form->input('JsProfile.master_city_id',array('type'=>'select','empty'=>'-City-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_city_id','options'=>$MasterCityAll,'error'=>false,'onchange'=>'country_city_validation_reg();' )); 

                                    ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail" id="master_country_city_id_div_img_msg" style="display:none" >
        <span id="country_message" > </span> </div>
      <div class="spacer7"></div>
    </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //==================================Mobile Number ============================================================?>
    <?php   $error_msg = $this->Form->error('JsLogin.mobile_number');

                        if(!empty($error_msg)){  

                        $css_formfield_mn="error_formfield1";

                        $m_mobile = $error_msg;

                        $visibility_mn="none";

                        } else {

                        $visibility_mn="none";   

                        $css_formfield_mn="auto";
                        }
                        ?>
    <div id="mobile_number_div" class="<?php echo $css_formfield_mn; ?>">
      <div class="reg_firstname line_height18 ">Mobile
        <!-- pop up -->
        <div class="wid25 marginleft10 margintopmin50">
          <div id="lock_help1" style="display:none;" class="helpIcon_popUp">
            <div id="lock_help1" class="information_pup">
              <div class="information_pup_topbg">&nbsp;</div>
              <div class="information_pup_mid"> HeadHonchos may need your mobile number to contact you and validate the information in your profile. This helps us maintain a high quality database of candidates and draws employers with senior-level jobs to HeadHonchos. </div>
              <div class="information_pup_btm">&nbsp;</div>
            </div>
          </div>
        </div>
        <!-- pop up -->
      </div>
      <div class="reg_nm_rightarea">
        <div class="reg_mobile">
          <?php 

                                    echo $this->Form->input('JsLogin.country_code',array('id'=>'country_code','style'=>"width:40px;",'class'=> 'input','value'=>'+91', 'label'=>false ,'div'=>false,'error'=>false));  

                                    ?>
        </div>
        <div class="auto">
          <?php if(isset($PloginRegister['mobile_number'])){
                                
                                    echo $this->Form->input('JsLogin.mobile_number',array( 'label'=>false ,'value'=>$PloginRegister['mobile_number'],'div'=>false,'maxlength' => '15','style'=>"width:157px;",'class'=>'input','id'=>'mobile_number','error'=>false,'onblur'=>'mobile_number_validation(this.id)'));

                                    } else {

                                    echo $this->Form->input('JsLogin.mobile_number',array( 'label'=>false ,'div'=>false,'maxlength' => '15','style'=>"width:157px;",'class'=>'input','id'=>'mobile_number','error'=>false,'onblur'=>'mobile_number_validation(this.id)'));

                                    }
                                    ?>
        </div>
        <div class="auto margin5"><img src="<?php echo $this->Html->url('/img/helpIcon.gif'); ?>" onmousemove="$('lock_help1').show();" onmouseout="$('lock_help1').hide();" style="cursor: pointer;" alt="" /></div>
        <div class="clear"></div>
        <div class="regist_input">
            <div id="mobile_number_ajax_div">
            <?php //echo $ajax->div('mobile_number_ajax_div');

                                if($response ){ ?> <span class="information_msg"> <?php echo $response;?> </span>
          <?php } else if($m_mobile ){ ?>
          <span class="information_msg"> <?php echo $m_mobile;?> </span>
          <?php } ?>
          <?php //echo $ajax->divEnd('mobile_number_ajax_div'); ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail line_height18" id="mobile_number_div_img_msg" style="display:<?php echo $visibility_mn; ?>">
             	Please enter a valid mobile number.
                </div>
      <div class="spacer7"></div>
    </div>
    <div class="clear"></div>
    <div class="reg_bluepanel" style="display:none"> Use your mobile or your email ID to login. Either one will work fine. </div>
    <div class="auto"> </div>
    <?php //==================================current function ==========================================================?>
    <div class="auto" id="master_functional_area_id_div">
      <div class="reg_firstname line_height18 ">Functional Area</div>
      <div class="reg_nm_rightarea">
        <div class="regi_funtion_input1">
          <?php     echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'select','empty'=>'-Functional Area-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_functional_area_id','options'=>$PloginRegister['MasterFunctionalArea'],'error'=>false,'onchange'=>'handleFA();','onblur'=>'regTracks(this.id);' )); 

                                //    echo $this->Form->input('JsProfile.auto_functional_area',array('type'=>'text','id'=>'auto_functional_area','maxlength' =>'100','class'=>'input','style'=>"width:206px;",'div'=>false,'label'=>false));
                               //     echo $this->Form->input('JsProfile.master_functional_area_id',array('type'=>'hidden','id'=>'master_functional_area_id','error'=>false ));
                                     
                                    ?>
        </div>
        <div class="auto"> <span class="bluebld line_height18" style="display:none;"> <a href="javascript:void(0);" onClick="handle_others('functional_area');" class="refresh">Other</a> &raquo;</span> </div>
        <div class="clear"></div>
        <div class="spacer7"></div>
        <div class="clear"></div>
        <div class="auto" id='span_show_functional_area' style="display:<?php if(empty($this->data['JsProfile']['other_functional_area'])) echo "none";?>"> <?php echo $this->Form->input('JsProfile.other_functional_area',array( 'label'=>false ,'type'=>'text','div'=>false,'maxlength' => '100','style'=>"width:206px;",'class'=>'input','id'=>'other_functional_area','error'=>false )); ?> </div>
      </div>
      <div class="clear"></div>
      <div class="error_msg_detail" id="master_functional_area_id_div_img_msg" style="display:none">
        <span id="functional_area_message"> Please enter a valid functional area.</span> </div>
    </div>
    <!--Added By : Avesh-->
    <div class="clear"></div>
    <div id="alert_functional_area" style="display:none;"> <span class="information_msg  pad154">
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
                    echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'select','empty'=>'-Industry-','label'=>false ,'div'=>false,'style'=>"width:121px;",'class'=>'input','style'=>"width:212px;",'id'=>'master_industry_id','options'=>$PloginRegister['MasterIndustry'],'error'=>false,'onchange'=>'handleIR();','onblur'=>'regTracks(this.id);')); 

                          //          echo $this->Form->input('JsProfile.auto_industry',array('type'=>'text','id'=>'auto_industry','style'=>'width:206px','maxlength' =>'100','class'=>'input','div'=>false,'label'=>false));
                        //            echo $this->Form->input('JsProfile.master_industry_id',array('type'=>'hidden','id'=>'master_industry_id','error'=>false ));  
                                    ?>
        </div>
        <div class="auto" style="display:none;"><span class="bluebld line_height18"><a href="javascript:void(0);" onClick="handle_others('industry');" class="refresh">Other</a> &raquo;</span></div>
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
      <div class="error_msg_detail" id="master_industry_id_div_img_msg" style="display:none" >
        <span id="industry_message" > Please select the industry in which you are currently employed. </span> </div>
      <div class="spacer7"></div>
    </div>
    <!--Added By : Avesh-->
    <div class="clear"></div>
    <div id="alert_industry" style="display:none;"> <span class="information_msg  pad154">
      No matches found. Please click on Other.
      </span> </div>
    <div class="clear"></div>
    <!--Added By : ends here-->
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //==============================================Experience ========================================================?>
    <div class="auto" id="master_year_id_div" >
      <div class="reg_firstname line_height18 ">Experience
        <!--pop up-->
        <div class="wid25 floatright">
          <div id="lock_help2" style="display:none;" class="helpIcon_popUp">
            <div class="information_pup_alt">
              <div class="information_pup_topbg">&nbsp;</div>
              <div class="information_pup_mid">
                <div class="auto">HeadHonchos is a platform for executives earning a CTC above INR 10 Lakh. If you are not yet in this bracket, we will bring more value at a later stage of your career.</div>
              </div>
              <div class="information_pup_btm">&nbsp;</div>
            </div>
          </div>
          
          <div id="lock_help3" style="display:none;" class="helpIcon_popUp">
              <div class="information_pup">
                <div class="information_pup_topbg">&nbsp;</div>
                <div class="information_pup_mid">
                  <div class="auto">HeadHonchos  is an exclusive platform for senior jobs. In order to be eligible for the openings listed, international candidates salary should have a CTC of USD 40,000 or more. </div>
                </div>
                <div class="information_pup_btm">&nbsp;</div>
              </div>
            </div>
            
        </div>
        <!--pop up-->
      </div>
      <div class="reg_nm_rightarea">
        <div class="regist_input">
          <?php 

                    echo $this->Form->input('JsProfile.master_year_id',array('type'=>'select','empty'=>'-Years-','id'=>'master_year_id','style'=>"width:147px;",'class'=> 'input','options'=>$PloginRegister['MasterYear'], 'label'=>false ,'div'=>false,'error'=>false,'onblur'=>'regTracks(this.id);')); 

                ?>
        </div>
      </div>
      <div class="clear"></div>
       <div class="error_msg_detail line_height18" id="master_year_id_div_img_msg" style="display:none">
             	Please let us know your cumulative work experience.
                </div>
      <div class="spacer7"></div>
    </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //======================================Salary==================================================================?>
    <div class="auto" id="master_lakh_id_div">
      <div class="reg_firstname line_height18 ">Salary</div>
      <div class="reg_nm_rightarea">
        <div class="regist_input" id="regist_input">
          <?php 
		  echo $this->element('/js_logins/salary_list_drop1');
                ?>
        </div>
        <div class="clear"></div>
        <div class="spacer3"></div>
        <div class="clear"></div>
<div id="salLakhMsg">
        <div class="floatleft line_height18"> What if I earn less than 10 Lakh? </div>
        <div class="floatleft padleft3"  style="cursor: pointer;" onmouseout="$('lock_help2').hide();" onmousemove="$('lock_help2').show();"> <img src="<?php echo $this->Html->url('/img/helpIcon.gif'); ?>" alt="" /> </div>
      </div>
      <div class="clear"></div>
<div id="salThMsg" style="display:none">
            <div class="floatleft line_height18 padt5"> What if I earn less than USD 40000?</div>
            <div class="floatleft padleft3 padt5"  style="cursor: pointer;" onmouseout="$('lock_help3').hide();" onmousemove="$('lock_help3').show();"> <img src="<?php echo $this->Html->url('/img/helpIcon.gif'); ?>" alt="" /> </div>
</div>
      
      </div>
       <div class="clear"></div>
      <div class="error_msg_detail line_height18" id="master_lakh_id_div_img_msg" style="display:none">
             	Please enter your current or last drawn salary.
                </div>
      
      <div class="spacer7"></div>
      <div class="clear"></div>
      <div class="spacer20"></div>
      <div class="clear"></div>
      <!--
			<div class="lineBottom" >
				<div >
        <div class="message_resume" > Your resume is required before you can apply for jobs.
                                    <div class="clear"></div>
If you want to apply for a job right away, please upload your resume now.
                                </div>
        </div>
           <div class="clear"></div>
          <div class="spacer20"></div>
      <div class="clear"></div>

				<div class="auto" >
					<div class="reg_firstname line_height18 ">Upload Resume</div>
					<div class="reg_nm_rightarea">
						<div class="regist_input"> <?php echo $this->Form->input('JsLogin.resume', array('type'=>'file','id'=>'resume','style'=>'width:185px;','label'=>false ,'div'=>false,'class'=> 'input')); ?>
							<?php //echo $this->Form->input('JsLogin.resume_prev', array('type'=>'hidden','label'=>false ,'div'=>false,'value'=>serialize($PloginRegister['resume']))); ?></div>
						<div class="clear"></div>
						<div class="spacer3"></div>
						<div class="clear"></div>
						<div class="floatleft line_height18"> <span class="password_txt2 line_height18"> Supports .doc, .docx. .pdf file upto 500 KB </span> <br />
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="padtl120" id="checkbox_id_div" <?php if(Configure::read('show_de_alt') == 0) {echo 'style="display:none;"';}?>>
					<div class="reg_memb_radio"> <?php echo $this->Form->input('JsLogin.profile_status',array('id'=>'update_resume','type'=>'checkbox','default'=>'','label'=>false ,'div'=>false,'onclick'=>'if(!$("resume").value) $("update_resume").checked=false;'));  ?> </div>
					<div class="line_height18">Update my profile based on this resume. </div>
					<div class="clear"></div>
					<div class="spacer7"></div>
				</div>
				<div class="clear"></div>
				<?php if($resumeError != 1){?>
				<script type="text/javascript" language="javascript">
                        $('update_resume').checked = false;
                        //$('any_error').show();
                    </script>
				<div class="error_msg" id="update_resume_div_img_msg" >
					<div class="error_msg_icon"><img src="<?php echo $this->Html->url('/img/yellowmessage_icon.gif'); ?>" alt="" width="20" height="18" /></div>
					<span class="information_msg line_height18"> <?php echo $resumeError;?> </span> </div>
				<?php }?>
			</div>
            -->
    </div>
    <?php //=============================================== Re Captcha ============================================================?>
    <div class="clear"></div>
    <div class="spacer20"></div>
    <div class="clear"></div>
    <div class="line2 wid425">&nbsp;</div>
    <div class="clear"></div>
    <div class="spacer5"></div>
    <div class="clear"></div>
    <div class="auto">
      <!-- grey panel start here-->
      <div class="auto">
        <div class="cust_info" style="padding-left:8px;"><strong>Select a Membership Plan</strong></div>
      </div>
      <!-- grey panel start here-->
      <!-- content area start here-->
      <?php if(PREMIUM_FREE != 1) {?>
      <div class="clear"></div>
      <div class="spacer22"></div>
      <div class="clear"></div>
      <div class="auto"> <span class="line_height18 blackbld14">A. Basic Membership </span>
        <div class="clear"></div>
        <div class="spacer5"></div>
        <div class="clear"></div>
        <div class="auto padl20 line_height18" >View premium jobs and check what's available. Receive alerts on recommended jobs.</div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        <input type="hidden" id="checksubs" value="<?php echo $this->data['promotions']['plan'];?>" />
        <div class="reg_memb_radio">
          <?php //mantis 1759
			 if($this->data['promotions']['plan'] ==0){ $radio_value=0;} else { $radio_value=""; }
			
			 echo $this->Form->radio('promotions.plan',array('0'=>''),array('legend'=>false,'value'=>$radio_value,'label'=>false,'id'=>'free_basic'));
	 	  ?>
        </div>
        <span class="greybld line_height18"> Free </span> (Includes <strong>upto <?php echo FREE_APPLICATIONS ?> job applications</strong> )
        <div class="clear"></div>
        <div class="spacer20"></div>
        <div class="clear"></div>
      </div>
      <?php //============================================ Premium Membership ====================================================?>
      <div class="clear"></div>
      <span class="flt line_height18 blackbld14"> B. Premium Membership </span>
      <div class="clear"></div>
      <div class="spacer5"></div>
      <div class="clear"></div>
      <!--
				<div class="auto"> <span class="wid400 line_height18 pad20"> Go the extra mile and apply to jobs. Use our recruiter database to target consultants and search firms. Receive alerts and a newsletter with advice that you can use at your level. </span> </div>
                -->
      <div class="auto pad20 pad22"> <span class="line_height18"> Go the extra mile: search and apply to <strong>unlimited</strong> hand-screened jobs. </span> </div>
      <?php 
                //echo "";echo"<pre>"; print_r($PloginRegister['hhpromo']['promotions']);echo"</pre>";  
                $i=0;
                foreach($PloginRegister['hhpromo']['promotions'] as $key=>$value)                 
                { if($PloginRegister['hhpromo']['promotions'][$key]['net_amount']!=0){ if($key>4) continue;?>
      <div class="clear"></div>
      <?php if($i==0){$spacer_class="spacer5";}else{$spacer_class="spacer5";}?>
      <div class="<?php echo $spacer_class; ?>"></div>
      <div class="clear"></div>
      <div class="regis_plan_bg" style="margin-left:22px;">
        <div class="wid170">
        <div class="wid24">
          <?php //mantis 1759
		  if($this->data['promotions']['plan'] ==$key){
		 	 echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>$key,'label'=>false, 'style'=>'margin-top: 14px'));
		  }
		  else
		  {
		  	echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>false,'label'=>false, 'style'=>'margin-top: 14px'));
		  }
		  
		   ?>
        </div>
        <?php
                        $desc=split(":",$PloginRegister['hhpromo']['promotions'][$key]['display_text']);
                        $color=$desc[0];
                        $descmore=$desc[1];
                    ?>
        <div class="flt"><span class="<?php echo "head_plan color_".strtolower($color);?>"> <?php echo $color;?></span><br/>
          INR  <strong><?php echo $PloginRegister['hhpromo']['promotions'][$key]['net_amount'];?></strong> per <?php echo floor($PloginRegister['hhpromo']['promotions'][$key]['tenure']/30);?> months</div>
          </div>
        <div class="flt head_plan1 margin40"><?php echo $descmore;?></div>
      </div>
    </div>
    <?php } $i++;} ?>
    <!--
				<div class="clear"></div>
				<div class="spacer15"></div>
				<div class="clear"></div>  
				<div class="wid300" style="background-color:#37728f; margin-left:20px; padding:10px; color:white;">
          
					<div class="line_height20 auto cust_info"><span>One FREE</span><span class="bluebld"> <a href="<?php echo $this->Html->url('/js_services/index'); ?>" class="whitelink">Job Connect</a> </span> service: <br/>
						With every 3 months of subscription </div>
                       
				</div>
				<div class="clear"></div>
				<div class="spacer30"></div>
				<div class="clear"></div> 
                -->
    <?php } else {?>
    <div class="reg_rightpanel_content">
      <div class="clear"></div>
      <div class="spacer22"></div>
      <div class="clear"></div>
      <div class="auto"> <span class="line_height18 blackbld14">A. Basic Membership </span>
        <div class="clear"></div>
        <div class="spacer5"></div>
        <div class="clear"></div>
        <div class="auto"> <span class="wid400 line_height18 pad20"> View premium jobs and check what's available. Receive alerts on recommended jobs. </span> </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        <input type="hidden" id="checksubs" value="<?php echo $this->data['promotions']['plan'];?>" />
        <div class="reg_memb_radio">
          <?php //mantis 1759
	  echo $this->Form->radio('promotions.plan',array('0'=>''),array('legend'=>false,'value'=>false,'label'=>false,'id'=>'free_basic','disabled'=>'disabled'));
	   ?>
        </div>
        <span class="greybld line_height18"> Free </span>
        <div class="clear"></div>
        <div class="spacer20"></div>
        <div class="clear"></div>
      </div>
      <?php //============================================ Premium Membership ====================================================?>
      <div class="clear"></div>
      <span class="line_height18 blackbld14"> B. Premium Membership </span>
      <div class="clear"></div>
      <div class="spacer5"></div>
      <div class="clear"></div>
      <div class="auto"> <span class="wid400 line_height18 pad20"> Go the extra mile and apply to jobs. Use our recruiter database to target consultants and search firms. Receive alerts and a newsletter with advice that you can use at your level. </span> </div>
      <div class="clear"></div>
      <?php $i=0;foreach($PloginRegister['hhpromo']['promotions'] as $key=>$value) {?>
      <div class="clear"></div>
      <?php if($i==0){$spacer_class="spacer10";}else{$spacer_class="spacer10";}?>
      <div class="<?php echo $spacer_class; ?>"></div>
      <div class="clear"></div>
      <?php if($PloginRegister['hhpromo']['promotions'][$key]['tenure'] == 90){?>
      <div class="clear"></div>
      <div class="wid300" style="background-color:#37728f; margin-left:20px; padding:10px; color:white;">
        <div class="line_height20 auto cust_info"> Introductory offer: Sign on today for a 3 <br/>
          month Premium Membership worth<BR/>
          INR  2200, FREE of cost. </div>
        <div class="auto">
          <div class="reg_memb_radio_free">
            <?php //mantis 1759
		  if($PloginRegister['hhpromo']['promotions'][$key]['tenure'] != '90')
		   {
		  	 echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>false,'label'=>false,'disabled'=>'disabled'));
		   
		   }
		   else
		   {
		   	 echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>false,'label'=>false,'id'=>'quater'));
		   }
		  
		  ?>
          </div>
          <span class="greybld line_height18"> &nbsp;INR  0
          <?php //echo $PloginRegister['hhpromo']['promotions'][$key]['net_amount'];?>
          </span> <span> for <?php echo $PloginRegister['hhpromo']['promotions'][$key]['display_text'];?></span>
          <?php if(!empty($PloginRegister['hhpromo']['promotions'][$key]['discount_percent'])){?>
          <span class='marunbld' style="display:none;" > Save <?php echo $PloginRegister['hhpromo']['promotions'][$key]['discount_percent'];?>%</span>
          <?php }?>
        </div>
      </div>
      <?php }else{?>
      <div class="auto">
        <div class="reg_memb_radio">
          <?php //mantis 1759
		   if($PloginRegister['hhpromo']['promotions'][$key]['tenure'] != '90')
		   {
		  	 echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>false,'label'=>false,'disabled'=>'disabled'));
		   
		   }
		   else
		   {
		   	 echo $this->Form->radio('promotions.plan',array($key=>''),array('legend'=>false,'value'=>false,'label'=>false,'id'=>'quater'));
		   } ?>
        </div>
        <span class="greybld line_height18"> &nbsp;INR  <?php echo $PloginRegister['hhpromo']['promotions'][$key]['net_amount'];?> </span> <span> for <?php echo $PloginRegister['hhpromo']['promotions'][$key]['display_text'];?></span>
        <?php if(!empty($PloginRegister['hhpromo']['promotions'][$key]['discount_percent'])){?>
        <span class='marunbld' > Save <?php echo $PloginRegister['hhpromo']['promotions'][$key]['discount_percent'];?>%</span>
        <?php }?>
      </div>
      <?php }?>
      <?php $i++;} ?>
      <div class="clear"></div>
      <div class="spacer15"></div>
      <div class="clear"></div>
      <?php } ?>
      <div class="wid152 margin_btm11"  style="margin-left:227px"><a class="onHover"  href="<?php echo ABSOLUTE_URL.'/'.SERVICES_KEYWORD.'/membership-plan.html'?>" target="_blank"><strong>Quick Compare</strong></a>&nbsp;&raquo;</div>
      <div class="clear"></div>
      <div class="spacer10"></div>
      <div class="clear"></div>
      <?php ///======================Recaptu========================= ?>
      <?php   $error_msg=$this->Form->error('JsLogin.recapcha');

                        if(!empty($error_msg)){

                        $css_formfield="formfield_error wid400";

                        $visibility="block";

                        }  else {

                        $visibility="none";

                        $css_formfield="auto";
                        }
                        ?>
      <div id="recaptcha_container" class="<?php if($css_formfield!="auto"){echo $css_formfield;}; ?> recaptcha_reg_container" style="border:thick; margin-left:10px;" >
        <div class="wid297 line_height18 ">Please complete this security validation.</div>
        <div class="clear"></div>
        <div class="spacer5"></div>
        <div class="clear"></div>
        <div class="reg_nm_rightarea">
          <div class="wid297">
            <?php 
                $img1= $ramdomRecapcha['first_number'].".gif";
                $img2= $ramdomRecapcha['second_number'].".gif";
                $img3= $ramdomRecapcha['img_sign'].".gif";
                
                ?>
            <div class="wid50"> <img src="<?php echo $this->Html->url('/img/'.$img1); ?>" alt="" /> </div>
            <div class="wid50"> <img src="<?php echo $this->Html->url('/img/'.$img3); ?>" alt="" /> </div>
            <div class="wid50"> <img src="<?php echo $this->Html->url('/img/'.$img2); ?>" alt="" /> </div>
            <div class="wid50"> <img src="<?php echo $this->Html->url('/img/equal.gif'); ?>" alt="" /> </div>
            <div class="auto" style="margin-top:5px;">
              <?php  $crc='color:#000000';
                $cfn = '';
                if(isset($this->data['JsLogin']['recapcha'])){
                    $cfn = $this->data['JsLogin']['recapcha'];
                    $crc='color:#000000';
                } ?>
              <input name="data[JsLogin][recapcha]" id="recapcha" type="text" class="input" value="" style="width:60px;<?php echo $crc;?>;height:35px;font-size:24px;"  onBlur="javascript:recaptcha_validation('alt');"/>
              <input type="hidden" id="recaptchav" />
            </div>
          </div>
          <div class="clear"></div>
          <div class="spacer100"></div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="error_msg_detail line_height18" id="recap_error" style="display:<?php echo $visibility; ?>; ">
             	Please enter the correct solution.
                </div>
        
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div class="spacer10"></div>
      <div class="clear"></div>
      <div class="auto" id='checkbox_id_div'>
        <div class="error_msg_icon">
          <input  id="checkbox_id" name="checkbox" type="checkbox"  />
        </div>
        <div class="line_height18 wid333"> I agree &amp; accept HeadHonchos' <a class="refresh" href="<?php echo ABSOLUTE_URL.'/js_logins/terms_of_use';?>" target="_blank">Terms of Use </a> </div>
        <div class="clear"></div>
        <div class="error_msg_detail line_height18" id="checkbox_id_div_img_msg" style="display:none; margin-left:10px;">
             	Please read &amp; accept HeadHonchos' Terms of Use.
                </div>
        <div class="spacer7"></div>
      </div>
      <div class="clear"></div>
      <div class="spacer10"></div>
      <div class="clear"></div>
      <div class="floatleft marginleft10">
        <input type="button" class="boxbtnpopup onHover" onclick="submit_validation();"  name="Register" value="Join HeadHonchos" />
        <?php  
                 echo $this->Form->input('JsLogin.register_val',array('type'=>'hidden','label'=>false ,'div'=>false,'error'=>false,'value'=>'1'));  
            ?>
      </div>
      <div class="clear"></div>
      
      <div class="spacer15"></div>
      <div class="clear"></div>
      <div  id="any_error" style="background: none repeat scroll 0% 0% rgb(255, 255, 204);padding-bottom: 7px;width:370px;display:<?php echo $visibility; ?>;">
        <div class="error_msg_detail"   >
          <div id="error_msg_1" ><?php echo "Please provide information as per the messages above."; ?> </div>
        </div>
                </div>
    </div>
    <div class="clear"></div>
    <div class="js_login_btm_left">&nbsp;</div>
    <div class="js_login_btm_mid wid460">&nbsp;</div>
    <div class="js_login_btm_right">&nbsp;</div>
  </div>
  <div class="spacer100"></div>
  <div class="clear"></div>
  <div class="spacer"></div>
  <div class="clear"></div>
</div>
<!-- content area end here-->

<!-- Google Code for New Re-marketing Code -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991717615;
var google_conversion_label = "wWzKCOmb3gQQ79Hx2AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/991717615/?value=0&amp;label=wWzKCOmb3gQQ79Hx2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>