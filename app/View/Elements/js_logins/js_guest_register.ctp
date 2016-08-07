<div class="form-container wid455">
  <div class="form-container_main2"><div class="pad7 margin_btm8 font_13"><span class="redstar">*</span>All fields are compulsory</div>
    <script type="text/javascript" language="javascript">
     $jq  =  jQuery.noConflict();
     

</script>
    <script type="text/javascript" language="javascript">
function ToggleButton(cb){

        if (cb.checked == 1)
        {

            $('register_btn').disabled = false;

            $("register_btn").setStyle({ cursor: 'pointer' });

            $('register_btn').src='<?php echo $this->Html->url("/img/join_btn_off.jpg"); ?>';

        }
        if (cb.checked == 0)
        {

            $('register_btn').disabled = true;

            $("register_btn").setStyle({ cursor: 'text' });

            $('register_btn').src='<?php echo $this->Html->url("/img/join_btn_on.jpg"); ?>';

        }

}


function stopRKey(evt) {

    var evt = (evt) ? evt : ((event) ? event : null);

    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);

    if ((evt.keyCode == 13)){

        FormSubmitted = 1;
        
        //if(document.getElementById('checkbox_id').checked){

            if(submit_validation()) {

              //  document.getElementById('registration_form').submit();

            return false;

        }  else {

            return false;
        }
    }
}



function showSalaryDiv(){

    document.getElementById('lakh10').style.display = 'block';

}

function hideSalaryDiv(){


     document.getElementById('lakh10').style.display = 'none';

}

//document.onkeypress = stopRKey;
function handleFA(){
    if($('master_functional_area_id').value==1){
         $('span_show_functional_area').show();
    }else{
       $('span_show_functional_area').hide();      
    }
    return;
}
function handleIR(){
    if($('master_industry_id').value==1){
         $('span_show_industry').show();
    }else{
       $('span_show_industry').hide();      
    }
    return;
}
function handleCountry(){


var fCountryId=$('master_country_id').value;
   if(fCountryId !=''){
         new Ajax.Request(ABSOLUTE_URL+'/js_logins/populatedropCity/'+fCountryId, {
                                                onSuccess: function(transport){ 
                                                 $('div_city').update(transport.responseText);
                                                  $('country_code').value= $('countryCode_value').value;      
                                                },
                                                    
                                                onFailure: function(){ alert('Something went wrong...') }
                           });
   }
 }
 
 function checkeMailId(jobId){
    var eamilValue=$('emailid').value;
    if(eamilValue !=''){
	       new Ajax.Request(ABSOLUTE_URL+'/js_logins/unique_guest_ajax_validation/'+eamilValue+'/'+jobId, {
                                                onSuccess: function(transport){  
												if(transport.responseText==0 && transport.responseText!=''){
												showhideyes(1);
												document.getElementById('user_nameE').value = document.getElementById('emailid').value;
												document.getElementById('emailid').value='';
												document.getElementById('confirm_emailid').value='';
												document.getElementById('first_name').value='';
												document.getElementById('last_name').value='';
												document.getElementById('master_lakh_id').value='';
												document.getElementById('resume').value='';									
												document.getElementById('msgcontainer1').style.display="block" 
												document.getElementById('message_area2').innerHTML ='You have already registered with this email-id. Please login & apply';
												} else {
												var swapdata=transport.responseText;
                                                                                               
			                                	var arrData=swapdata.split("@@");
												var response ='';
												if(arrData[1]==1){												
												var guestData = arrData[0]+ "," +arrData[3]; 
					  response = arrData[2] +'<a href="javascript:void(0)" onclick="return mailGuestUser('+guestData+');">Click Here </a> to confirm you are right user';
												} else if(arrData[1]==2){
									            response = arrData[2];
									            } else if(arrData[1]==3){
	response ='You are already registered with Head Honchos, please'+'<a  href="'+ABSOLUTE_URL+'/js_logins/login/job_detail/job_detail/'+arrData[4]+'"> Login to apply</a> | '+'<a  href="'+ABSOLUTE_URL+'/forgot-password.html">Forgot Password</a>' ;	
												} else if(arrData[1]==4){
	response ='You are already registered with Head Honchos, '+'<a href="javascript:void(0)" onclick="return mailGuestUserForReg('+arrData[1]+');">click confirmation mail</a>';
												}
if(response == ''){
var domains = new Array();
var topLevelDomains = new Array();
<?php
for($i =0; $i<count($email_domain); $i++){
?>    
domains[<?php echo $i ?>] = '<?php echo $email_domain[$i]; ?>';
<?php } ?>
<?php
for($j =0; $j<count($top_level_domain); $j++){
?>    
topLevelDomains[<?php echo $j ?>] = '<?php echo $top_level_domain[$j] ?>';
<?php } ?>   
    $jq('#emailid').mailcheck({
    domains: domains,
    topLevelDomains: topLevelDomains,  
    suggested: function(element, suggestion) {
        var code = "<script>$jq('#copyemail').click(function(){$jq('#emailid').val($jq('#copyemail').text());$jq('#emailid_ajax_div').html(''); checkeMailId("+jobId+")})"+"</scr"+"ipt>";
      // $jq("#correct_email").html("<div class='flt word_wrap_text'>"+"Did you mean:&nbsp;<a id='copyemail' href='#' class='word_wrap_text' >" + suggestion.full + "</a>"+code+"</div>");
       response = "<div class='flt word_wrap_text'>"+"Did you mean:&nbsp;<a id='copyemail' href='#' class='word_wrap_text' >" + suggestion.full + "</a>"+code+"</div>";
          
    },
    empty: function(element) {
    
      response = '';
    
    }
  });
}
												//document.getElementById('emailid_ajax_div').innerHTML='<span class="information_msg">'+response+'<span>';
                                                                                                $jq('#emailid_ajax_div').html('<span class="information_msg">'+response+'<span>');
												}
											  },
                                                    
                                                onFailure: function(){ alert('Something went wrong...') }
                           });
   }
  
 }
 function Checkfiles()
{
	var fup = document.getElementById('resume');
	var fileName = fup.value;
	var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	if(ext == "doc" || ext == "docx" || ext == "pdf" || ext == "DOC" || ext == "DOCX" || ext == "PDF" )
	{
	document.getElementById('update_resume_div_img_msg').innerHTML='';
	return true;
	} 
	else
	{
	document.getElementById('resume').value='';
	document.getElementById('update_resume_div_img_msg').innerHTML='<span id="resume_error" class="error_msg_detail line_height18">Please upload doc or pdf file only</span>';
	fup.focus();
	return false;
	}
}
 
 
</script>
    <?php
    echo $this->Form->create('JsLogin',array('url' =>ABSOLUTE_URL.'/js_logins/js_guest_apply/'.$slug,'id'=>'registration_form','method'=>'post','autocomplete'=>'on','onsubmit'=>'return true;','enctype'=>'multipart/form-data'));
	echo $this->Form->input('JsLogin.is_submitted',array('type'=>'hidden','id'=>'is_submitted','value'=>'0','error'=>false ));
	echo $this->Form->input('JsLogin.password',array('type'=>'hidden','id'=>'password','value'=>md5(rand(5)),'error'=>false ));
     ?>
	 
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
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <div id="emailid_div" class="<?php echo $css_formfield_em; ?>">
      <div class="label_left">Email ID <span class="marun_color">*</span></div>
      <div class="label_right">
        <?php if(isset($PloginRegister['emailid'])){

                                    echo $this->Form->input('JsLogin.emailid',array( 'onblur'=>'return checkeMailId("'.$jobId.'");', 'onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'label'=>false ,'value'=>$PloginRegister['emailid'],'div'=>false,'maxlength' => '80','style'=>"width:200px;",'class'=>'input','id'=>'emailid','error'=>false));

                                    } else {

                                    echo $this->Form->input('JsLogin.emailid',array( 'onblur'=>'return checkeMailId("'.$jobId.'");','onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'label'=>false ,'div'=>false,'maxlength' => '80','style'=>"width:200px;",'class'=>'input','id'=>'emailid','error'=>false));

                                    }
                                    ?>
          <div id="emailid_ajax_div">
        <?php //echo $ajax->div('emailid_ajax_div');

                                    if($setFlag){ ?> <span class="information_msg"> <?php
									
									if($isGuest==0)
									{ ?>
									<?php 
							     
									 }
									 else if($isGuest==1)
									 {
								    $guestData = "'".$setFlag."','".$jobsid."'"; 
						echo $response.'&nbsp;<a href="javascript:void(0)" onclick="return mailGuestUser('.$guestData.');">Click Here </a> to confirm you are right  user ';
									 }
									 
									 else if($isGuest==2)
									 {
									 echo $response;
									 }
									 
									 else if($isGuest==3)
									 {
									 echo 'You are already registered with Head Honchos, please'.'<a  href="'.ABSOLUTE_URL.'/js_logins/login/job_detail/job_detail/'.$jobsid.'">     Login to apply</a> | '.'<a  href="'.ABSOLUTE_URL.'/forgot-password.html">Forgot Password</a>' ;
									 }
									 
									 else if($isGuest==4)
									 {
									 $guestData = "'".$setFlag."'"; 
									  echo 'You are already registered with Head Honchos, '.'<a href="javascript:void(0)" onclick="return mailGuestUserForReg('.$guestData.');">click confirmation mail</a>' ;
									 }
                                    echo $this->Form->input('email_id_flag',array('type'=>'hidden','value'=>1,'id'=>'email_id_flag'));  ?> </span>
        <?php } else if($m_email ){ ?>
        <span class="information_msg"> <?php echo $m_email;?> </span>
        <?php }else{echo $this->Form->input('email_id_flag',array('type'=>'hidden','value'=>0,'id'=>'email_id_flag'));  } ?>
        <?php    //echo $ajax->divEnd('emailid_ajax_div');?>
        </div>
      </div>
    </div>
    <div class="error_msg" id="emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>">
      <span class="error_msg_detail">Please enter a valid Email ID.</span> </div>
    <div class="clear"></div>
    <div class="flt"> <?php //echo $ajax->observeField('emailid',array('url' => '/js_logins/unique_guest_ajax_validation/emailid/'.$jobId.'/'.time(),'update' =>'emailid_ajax_div'));  ?> </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //=============================================Reenter Email Id ============================================================?>
    <div id="confirm_emailid_div" class="<?php echo $css_formfield_em; ?>">
      <div class="label_left">Confirm Email ID <span class="marun_color">*</span></div>
      <div class="label_right">
        <?php if(isset($PloginRegister['emailid'])){

                                    echo $this->Form->input('JsLogin.confirm_emailid',array('onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'onPaste'=> 'return false', 'label'=>false ,'value'=>$PloginRegister['emailid'],'div'=>false,'maxlength' => '80','style'=>"width:200px;",'class'=>'input','id'=>'confirm_emailid','error'=>false));

                                    } else {

                                    echo $this->Form->input('JsLogin.confirm_emailid',array('onCopy'=>'return false', 'onDrag'=>'return false', 'onDrop'=> 'return false', 'onPaste'=> 'return false', 'label'=>false ,'div'=>false,'maxlength' => '80','style'=>"width:200px;",'class'=>'input','id'=>'confirm_emailid','error'=>false));

                                    }
                                    ?>
      </div>
    </div>
    <div class="error_msg" id="confirm_emailid_div_img_msg" style="display:<?php echo $visibility_em; ?>">
      <span class="error_msg_detail">Please enter a valid Email ID.</span> </div>
    <div class="clear"></div>
    <div class="spacer100"></div>
    <div class="clear"></div>
    <?php //=============================================Name===style="display:none;"=========================================================?>
    <?php   echo $error_msg1 = $this->Form->error('JsLogin.first_name');

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
    <div id="first_name_div"  class="<?php echo $css_formfield_n; ?>">
      <div class="label_left">First Name <span class="marun_color">*</span></div>
      <div class="label_right">
        <?php

             $cf='color:#9C9B9A';$fn = 'First Name';if(isset($this->data['JsLogin']['first_name'])){$fn = $this->data['JsLogin']['first_name'];$cf='color:#000';}
echo $this->Form->text('JsLogin.first_name',array( 'label'=>false ,'div'=>false,'maxlength' => '40','class'=>'input','style'=>"width:200px;$cf" ,'value'=>$fn,'id'=>'first_name','error'=>false,'onFocus'=>'javascript:if(this.value=="First Name"){this.value="";this.style.color="#000"}','onBlur'=>'javascript:if(this.value==""){this.value="First Name";this.style.color="#9C9B9A"}'));  ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="spacer10"></div>
    <div class="clear"></div>
    <div class="flt" id="last_name_div" >
      <div class="label_left">Last Name <span class="marun_color">*</span></div>
      <div class="label_right">
        <?php
   $cl='color:#9C9B9A';$ln = 'Last Name';if(isset($this->data['JsLogin']['last_name'])){$ln = $this->data['JsLogin']['last_name'];$cl='color:#000';}
 echo $this->Form->text('JsLogin.last_name',array( 'label'=>false ,'div'=>false,'maxlength' => '40','class'=>'input','style'=>"width:200px;$cl" ,'value'=>$ln,'id'=>'last_name','error'=>false,'onFocus'=>'javascript:if(this.value=="Last Name"){this.value="";this.style.color="#000";this.select()}','onBlur'=>'javascript:if(this.value==""){this.value="Last Name";this.style.color="#9C9B9A"}')); 

                                        ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="error_msg" id="first_name_div_img_msg" style="display:<?php echo $visibility_n; ?>">
            <span id="first_name_msg" class="error_msg_detail">Please enter your complete name</span> </div>
    	<div class="pad7 margin_btm8 blackbld13"></div>
    <div class="clear"></div>
    <div class="spacer10"></div>
    <div class="clear"></div>
    <?php //======================================Salary==================================================================?>
		<div class="wid25 floatright">
          <div id="lock_help2" style="display:none;" class="helpIcon_popUp">
            <div class="information_pup_alt">
              <div class="information_pup_topbg">&nbsp;</div>
              <div class="information_pup_mid">
                <div class="auto">HeadHonchos is a platform for executives earning a CTC above INR 10Lakh. If you are not yet in this bracket, we will bring more value at a later stage of your career.</div>
              </div>
              <div class="information_pup_btm">&nbsp;</div>
            </div>
          </div>
        </div>	
     <div class="flt" id="master_lakh_id_div">
      <div class="label_left">Salary/CTC <span class="marun_color">*</span></div>
      <div class="label_right">
        <div class="regist_input"> INR 
          <?php 
                    echo $this->Form->input('JsProfile.master_lakh_id',array('type'=>'select','empty'=>'-Lakh-','id'=>'master_lakh_id','onblur'=>'showLimitedAccessPopup(this);','style'=>"width:107px;",'class'=> 'input','options'=>$PloginRegister['MasterLakh'], 'label'=>false ,'div'=>false,'error'=>false)); 
                ?>
        </div>
        <div class="clear"></div>
        <div class="spacer3"></div>
        <div class="clear"></div>
        <div class="floatleft line_height18"> What if I earn less than 10 Lakh? <br />
          <div class="clear"></div>
        </div>
        <div class="floatleft"  style="cursor: pointer;" onmouseout="$('lock_help2').hide();" onmousemove="$('lock_help2').show();"> <img src="<?php echo $this->Html->url('/img/helpIcon.gif'); ?>" alt="" /> </div>
      </div>
      <div class="clear"></div>
      <div class="spacer7"></div>
      <div class="clear"></div>
    </div>
    <div class="error_msg" id="master_lakh_id_div_img_msg" style="display:none" >
      <span class="error_msg_detail"> Please enter your current or last drawn salary.</span> </div>
    <div class="clear"></div>
    <div class="lineBottom">
      <div class="clear"></div>
      <div class="spacer100"></div>
      <div class="clear"></div>
      <div class="flt">
        <div class="label_left">Upload Resume <span class="marun_color">*</span></div>
        <div class="label_right">
          <div class="regist_input"> <?php echo $this->Form->input('JsLogin.resume', array('type'=>'file','id'=>'resume','style'=>'width:185px;','onchange'=>'return Checkfiles();','label'=>false ,'div'=>false,'class'=> 'input')); ?>
        
          </div>
          <div class="clear"></div>
          <div class="spacer3"></div>
          <div class="clear"></div>
          <div class="floatleft line_height18"> <span class="password_txt2 line_height18"> Supports .doc, .docx. .pdf file upto 500 KB </span> <br />
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="spacer100"></div>
      <div class="clear"></div>
      <div class="padtl120" id="checkbox_id_div" style="display:none;">
        <div class="reg_memb_radio"> <?php echo $this->Form->input('JsLogin.profile_status',array('id'=>'update_resume','type'=>'checkbox','default'=>'','label'=>false ,'div'=>false,'onclick'=>'if(!$("resume").value) $("update_resume").checked=false;'));  ?> </div>
        <div class="line_height18">Update my profile based on this resume. </div>
        <div class="clear"></div>
        <div class="spacer7"></div>
      </div>
      <div class="clear"></div>
	 <?php if(!empty($resumeuplodeError)){ ?>
	  <div class="error_msg" id="update_resume_div_img_msg" >
        <span class="error_msg_detail line_height18" id="resume_error"> <?php echo $resumeuplodeError ;?> </span> </div>	 
	  <?php } ?>
      <?php $resumeErrorDiv="display:none;"; if($resumeError != 1){ $resumeErrorDiv="display:block;";}?>
      <div class="error_msg" id="update_resume_div_img_msg" style="<?php echo $resumeErrorDiv;?>;">
        <span class="error_msg_detail line_height18" id="resume_error"> <?php echo $resumeError;?> </span> </div>
		<div class="error_msg" id="update_resume_div_img_msg" style="display:none" ></div>	
	 </div>
    <?php //=============================================== Re Captcha ============================================================?>
    <div class="clear"></div>
    <div class="spacer20"></div>
    <div class="clear"></div>
    <div class="flt">
      <div class="reg_rightpanel_content">
        <div class="clear"></div>
        <div class="line2 wid425"></div>
        <div class="clear"></div>
        <?php ///======================Recapcha========================= ?>
        <?php   $error_msg=$this->Form->error('JsLogin.recapcha');

                        if(!empty($error_msg)){

                        $css_formfield="formfield_error wid400";

                        $visibility="block";

                        }  else {

                        $visibility="none";

                        $css_formfield="auto";
                        }
                        ?>
        <div id="recaptcha_container" class="<?php if($css_formfield!="auto"){echo $css_formfield;}; ?> flt" style="border:thick;" >
          <div class="wid297 line_height18 ">Please complete this security validation.</div>
          <div class="clear"></div>
          <div class="spacer5"></div>
          <div class="clear"></div>
          <div class="label_right">
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
          </div>
          <div class="clear"></div>
          <div class="reg_wid340" id="recap_error" style="display:<?php echo $visibility; ?>">
            <div class="error_msg_detail" style="margin-top: 3px;"> Please enter the correct solution. </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        <div class="auto" id='checkbox_id_div'>
          <div class="error_msg_icon2">
            <input  id="checkbox_id" name="checkbox" type="checkbox"  />
          </div>
          <div class="line_height18 wid333"> I agree &amp; accept HeadHonchos' <a class="refresh" href="<?php echo ABSOLUTE_URL.'/js_logins/terms_of_use';?>" target="_blank">Terms of Use </a> </div>
          <div class="clear"></div>
          <div class="spacer7"></div>
          <div class="clear"></div>
          <div class="error_msg" id="checkbox_id_div_img_msg" style="display:none" >
            <span class="error_msg_detail">Please accept HeadHonchos' Terms of Use.</span> </div>
        </div>
        <div class="clear"></div>
        <div class="spacer10"></div>
        <div class="clear"></div>
        <div class="floatleft marginleft10">
          <input type="button" onclick="apply_registration_validation();" class="boxbtnpopup onHover"  name="Apply" value="Apply" />
          <?php  
                 echo $this->Form->input('JsLogin.register_val',array('type'=>'hidden','label'=>false ,'div'=>false,'error'=>false,'value'=>'1'));  
            ?>
        </div>
        <div class="clear"></div>
        <div class="spacer15"></div>
        <div class="clear"></div>
        <div  id="any_error" style="background: none repeat scroll 0% 0% rgb(255, 255, 204);padding-bottom: 7px;width:370px;display:<?php echo $visibility; ?>;">
          <div class="error_msg"   >
            <div id="error_msg_1" class="error_msg_detail" ><?php echo "Please provide information as per the messages above."; ?> </div>
          </div>
        </div>
      </div>
    </div>
	  <input type="hidden"  name="data[JsLogin][jobID]" value="<?php echo $jobId; ?>" />
    <div class="clear"></div>
    <!-- content area end here-->
    <?php echo $this->Form->end(); ?></div>
</div>